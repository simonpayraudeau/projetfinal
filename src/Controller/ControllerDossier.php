<?php


namespace App\Controller;


use App\Entity\Dossier;
use App\Entity\Passager;
use App\Entity\Voyage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerDossier extends AbstractController
{
    /**
     * @return Response
     *
     * @Route (path="/dossier")
     */

    public function controllerdossier(){
        $EntityManager = $this->getDoctrine()->getManager();

        //select All
        $dossier = $EntityManager->getRepository(Dossier::class)->findAll();
        return ($this->render('passagervoyage.html.twig',['values'=>$dossier]));
    }

}