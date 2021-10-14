<?php
require_once('php.php');
$fietsen = $pdo->prepare("SELECT * FROM `fietsen` WHERE `id`= :id");
$fietsen->bindParam('id' , $_GET['id']);
$fietsen->execute();
$klant = $pdo->prepare("SELECT * FROM klant_besteld");
echo $pdo->lastInsertId();
$klant->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveer</title>
</head>

<body>
    <a href="reserveer.php"><= terug</a>
        <h1><?php ?></h1>
            <h1><?php
                foreach ($fietsen as $fietsen1) {
                    echo $fietsen1['soort'];
                }
                ?></h1>
            <p><?php echo $fietsen1['fiets']; ?></p>


</body>

</html>