<?php

namespace App\Controller;

use App\Repository\BurgerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger/show', name: 'app_show_burger',methods:["GET"])]
    public function Show(BurgerRepository $repoBurger): Response
    {
        $datas=$repoBurger->findAll();
        return $this->render('burger/index.html.twig',[
            "datas"=>$datas
        ]);
    }

    #[Route('/burger/addCommande', name: 'app_add_commande_burger',methods:["POST"])]
    public function AddBurgerToMenu(): Response
    {
        return $this->render('burger/index.html.twig');
    } 
    #[Route('/burger/add', name: 'app_add_burger',methods:["POST"])]
    public function AddBurger(): Response
    {
        return $this->render('burger/index.html.twig');
    }
    #[Route('/burger/delete', name: 'app_destroy_burger',methods:["GET"])]
    public function DestroyBurger(): Response
    {
        return $this->render('burger/index.html.twig');
    } 
    #[Route('/burger/edit', name: 'app_update _burger',methods:["GET"])]
    public function UpdateBurger(): Response
    {
        return $this->render('burger/index.html.twig');
    } 
    
    #[Route('/burger/details', name: 'app_detail_burger',methods:["GET"])]
    public function DetailBurger(): Response
    {
        return $this->render('burger/details.html.twig');
    }
}
