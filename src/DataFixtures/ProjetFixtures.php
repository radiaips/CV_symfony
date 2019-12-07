<?php

namespace App\DataFixtures;
use App\Entity\Projets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $projets = new Projets();
            $projets->setNom('projet ');
            $projets->setDescription('product ');
            $projets->setLien('lihlh');
            $manager->persist($projets);
        }

        $manager->flush();
    }
}
