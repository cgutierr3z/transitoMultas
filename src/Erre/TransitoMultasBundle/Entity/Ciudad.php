<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="Ciudad")
 * @ORM\Entity
 */
class Ciudad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=45, nullable=false)
     */
    private $ciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCiudad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idciudad;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartamento", referencedColumnName="idDepartamento")
     * })
     */
    private $iddepartamento;



    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Get idciudad
     *
     * @return integer 
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }

    /**
     * Set iddepartamento
     *
     * @param \Erre\TransitoMultasBundle\Entity\Departamento $iddepartamento
     * @return Ciudad
     */
    public function setIddepartamento(\Erre\TransitoMultasBundle\Entity\Departamento $iddepartamento = null)
    {
        $this->iddepartamento = $iddepartamento;
    
        return $this;
    }

    /**
     * Get iddepartamento
     *
     * @return \Erre\TransitoMultasBundle\Entity\Departamento 
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    public function __toString()
    {
        return $this->ciudad;
    }
    
}