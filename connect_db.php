<?php
    // Met deze gegevens kunnen we inloggen op de mysql-server en een database selecteren 
    define ("SERVERNAME", "localhost");
    define ("USERNAME", "root");
    define ("PASSWORD", "");
    define ("DBNAME", "project_hacker");

    // Met deze functie maken we contact met de mysql-server
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

?>