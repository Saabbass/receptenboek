<?php
session_start();
require 'database.php';

$sql = "SELECT gerecht_id, titel, afbeelding FROM receptenboek";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
                <h2 class="recept_catagory">Onze recepten</h2>
                <div class="recept_container">
                    <section class="cards_container">
                        <?php foreach($recepten as $recept):?>
                            <a href="recept.php">
                                <div class="card">
                                    <div class="card_image">
                                        <img class="card_img" src="images/<?php echo $recept['afbeelding']?>" alt="">
                                    </div>
                                    <h2>
                                        <?php echo $recept['titel']?>
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