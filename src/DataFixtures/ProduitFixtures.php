<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
;

class ProduitFixtures extends Fixture implements DependentFixtureInterface
{
    public const PRODUITS = 
    [
        'sousCategory_Chaises' => [
            ['name' => 'Alzar', 'image' => 'chaise_alzar.png'],
            ['name' => 'Convention', 'image' => 'chaise_conventions.png'],
            ['name' => 'Design', 'image' => 'chaise_design.png'],
            ['name' => 'Blanca', 'image' => 'chaise_en_bois_blanc.png'],
            ['name' => 'Ronda', 'image' => 'chaise_en_rond.png'],
            ['name' => 'Djardina', 'image' => 'chaise_jardin.png'],
            ['name' => 'Napoleonna', 'image' => 'chaise_napoleon.png'],
            ['name' => 'Plianta', 'image' => 'chaise_pliante.png'],
            ['name' => 'Doduda', 'image' => 'chaise_ronde.png'],
            ['name' => 'Tissuta', 'image' => 'chaise_tissu.jpg'],
            ['name' => 'Vichita', 'image' => 'chaise_vichi.png'],
            ['name' => 'BGta', 'image' => 'chaisebg.png']
        ]
    ];

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        
        foreach (self::PRODUITS as $key => $chaises) {
            foreach ($chaises as $chaiseName) {
                $produit = new Produit();

                $produit->setSousCategory($this->getReference($key));
                $produit->setName($chaiseName['name']);
                $produit->setImage($chaiseName['image']);
                $produit->setQuantity($faker->randomNumber(3, false));
                $produit->setDescription($faker->sentence(15, false));
                $produit->setPrice($faker->randomFloat(2));
                $manager->persist($produit);
            }
        }
        
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            SousCategoryFixtures::class,
        ];
    }

}
