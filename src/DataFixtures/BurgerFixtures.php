<?php

namespace App\DataFixtures;

use App\Entity\Burger;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BurgerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $burger=[
            "Big Poulet","simple","Last Dibi","Maxi Foie","Rare Vegetarien",
            "Better Burger","Amazing Beef","Extreme Delice","Hala Madrid","Liverpool",
            "Army","Balbizo","Accrilic","Zambo","Artillas","Adamas","Poseidonus",
            "Zalker","Barbus","Yolomi","Just Me"
        ];
        foreach ($burger as $key => $value) {
            $burger= new Burger;
            $burger
                ->setNom($value)
                ->setPrix(1500+$key*0.5)
                ->setDescription('Burger '.$value.' avec des legumes des frites accompagné de vos complements')
                ->setImage("img/burgercard.jpg");
                $manager->persist($burger); 
        }
        $manager->flush();
    }
}
