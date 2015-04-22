<?php

namespace Gart\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date")
     */
    private $dateCreated;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="vehicules")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $driver;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Vehicule
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Vehicule
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Vehicule
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set driver
     *
     * @param \Gart\TestBundle\Entity\User $driver
     * @return Vehicule
     */
    public function setDriver(\Gart\TestBundle\Entity\User $driver = null)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * Get driver
     *
     * @return \Gart\TestBundle\Entity\User 
     */
    public function getDriver()
    {
        return $this->driver;
    }
}
