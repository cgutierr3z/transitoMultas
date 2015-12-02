<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="Departamento")
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Departamento", type="string", length=45, nullable=false)
     */
    private $departamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDepartamento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddepartamento;



    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Departamento
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Get iddepartamento
     *
     * @return integer 
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    public function __toString()
    {
        return $this->departamento;
    }
}