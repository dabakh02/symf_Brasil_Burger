<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client/show', name: 'app_show_client')]
    public function index(): Response
    {
        return $this->render('client/index.html.twig');
    }

    #[Route('/client/show/login', name: 'app_show_client_login')]
    public function showlogin(): Response
    {
        return $this->render('client/login.html.twig');
    }

    #[Route('/client/show/register', name: 'app_show_client_register')]
    public function showregister(): Response
    {
        return $this->render('client/register.html.twig');
    }

    #[Route('/client/show/profil', name: 'app_show_client_profil')]
    public function showprofil(): Response
    {
        return $this->render('client/profil.html.twig');
    }
    #[Route('/client/show/registerForm', name: 'app_create_client_account')]
    public function createAccount(Request $request): Response
    {
        dd($request->r