<?php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */

class User extends BaseUser
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /** @ORM\Column(type="string", length=100) */
    protected $username;
    /** @ORM\Column(type="string", length=100) */
    protected $password;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }


}