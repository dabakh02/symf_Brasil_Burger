<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu/show', name: 'app_show_menu',methods:["GET"])]
    public function Show(ProduitRepository $repoMenu): Response
    {
        $datas=$repoMenu->findAll();
        return $this->render('menu/index.html.twig',[
            "datas"=>$datas
        ]);
    }
}
