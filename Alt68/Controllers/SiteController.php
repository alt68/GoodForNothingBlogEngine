<?php

/**
 * Main controller of Application
 *
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Controllers;

use Alt68\Sys\BaseController;
use Alt68\Service\SiteService;

/**
 * This class controlls errors and the home page 
 */
class SiteController extends BaseController {

    /**
     * Site service for the site controller
     * 
     * @var SiteService
     */
    protected $siteService;

    /**
     * Create a new SiteService object for the controller
     */
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, $action, array $urlvalues) {
        parent::__construct($entityManager, $action, $urlvalues);

        $this->siteService = new SiteService($entityManager);
    }

    /**
     * Controlls home page
     */
    public function home() {

        $posts = $this->siteService->getPosts();

        $this->smarty->assign('title', 'Blog posztok');
        $this->smarty->assign('isLogged', $this->isLogged);
        $this->smarty->assign('posts', $posts);
        $this->smarty->assign('content', 'site/home.tpl');
        $this->smarty->display('main.tpl');
    }

    /**
     * Show a post
     */
    public function show() {


        $post = $this->siteService->getPost();

        if (!$post) {
            header('Location: index.php?controller=site&action=error');
            exit();
        } else {
            $this->smarty->assign('title', 'Blog bejegyzés');
            $this->smarty->assign('isLogged', $this->isLogged);
            $this->smarty->assign('post', $post);
            $this->smarty->assign('content', 'site/show.tpl');
            $this->smarty->display('main.tpl');
        }
    }

    /**
     * Controlls error page
     */
    public function error() {

        unset($_SESSION['value_array']);
        unset($_SESSION['error_array']);

        $this->smarty->assign('title', 'Hiba');
        $this->smarty->assign('isLogged', $this->isLogged);
        $this->smarty->assign('content', 'site/error.tpl');
        $this->smarty->display('main.tpl');
    }

}

?>
