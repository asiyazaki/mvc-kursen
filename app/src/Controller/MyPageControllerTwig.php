<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyPageControllerTwig extends AbstractController
{
    #[Route("/", name: "me")]
    public function me(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('me.html.twig', $data);
    }

    /*
    #[Route("/quote", name: "quote")]
    public function num(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('me.html.twig', $data);
    }*/

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $number1 = random_int(0, 100);
        $number2 = random_int(0, 100);
        $sum = $number1 + $number2;

        $data = [
            'number1' => $number1,
            'number2' => $number2,
            'sum' => $sum
        ];

        return $this->render('lucky.html.twig', $data);
    }
}