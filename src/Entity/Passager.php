<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Passager
 *
 * @ORM\Entity()
 * @ORM\Table(name="Voyageur")
 * @package App\Entity
 */
class Passager
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $id_passager;

    /**
     * @ORM\Column(name="nom",type="string")
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom",type="string")
     */
    private $prenom;

    /**
     * @return mixed
     */
    public function getIdPassager()
    {
        return $this->id_passager;
    }

    /**
     * @param mixed $id_passager
     */
    public function setIdPassager($id_passager): void
    {
        $this->id_passager = $id_passager;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }




}