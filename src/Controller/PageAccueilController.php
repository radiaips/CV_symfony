<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projets;
use App\Entity\Hobbies;
class PageAccueilController extends AbstractController
{
    /**
     * @Route("/page/accueil", name="page_accueil")
     */
    public function index()
    {
        $repository = $this->getDoctrine()-> getRepository(Projets::class);
        $projets = $repository->findAll();
        $repository = $this->getDoctrine()-> getRepository(Hobbies::class);
        $hobbies = $repository->findAll();

        return $this->render('page_accueil/index.html.twig', [
          'projets' => $projets ,
          'hobbies' => $hobbies 
        ]);
    }
    
    /**
     * @Route("/page/accueil/{id}", name="details")
     */
    public function details($id)
    {
        $repository = $this->getDoctrine()-> getRepository(Projets::class);
        $projets = $repository->find($id);

        return $this->render('page_accueil/details.html.twig', [
          'projets' => $projets 
        ]);
    }
}
