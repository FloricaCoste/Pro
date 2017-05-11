<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * suppliers_contact
 *
 * @ORM\Table(name="suppliers_contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\suppliers_contactRepository")
 */
class suppliers_contact
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
     * @var int
     *
     * @ORM\Column(name="suppliers_id", type="integer")
     */
    private $suppliersId;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_contact_Name", type="string", length=255)
     */
    private $suppliersContactName;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_phone", type="string", length=255)
     */
    private $suppliersPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_mobile", type="string", length=20)
     */
    private $suppliersMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_e_mail", type="string", length=50)
     */
    private $suppliersEMail;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_fax", type="string", length=20)
     */
    private $suppliersFax;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_web", type="string", length=150)
     */
    private $suppliersWeb;


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
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return suppliers_contact
     */
    public function setSuppliersId($suppliersId)
    {
        $this->suppliersId = $suppliersId;

        return $this;
    }

    /**
     * Get suppliersId
     *
     * @return int
     */
    public function getSuppliersId()
    {
        return $this->suppliersId;
    }

    /**
     * Set suppliersContactName
     *
     * @param string $suppliersContactName
     *
     * @return suppliers_contact
     */
    public function setSuppliersContactName($suppliersContactName)
    {
        $this->suppliersContactName = $suppliersContactName;

        return $this;
    }

    /**
     * Get suppliersContactName
     *
     * @return string
     */
    public function getSuppliersContactName()
    {
        return $this->suppliersContactName;
    }

    /**
     * Set suppliersPhone
     *
     * @param string $suppliersPhone
     *
     * @return suppliers_contact
     */
    public function setSuppliersPhone($suppliersPhone)
    {
        $this->suppliersPhone = $suppliersPhone;

        return $this;
    }

    /**
     * Get suppliersPhone
     *
     * @return string
     */
    public function getSuppliersPhone()
    {
        return $this->suppliersPhone;
    }

    /**
     * Set suppliersMobile
     *
     * @param string $suppliersMobile
     *
     * @return suppliers_contact
     */
    public function setSuppliersMobile($suppliersMobile)
    {
        $this->suppliersMobile = $suppliersMobile;

        return $this;
    }

    /**
     * Get suppliersMobile
     *
     * @return string
     */
    public function getSuppliersMobile()
    {
        return $this->suppliersMobile;
    }

    /**
     * Set suppliersEMail
     *
     * @param string $suppliersEMail
     *
     * @return suppliers_contact
     */
    public function setSuppliersEMail($suppliersEMail)
    {
        $this->suppliersEMail = $suppliersEMail;

        return $this;
    }

    /**
     * Get suppliersEMail
     *
     * @return string
     */
    public function getSuppliersEMail()
    {
        return $this->suppliersEMail;
    }

    /**
     * Set suppliersFax
     *
     * @param string $suppliersFax
     *
     * @return suppliers_contact
     */
    public function setSuppliersFax($suppliersFax)
    {
        $this->suppliersFax = $suppliersFax;

        return $this;
    }

    /**
     * Get suppliersFax
     *
     * @return string
     */
    public function getSuppliersFax()
    {
        return $this->suppliersFax;
    }

    /**
     * Set suppliersWeb
     *
     * @param string $suppliersWeb
     *
     * @return suppliers_contact
     */
    public function setSuppliersWeb($suppliersWeb)
    {
        $this->suppliersWeb = $suppliersWeb;

        return $this;
    }

    /**
     * Get suppliersWeb
     *
     * @return string
     */
    public function getSuppliersWeb()
    {
        return $this->suppliersWeb;
    }
}

