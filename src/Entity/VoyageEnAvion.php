<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class VoyageEnAvion
 * @ORM\Table(name="VoyageEnAvion")
 * @ORM\Entity()
 */
class VoyageEnAvion
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_avion",type="integer")
     */
    private $idAvion;

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
        return $this->idAvion;
    }

    /**
     * @param mixed $idAvion
     */
    public function setIdAvion($idAvion): void
    {
        $this->idAvion = $idAvion;
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