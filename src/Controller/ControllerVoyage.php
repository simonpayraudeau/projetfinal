<?php


namespace App\Controller;

use App\Entity\Voyage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerVoyage extends AbstractController
{
    /**
     * @return Response
     *
     * @Route (path="/voyage")
     */

    public function controllervoyage(){

        $EntityManager = $this->getDoctrine()->getManager();

        //select All
        $voyage = $EntityManager->getRepository(Voyage::class)->findAll();
        return ( $this->render('voyage.html.twig',['voyages'=>$voyage]));
    }
}