<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALC</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    
<div class="container" >
<form method="POST">
    <div class="num">
    <label>First Number</label>
<input type="number" name="num1" id="">
    <label>last Number</label>
<input type="number" name="num2" id="">
    </div>

<div class="calc">
<!-- <input type="submit" name="add" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="mul" value="*">
<input type="submit" name="div" value="/"> -->
<select name="select">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
    <option>%</option>
</select>
</div>
<input style=" color:black; margin-top:10px ; width:100px;" id="equal" type="submit" value="equal" name="submit">
</form>
</div>



<?php 

if(isset($_POST['submit'])){
$num1 =$_POST['num1'];
$num2 =$_POST['num2'];
$select = $_POST['select'];

if($num1 != "" && $num2 != ""){
    switch($select){
        case '+' :
        echo '<h1 style="text-align:center ;">' . ($num1 + $num2) . '</h1>';
        break;
        case '-' :
            echo '<h1 style="text-align:center ;">' . ($num1 - $num2) . '</h1>';
            break;
            case '*' :
                echo '<h1 style="text-align:center ;">' . ($num1 * $num2) . '</h1>';
                break;
                case '/' :
                    echo '<h1 style="text-align:center ;">' . ($num1 / $num2) . '</h1>';
                    break;
                case '%' :
                    echo '<h1 style="text-align:center ;">' . ($num1 % $num2) . '</h1>';
                    break;
    }
}else{
    echo 'enter your number';
}


}








?>




</body>
</html>