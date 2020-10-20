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
     * @ORM\Column(name="id_voyage",type="integer")
     */
private $id_voyage;

    /**
     * @ORM\Column(name="type_transport",type="string")
     */
private $type_transport;

    /**
     * @ORM\Column(name="id_transport",type="string")
     */
private $id_transport;

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
        return $this->id_voyage;
    }

    /**
     * @param mixed $id_voyage
     */
    public function setIdVoyage($id_voyage): void
    {
        $this->id_voyage = $id_voyage;
    }

    /**
     * @return mixed
     */
    public function getTypeTransport()
    {
        return $this->type_transport;
    }

    /**
     * @param mixed $type_transport
     */
    public function setTypeTransport($type_transport): void
    {
        $this->type_transport = $type_transport;
    }

    /**
     * @return mixed
     */
    public function getIdTransport()
    {
        return $this->id_transport;
    }

    /**
     * @param mixed $id_transport
     */
    public function setIdTransport($id_transport): void
    {
        $this->id_transport = $id_transport;
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