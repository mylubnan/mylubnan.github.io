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
    <title>Registration page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="register_db.php" method="post">

        <form action="login_db.php" method="post">

            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
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

                <label for="email" title="Please fill in the proper email"><b>Email</b></label>
                <input type="email" title="Please fill in the proper email" placeholder="Enter Email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                <label for="password_1" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

"><b>Password</b></label>
                <input type="password" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

" placeholder="Enter Password" name="password_1" id="password_1" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$">

                <label for="password_2" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

"><b>Repeat Password</b></label>
                <input type="password" title="Minimum eight characters, at least one upper case English letter, one lower case English letter, one number and one special character

" placeholder="Repeat Password" name="password_2" id="password_2" required pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$">
                <hr>

                <button type="submit" name="reg_user" class="btn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>

</body>

</html>