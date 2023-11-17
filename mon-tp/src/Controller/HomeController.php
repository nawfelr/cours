<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\ProductController;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface; // Import de PaginatorInterface
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $ProductRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // PAGINATOR ---------------------------------------

        $pagination = $paginator->paginate(
            $ProductRepository->filter(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
        );

        // PAGINATOR ---------------------------------------


        return $this->render('home/index.html.twig', [
            'products' => $pagination,

        ]);
    }
}
