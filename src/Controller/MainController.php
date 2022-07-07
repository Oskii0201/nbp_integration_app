<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annatation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
// use Symfony\APP\Controller\Exception;

class MainController extends AbstractController{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function nbp(){

        $url = 'http://api.nbp.pl/api/exchangerates/tables/A?format=json';

        $json = $this->send_request($url);
        echo $json;die();

    }

    public function send_request($url){

        if(empty($url)){
            return false;
        }
        $response = $this->client->request(
            'GET', $url
        );
        $content = $response->getContent();

        return $content;
    }
}

?>