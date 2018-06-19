<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\eventRepository")
 */
class event
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
     * @var \DateTime
     *
     * @ORM\Column(name="insert_at", type="datetime")
     */
    private $insertAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime")
     */
    private $updateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=255)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=255)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="statu", type="string", length=255)
     */
    private $statu;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


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
     * Set insertAt
     *
     * @param \DateTime $insertAt
     *
     * @return event
     */
    public function setInsertAt($insertAt)
    {
        $this->insertAt = $insertAt;

        return $this;
    }

    /**
     * Get insertAt
     *
     * @return \DateTime
     */
    public function getInsertAt()
    {
        return $this->insertAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return event
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return event
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return event
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return event
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return event
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

    /**
     * Set statu
     *
     * @param string $statu
     *
     * @return event
     */
    public function setStatu($statu)
    {
        $this->statu = $statu;

        return $this;
    }

    /**
     * Get statu
     *
     * @return string
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
