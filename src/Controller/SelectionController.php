<?php

namespace App\Controller;

use App\Repository\DishesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SelectionController extends AbstractController
{
    #[Route('/selection', name: 'selection')]
    public function selection(DishesRepository $respository): Response
    {
        $dishes = $respository->findAll();
        return $this->render('selection/selection.html.twig', [
            'controller_name' => 'SelectionController',
            'dishes' => $dishes,
        ]);
    }
}
