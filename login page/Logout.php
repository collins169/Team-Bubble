<?php
session_start();
session_destroy();

header('location:Login.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>




<body>


    <div class="bdy">

        <div class="container">

            <div class="null"></div>

            <div class="wrapper">
                <img src="https://res.cloudinary.com/esther/image/upload/v1568825271/Group_3x.svg">
                <div class="forms">
                    <form action="Login.php" method="POST">
                        <p>
                            <input type="text" required name="txtUser" placeholder="Email/Username" class="Username">
                        </p>

                        <input type="password" required name="txtPass" placeholder="Password" class="password">



                </div>

                <input type="submit" value="Log In" class="button">

                </form>
                <input type="checkbox" value="">Remember me
                <p><a class="signup" href="#">Create an account </a></p>


            </div>
        </div>
    </div>


</body>

</html>