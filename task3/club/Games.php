<?php 
session_start();
include('layouts/header.php');




$_SESSION['countmembers'] ;



$members = "<form method=post>";
for ($i = 0; $i <= $_SESSION['countmembers'] - 1; $i++) {
    $members .=   "<div> <h3> member ";
    $members.= $i+1 ;
    $members .=  "</h3>
<input type=text name=members$i>
<br>
<input type=checkbox name=football[]  value=300>
<label>Footbal 300 LE</label>
<br>
<input type=checkbox name=swimming[] value=250>
<label>Swimming 250 LE</label>
<br>
<input type=checkbox name=volley[]  value=150>
<label>volley Ball 150 LE</label>
<br>
<input type=checkbox name=other[] value=100>
<label>Others 100 LE</label> 
</div>";
}
$members .= "<input type=submit value=submit name = submitprice id=submitprice>

</form>";





if(isset($_POST['submitprice'])){

    if(!empty($_POST['football'])){
      $_SESSION['totalfootball'] = array_sum($_POST['football']);  
    }else{
        $_SESSION['totalfootball'] = 0;
    }

    if(!empty($_POST['swimming'])){
       $_SESSION['totalswimming'] = array_sum($_POST['swimming']);
    }else{
        $_SESSION['totalswimming'] = 0;
    }

    if(!empty($_POST['volley'])){
       $_SESSION['totalvolley'] = array_sum($_POST['volley']);
    }else{
        $_SESSION['totalvolley'] = 0; 
    }

    if(!empty($_POST['volley'])){
        $_SESSION['totalother'] = array_sum($_POST['other']);
    }else{
        $_SESSION['totalother'] =0;
    }
    
     $_SESSION['totalclubsub'] = (10000 )+ ($_SESSION['countmembers'] * 2500 ) ; 

   $_SESSION['totalprice'] =$_SESSION['totalclubsub'] + $_SESSION['totalother'] + $_SESSION['totalvolley'] + $_SESSION['totalswimming'] +$_SESSION['totalfootball'] ; 

    header('location:Result.php');die;  
}







?>










<?= $members ?? '' ?>




<?php 
include('layouts/scripts.php');
?>
<style>
    form{
        width: 50%;
        margin: auto;
    }
    h3{
font-size: 1.6rem;
        font-weight: 900;
    }
    form div {
        margin-bottom: 30px;
        text-align: center;
    }
    #submitprice{
        width: 50%;
        display: block;
        margin: auto;
        margin-bottom: 10px;
    }

</style>