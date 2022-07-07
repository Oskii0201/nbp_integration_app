<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annatation\Route;

class MainController extends AbstractController{

    public function nbp(){

        return $this->json([
            'message' => 'Welcome to your new controller!'
        ]);

    }
}

?>