<?php

namespace App\Controller\Admin;


use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
#[Route('/admin/utilisateurs', name: 'admin', methods: ['GET'])]


  
    public function index(UsersRepository $usersRepository): Response
    {
        return $this->render('admin/users/index.html.twig', [
            'users' => $usersRepository->findBy(
                [], ['lastname' => 'asc'])
        ]);
    }
}