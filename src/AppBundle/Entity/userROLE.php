<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userROLE
 *
 * @ORM\Table(name="user_r_o_l_e")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\userROLERepository")
 */
class userROLE
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="userROLE", type="string", length=255, unique=true)
     */
    private $userROLE;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userROLE
     *
     * @param string $userROLE
     *
     * @return userROLE
     */
    public function setUserROLE($userROLE)
    {
        $this->userROLE = $userROLE;

        return $this;
    }

    /**
     * Get userROLE
     *
     * @return string
     */
    public function getUserROLE()
    {
        return $this->userROLE;
    }
}

