<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['txtUser'] == "GamerLink243" && $_POST['txtPassword'] == "link2431") {
        session_start();
        $_SESSION['user'] = $_POST['txtUser'];
        header("Location: index.php");
    } else {
        echo "<script> alert('There's something wrong with your password and/or username') </script>";
    }
}


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        </header>

        <main>
            <div class="container">
            <div class="row">
            <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Login</h2>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" action="login.php" method="post">
    
                <div class="text-center">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control" name="txtUser" id="" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="txtPassword" id="" placeholder="Password">
                </div>
                <div class="text-center"><button type="submit" class="btn btn-success px-5 mb-5 w-100">Enter to Portfolio</button></div>
              </form>
            </div>
    
            </div>
            </div>
            </div>
        </main>
    </body>
</html>
