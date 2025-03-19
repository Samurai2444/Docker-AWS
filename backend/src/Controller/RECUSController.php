<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class RECUSController
{
#[Route('/api/RECUS', name: 'api_RECUS')]
public function index(): Response
{
return new Response('Symfony de Samuel Reche Sanmartin Responde a la llamada de React');
}
}
