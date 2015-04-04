<?php

namespace AppBundle\Controller;

use AppBundle\Model\User;
use FOS\RestBundle\Controller\Annotations as Rest;

class UsersController
{
    /**
     * @Rest\View
     */
    public function getUsersAction()
    {
        return new User("Michelle", "hello@michellesanver.com", 1);
    }
}
