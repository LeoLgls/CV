<?php

namespace App\Controllers;

class Accueil extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('AccueilVue');
        echo view('commun/footer');
    }
}

?>