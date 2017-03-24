<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * suppliers_bank
 *
 * @ORM\Table(name="suppliers_bank")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\suppliers_bankRepository")
 */
class suppliers_bank
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
     * @ORM\Column(name="suppliers_Bank_Name", type="string", length=255)
     */
    private $suppliersBankName;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Acc_no", type="string", length=255)
     */
    private $suppliersAccNo;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_IBAN", type="string", length=255)
     */
    private $suppliersIBAN;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_BIC", type="string", length=255)
     */
    private $suppliersBIC;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Country", type="string", length=255)
     */
    private $suppliersCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Bank_Address", type="string", length=255)
     */
    private $suppliersBankAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="uppliers_Swift", type="string", length=255)
     */
    private $uppliersSwift;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Routing_Cod", type="string", length=255)
     */
    private $suppliersRoutingCod;


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
     * @return suppliers_bank
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
     * Set suppliersBankName
     *
     * @param string $suppliersBankName
     *
     * @return suppliers_bank
     */
    public function setSuppliersBankName($suppliersBankName)
    {
        $this->suppliersBankName = $suppliersBankName;

        return $this;
    }

    /**
     * Get suppliersBankName
     *
     * @return string
     */
    public function getSuppliersBankName()
    {
        return $this->suppliersBankName;
    }

    /**
     * Set suppliersAccNo
     *
     * @param string $suppliersAccNo
     *
     * @return suppliers_bank
     */
    public function setSuppliersAccNo($suppliersAccNo)
    {
        $this->suppliersAccNo = $suppliersAccNo;

        return $this;
    }

    /**
     * Get suppliersAccNo
     *
     * @return string
     */
    public function getSuppliersAccNo()
    {
        return $this->suppliersAccNo;
    }

    /**
     * Set suppliersIBAN
     *
     * @param string $suppliersIBAN
     *
     * @return suppliers_bank
     */
    public function setSuppliersIBAN($suppliersIBAN)
    {
        $this->suppliersIBAN = $suppliersIBAN;

        return $this;
    }

    /**
     * Get suppliersIBAN
     *
     * @return string
     */
    public function getSuppliersIBAN()
    {
        return $this->suppliersIBAN;
    }

    /**
     * Set suppliersBIC
     *
     * @param string $suppliersBIC
     *
     * @return suppliers_bank
     */
    public function setSuppliersBIC($suppliersBIC)
    {
        $this->suppliersBIC = $suppliersBIC;

        return $this;
    }

    /**
     * Get suppliersBIC
     *
     * @return string
     */
    public function getSuppliersBIC()
    {
        return $this->suppliersBIC;
    }

    /**
     * Set suppliersCountry
     *
     * @param string $suppliersCountry
     *
     * @return suppliers_bank
     */
    public function setSuppliersCountry($suppliersCountry)
    {
        $this->suppliersCountry = $suppliersCountry;

        return $this;
    }

    /**
     * Get suppliersCountry
     *
     * @return string
     */
    public function getSuppliersCountry()
    {
        return $this->suppliersCountry;
    }

    /**
     * Set suppliersBankAddress
     *
     * @param string $suppliersBankAddress
     *
     * @return suppliers_bank
     */
    public function setSuppliersBankAddress($suppliersBankAddress)
    {
        $this->suppliersBankAddress = $suppliersBankAddress;

        return $this;
    }

    /**
     * Get suppliersBankAddress
     *
     * @return string
     */
    public function getSuppliersBankAddress()
    {
        return $this->suppliersBankAddress;
    }

    /**
     * Set uppliersSwift
     *
     * @param string $uppliersSwift
     *
     * @return suppliers_bank
     */
    public function setUppliersSwift($uppliersSwift)
    {
        $this->uppliersSwift = $uppliersSwift;

        return $this;
    }

    /**
     * Get uppliersSwift
     *
     * @return string
     */
    public function getUppliersSwift()
    {
        return $this->uppliersSwift;
    }

    /**
     * Set suppliersRoutingCod
     *
     * @param string $suppliersRoutingCod
     *
     * @return suppliers_bank
     */
    public function setSuppliersRoutingCod($suppliersRoutingCod)
    {
        $this->suppliersRoutingCod = $suppliersRoutingCod;

        return $this;
    }

    /**
     * Get suppliersRoutingCod
     *
     * @return string
     */
    public function getSuppliersRoutingCod()
    {
        return $this->suppliersRoutingCod;
    }
}

