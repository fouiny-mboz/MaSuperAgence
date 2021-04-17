<?php

namespace App\Controller;

use App\Form\PropertyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/biens", name="properties")
     */
    public function index(): Response
    {
        $form = $this->createForm(PropertyType::class);
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties',
            'form' =>$form->createView(),
        ]);
    }
}
