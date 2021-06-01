
<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        "squadraCasa" => "Pallacanestro Olimpia Milano",
        "squadraOspite" => "Virtus Pallacanestro Bologna",
        "puntiSquadraCasa" => rand(0,160),
        "puntiSquadraOspite" => rand(0,160)
    ],
    [
        "squadraCasa" => "New Basket Brindisi",
        "squadraOspite" => "Reyer Venezia Mestre",
        "puntiSquadraCasa" => rand(0,160),
        "puntiSquadraOspite" => rand(0,160)
    ],
    [
        "squadraCasa" => "Polisportiva Dinamo",
        "squadraOspite" => "Allianz Pallacanestro Trieste",
        "puntiSquadraCasa" => rand(0,160),
        "puntiSquadraOspite" => rand(0,160)
    ],
    [
        "squadraCasa" => "Pallacanestro Reggiana",
        "squadraOspite" => "Aquila basket Trento",
        "puntiSquadraCasa" => rand(0,160),
        "puntiSquadraOspite" => rand(0,160)
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <ul>
        <?php
        for ($i = 0; $i < count($partite); $i++) {
            $partitaCorrente = $partite[$i];
            $risultatoPartita = "";

            $nomiSquadre = $partitaCorrente["squadraCasa"] . " - " . $partitaCorrente["squadraOspite"];

            $puntiSquadre = $partitaCorrente["puntiSquadraCasa"] . "-" . $partitaCorrente["puntiSquadraOspite"];

            $risultatoPartita = $nomiSquadre . " | " . $puntiSquadre;
        
        ?>

        <li>
            <?php echo $risultatoPartita; ?>
        </li>
        <?php
        }
        ?>
    </ul>
    
</body>
</html>
