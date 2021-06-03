<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$randomNumbersLength = 15;
$randomNumbers = [];

do {
    $number = rand(1, 50);

    if (!in_array($number, $randomNumbers)) {
        $randomNumbers[] = $number;
    }
}while (count($randomNumbers) < $randomNumbersLength);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>

    <h3>Lista di 15 numeri casuali che non si ripetono:</h3>
    <ul>
        <?php
            foreach ($randomNumbers as $element) {
                ?>
                <li>
                    <?php echo $element ?>
                </li>

            <?php
            }
        ?>
    </ul>
    
</body>
</html>