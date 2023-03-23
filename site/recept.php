<?php
session_start();
require 'database.php';

$receptid = $_GET['id'];

$sql = "SELECT * FROM receptenboek WHERE recept_id = $receptid";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (!is_object($result)) {
    header("location: productInfo.php");
    exit;
}

if (mysqli_num_rows($result) <= 0) {
    echo "This product doens't exist!!";
    exit;
}

$recept = mysqli_fetch_assoc($result);

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
                <?php foreach ($recepten as $recept) : ?>
                    <div class="tekst_titel">
                        <h2><?php echo $recept['titel'] ?></h2>
                    </div>
                    <div class="tekst_container">
                        <div class="tekst">
                            <p>
                                <?php echo $recept['werkwijze'] ?>
                            </p>
                        </div>

                        <div class="image_container">
                            <img src="images/<?php echo $recept['afbeelding'] ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>