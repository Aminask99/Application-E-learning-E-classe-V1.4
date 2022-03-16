<?php

if(isset($_POST['add'])){

$Title= $_POST['Title'];
$Description_= $_POST['Description_'];
$Price= $_POST['Price'];

$query="INSERT INTO courss  (Title,Description_ ,Price) values(' $Title','$Description_','$Price') ";
mysqli_query($connect,$query);
header('location:courss.php');
}
?>