<?php

namespace App\DataFixtures;

use App\Entity\Projets;
use App\Entity\Hobbies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
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
        for ($i = 0; $i < 5; $i++) {
            $hobbies = new Hobbies();
            $hobbies->setNom('projet ');
            $hobbies->setLien('nn');
            $manager->persist($hobbies);
        }

        $manager->flush();
    }
}
