<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class MicropostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $posts): Response
    {
        /*$microPost = new MicroPost();
        $microPost->setTitle('It comes from controller');
        $microPost->getText('Hi');
        $microPost->setText(new DateTime());*/

        $microPost = $posts->find(1);
        $posts->remove($microPost, true);

        //dd($posts->find(1));
        return $this->render('micro_post/index.html.twig', [
            'controller_name' => 'MicropostController',
        ]);
    }
}
