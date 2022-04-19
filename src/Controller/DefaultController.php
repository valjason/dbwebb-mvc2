<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
	#[Route('/', name: 'base')]
	public function test(): Response
	{
		//return new Response("<h1>It defaults!</h1>");
		return $this->render("base.html.twig");
	}
}