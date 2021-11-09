<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{

     private $entityManager;

     public function __construct(EntityManagerInterface $entityManager)
     {
          $this->entityManager = $entityManager;
     }

    /**
     * @Route("/inscription", name="register")
     */
     public function index(Request $request, UserPasswordEncoderInterface $encoder) //injection de dépendance encoder le mot de passe
     {   
          $user = new User();
          $form = $this->createForm(RegisterType::class, $user);

          $form->handleRequest($request); // écoute la requêtet

          if ($form->isSubmitted() && $form->isValid()) {
                    $user = $form->getData();

                    $password = $encoder->encodePassword($user, $user->getPassword());

                    $user->setPassword($password);
                  
                    $this->entityManager->persist($user); // fige la data pour l'enregistrer
                    $this->entityManager->flush(); // enregistrer la data dans la bdd

               //dd($user); // debug
          }

          return $this->render('register/index.html.twig', [
               'form' => $form->createView()
          ]);
     }
     }
