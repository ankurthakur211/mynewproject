<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User implements UserInterface
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
   private $id;
   /**
    * @ORM\Column(type="string", unique=true)
    */
   private $username;
   /**
    * @ORM\Column(type="string", unique=true)
    */
   private $email;
   /**
    * @ORM\Column(type="string")
    */
   private $password;
   /**
    * @ORM\Column(type="json_array")
    */
   private $roles = array();
   /**
    * @ORM\Column(type="string", unique=true)
    */
   private $apiToken;


    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

     public function eraseCredentials()
    {
    }

    public function getUsername()
    {
        return $this->identifier;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(string $apiToken): self
    {
        $this->apiToken = $apiToken;

        return $this;
    }

 }