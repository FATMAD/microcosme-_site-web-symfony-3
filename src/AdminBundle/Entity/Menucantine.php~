<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menucantine
 *
 * @ORM\Table(name="menucantine")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\MenucantineRepository")
 */
class Menucantine
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
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="plat", type="string", length=255)
     */
    private $plat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

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
     * Set date
     *
     * @param string $date
     *
     * @return Menucantine
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set plat
     *
     * @param string $plat
     *
     * @return Menucantine
     */
    public function setPlat($plat)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return string
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Menucantine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
