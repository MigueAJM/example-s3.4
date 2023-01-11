<?php

namespace AuthenticationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /* $response = [
            'status' => true,
            'content' => [
                'producto' => [
                    'precio' => 12,
                    'name' => 'producto'
                ]
            ]
        ];
        return new JsonResponse($response, 200, ['Content-Type: application/json']);
        return new Response('success', 200, ['Content-Type: application/json']); */
        return $this->render('AuthenticationBundle:Default:index.html.twig', ['name' => 'Miguel']);
    }
}
