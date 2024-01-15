<?php

    /**
     * Save data from a form
     * for a user
     * using arrays' functions-methods
     */

    if ($_POST){
        //$user = $_POST['user'];
        //$password = $_POST['password'];

        $dataUser = [
            "u" => $_POST['user'],
            "p" => $_POST['password'],
        ];

        array_push($dataUser, 20);
        
        echo "You're logged, sir!" . "<br>";

        foreach($dataUser as &$v) {
            echo $v . "<br>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h3>Introduce your data, please: </h3>
    <form action="ejercicio23.php" method="post">
        User:
        <input type="text" name="user" id="user"><br>
        Password:
        <input type="password" name="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>