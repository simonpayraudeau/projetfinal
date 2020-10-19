<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class NonPartantAvion
 * @package App\Entity
 * @ApiResource()
 *
 */

class NonPartantAvion
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_non_partant",type="integer")
     */
    private $id_non_partant;

    /**
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $id_voyageur;

    /**
     * @ORM\Column(name="code_avion",type="string")
     */
    private $code_avion;

    /**
     * @ORM\Column(name="date",type="string")
     */
    private $date;

    /**
     * @return mixed
     */
    public function getIdNonPartant()
    {
        return $this->id_non_partant;
    }

    /**
     * @param mixed $id_non_partant
     */
    public function setIdNonPartant($id_non_partant): void
    {
        $this->id_non_partant = $id_non_partant;
    }

    /**
     * @return mixed
     */
    public function getIdVoyageur()
    {
        return $this->id_voyageur;
    }

    /**
     * @param mixed $id_voyageur
     */
    public function setIdVoyageur($id_voyageur): void
    {
        $this->id_voyageur = $id_voyageur;
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

}