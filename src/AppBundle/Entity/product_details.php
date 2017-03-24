<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * product_details
 *
 * @ORM\Table(name="product_details")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\product_detailsRepository")
 */
class product_details
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
     * @ORM\Column(name="product_ID", type="integer")
     */
    private $productID;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Name", type="string", length=255)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Type", type="string", length=255)
     */
    private $productType;

    /**
     * @var int
     *
     * @ORM\Column(name="suppliers_ID", type="integer")
     */
    private $suppliersID;

    /**
     * @var string
     *
     * @ORM\Column(name="product_Description", type="string", length=255)
     */
    private $productDescription;


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
     * Set productID
     *
     * @param integer $productID
     *
     * @return product_details
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * Get productID
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return product_details
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
     * Set productType
     *
     * @param string $productType
     *
     * @return product_details
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set suppliersID
     *
     * @param integer $suppliersID
     *
     * @return product_details
     */
    public function setSuppliersID($suppliersID)
    {
        $this->suppliersID = $suppliersID;

        return $this;
    }

    /**
     * Get suppliersID
     *
     * @return int
     */
    public function getSuppliersID()
    {
        return $this->suppliersID;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     *
     * @return product_details
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
}

