<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marca
 *
 * @ORM\Table(name="Marca")
 * @ORM\Entity
 */
class Marca
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigoMarca", type="string", length=45, nullable=false)
     */
    private $codigomarca;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreMarca", type="string", length=45, nullable=false)
     */
    private $nombremarca;

    /**
     * @var integer
     *
     * @ORM\Column(name="idMarca", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmarca;

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
     * Set codigomarca
     *
     * @param string $codigomarca
     * @return Marca
     */
    public function setCodigomarca($codigomarca)
    {
        $this->codigomarca = $codigomarca;
    
        return $this;
    }

    /**
     * Get codigomarca
     *
     * @return string 
     */
    public function getCodigomarca()
    {
        return $this->codigomarca;
    }

    /**
     * Set nombremarca
     *
     * @param string $nombremarca
     * @return Marca
     */
    public function setNombremarca($nombremarca)
    {
        $this->nombremarca = $nombremarca;
    
        return $this;
    }

    /**
     * Get nombremarca
     *
     * @return string 
     */
    public function getNombremarca()
    {
        return $this->nombremarca;
    }

    /**
     * Get idmarca
     *
     * @return integer 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set iddireccion
     *
     * @param \Erre\TransitoMultasBundle\Entity\Direccion $iddireccion
     * @return Marca
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

    public function __toString()
    {
        return $this->nombremarca;
    }
}