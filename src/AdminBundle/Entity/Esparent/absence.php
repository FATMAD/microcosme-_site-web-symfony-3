<?php

namespace AdminBundle\Entity\Esparent;

use Doctrine\ORM\Mapping as ORM;

/**
 * absence
 *
 * @ORM\Table(name="esparentabsence")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Esparent\absenceRepository")
 */
class absence
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
