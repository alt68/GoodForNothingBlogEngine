<?php

/*
 * Description of Articles
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Table blogs definition
 * 
 * Describes blogs details
 * 
 * @Entity(repositoryClass="BlogRepository")
 * @Table(name="blogs")
 */
class Blog{

    /**
     * Automatically generated id
     * 
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * Title of a blog
     * 
     * @Column(type="string", nullable=false)
     * @var string
     */
    protected $headline;

    /**
     * Blogpost's content
     * 
     * @Column(type="text", nullable=false)
     * @var text
     */
    protected $body;

    /**
     * Date of creation time
     * 
     * @Column(type="datetime", nullable=false)
     * @var datetime
     */
    protected $created;

    /**
     * Date of modifycation time
     * 
     * @Column(type="datetime")
     * @var datetime
     */
    protected $updated;

    /**
     * Blogger's user id who wrote this article
     * 
     * @ManyToOne(targetEntity="User", inversedBy="writedBlogs")
     * @var User[] 
     */
    protected $blogger;

    /**
     * Catergory id: define a category for the blog post
     * 
     * @ManyToOne(targetEntity="Category", inversedBy="assignedBlogs")
     * @var Category[] 
     */
    protected $category;

    /**
     * Storing blog's comments in an ArrayCollection
     * 
     * @OneToMany(targetEntity="Comment", mappedBy="blog")
     * @var Comment[]
     */
    protected $assignedComments = null;

    public function __construct() {
        $this->assignedComments = new ArrayCollection();
    }

    public function assignedToComment(Comment $comment) {
        $this->assignedComments[] = $comment;
    }

    public function getBlogger() {
        return $this->blogger;
    }

    public function setBlogger(User $blogger) {
        $blogger->addWritedBlog($this);
        $this->blogger = $blogger;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $category->assignedToBlog($this);
        $this->category = $category;
    }

    public function getId() {
        return $this->id;
    }

    public function getHeadline() {
        return $this->headline;
    }

    public function setHeadline($headline) {
        $this->headline = $headline;
    }

        public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getCreated() {
        return $this->created;
    }

    public function setCreated(\DateTime $created) {
        $this->created = $created;
    }

    public function getUpdated() {
        return $this->updated;
    }

    public function setUpdated(\DateTime $updated) {
        $this->updated = $updated;
    }

}

?>
