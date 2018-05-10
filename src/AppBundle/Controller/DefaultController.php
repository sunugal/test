<?php

namespace AppBundle\Controller\;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/samb", name="samb")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('meissa/inde.html.twig');
    }

    /**
     * @Route("/mbaye", name="mbaye")
     */
    public function diopAction(Request $request)
    {
        // replace this example code with whatever you need

        return $this->render('meissa/diop.html.twig',  array('produits' =>$this->getProduit()));
    }
s
    private function getProduit(){
        $produits=["ordianteur","imprimante","souris"];
        return $produits;
    }
}
