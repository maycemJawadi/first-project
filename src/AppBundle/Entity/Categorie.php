<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;



 /**
     * @ORM\OneToMany(targetEntity="Dress", mappedBy="categorie")
    *
     */
    private $dresses;

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
     * Set name
     *
     * @param string $name
     *
     * @return Categorie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dress
     *
     * @param \AppBundle\Entity\Dress $dress
     *
     * @return Categorie
     */
    public function addDress(\AppBundle\Entity\Dress $dress)
    {
        $this->dresses[] = $dress;

        return $this;
    }

    /**
     * Remove dress
     *
     * @param \AppBundle\Entity\Dress $dress
     */
    public function removeDress(\AppBundle\Entity\Dress $dress)
    {
        $this->dresses->removeElement($dress);
    }

    /**
     * Get dresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDresses()
    {
        return $this->dresses;
    }
}
