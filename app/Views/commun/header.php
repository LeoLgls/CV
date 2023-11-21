<html>
<head>
    <title>CV Léo Langlois</title>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--<script src="/assets/js/fichierJS.js" type="text/javascript"></script>-->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@300;800&display=swap');
    </style>

</head>

<body>
    <header>
        <nav>
            <a href="<?php echo base_url(); ?>">Accueil</a>
            <div class="dropdown">
                <a href="<?php echo base_url(); ?>Experiences">Expériences <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-content">
                        <li><a href=<?php echo base_url('Experiences/Experiences-Professionnelles'); ?>>Expériences professionnelles</a></li>
                        <li><a href=<?php echo base_url('Experiences/Experiences-Academiques'); ?>>Expériences académiques</a></li>
                    </ul>
            </div>

            <a href="<?php echo base_url(); ?>Competences">Compétences</a>
            <a href="<?php echo base_url(); ?>Projets">Projets</a>
            <a href="<?php echo base_url(); ?>Contact">Contact</a>
        </nav>
    </header>
   <main>