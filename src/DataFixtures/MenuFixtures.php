<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MenuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $menu=["Royal","Duchesse","Tiouk Na","Nekh Na","Moss Doli","Rabtic"];
        foreach ($menu as $key => $value) {
            $menu= new Produit;
            $menu
                ->setNom($value)
                ->setPrix(3500)
                ->setDescription('Burger Supra avec fromage frites mayo et viande haché'.$key)
                ->setImage("img/menucard.jpeg");
                $manager->persist($menu); 
        }
        $manager->flush();
    }
}
