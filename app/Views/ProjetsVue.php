
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
        var projetsBouton = document.querySelectorAll('.bouton-case');
        projetsBouton.forEach(function (bouton) {
            bouton.style.display = 'none';
        });

        // Masque le titre
        var compTitle = document.querySelectorAll('.titre-pr');
        compTitle.forEach(function (detail) {
            detail.style.display = 'none';
        });
    }

    function retourEtatInitial() {
        // Affiche tous les éléments .bouton-case
        var projetsBouton = document.querySelectorAll('.bouton-case');
        projetsBouton.forEach(function (bouton) {
            bouton.style.display = 'block';
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
            <h2>Dessin Mobile</h2>
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
            
            <div class="content black">
                <h2>Interface de Snapface</h2>
                <div class="content-img">
                    <img src="/assets/images/snapface-home.png" alt="projet angular img 1">
                </div>
                <p>on a une application en SPA avec du routing qui permet d'accéder aux publications snapface</p>
            </div>

            <div class="content red">
                <h2>Visualisation d'une snapface</h2>
                <div class="content-img">
                    <img src="/assets/images/snapface-snapface.png" alt="projet angular img 2"> 
                </div>
                <p>voici l'affichage d'une snapface grâce à un component Angular et dont les fonctionnalités sont dans un serive</p>
            </div>

            <div class="content black">
                <h2>Perspective d'amélioration</h2>
                <p>demande a bard la suite sur openclassroom</p>
            </div>
    
            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>
        </article>



        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!-------------------------------------->
        <article id="projet2Details" class="projet-details" style="display: none;">
            <h1>Générateur de Protfolio</h1>

            <div class="content black">
                <h2>Un projet complet</h2>
                    <p>web, backend, connexion a un compte ou visibilité utilisateur </p>
            </div>
           

            <div class="content red">
                <h2>Page de Création</h2>
                <div class="content-img">
                    <img src="/assets/images/portfolio-builder-mode.png" alt="gen portfolio">
                </div>
                <p>on peut créer des contenus de textes etc, modifier</p>
            </div>


            <div class="content black">
                <h2>Personnaliser le contenu</h2>
                <div class="content-img">
                    <img class="mobile-img" src="/assets/images/portfolio-builder-style.png" alt="style portfolio">
                </div>
                <p>après avoir ajouté, on peut styliser</p>
            </div>

            <div class="content black">
                <h2>Visualiser les différents portfolio</h2>
                <div class="content-img">
                    <img src="/assets/images/portfolio-visu-mode.png" alt="visu portfolio"> 
                </div>
                <p>on peut visualiser tous les portfolios, même sans compte </p>
            </div>

            
            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>
        </article>



        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!-------------------------------------->
        <article id="projet3Details" class="projet-details" style="display: none;">
            <h1>Dessin Mobile</h1>

            <div class="content black">
                <h2>Application de dessin</h2>
                <div class="content-img">
                    <img class="mobile-img" src="/assets/images/mobile-accueil.jpg" alt="mobile accueil">
                    <img class="mobile-img" src="/assets/images/mobile-dessin.jpg" alt="mobile zone dessin"> 
                </div>
                <p>on a fait un page d'accueil, une zone pour dessiner et une sauvegarde</p>
            </div>

            <div class="content black">
                <h2>Un projet original</h2>
                <p>on a pas beaucoup travaillé en mobile et c'est un domaine interressant</p>
            </div>

            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>
        </article>




        <!-------------------------------------->
        <!-- Contiendra les détails du Projet -->
        <!--------------------------------------> 
        <article id="projet4Details" class="projet-details" style="display: none;">
            <h1>CV sur CodeIgniter 4</h1>

            <div class="content black">
                <h2>Intitulé du sujet</h2>
                <p>on doit réaliser un CV pour nous présenter grâce à CodeIgniter 4, un framework web vu en cours</p>
            </div>

            <div class="content red">
                <h2>Une présentation clair et en détail</h2>
                <div class="content-img">
                    <img src="/assets/images/cv-accueil.png" alt="accueil projet cv">
                </div>
                <p>j'ai donc fait un site dans lequel je commence par résumé qui je suis puis je présente tout le reste</p>
            </div>

            <div class="content black">
                <h2>Un formulaire de contact fonctionnel</h2>
                <div class="content-img">
                    <img src="/assets/images/cv-contact.png" alt="contact projet cv">
                </div>
                <p>j'ai fait un formuaire de contact qui permet de me contacter directement sur ma boite Gmail</p>
            </div>

            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>      
        
        </article>


    </section>


  
</div>




