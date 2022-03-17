<?php
    require 'cnx.php';

    $id = $_GET['id'];
    $req = "DELETE FROM listt_student where id = '$id' ";
    $connect -> query($req);
    header('location: Listt_Student.php');
?>