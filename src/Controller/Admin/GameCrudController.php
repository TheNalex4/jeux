<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use phpDocumentor\Reflection\Types\Integer;
use App\Entity\User;
use App\Entity\Game;

class GameCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Game::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('User1Id'),
            IdField::new('User2Id'),

            IntegerField::new('id'),
            DateTimeField::new('created'),
            DateTimeField::new('ended'),
        ];
    }

}
