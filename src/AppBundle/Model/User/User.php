<?php

namespace AppBundle\Model\User;

use JMS\Serializer\Annotation as Serializer;

/**
 * User
 */
class User
{
    /**
     * Username
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"api"})
     */
    private $username;

    /**
     * E-mail
     *
     * @var string
     * @Serializer\Type("string")
     * @Serializer\Groups({"api"})
     */
    private $email;

    /**
     * Id
     *
     * @var string
     * @Serializer\Type("integer")
     * @Serializer\Groups({"api"})
     */
    private $id;

    /**
     * @param string  $username
     * @param string  $email
     * @param integer $id
     */
    function __construct($username, $email, $id)
    {
        $this->username = $username;
        $this->email = $email;
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}
