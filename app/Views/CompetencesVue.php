
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

        // Cache les éléments .content
        var competencesContent = document.querySelectorAll('.content');
        competencesContent.forEach(function (content) {
            content.style.display = 'none';
        });        

        // Masque le titre
        var compTitle = document.querySelectorAll('.titre-cp');
        compTitle.forEach(function (detail) {
            detail.style.display = 'none';
        });

    }

    function retourEtatInitial() {
        // Affiche tous les éléments .content
        var competencesContent = document.querySelectorAll('.content');
        competencesContent.forEach(function (content) {
            content.style.display = 'block';
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
        
    }
</script>




<h1 class="titre-cp">Compétences</h1>

<div  class="container">
    <section class="bouton-container">

        <article class="content red bouton-case" onclick="afficherCompetence('competence1')">
            <h2>Compétence 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>

        <article class="content red bouton-case" onclick="afficherCompetence('competence2')">
            <h2>Compétence 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>

        <article class="content red bouton-case" onclick="afficherCompetence('competence3')">
            <h2>Compétence 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt mi ac nibh commodo sodales. Quisque hendrerit dapibus turpis et tempor.</p>
        </article>

    </section>



    <section>

        <article id="competence1Details" class="competence-details" style="display: none;">
            <h1>Compétence 1 - Détails</h1>
            <p>Plus d'informations sur la Compétence 1...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="competence2Details" class="competence-details" style="display: none;">
            <h1>Compétence 2 - Détails</h1>
            <p>Plus d'informations sur la Compétence 2...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>


        <article id="competence3Details" class="competence-details" style="display: none;">
            <h1>Compétence 3 - Détails</h1>
            <p>Plus d'informations sur la Compétence 3...</p>
            <button onclick="retourEtatInitial()">Retour</button>
        </article>
    
    </section>

</div>







