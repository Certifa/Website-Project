<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>Forum</title>
</head>
<body>

    <div class="container">
        <h1> Forum registratie</h1>
        
    <form action="success.php" method="post" >
        <label for="username" class="text">Username:</label> <br>
        <input type="text" id="username" name="username">
        <br> <br>
        <label for="email" class="text">Email:</label> <br>
        <input type="text" id="email" name="email">
        <br> <br>
        <label for="password">Password:</label> <br>
        <input type="password" id="password" name="password">
        <br> <br>
        <label for="password">Confirm Password:</label> <br>
        <input type="password" id="password2" name="password2"><br>
        <input id="btn" type="submit">

            <?php
            if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                $errors = [];
                if (empty($username)) {
                    $errors[] = 'Username is required';
                }
                if (empty($email)) {
                    $errors[] = 'Email is required';
                }
                if (empty($password)) {
                    $errors[] = 'Password is required';
                }
                if (empty($password2)) {
                    $errors[] = 'Confirm password is required';
                }
                if ($password != $password2) {
                    $errors[] = 'Passwords do not match';
                }
                if (count($errors) > 0) {
                    foreach ($errors as $error) {
                        echo "<p><strong> $error </strong></p>";
                    }
                } else {
                    echo "<p><strong> Registration successful </strong></p>";
                    header("Location: success.php");
                }
            }
            ?>

        <?php
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "";
            } else {
                echo "<p><strong> $email is not a valid email address </strong></p>";
            } 
        }
        ?> 

        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST["username"];
        }
        ?>

    </form>
    </div>
        </body>
        </html>
