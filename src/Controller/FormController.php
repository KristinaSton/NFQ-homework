<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\EditFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/pages/{id}', name: 'edit')]
    
    public function view(Article $article): Response
    {
        $article = new Article();
        $form = $this -> createForm(EditFormType::class,$article);
        return $this->render('pages/edit.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}