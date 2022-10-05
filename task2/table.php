<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "genders" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running',
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phones'=> ["0123456789"],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "genders" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>["0109876543",'0123456789'],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "genders" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[""],
    ],
    

];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Dynamic Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        width: 70%;
        margin: 30px auto;
    }
    h2{
    text-align: center;
    font-weight: 900;
    color: rgba(10,10,102,.4);
    font-size: 4rem;
    margin-bottom: 30px;
}
    table {
     width: 100%;
        text-align:center;
        background-color: rgba(10,10,10,.4);
        text-transform: capitalize;
    }
   
    thead {
        background-color: rgba(10,10,10,.7);
    }
   th{
    font-size: 1.5rem;
    color: white;
    padding: 10px 10px;
    font-weight: 600;
    }
    td{
        width: 50px;
        height: 100px;
        font-weight: 600;
        font-size: 1.3rem;
        color: black;
        border: 1px solid black;
    }
  </style>
  <body>
 
 

  <div class="container">
  <h2>Dynamic Table</h2>
  <table>
  <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Hobbies</th>
    <th>Activities</th>
    <th>Phone</th>
  </thead>
 
<?php foreach($users AS $x){ ?>
  <tbody>
    <td style="background-color: rgba(10,10,10,.7) ; color:white;"><?=$x->id?></td>
    <td><?= $x->name ?></td>
    <td>
        <?php  if($x->genders->gender == 'm'){
            echo 'Male';
        }else{
        echo 'Female';
        }
         ?>
    </td>
    <td>
    <?php foreach($x->hobbies AS $hobbies){
               echo  $hobbies . '<br>';
               } ?>
    </td>
    <td>
    <?php foreach($x->activities AS $activities){
               echo  $activities . '<br>';
               } ?>
    </td>
    <td>
        <?php

foreach($x->phones AS $phone){
    echo $phone ."<br>" ;
}
        ?>
    </td>
  </tbody>
<?php } ?>
</table>
  </div>
   














