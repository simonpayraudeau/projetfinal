<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Voyage
 * @ORM\Table(name="Voyage")
 * @ORM\Entity()
 */
class Voyage
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="idVoyage",type="integer")
     */
private $idVoyage;

    /**
     * @ORM\Column(name="typeTransport",type="string")
     */
private $typeTransport;

    /**
     * @ORM\Column(name="idTransport",type="string")
     */
private $idTransport;

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
    public function getTypeTransport()
    {
        return $this->typeTransport;
    }

    /**
     * @param mixed $typeTransport
     */
    public function setTypeTransport($typeTransport): void
    {
        $this->typeTransport = $typeTransport;
    }

    /**
     * @return mixed
     */
    public function getIdTransport()
    {
        return $this->idTransport;
    }

    /**
     * @param mixed $idTransport
     */
    public function setIdTransport($idTransport): void
    {
        $this->idTransport = $idTransport;
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