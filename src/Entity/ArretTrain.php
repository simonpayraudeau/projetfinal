<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class ArretTrain
 * @ORM\Table(name="ArretTrain")
 * @ORM\Entity()
 */
class ArretTrain
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_arret",type="integer")
     */
    private $idArret;

    /**
     * @ORM\Column(name="id_train",type="integer")
     */
    private $idTrain;

    /**
     * @ORM\Column(name="position",type="integer")
     */
    private $position;

    /**
     * @ORM\Column(name="ville",type="string")
     */
    private $ville;

    /**
     * @return mixed
     */
    public function getIdArret()
    {
        return $this->idArret;
    }

    /**
     * @param mixed $idArret
     */
    public function setIdArret($idArret): void
    {
        $this->idArret = $idArret;
    }

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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }


}