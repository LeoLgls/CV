
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

    }
</script>




<h1>Projets</h1>

<div class="container">

    <section class="bouton-container">

        <article class="content red bouton-case" onclick="afficherProjet('projet1')">
                <h2>Projet 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet2')">
            <h2>Projet 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet3')">
            <h2>Projet 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet4')">
            <h2>Projet 4</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>



        <article class="content red bouton-case" onclick="afficherProjet('projet5')">
            <h2>Projet 5</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>

    </section>
   


    <section>

        <article id="projet1Details" class="projet-details" style="display: none;">
            <!-- Contiendra les détails du Projet 1 -->
            <h2>Projet 1 - Détails</h2>
            <p>Plus d'informations sur la Projet 1...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="projet2Details" class="projet-details" style="display: none;">
            <!-- Contiendra les détails du Projet 2 -->
            <h2>Projet 2 - Détails</h2>
            <p>Plus d'informations sur la Projet 2...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="projet3Details" class="projet-details" style="display: none;">
            <!-- Contiendra les détails du Projet 3 -->
            <h2>Projet 3 - Détails</h2>
            <p>Plus d'informations sur la Projet 3...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="projet4Details" class="projet-details" style="display: none;">
            <!-- Contiendra les détails du Projet 4 -->
            <h2>Projet 4 - Détails</h2>
            <p>Plus d'informations sur la Projet 4...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="projet5Details" class="projet-details" style="display: none;">
            <!-- Contiendra les détails du Projet 5 -->
            <h2>Projet 5 - Détails</h2>
            <p>Plus d'informations sur la Projet 5...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


    </section>


  
</div>




