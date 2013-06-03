<?php

/*
 * Description of BlogController
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Controllers;

use Alt68\Sys\BaseController;
use Alt68\Service\BlogService;

/**
 * This class controls CRUD activity for blogs
 */
class BlogController extends BaseController {

    /**
     * Blog service for the blog controller
     * 
     * @var BlogService
     */
    protected $blogService;

    /**
     * Create a new BlogService object for the controller
     */
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, $action, array $urlvalues) {
        parent::__construct($entityManager, $action, $urlvalues);

        $this->blogService = new BlogService($entityManager);
    }

    /**
     * List all articles of user
     */
    public function posts() {

        /*
         * If user not logged in send him to the error page
         */
        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }
        $posts = $this->blogService->getUserPosts();

        $this->smarty->assign('title', 'Összes cikk');
        $this->smarty->assign('isLogged', $this->isLogged);
        $this->smarty->assign('crudmenu', $this->blogService->getCRUDMenu('C'));
        $this->smarty->assign('posts', $posts);
        $this->smarty->assign('content', 'blog/posts.tpl');
        $this->smarty->display('main.tpl');
    }

    /**
     * Create a blog entry
     */
    public function create() {

        /*
         * If user not logged in send him to the error page
         */
        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = false;

        if (isset($_POST['save'])) {
            $success = $this->blogService->create();
        }

        if ($success) {
            header('Location: index.php?controller=blog&action=posts');
            exit();
        } else {

            $this->smarty->assign('title', 'Új cikk');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('content', 'blog/create.tpl');
            $this->smarty->display('main.tpl');
        }
    }

    /**
     * Read a blog entry
     */
    public function read() {

        /*
         * If user not logged in send him to the error page
         */
        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $post = $this->blogService->getUserPost();


        if (!$post) {
            header('Location: index.php?controller=site&action=error');
            exit();
        } else {
            $this->smarty->assign('title', 'Blog bejegyzés');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('post', $post);
            $this->smarty->assign('crudmenu', $this->blogService->getCRUDMenu('CUD', $post[0]['blogid']));
            $this->smarty->assign('content', 'blog/read.tpl');
            $this->smarty->display('main.tpl');
        }
    }

    /**
     * Update a blog entry
     */
    public function update() {

        /*
         * If user not logged in send him to the error page
         */

        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = false;

        if (isset($_POST['save'])) {
            $success = $this->blogService->update();
        }

        if ($success) {
            header('Location: index.php?controller=blog&action=posts');
            exit();
        } else {
            $post = $this->blogService->getUserPost();

            if (!$post) {
                header('Location: index.php?controller=site&action=error');
                exit();
            } else {

                $this->smarty->assign('title', 'Cikk módosítása');
                $this->smarty->assign('isLogged', $this->isLogged);
                $this->smarty->assign('post', $post);
                $this->smarty->assign('content', 'blog/update.tpl');
                $this->smarty->display('main.tpl');
            }
        }
    }

    /**
     * Delete a blog entry
     */
    public function delete() {

        /*
         * If user not logged in send him to the error page
         */

        if (!$this->isLogged) {
            header('Location: index.php?controller=site&action=error');
            exit();
        }

        $success = $this->blogService->delete();

        if ($success) {
            header('Location: index.php?controller=blog&action=posts');
            exit();
        } else {
            header('Location: index.php?controller=site&action=error');
            exit();
        }
    }

}

?>
