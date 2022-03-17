<?php
    require 'cnx.php';

    $id = $_GET['id'];
    $req = "DELETE FROM courss where id = '$id' "; //Req
    $connect -> query($req);
    header('location: courss.php');
?>