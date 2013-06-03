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
use Alt68\Entities\Comment;

/**
 * This class is a service layer for comments (create posts etc.).
 */
class CommentService extends BaseService {

    /**
     * Create a new user comment. User must be login.
     * 
     * @return boolean true if success
     */
    public function create() {

        // Validate blog id in $_GET
        $validator = new \Validator('GET');
        $validator->required()->integer()->validate('id');

        // If error occured return false
        if ($validator->hasErrors()) {
            return false;
        }

        // Validate comment
        $this->validator->required()->validate('comment');

        // If error occured return false
        if ($this->hasErrors()) {
            return false;
        }

        // Get blog to assing comment
        $blog = $this->em->find('Alt68\Entities\Blog', $_GET['id']);

        // If not find blog return false
        if (!$blog) {
            return false;
        }

        // Get commenter user to assing comment
        $commenter = $this->em->find('Alt68\Entities\User', $_SESSION['user']['id']);

        // If not find commenter return false
        if (!$commenter) {
            return false;
        }

        // Create new comment
        $newComment = new Comment();

        $newComment->setComment($_POST['comment']);
        $newComment->setBlog($blog);
        $newComment->setCommenter($commenter);
        $newComment->setCreated(new \DateTime("now"));

        $this->em->persist($newComment);
        $this->em->flush();

        return true;
    }

}

?>
