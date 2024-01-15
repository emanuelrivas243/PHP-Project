<?php include('header.php'); ?>

<?php

// Initialize data user form
$nameProject = "";
$imageProject = "";
$descriptionProject = "";
$dateProject =  "";

// Conexion to the database, fix it later or put inside the if statement
include('connection.php');

// User data from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nameProject = $_POST['name'];
    //Data variables
    $dateImage = new DateTime();
    $imageProject = $dateImage->getTimestamp() . "_" . $_FILES['image']['name'];
    $imgTemp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imgTemp, __DIR__ . "/images/" . $imageProject);

    $descriptionProject = $_POST['description'];
    $dateProject = $_POST['date'];
    
    // Connect to the database from include('connection.php')
    $con = new Connection();
    $con->execute_sql("INSERT INTO `project` (`name`, `image`, `description`, `date`) VALUES ('$nameProject', '$imageProject', '$descriptionProject', '$dateProject')");
    header("location: portafolio.php");
}


if($_SERVER['REQUEST_METHOD'] == 'GET') {

    $deleteId =  isset($_GET['delete']) ? $_GET['delete'] : "";

    // Conecction to database, and so then delete the row through id
    $con = new Connection();

    $imageSql = $con->retrieve_data("SELECT `image` FROM `project` WHERE `id`='$deleteId'");
    $image = isset(($imageSql[0]['image'])) ? unlink("images/". $imageSql[0]['image']) : "";

    $con->execute_sql("DELETE FROM project WHERE `project`.`id` = '$deleteId'");
    // header("location: portafolio.php");
}


// SELECT statement data
$con = new Connection();
$retrieveProjects = $con->retrieve_data("SELECT * from project");

?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
        <br/>
        <div class="card">
            <div class="card-header">Project's Data</div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Project Name: <input class="form-control" required type="text" name="name" id=""><br/>
                        Project Image: <input class="form-control" required type="file" name="image" id=""><br/>
                        Project Description: <textarea class="form-control" required name="description" id="" cols="56" rows="3"></textarea><br/>
                        Project Date: <input type="date" required name="date"><br/>
                        <br>
                        <input class="btn btn-success" type="submit" value="Send Project">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <br/>
            <div class="container">
                <div class="table-responsive">
                    <!-- Table of projects -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Project Image</th>
                                <th scope="col">Project Description</th>
                                <th scope="col">Project Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                foreach($retrieveProjects as $project) {
                                    echo "<tr class='table-light'> <td>{$project['id']}</td> <td>{$project['name']}</td> <td> <img src='images/{$project['image']}' width='110' height='70' > </td> <td>{$project['description']}</td> <td>{$project['date']}</td> <td><a class='btn btn-danger' role='button' href='?delete={$project['id']}'>Delete</a></td></tr>";
                                }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<br/>
<br>
<br/>
<?php include 'footer.php'; ?>
