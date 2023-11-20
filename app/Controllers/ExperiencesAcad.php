<?php

namespace App\Controllers;

class ExperiencesAcad extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('experiences/ExperiencesAcadVue');
        echo view('commun/footer');
    }
}

?>