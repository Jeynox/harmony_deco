<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = 
    [
        'Art de la table',
        'Mobilier',
        'Nappes',
        'Décoration',
        'Matériel de cuisine',
        'Matériel audio'
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        $manager->flush();
    }
}
