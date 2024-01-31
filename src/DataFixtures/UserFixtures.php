<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i+=1) {
            $user = new User();
            $user->setEmail($faker->email());
            $user->setRoles(['ROLE_USER']);
            $user->setPassword($faker->password());
            $user->setName($faker->lastname());
            $user->setFirstname($faker->firstname());
            $manager->persist($user);
        }

        $admin = new User();

        $admin->setEmail('admin@gmail.com');
        $admin->setName('admin');
        $admin->setFirstname('admin');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword('admin');
        $manager->persist($admin);


        $test = new User();
        $test->setEmail('test@gmail.com');
        $test->setName('test');
        $test->setFirstname('test');
        $test->setRoles(['ROLE_USER']);
        $test->setPassword('test');
        $manager->persist($test);

        $manager->flush();
    }
}
