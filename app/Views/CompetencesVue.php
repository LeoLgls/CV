
<script>
    function afficherCompetence(competence) {
        // Masque tous les détails de compétences
        var competenceDetails = document.querySelectorAll('.competence-details');
        competenceDetails.forEach(function (detail) {
            detail.style.display = 'none';
        });

        // Affiche les détails de la compétence cliquée
        var competenceDetailsToShow = document.getElementById(competence + 'Details');
        competenceDetailsToShow.style.display = 'block';

        // Cache les éléments .bouton-case
        var competencesBouton = document.querySelectorAll('.bouton-case');
        competencesBouton.forEach(function (bouton) {
            bouton.style.display = 'none';
        });        

        // Masque le titre
        var compTitle = document.querySelectorAll('.titre-cp');
        compTitle.forEach(function (detail) {
            detail.style.display = 'none';
        });

        // Masque les compétences
        var imgScroll = document.querySelectorAll('.image-ban');
        imgScroll.forEach(function (detail) {
            detail.style.display = 'none';
        });

    }

    function retourEtatInitial() {
        // Affiche tous les éléments .bouton-case
        var competencesBouton = document.querySelectorAll('.bouton-case');
        competencesBouton.forEach(function (bouton) {
            bouton.style.display = 'block';
        });

        // Masque tous les détails de compétences
        var competenceDetails = document.querySelectorAll('.competence-details');
        competenceDetails.forEach(function (detail) {
            detail.style.display = 'none';
        });

        // Afficher le titre
        var compTitle = document.querySelectorAll('.titre-cp');
        compTitle.forEach(function (detail) {
            detail.style.display = 'block';
        });
        
        // Afficher les compétences
        var imgScroll = document.querySelectorAll('.image-ban');
        imgScroll.forEach(function (detail) {
            detail.style.display = 'block';
        });
    }
</script>




<h1 class="titre-cp">Compétences</h1>

<div  class="container">
    <div class="image-ban" id="list1">
        <img src="/assets/images/java.png" alt="Image 1">
        <img src="/assets/images/codeigniter.png" alt="Image 2">
        <img src="/assets/images/angular.png" alt="Image 3">
        <img src="/assets/images/php.png" alt="Image 4">
        <img src="/assets/images/html.png" alt="Image 5">
        <img src="/assets/images/css.png" alt="Image 5">
        <img src="/assets/images/js.png" alt="Image 6">
        <img src="/assets/images/mongodb.png" alt="Image 7">
        <img src="/assets/images/wordpress.png" alt="Image 8">       
    </div>




    <section class="bouton-container">

        <article class="content red bouton-case" onclick="afficherCompetence('competence1')">
            <h2>Soft Skills & Hard Skills</h2>
            <p>Découvrez mes compétences informatiques et humaines ! De l'analyse des besoins clients à l'implémentation de solutions techniques, je mets en avant mon expertise. Plongez dans un univers où soft skills et hard skills s'entrelacent pour façonner une approche complète et performante.</p>
        </article>

        <article class="content red bouton-case" onclick="afficherCompetence('competence2')">
            <h2>Développement web</h2>
            <p>Découvrez comment mes expériences m'ont conduit à plonger dans le monde d'Angular, un framework JavaScript puissant. Je partage avec vous les raisons de ce choix, les avantages offerts par Angular, et comment cette compétence prometteuse enrichira ma future carrière.</p>
        </article>

        <article class="content red bouton-case" onclick="afficherCompetence('competence3')">
            <h2>Développement d'application</h2>
            <p>Découvrez mon parcours passionnant du développement d'application à la programmation orientée objet, où chaque projet est une aventure concrète. Mes compétences, alliant créativité et rigueur et trouvent leur place dans la conception d'applications innovantes.</p>
        </article>

    </section>


    
    <section>

        <!--------------------------------------------->
        <!-- Contiendra les détails de la Competence -->
        <!---------------------------------------------> 
        <article id="competence1Details" class="competence-details" style="display: none;">
            <h1>Soft Skills & Hard Skills</h1>

            <div class="content black">
                <h2>Soft Skills</h2>
                <h3>1. Collaboration et Communication au Sein d'une Équipe Informatique :</h3>
                <p>Au cours de mon stage en développement web sur WordPress, j'ai eu l'opportunité de travailler au sein d'une équipe dynamique. La collaboration étroite avec mes collègues développeurs a renforcé mes compétences en communication et a illustré l'importance de la coordination dans le domaine informatique. Nous avons partagé nos idées, résolu des problèmes complexes, et travaillé de concert pour atteindre nos objectifs. Cette expérience a développé ma capacité à articuler clairement mes idées, à écouter activement les propositions de mes pairs, et à maintenir une communication transparente au sein de l'équipe.</p>
                <h3>2. Résolution de Problèmes et Adaptabilité :</h3>
                <p>Les projets académiques auxquels j'ai participé ont été des terrains propices pour développer ma capacité à résoudre des problèmes de manière efficace. Chaque projet présentait des défis uniques, nécessitant une approche créative et une résolution adaptative. Mon implication dans ces projets m'a permis d'affiner ma pensée critique, d'apprendre à analyser rapidement les situations, et de trouver des solutions innovantes. Cette compétence de résolution de problèmes a été particulièrement mise en avant lors de situations imprévues, soulignant ainsi ma capacité à m'adapter à des environnements en constante évolution.</p>
                <h3>3. Gestion du Temps et Organisation :</h3>
                <p>L'organisation est une compétence cruciale que j'ai développée tout au long de mon cursus académique et de mes expériences professionnelles. La gestion simultanée de plusieurs projets académiques m'a appris à optimiser mon temps et à prioriser les tâches en fonction des échéances. De même, le stage en entreprise a renforcé cette compétence en exigeant une planification méticuleuse pour respecter les délais de livraison. Cette aptitude à gérer mon temps de manière efficace reflète ma rigueur et mon engagement envers la qualité du travail, des compétences précieuses dans le domaine informatique.</p>
                <br>
                <p>Ces soft skills, combinées à mes compétences techniques, constituent un ensemble holistique qui me permet d'apporter une contribution significative au sein d'une équipe informatique.</p>
            </div>

            <div class="content red">
                <h2>Hard Skills</h2>
                <h3>1. Analyse d'un Besoin Client :</h3>
                <p>Mon expérience pratique m'a permis de développer des compétences solides en matière d'analyse des besoins clients. Lors de mon stage en développement web, j'ai été impliqué dans des phases cruciales de collecte et d'analyse des exigences du client. Cette compétence implique la capacité à comprendre les attentes du client, à identifier les fonctionnalités clés requises, et à traduire ces informations en spécifications techniques exploitables. Mon approche méthodique de cette étape garantit une compréhension approfondie des objectifs du client, jetant ainsi les bases d'une solution informatique adaptée.</p>
                <h3>2. Création d'un Cahier des Charges :</h3>
                <p>La création d'un cahier des charges est une étape essentielle dans la planification de tout projet informatique. Fort de mon expérience académique et professionnelle, j'ai développé la capacité à élaborer des cahiers des charges détaillés. Cela inclut la documentation précise des spécifications fonctionnelles et techniques, des diagrammes de flux, et des scénarios d'utilisation. La clarté et la concision de mes cahiers des charges sont essentielles pour garantir une compréhension mutuelle entre les parties prenantes du projet et pour orienter efficacement la phase d'implémentation.</p>
                <h3>3. Implémentation d'un Besoin Client :</h3>
                <p>Mon parcours académique et mon stage professionnel m'ont offert des opportunités d'implémentation concrète de solutions en réponse aux besoins clients. Grâce à ma maîtrise des langages de programmation tels que HTML, CSS, PHP, et JavaScript, j'ai pu donner vie à des concepts abstraits et traduire les spécifications techniques en applications fonctionnelles. Mon approche méticuleuse et axée sur la qualité se reflète dans la réalisation de solutions informatiques robustes, évolutives et en adéquation avec les attentes du client.</p>
                <br>
                <p>En résumé, mes compétences techniques couvrent l'ensemble du cycle de vie d'un projet informatique, de l'analyse initiale des besoins client à la mise en œuvre effective de solutions innovantes. Ma combinaison de compétences techniques et de compréhension approfondie des processus me positionne favorablement pour relever les défis complexes du domaine informatique.</p>
            </div>

            <div class="content black">
                <h2>Pour conclure :</h2>
                <p>En combinant mes compétences techniques en analyse de besoins clients, création de cahiers des charges et implémentation de solutions, avec mes aptitudes relationnelles en communication au sein d'une équipe et ma capacité d'adaptation, je me considère comme un professionnel complet et polyvalent. Ma capacité à traduire les besoins clients en solutions concrètes, tout en travaillant efficacement avec une équipe diverse, reflète ma détermination à exceller dans le domaine informatique. Mon engagement envers l'amélioration continue, tant sur le plan technique que personnel, est un pilier essentiel de ma carrière. Cette combinaison de compétences techniques et de soft skills me prépare à relever avec confiance les défis futurs du monde professionnel, où l'innovation et la collaboration sont des moteurs du succès.</p>
            </div>

            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>

        </article>



    
        <!--------------------------------------------->
        <!-- Contiendra les détails de la Competence -->
        <!---------------------------------------------> 
        <article id="competence2Details" class="competence-details" style="display: none;">
            <h1>Développement web</h1>
            <div class="content black">
                <h2>La Passion Éveillée en Cours</h2>
                <p>Au cours de ma première année d'études en informatique, j'ai découvert le développement web. J'ai été immédiatement fasciné par la possibilité de créer des sites web interactifs et dynamiques. J'ai particulièrement apprécié la façon dont on pouvait modifier un site en quelques clics, sans avoir à modifier le code source.</p>
                <p>J'ai rapidement excellé dans mes cours de développement web. Je me suis montré particulièrement doué pour comprendre les concepts théoriques et les appliquer à la pratique. J'ai également développé une passion pour l'apprentissage de nouvelles technologies.</p>
            </div>

            <div class="content red">
                <h2>L'Expérience Transformative en Entreprise</h2>
                <p>Lors de mon stage de huit semaines en entreprise, j'ai eu l'opportunité de mettre en pratique mes compétences en développement web dans un environnement professionnel. J'ai été chargé de créer un nouveau module pour le site web de l'entreprise.</p>
                <p>Ce projet m'a permis de développer ma rigueur et ma capacité à travailler sous pression. J'ai également appris à collaborer avec une équipe de développeurs expérimentés.</p>
                <p>Ce stage a été une expérience transformative pour moi. Il m'a permis de confirmer ma passion pour le développement web et de développer les compétences nécessaires pour réussir dans ce domaine.</p>
            </div>

            <div class="content black">
                <h2>Vers la Spécialisation avec Angular</h2>
                <p>Faisant suite à ces expériences enrichissantes, j'ai entrepris l'apprentissage autonome d'Angular. Angular est un framework JavaScript open source qui permet de créer des applications web dynamiques et performantes.</p>
                <p>J'ai choisi d'apprendre Angular car c'est un framework de premier plan qui est utilisé par de nombreuses entreprises. Je suis convaincu que cette compétence me sera bénéfique dans ma future carrière.</p>
                <ul>
                    <li>Une architecture robuste et bien conçue</li>
                    <li>Un support complet pour les tests</li>
                    <li>Une communauté active et en pleine croissance</li>
                </ul>
                <p>Apprendre Angular est un investissement qui me permettra de développer des compétences recherchées par les employeurs. Cela me permettra également de créer des applications web plus sophistiquées et performantes.</p>
                <br><br>
                <p>En conclusion, ces trois expériences m'ont permis de développer une passion pour le développement web et les compétences nécessaires pour réussir dans ce domaine. Je suis confiant que je pourrai mettre à profit ces compétences pour créer des applications web innovantes et utiles.</p>
            </div>


            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>
        </article>




        <!--------------------------------------------->
        <!-- Contiendra les détails de la Competence -->
        <!---------------------------------------------> 
        <article id="competence3Details" class="competence-details" style="display: none;">
            <h1>Développement d'application</h1>

            <div class="content black">
                <h2>Introduction</h2>
                <p>Le développement d'application et la programmation orientée objet constituent le cœur de ma formation en informatique, suscitant ma passion et me dotant des compétences nécessaires pour concevoir des applications logicielles complexes.</p>
            </div>


            <div class="content red">
                <h2>Des bases solides acquises à travers de nombreux projets</h2>
                <p>Au cours de ma formation, j'ai concrétisé mes connaissances par le biais de divers projets de développement d'application et de programmation orientée objet, établissant ainsi des bases solides dans ces domaines.</p>
                <ul>
                    <li>Un projet de générateur de plateau pour le jeu "Les Aventuriers du Rail" : mise en pratique des compétences en programmation orientée objet, gestion de base de données et interface utilisateur.</li>
                    <li>Un projet d'application de dessin en ligne : application des acquis en bases de données, réseaux et interface utilisateur.</li>
                </ul>
            </div>

            <div class="content black">
                <h2>Une opportunité de travailler sur tous mes acquis</h2>
                <p>Le développement d'application offre une diversité de défis, comme en témoigne mon projet de jeu. J'ai utilisé des bases de données pour stocker les données des joueurs et des cartes, ainsi que des techniques de réseaux pour permettre une expérience de jeu en ligne.</p>
            </div>
            
            <div class="content red">
                <h2>Des compétences recherchées par les entreprises</h2>
                <p>Les compétences en développement d'application et programmation orientée objet sont fortement prisées par les entreprises, étant cruciales pour la création d'applications logicielles innovantes et performantes.</p>
            </div>

            <div class="content black">
                <h2>Conclusion</h2>
                <p>Le développement d'application et la programmation orientée objet sont des domaines passionnants qui son très interressants dans le domaine de l'informatique. Je pense que ces compétences constitueront un atout dans ma future carrière.</p>
            </div>



            <div class="btn-retour">
                <button class="retour" onclick="retourEtatInitial()">Retour</button>
            </div>
        </article>
    

        
    </section>

</div>







