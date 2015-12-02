<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="Direccion")
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=45, nullable=false)
     */
    private $calle;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="idDireccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddireccion;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Ciudad
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Ciudad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCiudad", referencedColumnName="idCiudad")
     * })
     */
    private $idciudad;



    /**
     * Set calle
     *
     * @param string $calle
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Direccion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Get iddireccion
     *
     * @return integer 
     */
    public function getIddireccion()
    {
        return $this->iddireccion;
    }

    /**
     * Set idciudad
     *
     * @param \Erre\TransitoMultasBundle\Entity\Ciudad $idciudad
     * @return Direccion
     */
    public function setIdciudad(\Erre\TransitoMultasBundle\Entity\Ciudad $idciudad = null)
    {
        $this->idciudad = $idciudad;
    
        return $this;
    }

    /**
     * Get idciudad
     *
     * @return \Erre\TransitoMultasBundle\Entity\Ciudad 
     */
    public function getIdciudad()
    {
        return $this->idciudad;
    }

    public function __toString()
    {
        return $this->calle;
    }
}