<?php

namespace App\Controller\Web;

use App\Service\GetClientsBid;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ApplicationClientController extends AbstractController
{
    public function getApplications(GetClientsBid $bid)
    {
        $body = $bid->getClientBid();

        return new Response(var_dump($body));
    }
}