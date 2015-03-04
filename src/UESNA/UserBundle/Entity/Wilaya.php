<?php

namespace UESNA\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wilaya
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UESNA\UserBundle\Entity\WilayaRepository")
 */
class Wilaya
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
