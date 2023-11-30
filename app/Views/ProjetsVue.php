
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
            <p>Découvrez comment je donne vie à mes idées grâce à Angular ! Explorez le monde des applications web dynamiques et innovantes, où la magie opère avec des composants bien orchestrés et des fonctionnalités puissantes. Plongez dans l'univers captivant d'Angular pour une expérience de développement exceptionnelle.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet2')">
            <h2>Générateur de Protfolio</h2>
            <p>Découvrez un générateur de portfolio complet englobant le développement web, le backend, la gestion de comptes et la visibilité utilisateur. Ce projet offre une expérience immersive, allant de la création web à la gestion backend, avec des fonctionnalités de connexion à un compte et une visibilité utilisateur optimale</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet3')">
            <h2>Dessin Mobile</h2>
            <p>Découvrez mon premier projet d'application mobile ! En effet, nous avons eu une projet en cours qui consistait à faire une application de dessin avec une fonctionnalités de sauvegarder les dessins faits. Ce fut un projet très intérressant que je vous laisse explorer.</p>
        </article>


        <article class="content red bouton-case" onclick="afficherProjet('projet4')">
            <h2>CV sur CodeIgniter 4</h2>
            <p>Découvrez mon site personnel réalisé avec CodeIgniter 4, où je me présente de manière concise et interactive. Explorez mes compétences, projets, et n'hésitez pas à me contacter via le formulaire dédié pour échanger directement avec moi.</p>
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
                <p>Dans le cadre de mon apprentissage autonome d'Angular, je suis en train de développer une application en SPA (single page application). Cette application intègre une gestion de routage pour accéder facilement aux différentes publications que j'ai créées sur Snapface. Grâce à Angular, je mets en œuvre des fonctionnalités avancées pour offrir une expérience utilisateur fluide et dynamique.</p>

            </div>

            <div class="content red">
                <h2>Visualisation d'une snapface</h2>
                <div class="content-img">
                    <img src="/assets/images/snapface-snapface.png" alt="projet angular img 2"> 
                </div>
                <p>Une illustration concrète de mon apprentissage d'Angular réside dans la création d'un composant dédié à l'affichage des publications Snapface. Ce composant, intégré dans l'application, tire parti des fonctionnalités encapsulées dans un service dédié. Ainsi, j'exploite la puissance d'Angular pour modulariser efficacement les différentes parties de mon application, garantissant une architecture bien structurée et une maintenance simplifiée.</p>
            </div>

            <div class="content black">
                <h2>Perspective d'amélioration</h2>
                <p>Dans une perspective d'amélioration continue, je compte approfondir davantage mes connaissances en suivant des cours sur OpenClassroom. Cette plateforme représente une ressource précieuse pour rester à la pointe des dernières technologies et perfectionner mes compétences dans le domaine du développement web.</p>
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
                <p>Dans ce projet, nous avons remarquer une chose importante : on fait une application qui réunion beaucoup de choses. En effet, on fait une application logicielle en web dans laquelle on vient stoker des données grâce à du backend. On vient aussi créer différents interfaces pour des utilisateurs ou des visiteurs de notre site. </p>
            </div>
           

            <div class="content red">
                <h2>Page de Création</h2>
                <div class="content-img">
                    <img src="/assets/images/portfolio-builder-mode.png" alt="gen portfolio">
                </div>
                <p> Après que l'utilisateur soit connecté, il a la possibilité de créer des contenus textuels sur plusieurs pages telles que Compétences ou Projets. De plus, il peut intégrer des images et même modifier du texte une fois intégré, offrant ainsi une flexibilité maximale dans la personnalisation de son portfolio.</p>
            </div>


            <div class="content black">
                <h2>Personnaliser le contenu</h2>
                <div class="content-img">
                    <img class="mobile-img" src="/assets/images/portfolio-builder-style.png" alt="style portfolio">
                </div>
                <p> Après avoir ajouté du contenu, l'utilisateur a la possibilité de styliser son portfolio selon ses préférences. Il peut personnaliser la couleur du texte, ajuster la taille des éléments, choisir la police d'écriture qui correspond à son style, et définir la couleur du background, offrant ainsi un contrôle total sur l'apparence visuelle de son portfolio.</p>
            </div>

            <div class="content black">
                <h2>Visualiser les différents portfolio</h2>
                <div class="content-img">
                    <img src="/assets/images/portfolio-visu-mode.png" alt="visu portfolio"> 
                </div>
                <p>Lorsqu'il n'y a pas de connexion, un visiteur lambda a la possibilité de visualiser tous les portfolios présents, même sans avoir de compte. Cela offre une expérience d'exploration sans restriction, lui permettant de découvrir le talent et les compétences des différents créateurs présents sur la plateforme.</p>
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
                <p>Ensuite, dans le cadre d'un projet sur mobile Android, nous avons développé une application comprenant une page d'accueil, une zone dédiée au dessin, et une fonctionnalité de sauvegarde. Cette application offre une expérience fluide et intuitive, permettant aux utilisateurs de naviguer facilement entre les différentes fonctionnalités proposées.</p>
            </div>

            <div class="content black">
                <h2>Un projet original</h2>
                <p>Dans le cadre de ce projet, bien que le travail sur le mobile ait été limité, il s'est avéré être un domaine particulièrement intéressant. L'originalité résidait dans la conception d'une application offrant une expérience utilisateur unique, avec une page d'accueil soigneusement élaborée, une zone dédiée au dessin pour stimuler la créativité, et une fonctionnalité de sauvegarde pour préserver les créations des utilisateurs. Bien que le focus ait été restreint, l'exploration de ce domaine a ouvert des perspectives fascinantes pour de futurs projets.</p>
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
                <p>Le projet consiste à concevoir un CV interactif mettant en avant nos compétences et expériences à l'aide de CodeIgniter 4, un framework web étudié durant notre formation. L'objectif est de créer une plateforme dynamique et intuitive permettant une présentation efficace et moderne de notre profil professionnel.</p>            </div>

            <div class="content red">
                <h2>Une présentation clair et en détail</h2>
                <div class="content-img">
                    <img src="/assets/images/cv-accueil.png" alt="accueil projet cv">
                </div>
                <p>Mon objectif est de réaliser une présentation concise et rapide de ma personne. Pour cela, j'ai développé un site où je débute par un résumé identitaire avant de présenter de manière détaillée l'ensemble des aspects qui définissent mon parcours, mes compétences, et mes réalisations. Ce format interactif vise à offrir une expérience fluide et informative pour ceux qui souhaitent en savoir plus sur qui je suis.</p>            </div>

            <div class="content black">
                <h2>Un formulaire de contact fonctionnel</h2>
                <div class="content-img">
                    <img src="/assets/images/cv-contact.png" alt="contact projet cv">
                </div>
                <p>En dernière étape, le projet implique la création d'un formulaire de contact intégré au site, conçu avec le framework CodeIgniter 4. Ce formulaire offre aux visiteurs la possibilité de me contacter directement via ma boîte Gmail. Cette fonctionnalité facilite l'interaction et permet un échange direct, renforçant ainsi le lien entre le visiteur du site et moi-même.</p>
            </div>

            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>      
        
        </article>


    </section>


  
</div>




