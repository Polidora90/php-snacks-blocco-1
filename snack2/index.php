<!-- ## Snack 2
Passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = "";
$mail = "";
$age = "";

if (key_exists("name", $_GET)) {
    $name = $_GET["name"];
};

if (key_exists("mail", $_GET)) {
    $mail = $_GET["mail"];
};

if (key_exists("age", $_GET)) {
    $age = $_GET["age"];
};

$result = true;

if (!strpos($mail, "@") || !strpos($mail, ".", strpos($mail, "@"))) {
    $result = false;
};

if (!is_numeric($age)) {
    $result = false;
};

if (strlen($name) < 4) {
    $result = false;
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

<?php

if ($result == true) {

    ?>
    <h1> Accesso riuscito </h1>
    <?php
} else {

    ?>
    <h1> Accesso negato </h1>
    <?php
}

?>


    
</body>
</html>