<?php
require 'database.php';

$sql = "SELECT COUNT(recept_id) as total FROM receptenboek";

$result = mysqli_query($conn, $sql);

$receptCount = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="nl - NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div class="container">
            <div class="header_align">
                <img class="logo" src="images/recipe-by-dall-e.png" alt="foto">
                <h2 class="titel">⭐De receptenboekApp </h2>
                <h2 class="titel">Hoeveelheid recepten: <?php echo $receptCount['total'];?> </h2>
    
                <?php
                include("nav.php");
                ?>
            </div>
        </div>
    </header>
</body>

</html>