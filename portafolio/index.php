<?php include ('header.php'); ?>
<?php include ('connection.php');?>

<?php

$con = new Connection();
$retrieveProjects = $con->retrieve_data("SELECT * from project");
// print_r($retrieveProjects);
?>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-4">Welcome to Emanuel's Portfolio</h1>
        <p class="lead">
            My portfolio, y'know
        </p>
        <hr class="my-2">
    </div>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($retrieveProjects as $projects) { ?>
    <div class="col">
        <div class="card">
            <img src="<?php echo 'images/'. $projects['image']?>" width='10' height='180' class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $projects['name']?> </h5>
            <p class="card-text"> <?php echo $projects['description']?> </p>
        </div>
    </div>
  </div>
<?php }?>

<div/>  

<!-- <?php include 'footer.php'; ?> -->