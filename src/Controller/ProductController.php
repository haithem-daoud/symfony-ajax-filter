<?php

namespace App\Controller;

use App\Classes\Search;
use App\Entity\Product;
use App\Form\SearchType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/', name: 'product')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {

        $em = $doctrine->getManager();

        $search = new Search();
        $form  = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // Search by search criteria
            $products = $em->getRepository(Product::class)->findWithSearch($search);
        } else {
            // Collect all products
            $products = $em->getRepository(Product::class)->findAll();
        }

        // Define all products count
        $count = count($products);

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'count' => $count,
            'form' => $form->createView()
        ]);
    }
}
