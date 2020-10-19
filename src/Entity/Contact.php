<?php


namespace App\Entity;

/**
 * Class Contact
 *
 * @ORM\Entity()
 * @ORM\Table(name="Contact")
 * @package App\Entity
 */

class Contact
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id_contact",type="integer")
     */
    private $id_contact;

    /**
     * @ORM\Column(name="id_voyageur",type="integer")
     */
    private $id_voyageur;

    /**
     * @ORM\Column(name="methode",type="string")
     */
    private $methode;

    /**
     * @ORM\Column(name="valeur",type="string")
     */
    private $valeur;

    /**
     * @return mixed
     */
    public function getIdContact()
    {
        return $this->id_contact;
    }

    /**
     * @param mixed $id_contact
     */
    public function setIdContact($id_contact): void
    {
        $this->id_contact = $id_contact;
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
    public function getMethode()
    {
        return $this->methode;
    }

    /**
     * @param mixed $methode
     */
    public function setMethode($methode): void
    {
        $this->methode = $methode;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur): void
    {
        $this->valeur = $valeur;
    }




}