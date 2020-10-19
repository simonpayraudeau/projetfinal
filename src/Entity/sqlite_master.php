<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;

/**
 * Class sqlite_master
 * @package App\Entity
 * @ApiResource()
 *
 */
class sqlite_master
{

    /**
     * @ORM\Column(name="type",type="string")
     */
    private $type;

    /**
     * @ORM\Column(name="name",type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="tbl_name",type="string")
     */
    private $tbl_name;

    /**
     * @ORM\Column(name="rootpage",type="integer")
     */
    private $rootpage;

    /**
     * @ORM\Column(name="sql",type="sql")
     */
    private $sql;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTblName()
    {
        return $this->tbl_name;
    }

    /**
     * @param mixed $tbl_name
     */
    public function setTblName($tbl_name): void
    {
        $this->tbl_name = $tbl_name;
    }

    /**
     * @return mixed
     */
    public function getRootpage()
    {
        return $this->rootpage;
    }

    /**
     * @param mixed $rootpage
     */
    public function setRootpage($rootpage): void
    {
        $this->rootpage = $rootpage;
    }

    /**
     * @return mixed
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @param mixed $sql
     */
    public function setSql($sql): void
    {
        $this->sql = $sql;
    }


}