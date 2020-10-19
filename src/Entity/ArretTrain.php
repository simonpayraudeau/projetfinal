<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class ArretTrain
 * @package App\Entity
 * @ApiResource()
 *
 */
class ArretTrain
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_arret",type="integer")
     */
    private $id_arret;

    /**
     * @ORM\Column(name="id_train",type="integer")
     */
    private $id_train;

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
        return $this->id_arret;
    }

    /**
     * @param mixed $id_arret
     */
    public function setIdArret($id_arret): void
    {
        $this->id_arret = $id_arret;
    }

    /**
     * @return mixed
     */
    public function getIdTrain()
    {
        return $this->id_train;
    }

    /**
     * @param mixed $id_train
     */
    public function setIdTrain($id_train): void
    {
        $this->id_train = $id_train;
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