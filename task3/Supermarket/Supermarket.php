<?php 
if(isset($_POST['submit'])){
   
  if(!empty($_POST['number']) && !empty($_POST['username']) && !empty($_POST['country'])){
    $number  = $_POST['number'];
    $username = $_POST['username'];
    $country = $_POST['country'];

    if(isset($_POST['country'])){
        if($_POST['country'] == 'cairo'){
            $delivery = 0;
            $selectCairo = 'selected';
        }elseif($_POST['country'] == 'giza'){
            $selectGiza = 'selected';
            $delivery = 30;
        }elseif($_POST['country'] == 'alex'){
            $selectAlex = 'selected';
            $delivery = 50;
        }elseif($_POST['country'] == 'other'){
            $selectOther = 'selected'; 
            $delivery = 100; 
        }
    }

  $products = 
  '<div class="content">
  <div class="product_name">
  <h3>Product Name</h3>';

  if(isset($number)){
    for($i=0 ; $i<=$number-1 ; $i++){
          $products.=
              "<input type=text name=productname$i>";
  }
  }

   $products .= '</div>

    <div class="price">
    <h3>Price</h3>';
   if(isset($number)){
     for($i=0 ; $i<=$number-1 ; $i++){
        $products.=
                 "<input type=number name=price$i>";
    }
    $products .= 
    
    '</div>   
     <div class="quantities">
    <h3>Quantities</h3>';
 
    if(isset($number)){
      for($i=0 ; $i<=$number-1 ; $i++){
        $products.=
                "<input type=number name=quantities$i>";
     }
    }
     $products .= 
     '</div>
      </div>
             <input type="submit" value="Receipt" name="receipt" id="receipt">';
  }

    }elseif( empty($_POST['username']) && empty($_POST['number'])){
                   $errors1 = 'enter your name *';
                   $errors2 = 'At least one product ';

    }elseif( empty($_POST['username'])){
                   $errors1 = 'enter your name *';

    }elseif( empty($_POST['number'])){
                  $errors2 = 'At least one product ';


}
}





$arr1 = array();
$arr2 = array();
$arr3 = array();
$arrTotal = array();

if(isset($_POST['receipt'])){
  for($i=0 ; $i <= $_POST['number']-1 ; $i++ ){
    if(!empty($_POST["productname$i"]) && !empty($_POST["quantities$i"]) && !empty($_POST["price$i"])){
        
      $arr1[$i] = $_POST["productname$i"];
      $arr2[$i] = $_POST["price$i"];
      $arr3[$i] = $_POST["quantities$i"];
      $arrTotal[$i] = $_POST["price$i"] * $_POST["quantities$i"];
    }
    if(isset($_POST['country'])){
        if($_POST['country'] == 'cairo'){
            $delivery = 0;
            $selectCairo = 'selected';
        }elseif($_POST['country'] == 'giza'){
            $selectGiza = 'selected';
            $delivery = 30;
        }elseif($_POST['country'] == 'alex'){
            $selectAlex = 'selected';
            $delivery = 50;
        }elseif($_POST['country'] == 'other'){
            $selectOther = 'selected'; 
            $delivery = 100; 
        }
    }
  }
  if( array_sum($arrTotal) < 1000 ){
         $discount = 0;
  }elseif(array_sum($arrTotal) < 3000 ){
         $discount = .1;
  }elseif(array_sum($arrTotal) < 4500 ){
         $discount = .15;
  }else{
         $discount = .2; 
  }

  $netDiscount = array_sum($arrTotal) * $discount ;
  $totalAfterDiscount =  array_sum($arrTotal) - $netDiscount;
  $netTotal =  $totalAfterDiscount + $delivery;


  $bill = '<div>
  <h2> Product Name </h2>';
  for($i=0 ; $i<=count($arr1)-1; $i++){
   $bill .= '<h3>';
   $bill .= $arr1[$i];
   $bill .= '</h3>';
  }       
  $bill .=  '</div>';


  $bill .= '<div>
  <h2> Price</h2>';
  for($i=0 ; $i<=count($arr2)-1; $i++){
   $bill .= '<h3>';
   $bill .= $arr2[$i];
   $bill .= '</h3>';
  }       
  $bill .=  '</div>';


  $bill .= '<div>
  <h2> Quantities</h2>';
  for($i=0 ; $i<=count($arr3)-1; $i++){
   $bill .= '<h3>';
   $bill .= $arr3[$i];
   $bill .= '</h3>';
  }       
  $bill .=  '</div>';


  $bill .= '<div>
  <h2> Sub Total</h2>';
  for($i=0 ; $i<=count($arr3)-1; $i++){
   $bill .= '<h3>';
   $bill .= $arrTotal[$i];
   $bill .= '</h3>';
  }       
  $bill .=  '</div>';

$bill .= '</div>



   <div class="total">
   <h4>Client name</h4>
   <h4>'; 
$bill .= $_POST['username'];
$bill .= '</h4> 
   <h4>City</h4>
   <h4>';
   $bill .= $_POST['country'];
   $bill .= '</h4> 
   <h4>Total</h4>
   <h4>'; 
   $bill .= array_sum($arrTotal);
    $bill .= '</h4> 
    <h4>Discount</h4>
    <h4>'; 
    $bill .=  $netDiscount;
    $bill .= '</h4>
    <h4>Total After Discount</h4>
    <h4>';
    $bill .=   $totalAfterDiscount;
    $bill .= '</h4>
    <h4>Delivery</h4>
    <h4>';
    $bill .= $delivery;
    $bill .= '</h4>
    <h4>Net Total</h4>
    <h4>';  $bill .= $netTotal;
    $bill .= '</h4>
    </div>';
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="subermarket.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SuberMarker</title>
</head>
<body>
    
<section id="sec1">
    <div class="container" >
      <div class="header">
              <div class="logo">
       <img src="img/logo.png" alt="">
      </div>

      <form action="Supermarket.php" method="post" id="form_login" >
             <div class="login">
         <label for="">User Name</label>
         <label style="color: orange ;  font-size:.9rem"> <?= $errors1 ?? "" ?></label>
        <input type="text" name="username" value = <?= $_POST['username'] ?? '' ?>>
        <label for="">City</label>
        <select name="country">
            <option value="Select Your Country" selected disabled>Select Your Country</option>
            <option <?= $selectCairo ?? "" ?> name='cairo' value="cairo">Cairo</option>
            <option <?= $selectGiza ?? "" ?> name='giza' value="giza">Giza</option>
            <option <?= $selectAlex ?? "" ?> name='alex' value="alex">Alex</option>
            <option <?= $selectOther ?? "" ?> name='other' value="other">Other</option>
        </select>
        <label for="">Number Of Varieties</label>
        <label style="color: orange ; font-size:.9rem"><?= $errors2 ?? "" ?></label>
        <input type="number" name="number" value=<?=  $_POST['number']  ?? '' ?>>
        <input type="submit" value="Submit" id="submit" name="submit">
      </div>
        <?= $products ?? "" ?>
      </form>
      </div>

      <div class="bill">
              <?= $bill ?? "" ?>
      </div>

    </div> 

</section>
</body>
</html>
<style>
    h2{
        font-size: 1.6rem;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 1px solid black;
    background-color:rgba(10,10,10,.5);
    border-radius: 10px;
    padding: 5px 0 ;
    color: wheat;
    font-weight: 900;
}
</style>