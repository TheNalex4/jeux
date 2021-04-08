<?php

namespace App\Controller\Admin;

use App\Entity\Stats;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use phpDocumentor\Reflection\Types\Integer;

class StatsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stats::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id'),
            IntegerField::new('victoires'),
            IntegerField::new('defaites'),
            IntegerField::new('parties'),
            IntegerField::new('partie_en_cour'),
            IntegerField::new('partie_termine'),


        ];
    }

}
