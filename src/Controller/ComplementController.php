<?php

namespace App\Controller;

use App\Repository\ComplementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComplementController extends AbstractController
{
    #[Route('/complement/show', name: 'app_show_complement',methods:["GET"])]
    public function index(ComplementRepository $repoComplement): Response
    {
        $datas=$repoComplement->findAll();
        return $this->render('complement/index.html.twig',[
            "datas"=>$datas
        ]);
    }
}
