<?php
session_start();

require 'database.php';

// $sql1 = "SELECT MAX(bereidingsduur), recept_id, titel, afbeelding FROM receptenboek ";
$sql1 = "SELECT * FROM receptenboek WHERE bereidingsduur = (SELECT MAX(bereidingsduur) FROM receptenboek)";

$result = mysqli_query($conn, $sql1);

$recepten_maxtime = mysqli_fetch_all($result, MYSQLI_ASSOC);


$sql2 = "SELECT recept_id, titel, afbeelding FROM receptenboek WHERE niveau = 'makkelijk'";

$result = mysqli_query($conn, $sql2);

$recepten_easy = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql3 = "SELECT * FROM receptenboek WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM receptenboek)";

$result = mysqli_query($conn, $sql3);

$recepten_maxingredients = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="nl - NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>De ReceptenboekApp</title>
</head>

<body>
    
    <?php
    include("header.php");
    ?>

    <div class="container">
        <div class="page_height">
            <div class="white_block">
                <h2 class="recept_orderd">De recepten met de langste bereidingsduur</h2>
                <div class="recept_container">
                    <section class="cards_container">
                        <?php foreach($recepten_maxtime as $rmaxtime):?>
                            <a href="recept.php?id=<?php echo $rmaxtime['recept_id']?>">
                                <div class="card">
                                    <div class="card_image">
                                        <img class="card_img" src="images/<?php echo $rmaxtime['afbeelding']?>" alt="">
                                    </div>
                                    <h2>
                                        <?php echo $rmaxtime['titel']?>
                                    </h2>
                                </div>
                            </a>
                        <?php endforeach;?>
                    </section>
                </div>
                <h2 class="recept_orderd">De makkelijkste recepten</h2>
                <div class="recept_container">
                    <section class="cards_container">
                        <?php foreach($recepten_easy as $reasy):?>
                            <a href="recept.php?id=<?php echo $reasy['recept_id']?>">
                                <div class="card">
                                    <div class="card_image">
                                        <img class="card_img" src="images/<?php echo $reasy['afbeelding']?>" alt="">
                                    </div>
                                    <h2>
                                        <?php echo $reasy['titel']?>
                                    </h2>
                                </div>
                            </a>
                        <?php endforeach;?>
                    </section>
                </div>
                <h2 class="recept_orderd">De recepten met de meeste ingrediënten</h2>
                <div class="recept_container">
                    <section class="cards_container">
                        <?php foreach($recepten_maxingredients as $rmax):?>
                            <a href="recept.php?id=<?php echo $rmax['recept_id']?>">
                                <div class="card">
                                    <div class="card_image">
                                        <img class="card_img" src="images/<?php echo $rmax['afbeelding']?>" alt="">
                                    </div>
                                    <h2>
                                        <?php echo $rmax['titel']?>
                                    </h2>
                                </div>
                            </a>
                        <?php endforeach;?>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>