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

$existParking = array_key_exists('parking', $_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=H, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container">
    <h1>PHP - Hotel</h1>
    <?php 
    // echo  " <p>$hasPark</p>";
    echo  $existParking? "si":"no";
    ?>
    <form action="./filter.php" method="GET">
        <label for="parking">Desideri il parcheggio?</label>
        <input type="checkbox" name="parking" id="parking">
        <button type="submit">Cerca</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro (Km)</th>
            </tr>
        </thead>
        <tbody>
           
    <?php 
        foreach($hotels as $hotel){
            if($existParking && !$hotel["parking"]){

            } else {

                $hasPark = $hotel["parking"]? "Parcheggio privato": "NO parcheggio";
                echo  "<tr>
                <td>$hotel[name]</td>
                <td>$hotel[description]</td>
                <td>$hasPark</td>
                <td>$hotel[vote]</td>
                <td>$hotel[distance_to_center]</td>
                </tr>";
                
                }
            
            }

            
    ?>

        </tbody>
    </table>
</body>
</html>

        <!-- echo "<h3>$hotel[name]</h3>";
        echo "<p>$hotel[description]</p>";
        echo $hotel["parking"]? "<p>Parcheggio privato</p>": "<p>NO parcheggio</p>";
        echo "<p>Voto: $hotel[vote]/5</p>";
        echo "<p>A $hotel[distance_to_center]km dal centro</p>"; -->