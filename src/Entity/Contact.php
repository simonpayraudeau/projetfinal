<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class Contact
 * @ORM\Table(name="Contact")
 * @ORM\Entity()
 */
class Contact
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_contact",type="integer")
     */
    private $idContact;

    /**
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $idVoyageur;

    /**
     * @ORM\Column(name="methode",type="string")
     */
    private $methode;

    /**
     * @ORM\Column(name="valeur",type="string")
     */
    private $valeur;

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * @param mixed $idContact
     */
    public function setIdContact($idContact): void
    {
        $this->idContact = $idContact;
    }

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
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * @param mixed $methode
     */
    public function setMethode($methode): void
    {
        $this->methode = $methode;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur): void
    {
        $this->valeur = $valeur;
    }

}