<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class VoyageEnTrain
 * @ORM\Table(name="VoyageEnTrain")
 * @ORM\Entity()
 */
class VoyageEnTrain
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_train",type="integer")
     */
    private $idTrain;

    /**
     * @ORM\Column(name="code_train",type="string")
     */
    private $code_train;

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
    public function getIdTrain()
    {
        return $this->idTrain;
    }

    /**
     * @param mixed $idTrain
     */
    public function setIdTrain($idTrain): void
    {
        $this->idTrain = $idTrain;
    }

    /**
     * @return mixed
     */
    public function getCodeTrain()
    {
        return $this->code_train;
    }

    /**
     * @param mixed $code_train
     */
    public function setCodeTrain($code_train): void
    {
        $this->code_train = $code_train;
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