<?php

namespace CGR\RRHHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use CGR\RRHHBundle\Entity\Producto;


class ProductoController extends Controller {

    
    public function newAction() {
        $nombre = "Laptop  HP";
        $precio = "400.12";
        $descripcion = "Máquina portatil";
        
        $producto = new Producto();
        
        $producto->setNombre($nombre);
        $producto->setPrecio($precio);
        $producto->setDescripcion($descripcion);
        
        
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();
        
        var_dump($producto);
        die();
    }
    
    public function productosAllAction() {
               
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('RRHHBundle:Producto')->findAll();
        
        foreach($productos as $prod){
            echo "Nombre: ".$prod->getNombre()."<br>";
            echo "Precio: ".$prod->getPrecio()."<br>";
            echo "Descripcion: ".$prod->getDescripcion()."<br>";
            echo "#########################################<br>";
        }
        
        die();
        
    }
    
    public function productoShowAction($id) {
               
        $em = $this->getDoctrine()->getManager();
        
        $producto = $em->getRepository('RRHHBundle:Producto')
                ->findBy(array('id'=>$id));
                //->findOneByNombre($id);
        
        var_dump($producto);
        die();
        
        
        
    }

    public function productoDeleteAction($id) {
               
        $em = $this->getDoctrine()->getManager();
        
        $producto = $em->getRepository('RRHHBundle:Producto')
                ->findOneById($id);
        
        if (isset($producto)){
            $em->remove($producto);
            $em->flush();
            
            return new Response("El producto $id ha sido borrado exitosamente");
        }else{
           throw $this->createNotFoundException("El producto $id no existe"); 
        }
        
        
        
    }
    
    public function productoEditAction($id,$nombre) {
               
        $em = $this->getDoctrine()->getManager();
        
        $producto = $em->getRepository('RRHHBundle:Producto')
                ->findOneById($id);
        
        $producto->setNombre($nombre);
        
        $em->flush();
        return new Response("El producto $id ha sido actualizado exitosamente");
        
        
        
    }

}
