<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
         /**
          * @Route("/")
          */
          public function index()
          {
              $number = 4;
            return $this->render('index.html.twig', [
                'number' => $number,
            ]);
          }


         /**
          * @Route("/cart")
          */
          public function cart()
          {
              $number = 4;
            return $this->render('cart.html.twig', [
                'number' => $number,
            ]);
          }

}