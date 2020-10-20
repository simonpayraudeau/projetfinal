<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Class Passager
 * @ORM\Table(name="Passager")
 * @ORM\Entity()
 */
class Passager
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $idPassager;

    /**
     * @ORM\Column(name="nom",type="string")
     */
    private $nom;

    /**
     * @ORM\Column(name="prenom",type="string")
     */
    private $prenom;

    /**
     * @ORM\Column(name="telephone",type="string")
     */
    private $telephone;

    /**
     * @ORM\Column(name="mail",type="string")
     */
    private $mail;

    /**
     * @return mixed
     */
    public function getIdPassager()
    {
        return $this->idPassager;
    }

    /**
     * @param mixed $idPassager
     */
    public function setIdPassager($idPassager): void
    {
        $this->idPassager = $idPassager;
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

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }


}