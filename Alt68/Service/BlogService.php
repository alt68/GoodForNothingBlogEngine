<?php

/*
 * Description of BlogService
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Service;

use Alt68\Sys\BaseService;
use Alt68\Entities\Blog;

/**
 * This class is a service layer for blog CRUD activities.
 */
class BlogService extends BaseService {

    /**
     * Create an array for CRUD menu
     * 
     * @param string $crud C(reate), R(ead), U(pdate), D(elete) e.g "CUD"
     * @return array CRUD menü items
     */
    public function getCRUDMenu($crud, $blogid = null) {

        $menu = array();
        if (stripos($crud, 'C') !== false) {
            $menu[] = array(
                'item' => 'Új',
                'action' => 'create',
                'id' => null
            );
        }

        if (stripos($crud, 'R') !== false) {
            $menu[] = array(
                'item' => 'Megtekintés',
                'action' => 'read',
                'id' => $blogid
            );
        }

        if (stripos($crud, 'U') !== false) {
            $menu[] = array(
                'item' => 'Módosítás',
                'action' => 'update',
                'id' => $blogid
            );
        }

        if (stripos($crud, 'D') !== false) {
            $menu[] = array(
                'item' => 'Törlés',
                'action' => 'delete',
                'id' => $blogid
            );
        }

        return $menu;
    }

    /**
     * Get all blog entries
     * 
     * @return array blog entries array
     */
    public function getPosts() {
        return $this->em
                        ->getRepository('Alt68\Entities\Blog')
                        ->getBlogEntry();
    }

    /**
     * Get a login user's all blog entries
     * 
     * @return array blog entries array
     */
    public function getUserPosts() {
        return $this->em
                        ->getRepository('Alt68\Entities\Blog')
                        ->getBlogEntry(null, $_SESSION['user']['id']);
    }

    /**
     * Get the login user's one blog entries
     * Blog entry ID come from $_GET array
     * 
     * @return mixed false or blogs entries array
     */
    public function getUserPost() {
        $validator = new \Validator('GET');
        $validator->required()->integer()->validate('id');

        /*
         * If error occured return false
         */
        if ($validator->hasErrors()) {
            return false;
        }

        return $this->em
                        ->getRepository('Alt68\Entities\Blog')
                        ->getBlogEntry($_GET['id'], $_SESSION['user']['id']);
    }

    /**
     * Create a new user blog entry. User must be login.
     * 
     * @return boolean true if success
     */
    public function create() {

        $this->validator->required()->validate('headline');
        $this->validator->required()->validate('body');

        /*
         * If error occured return false
         */
        if ($this->hasErrors()) {
            return false;
        }

        $newBlog = new Blog();

        $newBlog->setHeadline($_POST['headline']);
        $newBlog->setBody($_POST['body']);
        $newBlog->setCreated(new \DateTime("now"));
        $newBlog->setUpdated(new \DateTime("now"));

        $blogger = $this->em->find('Alt68\Entities\User', $_SESSION['user']['id']);

        // Create a dummy category while develop
        $category = $this->em->find('Alt68\Entities\Category', 0);
        
        if (!$category) {
            $category = new \Alt68\Entities\Category();
            $category->setName("Általános");
            $category->setDescription("Általános kategória");
            $this->em->persist($category);
        }
        
        $newBlog->setBlogger($blogger);
        $newBlog->setCategory($category);

        $this->em->persist($newBlog);
        $this->em->flush();

        return true;
    }

    /**
     * Update an user blog entry. User must be login.
     * 
     * @return boolean true if success
     */
    public function update() {

        // Validate the blog headline and body in $_POST
        $this->validator->required()->validate('headline');
        $this->validator->required()->validate('body');

        // If error occured return false
        if ($this->hasErrors()) {
            return false;
        }

        // Validate the blog id in $_GET
        $validator = new \Validator('GET');
        $validator->required()->integer()->validate('id');

        // If error occured return false
        if ($validator->hasErrors()) {
            return false;
        }

        $blog = $this->em->find('Alt68\Entities\Blog', $_GET['id']);

        $blog->setHeadline($_POST['headline']);
        $blog->setBody($_POST['body']);
        $blog->setUpdated(new \DateTime("now"));

        $this->em->persist($blog);
        $this->em->flush();

        return true;
    }

    /**
     * Delete an user blog entry. User must be login.
     * 
     * @return boolean true if success
     */
    public function delete() {
        // Validate the blog id in $_GET
        $validator = new \Validator('GET');
        $validator->required()->integer()->validate('id');

        // If error occured return false
        if ($validator->hasErrors()) {
            return false;
        }

        // find object and delete
        $blog = $this->em->find('Alt68\Entities\Blog', $_GET['id']);

        $this->em->remove($blog);
        $this->em->flush();

        return true;
    }

}

?>
