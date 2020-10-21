<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class Dossier_Table
 * @ORM\Table(name="Dossier")
 * @ORM\Entity()
 */
class Dossier_Table
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_dossier",type="integer")
     */
    private $idDossier;

    /**
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $idVoyageur;

    /**
     * @ORM\Column(name="methode",type="string")
     */
    private $methode;

    /**
     * @ORM\Column(name="id_voyage",type="integer")
     */
    private $idVoyage;

    /**
     * @ORM\Column(name="date",type="string")
     */
    private $date;

    /**
     * @ORM\Column(name="depart",type="string")
     */
    private $depart;

    /**
     * @ORM\Column(name="arrivee",type="string")
     */
    private $arrivee;

    /**
     * @return mixed
     */
    public function getIdDossier()
    {
        return $this->idDossier;
    }

    /**
     * @param mixed $idDossier
     */
    public function setIdDossier($idDossier): void
    {
        $this->idDossier = $idDossier;
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
    public function getIdVoyage()
    {
        return $this->idVoyage;
    }

    /**
     * @param mixed $idVoyage
     */
    public function setIdVoyage($idVoyage): void
    {
        $this->idVoyage = $idVoyage;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param mixed $depart
     */
    public function setDepart($depart): void
    {
        $this->depart = $depart;
    }

    /**
     * @return mixed
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * @param mixed $arrivee
     */
    public function setArrivee($arrivee): void
    {
        $this->arrivee = $arrivee;
    }


}