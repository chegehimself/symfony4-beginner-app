<?php

namespace App\Controller;

use App\Mailer\Emailer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index(Emailer $emailer)
    {
        return $this->render('welcome/index.html.twig');
    }
    /**
     * @Route("/hello/{name}", name="hello_page")
     * @Route("/hello/{name}", name="hello_page", requirements={"name"="[A-Za-z]+"})
     * @param string $name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function hello(string $name ='there')
    {
        return $this->render('hello_page.html.twig', [
            'person_name' => $name,
        ]);
    }
}
