<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AnnonceType;
use App\Repository\AdRepository;
use App\Service\PaginationService;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAdController extends AbstractController
{
    /**
     * @Route("/admin/ads/{page<\d+>?1}", name="admin_ads_index")
     */
    public function index(AdRepository $repo, $page, PaginationService $pagination)
    {
        $pagination->setEntityClass(Ad::class)
                   ->setCurrentPage($page);

        return $this->render('admin/ad/index.html.twig', [

            'pagination'    =>  $pagination
        ]);
    }

    /**
     * @Route("/admin/ads/{id}/edit", name="admin_ads_edit")
     */
    public function edit(Ad $ad, Request $request, ObjectManager $manager) {

        $form = $this->createForm(AnnonceType::class, $ad);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($ad);
            $manager->flush();

            $this->addFlash("success", "L'annonce <strong>{$ad->getTitle()}</strong> a bien été modifiée");
        }

        return $this->render('admin/ad/edit.html.twig', [

            'ad'    =>  $ad,
            'form'  =>  $form->createView()
        ]);
    }

    /**
     * @Route("/admin/ads/{id}/delete", name="admin_ads_delete")
     */
    public function delete(Ad $ad, ObjectManager $manager) {

        if(count($ad->getBookings()) > 0) {

            $this->addFlash("warning", "Vous ne pouvez pas supprimer l'annonce <strong>{$ad->getTitle()}</strong> car elle possède des réservations");
        }
        else {

            $manager->remove($ad);
            $manager->flush();
    
            $this->addFlash("success", "L'annonce de <strong>{$ad->getAuthor()->getFullName()}</strong> a bien été supprimée");
        }

        return $this->redirectToRoute('admin_ads_index');
    }
}
