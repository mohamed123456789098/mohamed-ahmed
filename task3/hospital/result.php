<?php 
session_start();
$title = 'result';
include('layouts/header.php');
include('layouts/navbar.php');
// $_SESSION['clean'] ;
// $_SESSION['prices'];
// $_SESSION['service'];
// $_SESSION['doctor'];
// $_SESSION['hospital']; 
if($_SESSION['clean'] == 0){
$_SESSION['clean'] = 'VeryBad';
}elseif($_SESSION['clean'] == 3){
    $_SESSION['clean'] = 'Bad';
}elseif($_SESSION['clean'] == 5){
    $_SESSION['clean'] = 'Good';
}elseif(  $_SESSION['clean'] == 10){
    $_SESSION['clean'] = 'Very Good';
}

if($_SESSION['prices'] == 0){
$_SESSION['prices'] = 'VeryBad';
}elseif($_SESSION['prices'] == 3){
    $_SESSION['prices'] = 'Bad';
}elseif($_SESSION['prices'] == 5 ){
    $_SESSION['prices'] = 'Good';
}elseif(  $_SESSION['prices'] == 10){
    $_SESSION['prices'] = 'Very Good';
}

if($_SESSION['service'] == 0){
    $_SESSION['service'] = 'VeryBad';
    }elseif($_SESSION['service'] == 3){
        $_SESSION['service'] = 'Bad';
    }elseif($_SESSION['service'] == 5  ){
        $_SESSION['service'] = 'Good';
    }elseif(  $_SESSION['service'] == 10){
        $_SESSION['service'] = 'Very Good';
    }

if($_SESSION['doctor'] == 0){
    $_SESSION['doctor'] = 'VeryBad';
    }elseif($_SESSION['doctor'] == 3){
        $_SESSION['doctor'] = 'Bad';
    }elseif($_SESSION['doctor'] == 5){
        $_SESSION['doctor'] = 'Good';
    }elseif(  $_SESSION['doctor'] == 10){
        $_SESSION['doctor'] = 'Very Good';
    }

if($_SESSION['hospital'] == 0){
    $_SESSION['hospital'] = 'VeryBad';
    }elseif($_SESSION['hospital'] == 3){
        $_SESSION['hospital'] = 'Bad';
    }elseif($_SESSION['hospital'] == 5){
        $_SESSION['hospital'] = 'Good';
    }elseif(  $_SESSION['hospital'] == 10){
        $_SESSION['hospital'] = 'Very Good';
    }


    if($_SESSION['total'] >= 25){
      $evaluation = 'Good';
    }else{
        $evaluation = 'Bad';
    }
?>

<style>
    .content{
        display: flex;
        justify-content: space-between;
       
    }

</style>
<section id="sec4">
<div class="container">
<div class="q-a">
    <p>Question</p>
    <p>Reviews</p>
</div>

<div class="content" style="padding: 5px; border-bottom:1px solid black;margin-bottom:10px;">
    <h3>Are you satisfied with the service cleanleness?</h3>
    <h5><?=  $_SESSION['clean'] ?> </h5>
</div>
<div class="content"  style="padding: 5px; border-bottom:1px solid black;margin-bottom:10px;">
<h3>Are you satisfied with the service prices?</h3>
<h5><?=  $_SESSION['prices'] ?> </h5>
</div>
<div class="content"  style="padding: 5px; border-bottom:1px solid black;margin-bottom:10px;">
<h3>Are you satisfied with the nursing service</h3>
<h5><?=  $_SESSION['service'] ?> </h5>
</div>
<div class="content"  style="padding: 5px; border-bottom:1px solid black;margin-bottom:10px;">
<h3>Are you satisfied with the level of the doctor?</h3>
<h5><?=  $_SESSION['doctor'] ?> </h5>
</div>
<div class="content"  style="padding: 5px; border-bottom:1px solid black;margin-bottom:10px;">
<h3>Are you satisfied with the calmness in the hospital?</h3>
<h5><?=  $_SESSION['hospital'] ?> </h5>
</div>
<div class="q-a">
<p>TOTAL REVIEW</p>
<p><?= $evaluation ?></p>
</div>
<div style="   background-color: RGB(1,201,148);
   color: wheat;
   padding: 15px 10px;
   font-size: 2rem; text-align:center ;">
    <?= $_SESSION['finalResult'] ?>
</div>
</div>
</section>


















<?php 
include('layouts/scripts.php');
?>

