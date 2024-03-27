<?php

namespace App\DataFixtures;

use App\Entity\Category2;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class Category2Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Category2();
        $manager->persist($product);

        $manager->flush();
    }
}
