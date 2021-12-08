<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Project;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatusController extends AbstractController
{
    #[Route('/status', name: 'status')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {

        return $this->render('status.html.twig');
    }

//    public function submit(){
//        var
//    }
}
