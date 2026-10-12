<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return new Response(
            $this->render('index.html.twig', [
                'name' => 'Clara',
                'age' => 15,
                'location' => 'Paris (15ᵉ)',
                'passions' => ['Minecraft', 'Palworld', 'Doki Doki Literature Club', 'Overlord', 'No Game No Life', 'Miraculous', 'Re:Zero'],
                'study' => 'BAC CIEL Cybersécurité',
            ])
        );
    }

    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return new Response(
            $this->render('about.html.twig', [
                'name' => 'Clara',
                'birthday' => '12 décembre 2010',
                'orientation' => 'bisexuel',
                'status' => 'célibataire',
            ])
        );
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response(
            $this->render('contact.html.twig')
        );
    }
}
