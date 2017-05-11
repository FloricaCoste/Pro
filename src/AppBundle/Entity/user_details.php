<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user_details
 *
 * @ORM\Table(name="user_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\user_detailsRepository")
 */
class user_details
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
     * @ORM\Column(name="user_id", type="string", length=255)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_details_phone", type="string", length=20)
     */
    private $userDetailsPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_details_landline", type="string", length=20)
     */
    private $userDetailsLandline;

    /**
     * @var string
     *
     * @ORM\Column(name="user_details_prefix", type="string", length=255)
     */
    private $userDetailsPrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="user_details_email", type="string", length=255)
     */
    private $userDetailsEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_First_Name", type="string", length=255)
     */
    private $userFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_Second_Name", type="string", length=255)
     */
    private $userSecondName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_e_mail", type="string", length=255)
     */
    private $userEMail;

    /**
     * @var bool
     *
     * @ORM\Column(name="user_validate", type="boolean")
     */
    private $userValidate;


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
     * Set userId
     *
     * @param string $userId
     *
     * @return user_details
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userDetailsPhone
     *
     * @param string $userDetailsPhone
     *
     * @return user_details
     */
    public function setUserDetailsPhone($userDetailsPhone)
    {
        $this->userDetailsPhone = $userDetailsPhone;

        return $this;
    }

    /**
     * Get userDetailsPhone
     *
     * @return string
     */
    public function getUserDetailsPhone()
    {
        return $this->userDetailsPhone;
    }

    /**
     * Set userDetailsLandline
     *
     * @param string $userDetailsLandline
     *
     * @return user_details
     */
    public function setUserDetailsLandline($userDetailsLandline)
    {
        $this->userDetailsLandline = $userDetailsLandline;

        return $this;
    }

    /**
     * Get userDetailsLandline
     *
     * @return string
     */
    public function getUserDetailsLandline()
    {
        return $this->userDetailsLandline;
    }

    /**
     * Set userDetailsPrefix
     *
     * @param string $userDetailsPrefix
     *
     * @return user_details
     */
    public function setUserDetailsPrefix($userDetailsPrefix)
    {
        $this->userDetailsPrefix = $userDetailsPrefix;

        return $this;
    }

    /**
     * Get userDetailsPrefix
     *
     * @return string
     */
    public function getUserDetailsPrefix()
    {
        return $this->userDetailsPrefix;
    }

    /**
     * Set userDetailsEmail
     *
     * @param string $userDetailsEmail
     *
     * @return user_details
     */
    public function setUserDetailsEmail($userDetailsEmail)
    {
        $this->userDetailsEmail = $userDetailsEmail;

        return $this;
    }

    /**
     * Get userDetailsEmail
     *
     * @return string
     */
    public function getUserDetailsEmail()
    {
        return $this->userDetailsEmail;
    }

    /**
     * Set userFirstName
     *
     * @param string $userFirstName
     *
     * @return user_details
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    /**
     * Get userFirstName
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * Set userSecondName
     *
     * @param string $userSecondName
     *
     * @return user_details
     */
    public function setUserSecondName($userSecondName)
    {
        $this->userSecondName = $userSecondName;

        return $this;
    }

    /**
     * Get userSecondName
     *
     * @return string
     */
    public function getUserSecondName()
    {
        return $this->userSecondName;
    }

    /**
     * Set userEMail
     *
     * @param string $userEMail
     *
     * @return user_details
     */
    public function setUserEMail($userEMail)
    {
        $this->userEMail = $userEMail;

        return $this;
    }

    /**
     * Get userEMail
     *
     * @return string
     */
    public function getUserEMail()
    {
        return $this->userEMail;
    }

    /**
     * Set userValidate
     *
     * @param boolean $userValidate
     *
     * @return user_details
     */
    public function setUserValidate($userValidate)
    {
        $this->userValidate = $userValidate;

        return $this;
    }

    /**
     * Get userValidate
     *
     * @return bool
     */
    public function getUserValidate()
    {
        return $this->userValidate;
    }
}

