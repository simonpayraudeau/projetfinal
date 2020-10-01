<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class Voyage
 * @package App\Entity
 *
 */


class Voyage
{

    /**
     * @var
     */
private $idVoyage;

private $idPassager;

private $dateVoyage;

private $typeVoyage;

private $numeroTransport;

private $lieuDepart;

private $lieuArrive;

private $effectue;

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
    public function getIdPassager()
    {
        return $this->idPassager;
    }

    /**
     * @param mixed $idPassager
     */
    public function setIdPassager($idPassager): void
    {
        $this->idPassager = $idPassager;
    }

    /**
     * @return mixed
     */
    public function getDateVoyage()
    {
        return $this->dateVoyage;
    }

    /**
     * @param mixed $dateVoyage
     */
    public function setDateVoyage($dateVoyage): void
    {
        $this->dateVoyage = $dateVoyage;
    }

    /**
     * @return mixed
     */
    public function getTypeVoyage()
    {
        return $this->typeVoyage;
    }

    /**
     * @param mixed $typeVoyage
     */
    public function setTypeVoyage($typeVoyage): void
    {
        $this->typeVoyage = $typeVoyage;
    }

    /**
     * @return mixed
     */
    public function getNumeroTransport()
    {
        return $this->numeroTransport;
    }

    /**
     * @param mixed $numeroTransport
     */
    public function setNumeroTransport($numeroTransport): void
    {
        $this->numeroTransport = $numeroTransport;
    }

    /**
     * @return mixed
     */
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * @param mixed $lieuDepart
     */
    public function setLieuDepart($lieuDepart): void
    {
        $this->lieuDepart = $lieuDepart;
    }

    /**
     * @return mixed
     */
    public function getLieuArrive()
    {
        return $this->lieuArrive;
    }

    /**
     * @param mixed $lieuArrive
     */
    public function setLieuArrive($lieuArrive): void
    {
        $this->lieuArrive = $lieuArrive;
    }

    /**
     * @return mixed
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * @param mixed $effectue
     */
    public function setEffectue($effectue): void
    {
        $this->effectue = $effectue;
    }




}