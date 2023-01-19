<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    #[Route('/commande/show', name: 'app_show_commande')]
    public function show(CommandeRepository $repoCommande): Response
    {
        $datas=$repoCommande->findAll();
        return $this->render('commande/index.html.twig',[
            "datas"=>$datas
        ]);
    }
}
