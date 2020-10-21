<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class NonPresentTrain
 * @ORM\Table(name="NonPresentTrain")
 * @ORM\Entity()
 */
class NonPresentTrain
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_non_present",type="integer")
     */
    private $idNonPresent;

    /**
     * @ORM\Column(name="id_dossier",type="integer")
     */
    private $idDossier;

    /**
     * @return mixed
     */
    public function getIdNonPresent()
    {
        return $this->idNonPresent;
    }

    /**
     * @param mixed $idNonPresent
     */
    public function setIdNonPresent($idNonPresent): void
    {
        $this->idNonPresent = $idNonPresent;
    }

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


}