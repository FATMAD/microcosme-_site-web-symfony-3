<?php

namespace AdminBundle\Entity\Esparent;

use Doctrine\ORM\Mapping as ORM;

/**
 * eleve
 *
 * @ORM\Table(name="esparenteleve")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Esparent\eleveRepository")
 */
class eleve
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mere", type="string", length=255)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="nompere", type="string", length=255)
     */
    private $nompere;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string", length=255)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance", type="string", length=255)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="date_inscription", type="string", length=255)
     */
    private $dateInscription;

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
     * @return eleve
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return eleve
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     *
     * @return eleve
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set nompere
     *
     * @param string $nompere
     *
     * @return eleve
     */
    public function setNompere($nompere)
    {
        $this->nompere = $nompere;

        return $this;
    }

    /**
     * Get nompere
     *
     * @return string
     */
    public function getNompere()
    {
        return $this->nompere;
    }

    /**
     * Set classe
     *
     * @param string $classe
     *
     * @return eleve
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return eleve
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateNaissance
     *
     * @param string $dateNaissance
     *
     * @return eleve
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set dateInscription
     *
     * @param string $dateInscription
     *
     * @return eleve
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return string
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }
}
