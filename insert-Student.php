<?php

require 'cnx.php';
if(isset($_POST['add'])){
    
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$phone=$_POST['phone'];
$Enroll_Number=$_POST['Enroll_Number'];
$Date_of_admission=$_POST['Date_of_admission'];

$query="INSERT INTO listt_student(Name,Email,phone,Enroll_Number,DateOfAdmission) values('$Name','$Email','$phone','$Enroll_Number','$Date_of_admission') ";
 mysqli_query($connect,$query);
 header("location: listt_student.php");
}
?>