<?php echo form_open('Contact/save'); ?>

    <table>
        <thead>
            <tr>
                <h1>Contactez moi :</h1>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td><?php echo form_input('prenom', set_value('prenom'), 'required'); ?></td>
                <?= validation_show_error('prenom') ?>
            </tr>


            <tr>
                <td><label for="nom">Nom :</label></td>
                <td><?php echo form_input('nom', set_value('nom'), 'required'); ?></td>
                <?= validation_show_error('nom') ?>
            </tr>


            <tr>
                <td><label for="email">Email :</label></td>
                <td><?php echo form_input('email', set_value('email'), 'required'); ?></td>
                <?= validation_show_error('email') ?>
            </tr>


            <tr>
                <td><label for="telephone">Téléphone :</label></td>
                <td><?php echo form_input('telephone', set_value('telephone'), 'required'); ?></td>
                <?= validation_show_error('telephone') ?>

            </tr>


            <tr>
                <td><label for="objet">Objet :</label></td>
                <td><?php echo form_input('objet', set_value('objet'), 'required'); ?></td>
                <?= validation_show_error('objet') ?>

            </tr>


            <tr>
                <td><label for="message">Message :</label></td>
                <td><?php echo form_textarea('message', set_value('message'), 'required'); ?></td>
                <?= validation_show_error('message') ?>
            </tr>

           

        </tbody>
    </table>

    <?php echo form_submit('submit', 'Valider'); ?>

    <?php echo form_close(); ?>

    