<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{

    public function index(Category $category, SessionInterface $session)
    {
        $session->start();
        return $this->render('list/index.html.twig', [
            'category' => $category,
        ]);
    }
}
