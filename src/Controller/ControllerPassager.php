<?php

namespace App\Controller;


use App\Entity\Passager;
use App\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerPassager extends AbstractController
{
    /**
     * @return Response
     *
     * @Route (path="/passager")
     */

    public function controllerpassager(){

        $EntityManager = $this->getDoctrine()->getManager();

        //select All
        $passager= $EntityManager->getRepository(Passager::class)->findAll();
        return $this->render('base.html.twig',['passagers'=>$passager]);
    }

}