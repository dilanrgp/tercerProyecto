<?php

namespace CGR\RRHHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/abc")
     */
    public function indexAction($name)
    {
        return $this->render('RRHHBundle:Default:index.html.twig',
                array('nombre'=>$name)
                
                );
    }
    
    public function helpAction($help)
    {
        return $this->render('RRHHBundle:Default:help.html.twig',
                array('ayuda'=>$help)
                
                );
    }
}
