<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function home() {

        $prenoms = [
            "Lior"      =>  31,
            "Joseph"    =>  12,
            "Anne"      =>  55
        ];

        return $this->render(
            'home.html.twig',
            [
                'title'     =>  "Au revoir tout le monde",
                'age'       =>  12,
                'tableau'   =>  $prenoms
            ]
        );
    }

    /**
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * @Route("/salut", name="hello_base")
     * @Route("/bonjour/{prenom}", name="hello_prenom")
     */
    public function hello($prenom = "anonyme", $age = 0) {

        return $this->render(
            'hello.html.twig',
            [
                'prenom'    =>  $prenom,
                'age'       =>  $age
            ]
        );
    }
}

?>