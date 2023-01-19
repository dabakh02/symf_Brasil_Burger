<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $clients=["Lamine","Bineta","Moussa","Aminata","Bachir","Moustapha","Ouleye","Diery"];
        foreach ($clients as $key => $value) {
            $clients= new Client;
            $clients
            ->setLogin("Client".$key)
            ->setPassword("client")
            ->setNom($value)
            ->setPrenom("Abos")
            ->setTelephone(77854003+$key+1)
            ->setAdresse("Dakar Zone".$key);
        
            $manager->persist($clients); 
        }   
        
        $manager->flush();
    }
}
