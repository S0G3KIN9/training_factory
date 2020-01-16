<?php


namespace App\Controller;


use App\Form\UserRegistrationFormType;
use App\Security\LoginFormAuthenticator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class BezoekerController extends AbstractController

{
    /**
     * @Route("/bezoeker/home", name="homepage")
     */
public function showHomeAction(){

    return $this->render('bezoeker/home.html.twig');

}



}




