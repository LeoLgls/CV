<?php

namespace App\Controllers;

class ExperiencesPro extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('experiences/ExperiencesProVue');
        echo view('commun/footer');
    }
}

?>