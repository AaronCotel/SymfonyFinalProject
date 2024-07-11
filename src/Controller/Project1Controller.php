<?php

namespace App\Controller;

use App\Entity\Project1;
use App\Repository\Project1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Project1Controller extends AbstractController
{
    #[Route('/Project1', methods: ['GET'])]
    public function getProject1(Project1Repository $project1Repository): JsonResponse
    {
        $project1 = $project1Repository->findAll();
        return $this->json($project1);
    }

    #[Route('/Project1', methods: ['POST'])]
    public function createProject1(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Vérifiez que les champs nécessaires sont présents
        if (!isset($data['name']) || !isset($data['price']) || !isset($data['project2'])) {
            return $this->json(['error' => 'Invalid data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $project1 = new Project1();
        $project1->setName($data['name']);
        $project1->setPrice($data['price']);
        $project1->setProject2($data['project2']); 

        $em->persist($project1);
        $em->flush();

        return $this->json($project1);
    }
}
