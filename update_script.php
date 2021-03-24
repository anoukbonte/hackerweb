<?php
    // maak contact met de mysqlserver en database
    include ("./connect_db.php");

    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $infix = $_POST["infix"];
    $lastname = $_POST["lastname"];
    $birthday = $_POST["birthday"];
    $BSN = $_POST["BSN"];
    $phone = $_POST["phone"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];

    $sql = "UPDATE `users`
                SET `firstname` = '$firstname', 
                    `infix`= '$infix', 
                    `lastname` = '$lastname',
                    `birthday` = '$birthday',
                    `BSN` = '$BSN', 
                    `phone` = '$phone',
                    `adres` = '$adres',  
                    `email` = '$email' 
                WHERE `id` = $id;";

    mysqli_query($conn, $sql);

?>
