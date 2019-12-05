<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BezoekerController extends AbstractController

{
    /**
     * @Route("/bezoeker/home")
     */
public function showHomeAction(){

    return $this->render('bezoeker/home.html.twig');

}
}