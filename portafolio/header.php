<?php 
    session_start();
    if(isset($_SESSION['user']) != "GamerLink243") {
        // Dont let the user navigate through the website, if the person's username
        // is different than GamerLink243
        // all this data is saved in $_SESSION, the current data session
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>



<div class="container">
    <header>
        <a href="index.php" class="lead">Homepage</a> |
        <a href="portafolio.php" class="lead">View Projects</a> |
        <a href="logout.php" class="lead">Close</a> |
    </header>
</div>



</body>
</html>