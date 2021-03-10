<?php
    function accueilControleur($twig){
        echo $twig->render('accueil.html.twig', array());
    }
    function maintenanceControleur($twig) {
        echo $twig->render('maintenance.html.twig', array());
    }
    function contactControleur($twig){
        echo $twig->render('contact.html.twig', array());
    }
    function mentionControleur($twig){
        echo $twig->render('mention.html.twig', array());
    }
    function aboutControleur($twig){
        echo $twig->render('about.html.twig', array());
    }
    function inscrireControleur($twig){
        $form =array();
        if (isset($_POST['btInscrire'])) {
            $inputEmail = $_POST['inputEmail'];
            $inputPassword = $_POST['inputPassword'];
            $inputPassword2 = $_POST['inputPassword2'];
            $role = $_POST['role'];
            $form['valid'] = true;
            if ($inputPassword != $inputPassword2) {
                $form['valide'] = false;
                $form['message'] = 'Les mots de passe sont différents';
            }
            $form['eamil'] = $inputEmail;
            $form['role'] = $role;
        }
        echo $twig->render('inscrire.html.twig', array('form' => $form));
    }
?>