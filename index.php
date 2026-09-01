<?php 
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=H, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP - Hotel</h1>
    <?php 
    foreach($hotels as $hotel){
        echo "<h3>$hotel[name]</h3>";
        echo "<p>$hotel[description]</p>";
        echo $hotel["parking"]? "<p>Parcheggio privato</p>": "<p>NO parcheggio</p>";
        echo "<p>Voto: $hotel[vote]/5</p>";
        echo "<p>A $hotel[distance_to_center]km dal centro</p>";
    }
    ?>
</body>
</html>