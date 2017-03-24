<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * suppliers_address
 *
 * @ORM\Table(name="suppliers_address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\suppliers_addressRepository")
 */
class suppliers_address
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
     * @ORM\Column(name="suppliers_ID", type="integer")
     */
    private $suppliersID;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Address", type="string", length=255)
     */
    private $suppliersAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="suppliers_Region", type="string", length=255)
     */
    private $suppliersRegion;


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
     * Set suppliersID
     *
     * @param integer $suppliersID
     *
     * @return suppliers_address
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
     * Set suppliersAddress
     *
     * @param string $suppliersAddress
     *
     * @return suppliers_address
     */
    public function setSuppliersAddress($suppliersAddress)
    {
        $this->suppliersAddress = $suppliersAddress;

        return $this;
    }

    /**
     * Get suppliersAddress
     *
     * @return string
     */
    public function getSuppliersAddress()
    {
        return $this->suppliersAddress;
    }

    /**
     * Set suppliersRegion
     *
     * @param string $suppliersRegion
     *
     * @return suppliers_address
     */
    public function setSuppliersRegion($suppliersRegion)
    {
        $this->suppliersRegion = $suppliersRegion;

        return $this;
    }

    /**
     * Get suppliersRegion
     *
     * @return string
     */
    public function getSuppliersRegion()
    {
        return $this->suppliersRegion;
    }
}

