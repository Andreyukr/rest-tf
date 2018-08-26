<?php

namespace App\Service;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GetClientsBid
{
    private $endPoint;

    public function __construct(string $endPoint)
    {
        $this->endPoint = $endPoint;
    }


    public function getClientBid()
    {
        $bid = new Client();

        try {
            $response = $bid->request('GET', $this->getEndPoint());
        } catch (RequestException $e) {
            if ($e->getResponse()->getStatusCode() === 404) {
                throw new \LogicException('Target Finance does not work', 404);
            }
        }

        $body = $response->getBody();
        $bodyArray = \json_decode($body, true);

        return $bodyArray;
    }
    /**
     * @return string
     */
    public function getEndPoint(): string
    {
        return $this->endPoint;
    }

}