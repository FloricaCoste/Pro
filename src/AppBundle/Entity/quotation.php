<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * quotation
 *
 * @ORM\Table(name="quotation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\quotationRepository")
 */
class quotation
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
     * @ORM\Column(name="quotation_no", type="integer")
     */
    private $quotationNo;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_id", type="integer")
     */
    private $suppliersId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Name", type="string", length=255)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Description", type="string", length=255)
     */
    private $productDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="request_on", type="string", length=255)
     */

    private $requestOn;


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
     * Set quotationNo
     *
     * @param integer $quotationNo
     *
     * @return quotation
     */
    public function setQuotationNo($quotationNo)
    {
        $this->quotationNo = $quotationNo;

        return $this;
    }

    /**
     * Get quotationNo
     *
     * @return int
     */
    public function getQuotationNo()
    {
        return $this->quotationNo;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return quotation
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set suppliersId
     *
     * @param integer $suppliersId
     *
     * @return quotation
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
     * Set productName
     *
     * @param string $productName
     *
     * @return quotation
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return quotation
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set requestOn
     *
     * @param \DateTime $requestOn
     *
     * @return quotation
     */
    public function setRequestOn($requestOn)
    {
        $this->requestOn = $requestOn;

        return $this;
    }

    /**
     * Get requestOn
     *
     * @return \string
     */
    public function getRequestOn()
    {
        return $this->requestOn;
    }
}

