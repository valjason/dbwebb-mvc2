<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
	#[Route('/report', name: 'report')]
	public function test(): Response
	{
		//return new Response("<h1>It Reports!</h1>");
		return $this->render("report/report.html.twig");
	}
}