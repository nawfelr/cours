<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Commentaires;
use App\Entity\Product;
use App\Entity\Category;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mon Tp');
    }

    public function configureMenuItems(): iterable
    {

        return [
                   MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

                   MenuItem::section('Users'),
                   MenuItem::linkToCrud('Users', 'fa fa-user', User::class),

                   MenuItem::section('Products'),
                   MenuItem::linkToCrud('Products', 'fa fa-newspaper', Product::class),

                   MenuItem::section('Commentaires'),
                   MenuItem::linkToCrud('Commentaires', 'fa fa-comment', Commentaires::class),

                   MenuItem::section('Category'),
                   MenuItem::linkToCrud('Category', 'fa-solid fa-filter', Category::class),
               ];

    }
}
