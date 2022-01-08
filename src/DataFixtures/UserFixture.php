<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i < 10; $i++) {
            $user = new User();

            $user->setEmail("user@test.com");
            $user->setPrenom("Prénom");
            $user->setNom("Nom");
            $user->setPassword("Monsupermotdepasse");
            $user->setTelephone("0653532290");
            $user->setAPropos("What else ?");
            $user->setInstagram("Instagram");
            $manager->persist($user);

        }
        $manager->flush();
    }
}
