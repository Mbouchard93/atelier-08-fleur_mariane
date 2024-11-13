<?php
function ouvreConnexion() {
    $db_host = "localhost";
    $db_user = "root"; 
    $db_pass = "";
    $db_name = "fleur_db"; 

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    return $conn; 
}

ouvreConnexion();
?>
