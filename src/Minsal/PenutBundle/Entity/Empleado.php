<?php

namespace Minsal\PenutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado", uniqueConstraints={@ORM\UniqueConstraint(name="idx_empleado_id", columns={"id"})}, indexes={@ORM\Index(name="IDX_D9D9BF526325E299", columns={"id_departamento"})})
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_empleado", type="string", length=30, nullable=false)
     */
    private $nombreEmpleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="dedicacion", type="string", length=30, nullable=true)
     */
    private $dedicacion;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreEmpleado
     *
     * @param string $nombreEmpleado
     * @return Empleado
     */
    public function setNombreEmpleado($nombreEmpleado)
    {
        $this->nombreEmpleado = $nombreEmpleado;

        return $this;
    }

    /**
     * Get nombreEmpleado
     *
     * @return string 
     */
    public function getNombreEmpleado()
    {
        return $this->nombreEmpleado;
    }

    /**
     * Set categoria
     *
     * @param integer $categoria
     * @return Empleado
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set dedicacion
     *
     * @param string $dedicacion
     * @return Empleado
     */
    public function setDedicacion($dedicacion)
    {
        $this->dedicacion = $dedicacion;

        return $this;
    }

    /**
     * Get dedicacion
     *
     * @return string 
     */
    public function getDedicacion()
    {
        return $this->dedicacion;
    }

    /**
     * Set idDepartamento
     *
     * @param \Minsal\PenutBundle\Entity\Departamento $idDepartamento
     * @return Empleado
     */
    public function setIdDepartamento(\Minsal\PenutBundle\Entity\Departamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Minsal\PenutBundle\Entity\Departamento 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}
