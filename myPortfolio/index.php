<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Dashboard</h1>
        <div class="imgcontainer">
            <img src="./img/img_avatar.png" alt="Avatar" class="avatar">
        </div>
        <hr>

        <div class="content">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <h3>

                        <!-- for message to appear -->
                        <?php echo $_SESSION['success'];

                        /* for the refresh then the message is gone */
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <!-- To show the username to the user -->
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red;">Logout </a></p>
            <?php endif ?>
            <hr>
            <a href="../index.html"><i class="fa-solid fa-house"></i> Home</a>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <h1>Some management tools here</h1>
            <section style="height: 100vh;"></section>
        </div>

</body>

</html>