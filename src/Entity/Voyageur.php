<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class Voyageur
 * @ORM\Table(name="Voyageur")
 * @ORM\Entity()
 */
class Voyageur
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $idVoyageur;

    /**
     * @ORM\Column(name="nom",type="string")
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom",type="string")
     */
    private $prenom;

    /**
     * @return mixed
     */
    public function getIdVoyageur()
    {
        return $this->idVoyageur;
    }

    /**
     * @param mixed $idVoyageur
     */
    public function setIdVoyageur($idVoyageur): void
    {
        $this->idVoyageur = $idVoyageur;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

}