<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AbstractAdapter;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{


    /**
     * @Route("/home/")
     */
    public function show(){
        return $this->render('article/show.html.twig');
    }

    /**
     * @Route("/tweede/")
     */
    public function show2(){
        return $this->render('base.html.twig');
    }

    /**
     * @Route("bezoeker/regelpagina/", name="regels")
     */
    public function show3(){
        return $this->render('bezoeker/regels.html.twig');
    }

    /**
     * @Route("bezoeker/contactpagina/", name="contact")
     */
    public function show4(){
        return $this->render('bezoeker/contact.html.twig');
    }

    /**
     * @Route("bezoeker/aanbodpagina/", name="les")
     */
    public function show5(){
        return $this->render('bezoeker/aanbod.html.twig');
    }

}