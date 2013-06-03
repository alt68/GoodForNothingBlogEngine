<?php

/**
 * Description of Categories
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 *  Table categories definition
 * 
 * Describes categories details
 * @Entity @Table(name="categories")
 */
class Category{

    /**
     * Automatically generated id
     * 
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * Name of a category
     * 
     * @Column(type="string", nullable=false)
     * @var string
     */
    protected $name;

    /**
     * Describe a category
     * 
     * @Column(type="text")
     * @var text
     */
    protected $description;

    /**
     * Storing assigned blogs in an ArrayCollection
     * 
     * @OneToMany(targetEntity="Blog", mappedBy="category")
     * @var Blog[]
     */
    protected $assignedBlogs = null;

    public function __construct() {
        $this->assignedBlogs = new ArrayCollection();
    }

    public function assignedToBlog(Blog $blog) {
        $this->assignedBlogs[] = $blog;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

}

?>
