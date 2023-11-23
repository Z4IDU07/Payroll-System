<?php

include 'db.php';

if(!$connection){
    die("Connection Failed");
}

$result = mysqli_query($connection,"SELECT * FROM employee");
$rows = mysqli_num_rows($result);
echo $rows;
?>