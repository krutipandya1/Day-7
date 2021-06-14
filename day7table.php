 <?php
 include "connection1.php";
 
 $q = mysqli_query($link,"SELECT * FROM tb1_student");
 
 echo "<table border='1'>";
 echo "<tr>";
  echo "<th>id</th>";
 echo "<th>student name</th>";
 echo "<th>student gender</th>";
 echo "<th>student dob</th>";
 echo "<th>student email id</th>";
 echo "<th>student mobile number</th>";
 echo "<th>student address</th>";
 echo "<th>student password</th>";
 echo "<th>student area</th>";
 echo "<th>student pincode</th>";
 echo "<th>student bloodgroup</th>";
 echo "<th>action</th>";
echo "</tr>";
 while($row = mysqli_fetch_array($q))
 {
	 echo "<tr>";
	 echo "<td>{$row['id']}</td>";
	 echo "<td>{$row['st_name']}</td>";
	 echo "<td>{$row['st_gender']}</td>";
	 echo "<td>{$row['st_dob']}</td>";
	 echo "<td>{$row['st_email']}</td>";
	 echo "<td>{$row['st_mobile']}</td>";
	 echo "<td>{$row['st_address']}</td>";
	 echo "<td>{$row['st_password']}</td>";
	 echo "<td>{$row['st_area']}</td>";
	 echo "<td>{$row['st_pincode']}</td>";
	 echo "<td>{$row['st_blodgroup']}</td>";
	 echo "<td><a href='day8edit.php?id={$row['id']}'>edit</a> | <a href='day7delete.php?deleteid={$row['id']}'>delete</a></td>";
	 echo "</tr>";
	 }
	 
	 echo "</table>";
	 ?>
 <a href='day 6 form without theme.php'> add record</a>      