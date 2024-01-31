<?php

namespace App\DataFixtures;

use App\Entity\SousCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

;

class SousCategoryFixtures extends Fixture implements DependentFixtureInterface
{
    public const SOUSCATEGORIES = 
    [
        'category_Mobilier' => [
                'Chaises',
                'Tables',
                'Tabourets',
                'Mange debout',
                'Buffet',
                'Bars',
                'Chariots',
                'Décoration exterieur',
                'Fauteuils',
                'Arche de ballon'
            ],
    ];

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        foreach (self::SOUSCATEGORIES as $key => $sousCategoryName) {
            foreach ($sousCategoryName as $name) {
                $sousCategory = new SousCategory();
                $sousCategory->setCategory($this->getReference($key));
                $sousCategory->setName($name);
                $sousCategory->setImage($faker->imageUrl());
                $sousCategory->setDescription($faker->sentence(10));$manager->persist($sousCategory);
                $this->addReference('sousCategory_' . $name, $sousCategory);
            }
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
