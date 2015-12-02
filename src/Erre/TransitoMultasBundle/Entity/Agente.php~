<?php

namespace Erre\TransitoMultasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agente
 *
 * @ORM\Table(name="Agente")
 * @ORM\Entity
 */
class Agente
{
    /**
     * @var string
     *
     * @ORM\Column(name="NombreAgente", type="string", length=45, nullable=false)
     */
    private $nombreagente;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoAgente", type="string", length=45, nullable=false)
     */
    private $apellidoagente;

    /**
     * @var integer
     *
     * @ORM\Column(name="noRegistro", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $noregistro;



    /**
     * Set nombreagente
     *
     * @param string $nombreagente
     * @return Agente
     */
    public function setNombreagente($nombreagente)
    {
        $this->nombreagente = $nombreagente;
    
        return $this;
    }

    /**
     * Get nombreagente
     *
     * @return string 
     */
    public function getNombreagente()
    {
        return $this->nombreagente;
    }

    /**
     * Set apellidoagente
     *
     * @param string $apellidoagente
     * @return Agente
     */
    public function setApellidoagente($apellidoagente)
    {
        $this->apellidoagente = $apellidoagente;
    
        return $this;
    }

    /**
     * Get apellidoagente
     *
     * @return string 
     */
    public function getApellidoagente()
    {
        return $this->apellidoagente;
    }

    /**
     * Get noregistro
     *
     * @return integer 
     */
    public function getNoregistro()
    {
        return $this->noregistro;
    }

    public function __toString()
    {
        $rs = $this->noregistro."-".$this->nombreagente." ".$this->apellidoagente;
        return $rs;
    }
}