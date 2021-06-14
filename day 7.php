<?php
include "connection1.php";

$q = mysqli_query($link,"SELECT * FROM tb1_student");

$row = mysqli_fetch_row($q);

print_r($row);

echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9];

$row = mysqli_fetch_array($q);

echo "<pre>";

print_r($row);

echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9];

echo $row['st_name'].$row['st_gender'].$row['st_dob'].$row['st_email'].$row['st_mobile'].$row['st_address'].$row['st_password'].$row['st_area'].$row['st_pincode'].$row['st_blodgroup'];
?>
  
  