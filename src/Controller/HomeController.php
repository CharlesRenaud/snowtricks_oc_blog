<?php

namespace App\Controller;


use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('posts/index.html.twig', [
            'posts' => $postRepository->findAll(),
        ]);
    }
}
