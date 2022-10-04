
<?php 

define('MAX_GRADE',100);

    
  
?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title>GRADE</title>
</head>
<body>

<div class="container">

  <form  method="post">
  <h2> GRADE </h2>
    <label for="">Physics</label>
    <input type="number" name="Physics" id="">
    <label for="">Chemistry</label>
    <input type="number" name="Chemistry" id="">
    <label for=""> Biology</label>
    <input type="number" name="Biology" id="">
    <label for="">Mathematics</label>
    <input type="number" name="Mathematics" id="">
    <label for="">Computer</label>
    <input type="number" name="Computer" id="">
    <input type="submit" name="submit" value="check" id='submit'>
  </form>

  <div class="total" >
  <p>  Physics :  <?php if(!empty ($_POST['Physics'])){
                         if($_POST['Physics'] <= MAX_GRADE  && $_POST['Physics'] >=0){
                          echo $_POST['Physics'];
                         }else{
                          echo  'invalid';
                         }
                    } ?> /100</p>
  <p>  Chemistry :  <?php if(!empty ($_POST['Chemistry'])){
                         if($_POST['Chemistry'] <= MAX_GRADE  && $_POST['Chemistry'] >=0){
                          echo $_POST['Chemistry'] ;
                         }else{
                         echo 'invalid';
                           }
                    } ?> /100</p>
  <p>  Biology :  <?php if(!empty ($_POST['Biology'])){
                        if($_POST['Biology'] <= MAX_GRADE  && $_POST['Biology'] >=0){
                         echo $_POST['Biology'] ;
                          }else{
                           echo 'invalid';
                           }
                    }?> /100</p>
  <p>  Mathematics :  <?php if(!empty ($_POST['Mathematics'])){
                      if($_POST['Mathematics'] <= MAX_GRADE && $_POST['Mathematics'] >=0){
                       echo $_POST['Mathematics'] ;
                         }else{
                          echo 'invalid';
                              }
                    } ?> /100</p>
  <p>  Computer :  <?php if(!empty ($_POST['Computer'])){
             if($_POST['Computer'] <= MAX_GRADE && $_POST['Computer'] >=0){
              echo $_POST['Computer'] ;
                }else{
                 echo 'invalid';
                     }
                    }?> /100</p>

</div>
</div>
 





</body>
</html>

<?php
if(isset($_POST['submit'])){
  $Physics =  $_POST['Physics'];
  $Chemistry =  $_POST['Chemistry'];
  $Biology =  $_POST['Biology'];
  $Mathematics =  $_POST['Mathematics'];
  $Computer =  $_POST['Computer'];
  
  if($Physics != "" && $Physics<= MAX_GRADE  &&
     $Chemistry != ""  && $Chemistry<= MAX_GRADE  &&
     $Biology !="" && $Biology<= MAX_GRADE && 
     $Mathematics !="" && $Mathematics<= MAX_GRADE && 
     $Computer !="" &&  $Computer<= MAX_GRADE){
 
      $total = $Chemistry + $Physics + $Computer + $Mathematics + $Biology;
      if($total /500 *100 >= 90){
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (A) </span> </h4>" ;
      }elseif($total /500 *100 >= 80){
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (B) </span> </h4>" ;
      }elseif($total /500 *100 >= 70){
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (C) </span> </h4>" ;
      }elseif($total /500 *100 >= 60){
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (D) </span> </h4>" ;
      }elseif($total /500 *100 >= 40){
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (E) </span> </h4>" ;
      }else{
        echo "<h4 style='color:red; text-align:center; font-size:2rem;'> Percentage : " .$total /500 *100 . "%"  ." <span style='color:green; text-align:center; font-size:3rem;'>  Grade (F) </span> </h4>" ;
      }
  }else{
    echo ' <h3 style="color:black; text-align:center; background-color:rgba(10,10,10,.3)">maximum score (100) <br> Minimum score
    (zero)    </h3>';
  }
}




?>