<?php

namespace App\DataFixtures;

use App\Entity\Livreur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LivreurFixtures extends Fixture
{
    
    public function load(ObjectManager $manager): void
    {
        $livreurs=["Mouhamed","Sokhna","Alioune","Cheikhna"];
        foreach ($livreurs as $key => $value) {
            $livreur= new Livreur;
            $livreur->setNom($value)
                    ->setPrenom("livreur".$key)
                    ->setMatriculeMoto("DK 021500781".($key+1));
            $manager->persist($livreur); 
        }
        $manager->flush();
    }
}
