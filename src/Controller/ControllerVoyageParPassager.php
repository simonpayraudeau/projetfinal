<?php


namespace App\Controller;


use App\Entity\Dossier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerVoyageParPassager extends AbstractController
{
    /**
     * @return Response
     *
     * @Route (path="/parPassager")
     */

    public function ControllerVoyageParPassager(){
        $EntityManager = $this->getDoctrine()->getManager();

        //select All
        $dossier = $EntityManager->getRepository(Dossier::class)->findAll();
        return ($this->render('afficherVoyageParPassager.html.twig',['values'=>$dossier]));
    }

}