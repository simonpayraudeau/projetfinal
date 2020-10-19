<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class Dossier
 * @package App\Entity
 * @ApiResource()
 *
 */

class Dossier
{
/**
* @ORM\Column(name="idPassager",type="integer")
*/
    private $passager;

/**
* @ORM\Column(name="idVoyage",type="string")
*/
    private $voyage;

/**
 * @ORM\Column(name="effectue",type="boolean")
 */
    private $effectue;

    /**
     * @return mixed
     */
    public function getPassager()
    {
        return $this->passager;
    }

    /**
     * @param mixed $passager
     */
    public function setPassager($passager): void
    {
        $this->passager = $passager;
    }

    /**
     * @return mixed
     */
    public function getVoyage()
    {
        return $this->voyage;
    }

    /**
     * @param mixed $voyage
     */
    public function setVoyage($voyage): void
    {
        $this->voyage = $voyage;
    }

    /**
     * @return mixed
     */
    public function getEffectue()
    {
        return $this->effectue;
    }

    /**
     * @param mixed $effectue
     */
    public function setEffectue($effectue): void
    {
        $this->effectue = $effectue;
    }

}