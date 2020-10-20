<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class Dossier
 *
 * @ORM\Table(name="VDossier")
 * @ORM\Entity()
 *
 */

class Dossier
{
/**
 * @ORM\Id()
* @ORM\Column(name="idDossier",type="integer")
*/
    private $idDossier;

/**
 * @ManyToOne(targetEntity="App\Entity\Passager", fetch="EAGER")
 * @JoinColumn(name="idVoyageur", referencedColumnName="id_voyageur")
*/
    private $idVoyageur;


/**
 * @ManyToOne(targetEntity="App\Entity\Voyage", fetch="EAGER")
 * @JoinColumn(name="idVoyage", referencedColumnName="idVoyage")
 */
    private $idVoyage;

/**
 * @ORM\Column(name="date",type="string")
 */
    private $date;

/**
 * @ORM\Column(name="effectuee",type="boolean")
 */
    private $effectuee;

    /**
     * @return mixed
     */
    public function getIdDossier()
    {
        return $this->idDossier;
    }

    /**
     * @param mixed $idDossier
     */
    public function setIdDossier($idDossier): void
    {
        $this->idDossier = $idDossier;
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

    /**
     * @return mixed
     */
    public function getEffectuee()
    {
        return $this->effectuee;
    }

    /**
     * @param mixed $effectuee
     */
    public function setEffectuee($effectuee): void
    {
        $this->effectuee = $effectuee;
    }



}