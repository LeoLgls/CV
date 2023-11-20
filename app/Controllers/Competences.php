<?php

namespace App\Controllers;

class Competences extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('CompetencesVue');
        echo view('commun/footer');
    }
}

?>