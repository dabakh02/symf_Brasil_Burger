<?php

namespace App\Controller;

use App\Repository\LivreurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivreurController extends AbstractController
{
    #[Route('/livreur/show', name: 'app_show_livreur',methods:["GET"])]
    public function index(LivreurRepository $livRepo): Response
    {
        $datas=$livRepo->findAll();
        return $this->render('livreur/index.html.twig',[
            "datas"=>$datas
        ]);
    }
}
