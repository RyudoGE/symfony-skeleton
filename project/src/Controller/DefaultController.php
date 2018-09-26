<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index()
    {
        echo "<pre>";
        print_r('12312');
        echo "<pre>";
        die();
    }

    public function helloAction($name)
    {
        return $this->render(
            "default/index.html.twig",
            ['name' => $name]
        );
    }
}