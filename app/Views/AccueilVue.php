<div>
    <img class="img-banner" src="/assets/images/bureau-profil-3.png" alt="image accueil">
    <div class="image-text">CV Léo Langlois</div>
</div>

<div class="container">

    <div class="content black first-accueil">
        <h2>Qui suis-je ?</h2>
    
        <img class="profil" src="/assets/images/profil.jpeg" alt="photo de profil">
        
        <div class="zone-tkt">
            <p> Salut tout le monde ! </p>
            <p> Je m'appelle Léo Langlois, et je suis actuellement plongé dans le monde fascinant de l'informatique. En ce moment, je suis en plein dans ma troisième année du BUT Informatique à l'IUT du Havre, où chaque jour apporte son lot de découvertes et de défis à relever.</p>
            <p> Le Havre est devenu mon chez-moi pour les études, une ville dynamique qui me réserve toujours des surprises. Entre les lignes de code et les projets passionnants, je m'accorde aussi des pauses bien méritées. Je suis un gars simple, amateur de bons moments entre amis.</p>
            <p> En dehors des cours, on me trouve souvent en train de savourer une partie endiablée de jeux vidéo. C'est mon petit refuge où l'on peut être un héros virtuel, affronter des monstres, et parfois même sauver le monde. Une passion qui trouve son équilibre avec mes moments chill devant une série captivante ou un animé délirant.</p>
            <p> Ah, et parlons un peu de mes loisirs. J'adore explorer de nouveaux endroits, que ce soit dans ma ville ou au-delà. Les voyages sont une source constante d'inspiration pour moi. Et puis, rien de tel qu'une bonne bouffe entre potes pour égayer la journée ! </p>
            <p> Voilà un petit aperçu de qui je suis. Toujours prêt à relever de nouveaux défis, à apprendre de nouvelles choses et à partager des moments sympas avec ceux qui croisent ma route. La vie est une aventure, et je compte bien en profiter à fond !</p>
        </div>

        <br><br>

        <h2>Formation :</h2>
        <ul>
            <li><strong>BUT Informatique - IUT du Havre - 2021-2024</strong></li>
            <ul>
                <li>Matières étudiées :</li>
                <ul>
                    <li>Développement Orienté Objet, approfondissant les concepts fondamentaux de la programmation orientée objet.</li>
                    <li>Développement Web, acquérant des compétences essentielles pour la création d'applications web dynamiques.</li>
                    <li>Développement Mobile, explorant la conception et l'implémentation d'applications pour les plateformes mobiles.</li>
                    <li>Création/Gestion de Bases de Données, développant des compétences dans la conception et la gestion de bases de données.</li>
                    <li>Système et Réseau, acquérant une compréhension approfondie des architectures système et des réseaux informatiques.</li>
                </ul>
            </ul>
            <li><strong>Baccalauréat, Option Mathématiques et Sciences de l'Ingénieur - 2018-2021</strong></li>
        </ul>
        <p>Cette formation diversifiée m'a fourni une base solide dans divers domaines de l'informatique, me préparant à relever les défis variés de ce secteur en constante évolution.</p>

    </div>

    <div class="content red">
        <h2>Ma passion pour le web :</h2>

        <p> Lors de ma première année d'études en informatique, j'ai ouvert une porte qui allait changer ma trajectoire : le développement web. L'univers fascinant de la création numérique m'a accueilli à bras ouverts. </p>

        <p> Le déclic est survenu lors d'un stage en deuxième année. C'était comme une confirmation éclatante de mon désir ardent de devenir développeur web. Chaque ligne de code était une aventure, chaque bug résolu une petite victoire. C'est là que j'ai su que je voulais faire de cette passion mon métier.</p>

        <p> En parallèle de mes cours, sur mon temps libre, j'ai entrepris un apprentissage autonome du framework web Angular. C'est comme une danse entre la créativité et la logique, une symphonie de balises et de fonctionnalités qui prennent vie sur l'écran. Je m'y plonge avec une passion dévorante, explorant les rouages du développement web.</p>

        <p> Mes soirées sont souvent rythmées par des projets personnels, des challenges que je me lance pour repousser mes limites. OpenClassroom est devenu mon allié de choix, offrant des cours qui me guident dans cette aventure virtuelle. C'est là que je puise la connaissance pour faire évoluer mes compétences.</p>

        <p> Devenir développeur web, c'est bien plus qu'un métier pour moi. C'est une passion qui anime mes journées et enrichit mes soirées. Chaque projet est une toile sur laquelle je laisse mon empreinte numérique, un code qui prend vie et raconte une histoire. Et je compte bien continuer cette aventure avec la même ferveur.</p>

    </div>

    <div class="content black">
        
    <h2>Mes Loisirs</h2>

    <p>
        Parmi toutes ces images, on retrouve des animés comme "<i>One Piece</i>" et des séries comme "<i>The Walking Dead</i>" 
        et "<i>Breaking Bad</i>" que j'aime regarder sur mon temps libre. 
        Des mangas comme "<i>Berserk</i>" notamment (dont je suis fan).
        Il y a aussi des jeux vidéos comme "<i>Five Night's At Freddy's</i>" et "<i>Mario Bros</i>", 
        qui sont respectivements un jeu d'horreur et un jeu de plateforme. 
        J'ai aussi intégré la Formule 1 ainsi que le cinéma qui sont 2 loisirs que j'aime partager à plusieurs avec mes amis 
        ou ma famille.
    </p>

        <div class="gallery-container">

            <img class="gallery-image" src="/assets/images/image1.jpg" alt="Image 1">
            <button class="prev-btn" onclick="changeImage(-1)">❮</button>
            <button class="next-btn" onclick="changeImage(1)">❯</button>

        </div>

        <script>
            let currentImageIndex = 0;
            const images = ["/assets/images/berserk.png", 
                            "/assets/images/fnaf.jpeg", 
                            "/assets/images/op.jpg",
                            "/assets/images/mario.jpg",
                            "/assets/images/twd.jpg",
                            "/assets/images/f1.jpg",
                            "/assets/images/cinema.jpg",
                            "/assets/images/walter.webp"
                        ];

            function showImage(index) 
            {
                const galleryImage = document.querySelector('.gallery-image');
                currentImageIndex += index;

                if (currentImageIndex < 0) {
                    currentImageIndex = images.length - 1;
                } else if (currentImageIndex >= images.length) {
                    currentImageIndex = 0;
                }

                galleryImage.src = images[currentImageIndex];
            }

            function changeImage(index) {
                showImage(index);
            }

            // Show the first image on page load
            showImage(0);
        </script>


    </div>


</div>


