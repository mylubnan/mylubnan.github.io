<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="login_db.php" method="post">


        <div class="container">
            <h1>Login</h1>
            <div class="imgcontainer">
                <img src="./img/img_avatar.png" alt="Avatar" class="avatar">
            </div>
            <hr>

            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>

                        <!-- for message to appear -->
                        <?php echo $_SESSION['error'];

                        /* for the refresh then the message is gone */
                        unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <label for="username" title="Lowercase 3-15, No space or special character!"><b>Username</b></label>
            <input type="text" title="Lowercase 3-15, No space or special character!" placeholder="Enter Username" name="username" id="username" required pattern="^[a-z0-9_-]{3,15}$">

            <label for="password" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

"><b>Password</b></label>
            <input type="password" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

" placeholder="Enter Password" name="password" id="password" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$">

            <div class="input-group">
                <button type="submit" name="login_user" class="btn">Login</button>
            </div>
            <hr>
            <div class="container signin">
                <p>Not yet a member? <a href="register.php">Sign up</a></p>
            </div>
        </div>
    </form>

</body>

</html>