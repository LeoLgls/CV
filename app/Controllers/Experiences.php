<?php

namespace App\Controllers;

class Experiences extends BaseController
{
    public function index()
    {
        echo view('commun/header');
        echo view('ExperiencesVue');
        echo view('commun/footer');
    }
}

?>