<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function test(): Response
    {
        //return new Response("<h1>It abouts!</h1>");
		return $this->render("about/about.html.twig");
    }
}