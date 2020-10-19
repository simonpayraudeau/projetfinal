<?php


namespace App\Entity;

/**
 * Class NonPresentTrain
 *
 * @ORM\Entity()
 * @ORM\Table(name="NonPresentTrain")
 * @package App\Entity
 */

class NonPresentTrain
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id_non_present",type="integer")
     */
    private $id_non_present;

    /**
     * @ORM\Column(name="id_dossier",type="integer")
     */
    private $id_dossier;

    /**
     * @return mixed
     */
    public function getIdNonPresent()
    {
        return $this->id_non_present;
    }

    /**
     * @param mixed $id_non_present
     */
    public function setIdNonPresent($id_non_present): void
    {
        $this->id_non_present = $id_non_present;
    }

    /**
     * @return mixed
     */
    public function getIdDossier()
    {
        return $this->id_dossier;
    }

    /**
     * @param mixed $id_dossier
     */
    public function setIdDossier($id_dossier): void
    {
        $this->id_dossier = $id_dossier;
    }



}