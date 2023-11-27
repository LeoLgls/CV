<div class="container">


<h1>Contactez moi</h1>



    <?php echo form_open('Contact/save'); ?>



    
            <div class="element-form">
                <p><label for="prenom">Prénom :</label></p>
                <span><?php echo form_input('prenom', set_value('prenom'), 'required'); ?></span>
                <?= validation_show_error('prenom') ?>
            </div>
                
            <div class="element-form">
                <p><label for="nom">Nom :</label></p>
                <span><?php echo form_input('nom', set_value('nom'), 'required'); ?></span>
                <?= validation_show_error('nom') ?>
            </div>
                
            <div class="element-form">
                <p><label for="email">Email :</label></p>
                <span><?php echo form_input('email', set_value('email'), 'required'); ?></span>
                <?= validation_show_error('email') ?>
            </div>

            <div class="element-form">
                <p><label for="telephone">Téléphone :</label></p>
                <span><?php echo form_input('telephone', set_value('telephone'), 'required'); ?></span>
                <?= validation_show_error('telephone') ?>
            </div>

            <div class="element-form">
                <p><label for="objet">Objet :</label></p>
                <span><?php echo form_input('objet', set_value('objet'), 'required'); ?></span>
                <?= validation_show_error('objet') ?>
            </div>


            <div class="element-form">
                <p><label for="message">Message :</label></p>
                <span><?php echo form_textarea('message', set_value('message'), 'required'); ?></span>
                <?= validation_show_error('message') ?>
            </div>

    

            <span class="submit"><?php echo form_submit('submit', 'Valider'); ?></span>


       
        
    <?php echo form_close(); ?>


</div>
'submit', 'Valider'); ?>

    <?php echo form_close(); ?>