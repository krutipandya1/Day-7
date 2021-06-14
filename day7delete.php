 <?php
 include "connection1.php";
 
 $id = $_GET['deleteid'];
 
$q = mysqli_query($link,"DELETE * FROM tb1_student where id='{$id}'");
 
 if($q)
 {
	 echo "<script>alert('record deleted'):window.location='day7table.php';</script>";
 }
 ?>