<?php

namespace Controller;
// use Model\Connect;
use Model\FilmManager;

class CinemaController {

    /**
     * Lister les films
     */
    public function listFilms() {

        $filmManager = new FilmManager();
        $films = $filmManager->getFilms();
        
        require "view/film/listFilms.php";
    }

    /** 
     * Détail du film
     */
    public function detFilm($id) {
        
        $filmManager = new FilmManager();
        $details = $filmManager->getDetFilm($id);
        $realisateur = $filmManager->getRealisateur($id);
        $casting = $filmManager->getCasting($id);

        require "view/film/detailFilm.php";
    }

    /** 
     * Modification du film
     */
    public function modifyFilm($id) {

        $filmManager = new FilmManager();
        $modifFilm = $filmManager->getDetFilm($id);
        $modifRealisateur = $filmManager->getRealisateur($id);
        $modifCasting = $filmManager->getCasting($id);

        require "view/film/editFilm.php";
    }
}
