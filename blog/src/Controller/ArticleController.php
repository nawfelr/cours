<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Entity\Commentaires;
use App\Form\CommentairesType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentairesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // PAGINATOR ---------------------------------------

        $pagination = $paginator->paginate(
            $articleRepository->filter(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            4 /*limit per page*/
        );

        // PAGINATOR ---------------------------------------


        return $this->render('article/index.html.twig', [
            'articles' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            // recuperation du user connecté
            $article->setAuteur($this->getUser());

            $entityManager->persist($article);
            $entityManager->flush();

            //DEBUT MESSAGE FLASH

            $this->addFlash('success', 'Votre article a bien été crée');

            // FIN MESSAGE FLASH

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }
        $this->addFlash('danger', 'Votre article n\'a pas été crée');
        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['POST', 'GET'])]
    public function show(Article $article, Request $request, EntityManagerInterface $entityManager, CommentairesRepository $commentairesRepository): Response
    {

        /*
        Ajout de la section commentaire
         */

        $commentaire = new Commentaires();
        $form = $this->createForm(CommentairesType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire->setArticle($article);
            $commentaire->setUser($this->getUser());
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_article_show', ['id' => $article->getId()]);
        }

        /*
        Ajout de la section commentaire
         */
        $commentaires = $entityManager->getRepository(Commentaires::class);

        return $this->render('article/show.html.twig', [
            'article' => $article,
            'form' => $form,
            'commentaires' => $commentaires->findBy(['article' => $article]),
        ]);

        return $this->render(
            'commentaires/index.html.twig',
            [
                'commentaires' => $commentairesRepository->findAll(),
            ]
        );
    }



    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        // Access controle avec voter
        $this->denyAccessUnlessGranted('EDIT', $article);
        // fin access control
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
