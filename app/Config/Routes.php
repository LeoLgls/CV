<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Accueil::index');

$routes->get('Competences', 'Competences::index');

$routes->get('Experiences', 'Experiences::index');
$routes->get('Experiences/Experiences-Professionnelles', 'ExperiencesPro::index');
$routes->get('Experiences/Experiences-Academiques', 'ExperiencesAcad::index');

$routes->get('Projets', 'Projets::index');

$routes->get('Contact', 'Contact::index');
$routes->post('Contact/save', 'Contact::save');

?>