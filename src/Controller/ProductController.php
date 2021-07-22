<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;

class ProductController extends AbstractController
{

           /**
          * @Route("/", name="homepage")
          */
          public function index()
          {
            return $this->render('index.html.twig');
          }


         /**
          * @Route("/products", name="products")
          */
          public function products()
          {
            
            $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

            return $this->render('products.html.twig', [
              'products' => $products
            ]);

          }


         /**
          * @Route("/cart", name="cart")
          */
          public function cart()
          {
            return $this->render('cart.html.twig');
          }

}