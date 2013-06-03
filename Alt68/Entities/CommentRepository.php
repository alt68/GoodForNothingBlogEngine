<?php

/**
 * Description of CommentRepository
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\ORM\EntityRepository;
/**
 * This class is a repository for Comment entity
 */
class CommentRepository extends EntityRepository {

    /**
     * Returns all comments of a blog
     * 
     * @param int $blogid
     * @return array
     */
    public function getBlogWithComments($blogid) {
        $dql = "SELECT b, bl, c, u, ca "
                . "FROM Alt68\Entities\Blog b "
                . "JOIN b.blogger bl "
                . "JOIN b.category ca "
                . "LEFT JOIN b.assignedComments c "
                . "LEFT JOIN c.commenter u "
                . "WHERE b.id = ?1 ";
//                . "ORDER BY c.created DESC";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->setParameter(1, $blogid)
                        ->getArrayResult();
    }

}

?>
