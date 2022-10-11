<?php
session_start();
include('layouts/header.php');

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['countmembers'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['countmembers'] = $_POST['countmembers'] ;
        header('location:Games.php');die;
}
 }      


?>



    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label>Member Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="username">
                <small class="form-text text-muted">Club subscription starts with 10,000 LE</small>
            </div>
            <div class="form-group">
                <label>Count of family members</label>
                <input type="number" class="form-control" name="countmembers" value=<?= $_POST['countmembers'] ?? "" ?>>
                <small class="form-text text-muted">Cost of each members is 2,500 LE</small>
            </div>
            <button id="submit" type="submit" name="submit" class="btn btn-primary">subscribe</button>

        </form>
    </div>



    <?php 
include('layouts/scripts.php');
?>

<style>
    .container {
        width: 30%;
        margin: auto;
        color: wheat;
    }
</style>