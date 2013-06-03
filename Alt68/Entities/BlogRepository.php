<?php

/**
 * Description of BlogRepository
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\ORM\EntityRepository;

/**
 * This class is a repository for Blog entity
 */
class BlogRepository extends EntityRepository {

    /**
     * Get blog entries
     * 
     * @param type $blogId If null get all blog entries
     * @param type $userId if null get all user's blog entries
     * @return type array blog(s)
     */
    public function getBlogEntry($blogId = null, $userId = null) {


        $dql = "SELECT b.id AS blogid, "
                . "b.headline, "
                . "b.body, "
                . "b.created, "
                . "b.updated, "
                . "u.id as userid, "
                . "u.name, "
                . "u.email, "
                . "c.name AS category  "
                . "FROM Alt68\Entities\Blog b "
                . "JOIN b.blogger u "
                . "JOIN b.category c "
                . (isset($blogId) || isset($userId) ? "WHERE " : "")
                . (isset($blogId) ? "b.id = ?1 " : "")
                . (isset($blogId) && isset($userId) ? "AND " : "")
                . (isset($userId) ? "b.blogger = ?2 " : "")
                . "ORDER BY b.created DESC";

        $result = $this->getEntityManager()
                ->createQuery($dql);

        if (isset($blogId)) {
            $result->setParameter(1, $blogId);
        }

        if (isset($userId)) {
            $result->setParameter(2, $userId);
        }

        return $result->getArrayResult();
    }

    public function getUserBlog() {
        $dql = "SELECT b "
                . "FROM Alt68\Entities\Blog b "
                . "WHERE b.id = ?1 "
                . "AND b.blogger = ?2 ";

        $result = $this->getEntityManager()
                ->createQuery($dql)
                ->setParameter(1, $blogId)
                ->setParameter(2, $userId)
                ->getResult();
        
        return $result;
    }
}
?>
