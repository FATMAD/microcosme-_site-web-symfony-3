<?php

namespace AdminBundle\Entity\Esparent;

/**
 * reclamtion
 */
class reclamtion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dateReclamation;

    /**
     * @var integer
     */
    private $eleveId;

    /**
     * @var string
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
     * Set dateReclamation
     *
     * @param string $dateReclamation
     *
     * @return reclamtion
     */
    public function setDateReclamation($dateReclamation)
    {
        $this->dateReclamation = $dateReclamation;

        return $this;
    }

    /**
     * Get dateReclamation
     *
     * @return string
     */
    public function getDateReclamation()
    {
        return $this->dateReclamation;
    }

    /**
     * Set eleveId
     *
     * @param integer $eleveId
     *
     * @return reclamtion
     */
    public function setEleveId($eleveId)
    {
        $this->eleveId = $eleveId;

        return $this;
    }

    /**
     * Get eleveId
     *
     * @return integer
     */
    public function getEleveId()
    {
        return $this->eleveId;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return reclamtion
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
