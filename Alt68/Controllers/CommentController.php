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
use Alt68\Service\CommentService;

/**
 * Controlls user comments
 */
class CommentController extends BaseController {
    /**
     * Comment service for the comment controller
     * 
     * @var CommentService
     */
    protected $commentService;
    /**
     * Create a new CommentService object for the controller
     */
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, $action, array $urlvalues) {
        parent::__construct($entityManager, $action, $urlvalues);

        $this->commentService = new CommentService($entityManager);
    }

    /**
     * Create a new comment
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

        if (isset($_POST['send'])) {
            $success = $this->commentService->create();
        }

        if (!$success) {
            header('Location: index.php?controller=site&action=error');
            exit();
        } else {
            header('Location: index.php?controller=site&action=show&id=' . $_GET['id']);
            exit();
        }
    }

}

?>
