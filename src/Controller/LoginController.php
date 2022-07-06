<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @return Response
     */
    public function index(): Response

    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/panel", name="app_dasboard")
     * @return Response, array
     */
    public function login(Request $request): Response

    {
        $token = $request->request->get('token');
        $email =  $request->request->get('email');
        $password =  $request->request->get('password');

        if ($this->isCsrfTokenValid('loginToken', $token) &&  $email === "umut@gmail.com" && $password === '123') {

            return $this->render('login/dashboard.html.twig', [
                'bilgiler' => array('email'=>$email,'password'=>$password,'token'=>$token) ,
            ]);
        }

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
