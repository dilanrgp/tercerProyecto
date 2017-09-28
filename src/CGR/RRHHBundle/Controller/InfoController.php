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
    }
    
    public function pagina_estaticaAction($pagina)
    {
        return $this->render('RRHHBundle:Info:'.$pagina.".html.twig");
    }
    
    
}
