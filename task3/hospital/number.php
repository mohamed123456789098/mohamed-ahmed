<?php 
session_start();
$title = 'Login number';
include('layouts/header.php');
include('layouts/navbar.php');
?>

<section id="sec2">
    <form action="" method="post" id="form_login">
<label for="">User-Phone</label>
<input type="number"name="number" id="numper">
<input type="submit" value="Submit" id="submit">
<div>
    </form>
</section>
<?php 
include('layouts/scripts.php');
?>

<?php
if(isset($_POST['number'])){
    $_SESSION['phone'] = $_POST['number'];
    header('location:review.php');die;
}
?>