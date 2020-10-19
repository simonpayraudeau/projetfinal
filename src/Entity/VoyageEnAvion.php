<?php


namespace App\Entity;

/**
 * Class VoyageEnAvion
 *
 * @ORM\Entity()
 * @ORM\Table(name="VoyageEnAvion")
 * @package App\Entity
 */


class VoyageEnAvion
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_avion",type="integer")
     */
    private $id_avion;

    /**
     * @ORM\Column(name="code_avion",type="string")
     */
    private $code_avion;

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
    public function getIdAvion()
    {
        return $this->id_avion;
    }

    /**
     * @param mixed $id_avion
     */
    public function setIdAvion($id_avion): void
    {
        $this->id_avion = $id_avion;
    }

    /**
     * @return mixed
     */
    public function getCodeAvion()
    {
        return $this->code_avion;
    }

    /**
     * @param mixed $code_avion
     */
    public function setCodeAvion($code_avion): void
    {
        $this->code_avion = $code_avion;
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