<?php

namespace App\DataFixtures;

use App\Entity\Complement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ComplementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $comp=["Frites","Boisson","Mayonnaise"];
        foreach ($comp as $key => $value) {
            $comp= new Complement;
            $comp
                ->setNom($value)
                ->setPrix(1000)
                ->setDescription("complement du menu composé de ".$value)
                ->setImage("img/burgercard.jpg");
                $manager->persist($comp); 
        }
        $manager->flush();
    }
}
