<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    #[Route('/sign-up', name: 'sign_up')]
    public function signUpPage(): Response
    {
        return $this->render('sign_up/sign_up.html.twig', [
            'controller_name' => 'SignUpController',
        ]);
    }

}
