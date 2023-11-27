
<script>
    function afficherProjet(projet) {
        // Masque tous les détails de compétences
        var projetDetails = document.querySelectorAll('.projet-details');
        projetDetails.forEach(function (detail) {
            detail.style.display = 'none';
        });

        // Affiche les détails de la compétence cliquée
        var projetDetailsToShow = document.getElementById(projet + 'Details');
        projetDetailsToShow.style.display = 'block';

        // Cache les éléments .content
        var projetsContent = document.querySelectorAll('.content');
        projetsContent.forEach(function (content) {
            content.style.display = 'none';
        });

        // Masque le titre
        var compTitle = document.querySelectorAll('.titre-pr');
        compTitle.forEach(function (detail) {
            detail.style.display = 'none';
        });
    }

    function retourEtatInitial() {
        // Affiche tous les éléments .content
        var projetsContent = document.querySelectorAll('.content');
        projetsContent.forEach(function (content) {
            content.style.display = 'block';
        });

        // Masque tous les détails de compétences
        var projetDetails = document.querySelectorAll('.projet-details');
        projetDetails.forEach(function (detail) {
            detail.style.display = 'none';
        });

         // Afficher le titre
         var compTitle = document.querySelectorAll('.titre-pr');
        compTitle.forEach(function (detail) {
            detail.style.display = 'block';
        });

    }
</script>




<h1 class="titre-pr">Projets</h1>

<div class="container">

    <section class="bouton-container">

        <article class="content red bouton-case" onclick="afficherProjet('projet1')">
            <h2>Projet Angular</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet2')">
            <h2>Générateur de Protfolio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet3')">
            <h2>Les Aventuriers du Rail</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>


        <article class="content red bouton-case" onclick="afficherProjet('projet4')">
            <h2>CV sur CodeIgniter 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>

    </section>
   


    <section>

        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!-------------------------------------->
        <article id="projet1Details" class="projet-details" style="display: none;">
            <h1>Projet Angular</h1>
            <p>Plus d'informations sur la Projet 1...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>



        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!-------------------------------------->
        <article id="projet2Details" class="projet-details" style="display: none;">
            <h1>Générateur de Protfolio</h1>
            <p>Plus d'informations sur la Projet 2...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>



        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!-------------------------------------->
        <article id="projet3Details" class="projet-details" style="display: none;">
            <h1>Les Aventuriers du Rail</h1>
            <p>Plus d'informations sur la Projet 3...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>




        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!--------------------------------------> 
        <article id="projet4Details" class="projet-details" style="display: none;">
            <h1>CV sur CodeIgniter 4</h1>
            <p>Plus d'informations sur la Projet 4...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


    </section>


  
</div>




