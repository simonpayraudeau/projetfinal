<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class NonPartantAvion
 * @ORM\Table(name="NonPartantAvion")
 * @ORM\Entity()
 */
class NonPartantAvion
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_non_partant",type="integer")
     */
    private $idNonPartant;

    /**
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $idVoyageur;

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
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * @param mixed $idContact
     */
    public function setIdContact($idContact): void
    {
        $this->idContact = $idContact;
    }

    /**
     * @return mixed
     */
    public function getIdVoyageur()
    {
        return $this->idVoyageur;
    }

    /**
     * @param mixed $idVoyageur
     */
    public function setIdVoyageur($idVoyageur): void
    {
        $this->idVoyageur = $idVoyageur;
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