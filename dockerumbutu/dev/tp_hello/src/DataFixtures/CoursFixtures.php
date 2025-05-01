<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cours1 = new Cours();
        $cours1->setSemestre(1);
        $cours1->setNom('Mathématique');
        $cours1->setDescription('Cours de mathématiques avancées.');

        // Sauvegarder dans la base de données
        $manager->persist($cours1);

        $cours2 = new Cours();
        $cours2->setSemestre(2);
        $cours2->setNom('Informatique');
        $cours2->setDescription('Cours d’introduction à l’informatique.');

        $manager->persist($cours2);

        // Appliquer toutes les modifications en base de données
        $manager->flush();
    }
}
