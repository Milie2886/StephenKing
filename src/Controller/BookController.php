<?php

namespace App\Controller;

use App\Entity\Adaptation;
use App\Entity\Image;
use App\Entity\Livre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    // Création de la route "home" (quand on arrive sur le site)
    /**
     * @Route("/", name="home")
     */
    public function home() {
        //Création d'une variable pour récupérer le Repository "Image" (ne pas oublier le use pour indiquer où se trouve le repo "Image")
        $repo = $this->getDoctrine()->getRepository(Image::class);

        //Création d'une variable pour afficher toutes mes datas

        $images = $repo->findAll();

        return $this->render('book/home.html.twig', [
            'images' => $images
        ]);

    }

    // Création de la route "book" qui affiche les livres issus de la BDD
    
    /**
     * @Route("/book", name="book")
     */
    public function index()
    {
        //Création d'une variable pour récupérer le Repository "Livre"
        $repo = $this->getDoctrine()->getRepository(Livre::class);

        //Création d'une variable pour afficher toutes mes datas

        $livres = $repo->findAll();

        return $this->render('book/index.html.twig', [
            'livres' => $livres
        ]);
    }

    // Création de la route "book_show" pour afficher sur une autre page plus de détail sur le livre sélectionné
    
    /**
     * @Route("/book/{id}", name="book_show")
     */
    public function show($id){
        //création d'un repo pour indiquer à symfony où aller chercher l'ID (dans quel entity)
        $repo = $this->getDoctrine()->getRepository(Livre::class);

        $livre = $repo->find($id);

        return $this->render('book/show.html.twig', [
            'livre' => $livre
        ]);
    }
    
    // Création de la route "adapt" qui affiche les adaptations en film ou série
    /**
     * @Route("/adapt", name="adaptation")
     */
    public function adaptation() {
        //Création d'une variable pour récupérer le Repository "Adaptation"
        $repo = $this->getDoctrine()->getRepository(Adaptation::class);

        //Création d'une variable pour afficher toutes mes datas

        $adaptations = $repo->findAll();

        return $this->render('book/adapt.html.twig', [
            'adaptations' => $adaptations
        ]);
    }
    /*ERIC!!!!!! J'aurai bien voulu ne pas dupliquer ce code et pouvoir gérer book/{id} et adapt/{id} ensemble mais
    je me fais des noeuds au cerveau avec mes if, crois tu que ce soit possible??*/

    /**
     * @Route("/adapt/{id}", name="adapt_show") 
     */
    public function vueAdapt($id){
        //création d'un repo pour indiquer à symfony où aller chercher l'ID (dans quel entity)
        $repo = $this->getDoctrine()->getRepository(Adaptation::class);

        $adaptation = $repo->find($id);

        return $this->render('book/showAdapt.html.twig', [
            'adaptation' => $adaptation
        ]);
    }
}
