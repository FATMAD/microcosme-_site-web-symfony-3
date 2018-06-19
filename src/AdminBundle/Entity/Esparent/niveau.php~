<?php

namespace AdminBundle\Entity\Esparent;

use Doctrine\ORM\Mapping as ORM;

/**
 * class
 *
 * @ORM\Table(name="esparentclass")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Esparent\classRepository")
 */
class niveau
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="frais", type="string", length=255)
     */
    private $frais;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return niveau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set frais
     *
     * @param string $frais
     *
     * @return niveau
     */
    public function setFrais($frais)
    {
        $this->frais = $frais;

        return $this;
    }

    /**
     * Get frais
     *
     * @return string
     */
    public function getFrais()
    {
        return $this->frais;
    }
}
