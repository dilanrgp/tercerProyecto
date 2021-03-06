<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CGR\RRHHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="producto")
 * @UniqueEntity(
 *     fields={"categoria"},
 *     errorPath="categoria",
 *     message="La categoria ya fue agregada"
 * )
 */

class Producto
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precio;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;
    
    /**
     * One Product has One Categoria.
     * @ORM\OneToOne(targetEntity="Categoria")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    
    private $categoria;

    public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getPrecio(){
        return $this->precio;
    }
    
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    

    /**
     * Set categoria
     *
     * @param \CGR\RRHHBundle\Entity\Categoria $categoria
     *
     * @return Producto
     */
    public function setCategoria(\CGR\RRHHBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \CGR\RRHHBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
