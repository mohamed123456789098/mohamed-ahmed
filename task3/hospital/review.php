<?php 
session_start();
ob_start();
$title = 'review';
include('layouts/header.php');
include('layouts/navbar.php');
?>
<?php 
if(!empty($_POST['change_number'])){
    $_SESSION['phone'] = $_POST['change_number'];
} 


    if(isset( $_POST['submit'])){
        if(isset($_POST['clean']) && isset($_POST['prices']) && isset($_POST['service']) && isset($_POST['doctor']) && isset($_POST['hospital'])){
            $_SESSION['clean'] =$_POST['clean'];
            $_SESSION['prices']= $_POST['prices'];
            $_SESSION['service']= $_POST['service'];
            $_SESSION['doctor']= $_POST['doctor'];
            $_SESSION['hospital']= $_POST['hospital']; 

            $_SESSION['total']=   $_SESSION['clean'] + $_SESSION['prices'] +$_SESSION['service']+  $_SESSION['doctor']+$_SESSION['hospital'];

            
           if( $_SESSION['total'] >= 25){
           $message = "Thank you for your rating";
           }else{
             $message = "We will call you later on this phone : " . $_SESSION['phone']; 
           }
           $_SESSION['finalResult'] = $message;
           header('location:result.php');die;
        }
        else{
           $wrongMessage =  '<div style="background-color: #c51244; box-shadow: 1px 1px 1px #aaaaaa; padding: 10px; text-align:center; font-size:1.5rem; text-shadow: 1px 1px rgba(250,250,250,.3); " > You Must Select All Questions </div>';
        }
    }

// $_POST['change_number'] = $changeNum;
?>

<section id="sec3">
    <div class="container">

    <div class="phone" style="color: ;"> <p>your phone  :  <span>  <?=  $_SESSION['phone']; ?> </span></p>  </div>
    <div class="change_number">
        <form  method="post" id="change_number">
            <input type="number" name="change_number" id="">
            <input type="submit" value="Change Number" id="change_number">
        </form>
    </div>
    <form action="" method="post" id="form_review">


    <div class="review">
           <div class="question">
            <label for="clean">Are you satisfied with the service cleanleness?</label>
            </div>
            <div class="radio">
                  <label for="very good">very good</label>
             <input type="radio" name="clean" id="" value="10">
        <label for="good">good</label>
             <input type="radio" name="clean" id="" value="5">
        <label for="bad">bad</label>
             <input type="radio" name="clean" id="" value="3">
             <label for="very bad">very bad</label>
             <input type="radio" name="clean" id="" value="0">
        </div>   
            </div>


    <div class="review">
           <div class="question">
            <label for="clean">Are you satisfied with the service prices?</label>
            </div>
            <div class="radio">
                  <label for="very good">very good</label>
             <input type="radio" name="prices" id="" value="10">
        <label for="">good</label>
             <input type="radio" name="prices" id="" value="5">
        <label for="">bad</label>
             <input type="radio" name="prices" id="" value="3">
        <label for="">very bad</label>
             <input type="radio" name="prices" id="" value="0">
        </div>   
            </div>
   


        <div class="review">
            <div class="question">
            <label for="clean">Are you satisfied with the nursing service</label>
            </div>
            <div class="radio">
             <label for="">very good</label>
                  <input type="radio" name="service" id="" value="10">
             <label for="">good</label>
                  <input type="radio" name="service" id="" value="5">
             <label for="">bad</label>
                   <input type="radio" name="service" id="" value="3">
                   <label for="">very bad</label>
             <input type="radio" name="service" id="" value="0">
            </div>
        </div>

       <div class="review">
            <div class="question">
            <label for="clean">Are you satisfied with the level of the doctor?</label>
            </div>
            <div class="radio">
             <label for="">very good</label>
                  <input type="radio" name="doctor" id="" value="10">
             <label for="">good</label>
                  <input type="radio" name="doctor" id=""value="5">
             <label for="">bad</label>
                   <input type="radio" name="doctor" id=""value="3">
                   <label for="">very bad</label>
             <input type="radio" name="doctor" id="" value="0">
            </div>
        </div>

        <div class="review">
            <div class="question">
            <label for="clean">Are you satisfied with the calmness in the hospital?</label>
            </div>
            <div class="radio">
             <label for="">very good</label>
                  <input type="radio" name="hospital" id="" value="10">
             <label for="">good</label>
                  <input type="radio" name="hospital" id="" value="5">
             <label for="">bad</label>
                   <input type="radio" name="hospital" id="" value="3">
                   <label for="">very bad</label>
             <input type="radio" name="hospital" id="" value="0">
            </div>
        </div>
    <input style="color: RGB(26,77,148); border:none; width:20%; border-radius :15px;display:block; margin:20px auto; padding:15px; font-size:2rem;"
    type="submit" value="submit" name="submit" id="submit_form">
</form>
<div class="wrongMessage">
    <?= $wrongMessage ?? "" ?>
</div>

    </div>
</section>

<?php
include('layouts/scripts.php');
ob_end_flush();
?>


</style>