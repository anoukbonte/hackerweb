<?php
    // echo "Hallo wereld<br>";

    // $firstname = "Anouk";

    // $age = 19;

    // echo "Mijn voornaam is: " . $firstname ." en mijn leeftijd is: " . $age . "<br>";

    // // Index array
    // $username = array("1", "Anouk", " ", "Bonte");

    // echo "mijn id is: " . $username[0] . "<br>";
    // echo "mijn voornaam is: " . $username[1] . "<br>";
    // echo "mijn tussenvoegsel is: " . $username[2] . "<br>";
    // echo "mijn achternaam is: " . $username[3] . "<br>";

    // echo "<hr>";

    // // Associatief array
    // $username = array("id" => 1, "firstname" => "Anouk","infix" => " ", "lastname" => "Bonte");

    // echo "mijn id is: " . $username["id"] . "<br>";
    // echo "mijn voornaam is: " . $username["firstname"] . "<br>";
    // echo "mijn tussenvoegsel is: " . $username["infix"] . "<br>";
    // echo "mijn achternaam is: " . $username["lastname"] . "<br>";

    // echo "<pre>"; echo var_dump($username); echo "</pre>";

    // echo "<pre>"; echo var_dump($_POST); echo "</pre>";

    // echo "<hr>";

    // echo "Mijn voornaam is: " . $_POST["firstname"] . "<br>";
    // echo "Mijn tussenvoegsel is: " . $_POST["infix"] . "<br>";
    // echo "Mijn achternaam is: " . $_POST["lastname"] . "<br>";

?>

<?php
    include("./connect_db.php");

    //include("./functions.php");

    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $birthday = sanitize($_POST["birthday"]);
    $bsn = sanitize($_POST["bsn"]);
    $phone = sanitize($_POST["phone"]);
    $adres = sanitize($_POST["adres"]);
    $email = sanitize($_POST["email"]);
    

    // Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel users
    $sql = "INSERT INTO `users` (`id`, `firstname`, `infix`, `lastname`, `birthday`, `bsn`, `phone`, `adres`, `email`) VALUES (NULL, '$firstname', '$infix', '$lastname', '$birthday', '$bsn', '$phone', '$adres', '$email')";
    // Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt
    echo $sql; 
    exit;
    mysqli_query($conn, $sql);

    header("Location: ./read.php")
    var_dump($sql)
?>