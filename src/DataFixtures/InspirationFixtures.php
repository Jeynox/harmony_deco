<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Inspirations;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class InspirationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 50; $i+=1) {
            $inspiration = new Inspirations();
            $inspiration->setImage($faker->imageUrl());
            $inspiration->setDescription($faker->sentence(15));
            $inspiration->setDate($faker->dateTimeAD());
            $manager->persist($inspiration);

        }
        
        $manager->flush();
    }
}
