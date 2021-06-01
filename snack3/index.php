<!-- ## Snack 3
Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->

<?php


$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>


<ul>
    <?php
    $keysMap = array_keys($posts);

    for ($i = 0; $i < count($posts); $i++) {
        //ad ogni ciclo recupero la key corrispondente all'indice
        $key = $keysMap[$i];
    
        //uso la chiave per recuperare il valore associato a quella chiave (l'array con al suo interno i post)
        $value = $posts[$key];
        
        ?>
        <li> <?php echo $key ?> </li>
        <ul>
            <?php
            for ($y = 0; $y < count($value); $y++) {
                $singlePost = $value[$y];
                ?>

                <li>
                    <strong><?php echo $singlePost["title"] ?></strong><br>
                    <em><?php echo $singlePost["author"] ?></em><br>
                    <p><?php echo $singlePost["text"] ?></p>
                </li>

            <?php
            }
            ?>
        </ul>
    </li>
    
    <?php
    };
    ?>
  
</ul>
</body>
</html>