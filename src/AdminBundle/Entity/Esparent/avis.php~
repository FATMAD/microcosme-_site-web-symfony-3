<?php

namespace AdminBundle\Entity\Esparent;

use Doctrine\ORM\Mapping as ORM;

/**
 * avis
 *
 * @ORM\Table(name="esparentavis")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Esparent\avisRepository")
 */
class avis
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
     * @ORM\Column(name="date_avis", type="string", length=255)
     */
    private $dateAvis;

    /**
     * @var string
     *
     * @ORM\Column(name="id_user", type="string", length=255)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="id_eleve", type="string", length=255)
     */
    private $idEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;


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
     * Set dateAvis
     *
     * @param string $dateAvis
     *
     * @return avis
     */
    public function setDateAvis($dateAvis)
    {
        $this->dateAvis = $dateAvis;

        return $this;
    }

    /**
     * Get dateAvis
     *
     * @return string
     */
    public function getDateAvis()
    {
        return $this->dateAvis;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return avis
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEleve
     *
     * @param string $idEleve
     *
     * @return avis
     */
    public function setIdEleve($idEleve)
    {
        $this->idEleve = $idEleve;

        return $this;
    }

    /**
     * Get idEleve
     *
     * @return string
     */
    public function getIdEleve()
    {
        return $this->idEleve;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return avis
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
