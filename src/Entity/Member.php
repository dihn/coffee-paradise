<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 03/03/2018
 * Time: 20:45
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Member entity
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="App\Repository\MemberRepository")
 */
class Member implements UserInterface, \Serializable
{

    /**
     * Store the member id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Store the member username
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * Store the member password
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * Store the members role/s
     * @ORM\Column(type="json_array")
     */
    private $roles = [];

    /**
     * Get salt
     * @return null|string
     */
    public function getSalt() {
       return null;
    }

    /**
     * Erase credentials
     */
    public function eraseCredentials() {

    }

    /**
     * Serialize
     * @return string
     */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /**
     * Unserialize
     * @param string $serialized
     */
    public function unserialize($serialized) {
       list(
           $this->id,
           $this->username,
           $this->password,
           ) = unserialize($serialized);
    }

    /**
     * Get the members role/s
     * @return array
     */
    public function getRoles() {

        return $this->roles;
    }

    /**
     * Set roles
     *
     * @param array $roles *
     * @return Member
     */

    public function setRoles($roles) {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Get the member id
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the member id
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * Get the username
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the username
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * Get the password
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the password
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}