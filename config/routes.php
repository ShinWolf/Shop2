<?php
    
function getPage(){
    $lesPages['accueil'] = "accueilControleur";
    $lesPages['contact'] = "contactControleur";
    $lesPages['about'] = "aboutControleur";
    $lesPages['mention'] = "mentionControleur";
    $lesPages['inscrire'] = "inscrireControleur";

    if (isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 'accueil';
    }
    if (isset($lesPages[$page])){
        $contenu = $lesPages[$page];
    } else {
        $contenu = $lesPages['accueil'];
    }
    return $contenu; 
}
?>