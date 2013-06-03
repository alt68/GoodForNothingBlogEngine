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
/**
 * This class is a service layer for site (querying posts etc.).
 */
class SiteService extends BaseService {
    
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
     * Get blog entry
     * Blog entry ID come from $_GET array
     * 
     * @return mixed false or blog entry array
     */
    public function getPost() {
        $validator = new \Validator('GET');
        $validator->required()->integer()->validate('id');

        /*
         * If error occured return false
         */
        if ($validator->hasErrors()) {
            return false;
        }
        
        return $this->em
                        ->getRepository('Alt68\Entities\Comment')
                        ->getBlogWithComments($_GET['id']);
    }
    
}

?>
