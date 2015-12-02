<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="Persona")
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombrePersona", type="string", length=45, nullable=false)
     */
    private $nombrepersona;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoPersona", type="string", length=45, nullable=false)
     */
    private $apellidopersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNacimientoPersona", type="date", nullable=false)
     */
    private $fechanacimientopersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="cedulaPersona", type="integer")
     * @ORM\Id
     */
    private $cedulapersona;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Direccion
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDireccion", referencedColumnName="idDireccion")
     * })
     */
    private $iddireccion;



    /**
     * Set nombrepersona
     *
     * @param string $nombrepersona
     * @return Persona
     */
    public function setNombrepersona($nombrepersona)
    {
        $this->nombrepersona = $nombrepersona;
    
        return $this;
    }

    /**
     * Get nombrepersona
     *
     * @return string 
     */
    public function getNombrepersona()
    {
        return $this->nombrepersona;
    }

    /**
     * Set apellidopersona
     *
     * @param string $apellidopersona
     * @return Persona
     */
    public function setApellidopersona($apellidopersona)
    {
        $this->apellidopersona = $apellidopersona;
    
        return $this;
    }

    /**
     * Get apellidopersona
     *
     * @return string 
     */
    public function getApellidopersona()
    {
        return $this->apellidopersona;
    }

    /**
     * Set fechanacimientopersona
     *
     * @param \DateTime $fechanacimientopersona
     * @return Persona
     */
    public function setFechanacimientopersona($fechanacimientopersona)
    {
        $this->fechanacimientopersona = $fechanacimientopersona;
    
        return $this;
    }

    /**
     * Get fechanacimientopersona
     *
     * @return \DateTime 
     */
    public function getFechanacimientopersona()
    {
        return $this->fechanacimientopersona;
    }

    /**
     * Get cedulapersona
     *
     * @return integer 
     */
    public function getCedulapersona()
    {
        return $this->cedulapersona;
    }

    /**
     * Set iddireccion
     *
     * @param \Erre\TransitoMultasBundle\Entity\Direccion $iddireccion
     * @return Persona
     */
    public function setIddireccion(\Erre\TransitoMultasBundle\Entity\Direccion $iddireccion = null)
    {
        $this->iddireccion = $iddireccion;
    
        return $this;
    }

    /**
     * Get iddireccion
     *
     * @return \Erre\TransitoMultasBundle\Entity\Direccion 
     */
    public function getIddireccion()
    {
        return $this->iddireccion;
    }
    /**
     * @var string
     */
    private $nocedula;


    /**
     * Set nocedula
     *
     * @param string $nocedula
     * @return Persona
     */
    public function setNocedula($nocedula)
    {
        $this->nocedula = $nocedula;
    
        return $this;
    }

    /**
     * Get nocedula
     *
     * @return string 
     */
    public function getNocedula()
    {
        return $this->nocedula;
    }

    public function __toString()
    {
        $rs = $this->nocedula."-".$this->nombrepersona." ".$this->apellidopersona;
        return $rs;
    }
}