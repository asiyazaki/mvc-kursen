<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyPageControllerJson
{
    #[Route("/api/quote")]
    public function quote(): Response
    {
        $quotes = ['Great success always comes at the risk of enormous failure.',
            'Believe you can and you are halfway there.',
            'To find yourself, think for yourself'];
        $quotes1 = $quotes[random_int(0, 2)];

        $now = Date("Y-m-d H:i:s");

        $data = [
            'Dagens citat' => $quotes1,
            'Datum och tid' => $now,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
