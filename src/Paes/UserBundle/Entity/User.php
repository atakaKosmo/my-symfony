<?php
// src/Acme/UserBundle/Entity/User.php

namespace Paes\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="paes_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Paes\ComuneBundle\Entity\Comune", inversedBy="users")
     * @ORM\JoinColumn(name="comune_id", referencedColumnName="id")
     **/

    protected $comune;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}