<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infraccion
 *
 * @ORM\Table(name="Infraccion")
 * @ORM\Entity
 */
class Infraccion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaInfraccion", type="date", nullable=false)
     */
    private $fechainfraccion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugarInfraccion", type="string", length=45, nullable=false)
     */
    private $lugarinfraccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="importeInfraccion", type="integer", nullable=false)
     */
    private $importeinfraccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="articuloInfraccion", type="integer", nullable=false)
     */
    private $articuloinfraccion;

    /**
     * @var string
     *
     * @ORM\Column(name="carreteraInfraccion", type="string", length=45, nullable=false)
     */
    private $carreterainfraccion;

    /**
     * @var string
     *
     * @ORM\Column(name="kilometroInfraccion", type="string", length=45, nullable=false)
     */
    private $kilometroinfraccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroExpediente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroexpediente;

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
     * @var \Erre\TransitoMultasBundle\Entity\Agente
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Agente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="noRegistro", referencedColumnName="noRegistro")
     * })
     */
    private $noregistro;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Vehiculo
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Vehiculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVehiculo", referencedColumnName="idVehiculo")
     * })
     */
    private $idvehiculo;

    /**
     * @var \Erre\TransitoMultasBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="Erre\TransitoMultasBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cedulaPersona", referencedColumnName="cedulaPersona")
     * })
     */
    private $cedulapersona;



    /**
     * Set fechainfraccion
     *
     * @param \DateTime $fechainfraccion
     * @return Infraccion
     */
    public function setFechainfraccion($fechainfraccion)
    {
        $this->fechainfraccion = $fechainfraccion;
    
        return $this;
    }

    /**
     * Get fechainfraccion
     *
     * @return \DateTime 
     */
    public function getFechainfraccion()
    {
        return $this->fechainfraccion;
    }

    /**
     * Set lugarinfraccion
     *
     * @param string $lugarinfraccion
     * @return Infraccion
     */
    public function setLugarinfraccion($lugarinfraccion)
    {
        $this->lugarinfraccion = $lugarinfraccion;
    
        return $this;
    }

    /**
     * Get lugarinfraccion
     *
     * @return string 
     */
    public function getLugarinfraccion()
    {
        return $this->lugarinfraccion;
    }

    /**
     * Set importeinfraccion
     *
     * @param integer $importeinfraccion
     * @return Infraccion
     */
    public function setImporteinfraccion($importeinfraccion)
    {
        $this->importeinfraccion = $importeinfraccion;
    
        return $this;
    }

    /**
     * Get importeinfraccion
     *
     * @return integer 
     */
    public function getImporteinfraccion()
    {
        return $this->importeinfraccion;
    }

    /**
     * Set articuloinfraccion
     *
     * @param integer $articuloinfraccion
     * @return Infraccion
     */
    public function setArticuloinfraccion($articuloinfraccion)
    {
        $this->articuloinfraccion = $articuloinfraccion;
    
        return $this;
    }

    /**
     * Get articuloinfraccion
     *
     * @return integer 
     */
    public function getArticuloinfraccion()
    {
        return $this->articuloinfraccion;
    }

    /**
     * Set carreterainfraccion
     *
     * @param string $carreterainfraccion
     * @return Infraccion
     */
    public function setCarreterainfraccion($carreterainfraccion)
    {
        $this->carreterainfraccion = $carreterainfraccion;
    
        return $this;
    }

    /**
     * Get carreterainfraccion
     *
     * @return string 
     */
    public function getCarreterainfraccion()
    {
        return $this->carreterainfraccion;
    }

    /**
     * Set kilometroinfraccion
     *
     * @param string $kilometroinfraccion
     * @return Infraccion
     */
    public function setKilometroinfraccion($kilometroinfraccion)
    {
        $this->kilometroinfraccion = $kilometroinfraccion;
    
        return $this;
    }

    /**
     * Get kilometroinfraccion
     *
     * @return string 
     */
    public function getKilometroinfraccion()
    {
        return $this->kilometroinfraccion;
    }

    /**
     * Get numeroexpediente
     *
     * @return integer 
     */
    public function getNumeroexpediente()
    {
        return $this->numeroexpediente;
    }

    /**
     * Set iddireccion
     *
     * @param \Erre\TransitoMultasBundle\Entity\Direccion $iddireccion
     * @return Infraccion
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
     * Set noregistro
     *
     * @param \Erre\TransitoMultasBundle\Entity\Agente $noregistro
     * @return Infraccion
     */
    public function setNoregistro(\Erre\TransitoMultasBundle\Entity\Agente $noregistro = null)
    {
        $this->noregistro = $noregistro;
    
        return $this;
    }

    /**
     * Get noregistro
     *
     * @return \Erre\TransitoMultasBundle\Entity\Agente 
     */
    public function getNoregistro()
    {
        return $this->noregistro;
    }

    /**
     * Set idvehiculo
     *
     * @param \Erre\TransitoMultasBundle\Entity\Vehiculo $idvehiculo
     * @return Infraccion
     */
    public function setIdvehiculo(\Erre\TransitoMultasBundle\Entity\Vehiculo $idvehiculo = null)
    {
        $this->idvehiculo = $idvehiculo;
    
        return $this;
    }

    /**
     * Get idvehiculo
     *
     * @return \Erre\TransitoMultasBundle\Entity\Vehiculo 
     */
    public function getIdvehiculo()
    {
        return $this->idvehiculo;
    }

    /**
     * Set cedulapersona
     *
     * @param \Erre\TransitoMultasBundle\Entity\Persona $cedulapersona
     * @return Infraccion
     */
    public function setCedulapersona(\Erre\TransitoMultasBundle\Entity\Persona $cedulapersona = null)
    {
        $this->cedulapersona = $cedulapersona;
    
        return $this;
    }

    /**
     * Get cedulapersona
     *
     * @return \Erre\TransitoMultasBundle\Entity\Persona 
     */
    public function getCedulapersona()
    {
        return $this->cedulapersona;
    }
}