<?php


namespace App\Entity;

/**
 * Class Passager
 * @package App\Entity
 */
class Passager
{
    /**
     * Id_passager
     */
    private $id_passager;

    /**
     * Nom_passager
     */
    private $nom;

    /**
     * Prenom_passager
     */
    private $prenom;

    /**
     * Email_passager
     */
    private $email_passager;

    /**
     * Tel_passager
     */
    private $tel_passager;

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

    /**
     * @return mixed
     */
    public function getEmailPassager()
    {
        return $this->email_passager;
    }

    /**
     * @param mixed $email_passager
     */
    public function setEmailPassager($email_passager): void
    {
        $this->email_passager = $email_passager;
    }

    /**
     * @return mixed
     */
    public function getTelPassager()
    {
        return $this->tel_passager;
    }

    /**
     * @param mixed $tel_passager
     */
    public function setTelPassager($tel_passager): void
    {
        $this->tel_passager = $tel_passager;
    }

}