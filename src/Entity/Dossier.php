<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class Dossier
 * @package App\Entity
 * @ORM\Table(name="Dossier")
 * @ApiResource()
 *
 */

    class Dossier
    {
    /**
    * @ORM\Column(name="id_dossier",type="integer")
    */
        private $id_dossier;

    /**
    * @ORM\Column(name="id_voyageur",type="integer")
    */
        private $id_voyageur;

    /**
     * @ORM\Column(name="methode",type="string")
     */
        private $methode;

    /**
     * @ORM\Column(name="id_voyage",type="integer")
     */
    private $id_voyage;

    /**
     * @ORM\Column(name="date",type="string")
     */
    private $date;

    /**
     * @ORM\Column(name="depart",type="string")
     */
    private $depart;

    /**
    * @ORM\Column(name="arrivee",type="string")
    */
        private $arrivee;

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
        public function getIdVoyage()
        {
            return $this->id_voyage;
        }

        /**
         * @param mixed $id_voyage
         */
        public function setIdVoyage($id_voyage): void
        {
            $this->id_voyage = $id_voyage;
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
        public function getDepart()
        {
            return $this->depart;
        }

        /**
         * @param mixed $depart
         */
        public function setDepart($depart): void
        {
            $this->depart = $depart;
        }

        /**
         * @return mixed
         */
        public function getArrivee()
        {
            return $this->arrivee;
        }

        /**
         * @param mixed $arrivee
         */
        public function setArrivee($arrivee): void
        {
            $this->arrivee = $arrivee;
        }


}