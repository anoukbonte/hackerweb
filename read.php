<?php
    include("./connect_db.php");

    $per_page = 2;

    $sql = "SELECT * FROM `users`";

    // Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    $pages = ceil($count/$per_page);

    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }

    $start = ($page-1)*$per_page;

    $sql = "SELECT * FROM `users` order by id limit $start,$per_page";

    $records = "";
    // De while loop geeft alle gegevens weer uit de tabel users
    while ($record = mysqli_fetch_assoc($result)){
        $records .= "<tr>
                        <th scope= 'row'>" . $record["id"] . "</th>
                        <td>" . $record["firstname"] . "</td>
                        <td>" . $record["infix"] . "</td>
                        <td>" . $record["lastname"] . "</td>
                        <td>" . $record["birthday"] . "</td>
                        <td>" . $record["bsn"] . "</td>
                        <td>" . $record["phone"] . "</td>
                        <td>" . $record["adres"] . "</td>
                        <td>" . $record["email"] . "</td>
                        <td>
                            <a href='./update.php?id=" . $record["id"]  . "'>
                                <img src='./img/icons/b_edit.png' alt='pencil'>
                            </a>
                        </td>
                        <td>
                            <a href='./delete.php?id=" . $record["id"]  . "'>
                                <img src='./img/icons/b_drop.png' alt='cross'>
                            </a>
                        </td>
                    </tr>";
    }

?>
<link rel="stylesheet" href="styleform.css">
<!DOCTYPE html>
<link rel="shortcut icon" href="./Image/Extra/favicon.ico" type="image/x-icon"> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Inschijf formulier</title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Inschijven</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Voornaam</span>
            <input type="text" placeholder="Schijf je voornaam" required name="firstname">
          </div>
          <div class="input-box">
            <span class="details">Tussenvoegsel</span>
            <input type="text" placeholder="Schijf je Tussenvoegsel" required name="infix">
          </div>
          <div class="input-box">
            <span class="details">Achternaam</span>
            <input type="text" placeholder="Schijf je achternaam" required name="lastname">
          </div>
          <div class="input-box">
            <span class="details">Geboortedatum</span>
            <input type="text" placeholder="Je Geboortedatum" required name="birthday">
          </div>
          <div class="input-box">
            <span class="details">BSN nummer</span>
            <input type="text" placeholder="Schijf je BSN nummer" required name="BSN">
          </div>
                    <div class="input-box">
            <span class="details">Telefoon nummer</span>
            <input type="text" placeholder="Schijf je Telefoon nummer" required name="phone">
          </div>
          <div class="input-box">
            <span class="details">Adres</span>
            <input type="text" placeholder="Schijf je adres" required name="adres" >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Huidige email" required name="email">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Geslacht</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Vrouw</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Man</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Zeg ik liever niet</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
