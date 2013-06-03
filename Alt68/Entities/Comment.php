<?php

/**
 * Description of Comments
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

/**
 * Table comments definition
 * 
 * Describes comments details
 * @Entity(repositoryClass="CommentRepository")
 * @Table(name="comments")
 */
class Comment {

    /**
     * Automatically generated id
     * 
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * Comment text
     * 
     * @Column(type="text")
     * @var text
     */
    protected $comment;

    /**
     * Is comment visible?
     * 
     * @Column(type="boolean")
     * @var boolean
     */
    protected $visible = true;

    /**
     * Date of creation time
     * 
     * @Column(type="datetime")
     * @var datetime
     */
    protected $created;

    /**
     * Commenter's user id who wrote this comment
     * 
     * @ManyToOne(targetEntity="User", inversedBy="writedComments")
     * @var User[]
     */
    protected $commenter;

    /**
     * Comment which blog belong to
     * 
     * @ManyToOne(targetEntity="Blog", inversedBy="assignedComments")
     * @JoinColumn(name="blog_id", referencedColumnName="id", onDelete="CASCADE")
     * @var Blog[]
     */
    protected $blog;

    public function getCommenter() {
        return $this->commenter;
    }

    public function setCommenter(User $commenter) {
        $commenter->addWritedComment($this);
        $this->commenter = $commenter;
    }

    public function getBlog() {
        return $this->blog;
    }

    public function setBlog(Blog $blog) {
        $blog->assignedToComment($this);
        $this->blog = $blog;
    }

    public function getId() {
        return $this->id;
    }

    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

}

?>
