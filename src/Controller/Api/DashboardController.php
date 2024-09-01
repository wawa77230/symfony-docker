<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route("/",methods:['GET'] )]
    public function index(): JsonResponse
    {
        return $this->json(['message'=>'Hello World']);
    }

}
