<?php

namespace AdminBundle\Entity\Esparent;

use Doctrine\ORM\Mapping as ORM;

/**
 * payement
 *
 * @ORM\Table(name="esparentpayement")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Esparent\payementRepository")
 */
class payement
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
     * @ORM\Column(name="id_eleve", type="string", length=255)
     */
    private $idEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="id_class", type="string", length=255)
     */
    private $idClass;

    /**
     * @var string
     *
     * @ORM\Column(name="reste", type="string", length=255)
     */
    private $reste;

    /**
     * @var string
     *
     * @ORM\Column(name="paye", type="string", length=255)
     */
    private $paye;

    /**
     * @var string
     *
     * @ORM\Column(name="date_pay", type="string", length=255)
     */
    private $datePay;


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
     * Set idEleve
     *
     * @param string $idEleve
     *
     * @return payement
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
     * Set idClass
     *
     * @param string $idClass
     *
     * @return payement
     */
    public function setIdClass($idClass)
    {
        $this->idClass = $idClass;

        return $this;
    }

    /**
     * Get idClass
     *
     * @return string
     */
    public function getIdClass()
    {
        return $this->idClass;
    }

    /**
     * Set reste
     *
     * @param string $reste
     *
     * @return payement
     */
    public function setReste($reste)
    {
        $this->reste = $reste;

        return $this;
    }

    /**
     * Get reste
     *
     * @return string
     */
    public function getReste()
    {
        return $this->reste;
    }

    /**
     * Set paye
     *
     * @param string $paye
     *
     * @return payement
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return string
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set datePay
     *
     * @param string $datePay
     *
     * @return payement
     */
    public function setDatePay($datePay)
    {
        $this->datePay = $datePay;

        return $this;
    }

    /**
     * Get datePay
     *
     * @return string
     */
    public function getDatePay()
    {
        return $this->datePay;
    }
}
