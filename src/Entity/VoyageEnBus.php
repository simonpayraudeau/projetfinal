<?php


namespace App\Entity;

/**
 * Class VoyageEnBus
 *
 * @ORM\Entity()
 * @ORM\Table(name="VoyageEnBus")
 * @package App\Entity
 */

class VoyageEnBus
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_bus",type="integer")
     */
    private $id_bus;

    /**
     * @ORM\Column(name="code_bus",type="string")
     */
    private $code_bus;

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
    public function getIdBus()
    {
        return $this->id_bus;
    }

    /**
     * @param mixed $id_bus
     */
    public function setIdBus($id_bus): void
    {
        $this->id_bus = $id_bus;
    }

    /**
     * @return mixed
     */
    public function getCodeBus()
    {
        return $this->code_bus;
    }

    /**
     * @param mixed $code_bus
     */
    public function setCodeBus($code_bus): void
    {
        $this->code_bus = $code_bus;
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