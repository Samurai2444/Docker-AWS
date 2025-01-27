<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class SRSController
{
#[Route('/api/SRS', name: 'api_SRS')]
public function index(): Response
{
return new Response('Symfony de Samuel Reche Sanmartin Responde a la llamada de
React');
}
}
