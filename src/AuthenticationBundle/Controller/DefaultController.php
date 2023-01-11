<?php

namespace AuthenticationBundle\Controller;

use AuthenticationBundle\Models\DefaultModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = new DefaultModel();
    }

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

    public function toLoginAction(Request $request)
    {
        $request_body = (array)json_decode($request->getContent());
        $condition = [];
        foreach ($request_body as $key => $value) {
            $condition["\"{$key}\""] = "'{$value}'";
        }
        $response = $this->model->toLogin($condition);
        return new JsonResponse($response, 200, ['Content-Type: application/json']);
    }
}
