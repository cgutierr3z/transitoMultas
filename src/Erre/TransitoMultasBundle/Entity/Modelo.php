<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelo
 *
 * @ORM\Table(name="Modelo")
 * @ORM\Entity
 */
class Modelo
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreModelo", type="string", length=45, nullable=false)
     */
    private $nombremodelo;

    /**
     * @var string
     *
     * @ORM\Column(name="potenciaModelo", type="string", length=45, nullable=false)
     */
    private $potenciamodelo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idModelo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodelo;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Marca
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMarca", referencedColumnName="idMarca")
     * })
     */
    private $idmarca;



    /**
     * Set nombremodelo
     *
     * @param string $nombremodelo
     * @return Modelo
     */
    public function setNombremodelo($nombremodelo)
    {
        $this->nombremodelo = $nombremodelo;
    
        return $this;
    }

    /**
     * Get nombremodelo
     *
     * @return string 
     */
    public function getNombremodelo()
    {
        return $this->nombremodelo;
    }

    /**
     * Set potenciamodelo
     *
     * @param string $potenciamodelo
     * @return Modelo
     */
    public function setPotenciamodelo($potenciamodelo)
    {
        $this->potenciamodelo = $potenciamodelo;
    
        return $this;
    }

    /**
     * Get potenciamodelo
     *
     * @return string 
     */
    public function getPotenciamodelo()
    {
        return $this->potenciamodelo;
    }

    /**
     * Get idmodelo
     *
     * @return integer 
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set idmarca
     *
     * @param \Erre\TransitoMultasBundle\Entity\Marca $idmarca
     * @return Modelo
     */
    public function setIdmarca(\Erre\TransitoMultasBundle\Entity\Marca $idmarca = null)
    {
        $this->idmarca = $idmarca;
    
        return $this;
    }

    /**
     * Get idmarca
     *
     * @return \Erre\TransitoMultasBundle\Entity\Marca 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    public function __toString()
    {
        $rs = $this->nombremodelo."-".$this->potenciamodelo." ".$this->idmarca;
        return $rs;
    }
}