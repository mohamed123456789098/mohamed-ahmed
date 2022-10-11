<?php

if(isset($_POST['calculate'])){
if(!empty($_POST['username'])
&& !empty($_POST['loan_amount']) 
&& !empty($_POST['loan_years']) ){

if($_POST['loan_years']<=3 ){
    $percentage = .10;
}else{
    $percentage = .15;
}
$interest_rate = $_POST['loan_amount'] * $percentage * $_POST['loan_years'] ;
$_POST['username'];
 $interest_rate ;
$_POST['loan_amount'] + $interest_rate ;
 $_POST['loan_amount'] + $interest_rate / ($_POST['loan_years']*12) ;

 $result =  '<div class="container">
 <div class="username">
     <h2>User Name</h2>
     <h4>';
     $result .= $_POST['username']; 
     $result .= '</h4>
 </div>
 <div class="interest_rate">
     <h2>Interest Rate</h2>
     <h4>';  $result .= $interest_rate ;
      $result .= ' Egp</h4>
 </div>
 <div class="loan_after_interest">
     <h2>Loan After Interest</h2>
     <h4>'; $result .= $_POST['loan_amount'] + $interest_rate ;
      $result .=  ' Egp </h4>
 </div>
 <div class="monthly">
     <h2>Monthly</h2>
     <h4>'; $result .=  ($_POST['loan_amount'] + $interest_rate) / ($_POST['loan_years']*12) ;
      $result .= ' Egp </h4>
 </div>
 </div>';

}
}


?>   
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
section{
    background-color: rgba(10,10,10,1);
    height: 100vh;
}
form{
    width: 40%;
    padding: 20px;
    border-radius: 10px;
    margin: auto;
    color: wheat;
    background-color: rgba(102,10,10,1);
  display: flex;
  flex-direction: column;
}
label{
    display: block;
    text-align: center;
    margin-bottom: 10px;
    font-size: 1.6rem;
}
input{
    display: block;
    padding: 10px;
    margin-bottom: 20px;
  border-radius: 10px;
}
#submit{
    display: block;
}
.container{
    width: 85%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    /* background-color: red; */
    text-align: center;
    margin-top: 40px;
    color: wheat;
}
h2{
    margin-bottom: 40px;
    font-size: 2.5rem;

}
h4{
font-size: 2rem;
font-weight: 900;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body>
    <section>
      <form method="post">
   <label for="">User Name</label>
   <input type="text" name="username" value= <?= $_POST['username'] ?? '' ?>>
   <label for="">Loan Amount</label>
   <input type="number" name="loan_amount" value=<?=$_POST['loan_amount'] ?? "" ?> >
   <label for="">Loan Years</label>
   <input type="number" name="loan_years">
   <input type="submit" value="Calculate" name="calculate" id="submit">
    </form>   
<?= $result ?? "" ?>
    </section>




</body>
</html>