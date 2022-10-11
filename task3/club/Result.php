<?php 
session_start();
include('layouts/header.php');


?>



<div class="container">

<div class="main">
    <h2>Football club</h2>
    <h3> <?= $_SESSION['totalfootball']?>   EGP</h3>
</div>
<div class="main">
    <h2>Swimming club</h2>
    <h3> <?= $_SESSION['totalswimming'] ?>  EGP</h3>
</div>
<div class="main">
    <h2>Volley club</h2>
    <h3> <?= $_SESSION['totalvolley'] ?>   EGP</h3>
</div>
<div class="main">
    <h2>Others club</h2>
    <h3>  <?= $_SESSION['totalother'] ?>  EGP</h3>
</div>
<div class="main">
    <h2>Club subscription</h2>
    <h3>  <?= $_SESSION['totalclubsub'] ?>  EGP</h3>
</div>
<div class="main">
    <h2>Total Price</h2>
    <h3>  <?= $_SESSION['totalprice'] ?>  EGP</h3>
</div>

</div>


















    <?php 
include('layouts/scripts.php');
?>


<style>
.container{
    width: 70%;
    margin: auto;
}
    .main {
     display: flex;
     background-color: green;
     margin-bottom: 5px;
     justify-content: space-between;
     color: wheat;
     padding: 10px;
    }
</style>