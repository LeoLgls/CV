<?php

namespace App\Controllers;

class Contact extends BaseController
{

    public function __construct()
    {
        //Chargement du helper Form
        helper(['form']);
    }



    public function index()
    {
        echo view('commun/header');
        echo view('ContactVue');
        echo view('commun/footer');     
    }




    public function save()
    {
        $validationRules = [
            'prenom' => 'trim|required|min_length[1]|max_length[20]',
            'nom' => 'trim|required|min_length[1]|max_length[20]',
            'telephone' => 'required|numeric',
            'email' => 'required|valid_email',
            'objet' => 'trim|required|min_length[1]|max_length[30]',
            'message' => 'required|min_length[1]|max_length[1000]'
        ];

        $isValid = $this->validate($validationRules);

        if (!$isValid) 
        {
            // Des erreurs de validation se sont produites, affiche la vue avec les erreurs
            return view('commun/header') .
                   view('ContactVue', ['validation' => $this->validator]) .
                   view('commun/footer');
        } 
        else 
        {
            // Le formulaire est valide, traiter les données et afficher le succès
            $request = \Config\Services::request();
            $data['info'] = $request->getPost();


            $email = \Config\Services::email();


            // Préparation de l'e-mail 
            $to = 'langlois76190@gmail.com';

            // Je prépare le message
            $message = "Nom: {$data['info']['nom']}\n";
            $message .= "Prénom: {$data['info']['prenom']}\n";
            $message .= "Téléphone: {$data['info']['telephone']}\n";
            $message .= "Email: {$data['info']['email']}\n\n";


            // Récupère l'adresse e-mail depuis le formulaire
            $from = $request->getPost('email');
            $subject = $request->getPost('objet');
            $message .= $request->getPost('message');


            $email->setTo($to); 
            $email->setFrom($from); 
            $email->setSubject($subject); 
            $email->setMessage($message);


             // Envoie l'e-mail
            if ($email->send()) {
                echo view('commun/header');
                echo view('ContactVue');
                echo view('commun/footer');


                echo '<script>';
                    echo 'Swal.fire({';
                    echo '  icon: "success",';
                    echo '  title: "Mail envoyé avec succès!",';
                    echo '})';
                echo '</script>';


            } else {
                // Une erreur s'est produite lors de l'envoi de l'e-mail
                echo view('commun/header');
                echo '<span style=\'color: red; font-size: 18px;\'>'.esc($email->printDebugger()).'</span>';
                echo view('ContactVue');
                echo view('commun/footer');

                echo '<script>';
                echo 'Swal.fire({';
                echo '  icon: "error",';
                echo '  title: "Erreur lors de l\'envoi de l\'e-mail",';
                echo '})';
                echo '</script>';
            }

        }


    }


}

?>