<?php

namespace CGR\RRHHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InfoController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction($name,$lastName,$id)
    {
        var_dump($name); echo "<br>";
        var_dump($lastName); echo "<br>";
        var_dump($id); echo "<br>";
        die("Murió el programa");
        
//        return $this->render('RRHHBundle:Default:index.html.twig',
//                array('nombre'=>$name)
//                
//                );
    }
    
    
}
