<?php

/**
 * Description of Users
 * 
 * @author alt68
 * @version 1.0
 * @copyright public domain
 */

namespace Alt68\Entities;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Table users definition
 * 
 * Describes users details
 * @Entity(repositoryClass="UserRepository")
 * @Table(name="users")
 */
class User {
    /**
     * User is admin
     */

    const ADMIN = 0;

    /**
     * User is registered user
     */
    const REGISTERED = 1;

    /**
     * User is guest
     */
    const GUEST = 2;

    /**
     * Guest name
     */
    const GUEST_NAME = 'Guest';

    /**
     * Error message if email already exists
     */
    const ERROR_EMAIL_EXISTS = 'Az email cím már használatban van';

    /**
     * Error message if email not exists
     */
    const ERROR_EMAIL_NOT_EXISTS = 'Az email nem létezik';

    /**
     * Error message if email or password are wrong
     */
    const ERROR_WRONG_EMAIL_OR_PASSWORD = 'Hibás email vagy jelszó';
    
    /**
     * Error message if user is not verified
     */

    const ERROR_USER_IS_NOT_VERIFIED = 'A felhasználó regisztrációja még nem lett véglegesítve';

    /**
     * Automatically generated id
     * 
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;

    /**
     * User name
     * 
     * @Column(type="string", nullable=false)
     * @var string
     */
    protected $name;

    /**
     * E-mail
     * 
     * @Column(type="string", unique=true, nullable=false)
     * @var string
     */
    protected $email;

    /**
     * Password
     * 
     * @Column(type="string", length=32, nullable=false)
     * @var string
     */
    protected $password;

    /**
     * Registration is verificated
     * 
     * @Column(type="boolean", nullable=false)
     * @var boolean
     */
    protected $verified = false;

    /**
     * User is active
     * 
     * @Column(type="boolean", nullable=false)
     * @var boolean
     */
    protected $active = true;

    /**
     * Generated user hash
     * 
     * @Column(type="string", nullable=true)
     * @var string
     */
    protected $userhash;

    /**
     * User level (ADMIN = 0, REGISTERED = 1, GUEST = 2, etc.)
     * 
     * @Column(type="integer")
     * @var integer
     */
    protected $userlevel = self::REGISTERED;

    /**
     * After a successfully registration send an verification email with this verification code
     * 
     * @Column(type="string", nullable=true)
     * @var string
     */
    protected $verificationcode;

    /**
     * Avatar picture name
     * 
     * @Column(type="string", nullable=true)
     * @var string
     */
    protected $avatar;

    /**
     * Writed blogs by user
     * 
     * @OneToMany(targetEntity="Blog", mappedBy="blogger")
     * @var Blog[]
     */
    protected $writedBlogs = null;

    /**
     * writed comments by user
     * 
     * @OneToMany(targetEntity="Comment", mappedBy="commenter")
     * @var Comment[]
     */
    protected $writedComments = null;

    public function __construct() {
        $this->writedBlogs = new ArrayCollection();
        $this->writedComments = new ArrayCollection();
    }

    public function addWritedBlog(Blog $blog) {
        $this->writedBlogs[] = $blog;
    }

    public function addWritedComment(Comment $comment) {
        $this->writedComments[] = $comment;
    }

    /**
     * Gets the user id
     * 
     * @return integer The user id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Gets the user name
     * 
     * @return string The user name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Sets the user name
     * 
     * @param string $name The user name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Gets the user email
     * 
     * @return string the user email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Sets the user email
     * 
     * @param string $email The user email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Gets the user password
     * 
     * @return string The user password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Sets the user password
     * 
     * @param string $password The user password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Gets: Is the registration verified?
     * 
     * @return boolean Is the registration verified?
     */
    public function getVerified() {
        return $this->verified;
    }

    /**
     * Set if registration verified
     * @param type $verified Registration verified
     */
    public function setVerified($verified) {
        $this->verified = $verified;
    }

    /**
     * Gets: is user active?
     * 
     * @return boolean Is user active?
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Sets: The user is active or not
     * 
     * @param boolean $active The user is active or not
     */
    public function setActive($active) {
        $this->active = $active;
    }

    /**
     * Gets user hash
     * 
     * @return string The user hash
     */
    public function getUserhash() {
        return $this->userhash;
    }

    /**
     * Sets user hash
     * 
     * @param string $userhash The user hash
     */
    public function setUserhash($userhash) {
        $this->userhash = $userhash;
    }

    /**
     * Gets user level
     * 
     * @return integer The user level
     */
    public function getUserlevel() {
        return $this->userlevel;
    }

    /**
     * Sets the user level
     * 
     * @param integer $userlevel
     */
    public function setUserlevel($userlevel) {
        $this->userlevel = $userlevel;
    }

    /**
     * Gets registration verificate code
     * 
     * @return string Registration verificate code
     */
    public function getVerificationcode() {
        return $this->verificationcode;
    }

    /**
     * Sets registration verificate code
     * 
     * @param string $verificationcode Registration verificate code
     */
    public function setVerificationcode($verificationcode) {
        $this->verificationcode = $verificationcode;
    }

    /**
     * Gets the avatar picture name
     * 
     * @return string The avatar picture name
     */
    public function getAvatar() {
        return $this->avatar;
    }

    /**
     * Sets the avatar picture name
     * @param string $avatar The avatar picture name
     */
    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

}

?>
