<?php

namespace App\Controller\Admin;
use App\Entity\Card;
use App\Entity\Stats;
use App\Entity\User;
use App\Entity\Game;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Pasdequartier');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-home', User::class);
        yield MenuItem::linkToCrud('Statistiques', 'fas fa-clipboard-list', Stats::class);
        yield MenuItem::linkToCrud('Jeux', 'fas fa-gamepad', Game::class);
        yield MenuItem::linkToCrud('Cartes', 'fas fa-puzzle-piece', Card::class);



    }
}
