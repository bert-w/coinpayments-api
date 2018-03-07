<?php

namespace BertW\CoinPaymentsApi;

use GuzzleHttp\Client as GuzzleClient;

class Client implements CoinPaymentsInterface
{
    /** @var GuzzleClient */
    protected $client;

    const BASE_URI = 'https://www.coinpayments.net/api.php';

    public function __construct()
    {
        $this->client = new GuzzleClient([
            'base_uri' => self::BASE_URI
        ]);
    }

    public function getBasicInfo()
    {
        $response = $this->client->post('', [
            'query' => [
                'cmd' => 'get_basic_info'
            ]
        ]);
        return \GuzzleHttp\json_decode($response->getBody());
    }

    public function createTransaction(array $options)
    {

    }
}

