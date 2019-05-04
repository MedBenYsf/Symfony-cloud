<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_index")
     */
    public function index()
    {
        $articles = ['Article 1', 'Article 2', 'Article 3'];
        return $this->render('article/index.html.twig', compact('articles'));
    }
}
