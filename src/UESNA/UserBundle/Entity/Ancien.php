<?php

namespace UESNA\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ancien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UESNA\UserBundle\Entity\AncienRepository")
 */
class Ancien
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
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="StatusActuelle", type="string", length=255)
     */
    private $statusActuelle;

    /**
     * @var string
     *
     * @ORM\Column(name="decritTois", type="string", length=255)
     */
    private $decritTois;

    /**
     * @var text
     *
     * @ORM\Column(name="Nom", type="text", )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeDebut", type="string", length=255)
     */
    private $anneeDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Promotion", type="string", length=255)
     */
    private $promotion;


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
     * Set specialite
     *
     * @param string $specialite
     * @return Ancien
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set statusActuelle
     *
     * @param string $statusActuelle
     * @return Ancien
     */
    public function setStatusActuelle($statusActuelle)
    {
        $this->statusActuelle = $statusActuelle;

        return $this;
    }

    /**
     * Get statusActuelle
     *
     * @return string 
     */
    public function getStatusActuelle()
    {
        return $this->statusActuelle;
    }

    /**
     * Set decritTois
     *
     * @param string $decritTois
     * @return Ancien
     */
    public function setDecritTois($decritTois)
    {
        $this->decritTois = $decritTois;

        return $this;
    }

    /**
     * Get decritTois
     *
     * @return string 
     */
    public function getDecritTois()
    {
        return $this->decritTois;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Ancien
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
     * @return Ancien
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
     * Set anneeDebut
     *
     * @param string $anneeDebut
     * @return Ancien
     */
    public function setAnneeDebut($anneeDebut)
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }

    /**
     * Get anneeDebut
     *
     * @return string 
     */
    public function getAnneeDebut()
    {
        return $this->anneeDebut;
    }

    /**
     * Set promotion
     *
     * @param string $promotion
     * @return Ancien
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return string 
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}
