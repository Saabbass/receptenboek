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
            <section class="white_block">
                <form class="inloggen" action="signUpSession.php" method="post">
                    <div>
                        <h2 class="log">SIGN UP</h2>
                    </div>
                    <div>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    </div>

                    <div>
                        <?php if (isset($_GET['success'])) { ?>
                            <p class="success"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                    </div>

                    <div>
                        <label>Email-address</label>
                        <?php if (isset($_GET['email'])) { ?>
                            <input type="text" name="email" placeholder="email-address" value="<?php echo $_GET['email']; ?>">
                        <?php } else { ?>
                            <input type="text" name="email" placeholder="email-address"><br>
                        <?php } ?>
                    </div>

                    <div>
                        <label>Firstname</label>
                        <?php if (isset($_GET['firstname'])) { ?>
                            <input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET['firstname']; ?>">
                        <?php } else { ?>
                            <input type="text" name="firstname" placeholder="firstname"><br>
                        <?php } ?>
                    </div>

                    <div>
                        <label>Lastname</label>
                        <?php if (isset($_GET['lastname'])) { ?>
                            <input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET['lastname']; ?>">
                        <?php } else { ?>
                            <input type="text" name="lastname" placeholder="lastname"><br>
                        <?php } ?>
                    </div>

                    <div>
                        <label>Address</label>
                        <?php if (isset($_GET['address'])) { ?>
                            <input type="text" name="address" placeholder="address" value="<?php echo $_GET['address']; ?>">
                        <?php } else { ?>
                            <input type="text" name="address" placeholder="address"><br>
                        <?php } ?>
                    </div>

                    <div>
                        <label>City</label>
                        <?php if (isset($_GET['city'])) { ?>
                            <input type="text" name="city" placeholder="city" value="<?php echo $_GET['city']; ?>">
                        <?php } else { ?>
                            <input type="text" name="city" placeholder="city"><br>
                        <?php } ?>
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password"><br>
                    </div>

                    <div>
                        <label>Check password</label>
                        <input type="password" name="check_password" placeholder="check_password"><br>
                    </div>

                    <div>
                        <button type="submit" value=" Submit ">Sign Up</button>
                    </div>

                    <div>
                        <a href="login.php" class="ca">Already have an account?</a>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>