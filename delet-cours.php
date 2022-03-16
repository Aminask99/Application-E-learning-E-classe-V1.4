<?php
    require'cnx.php';

    $id = $_GET['id'];
    $req = "DELETE FROM courss where id = '$id' ";
    $connect -> query($req);
    header('location: courss.php');
?>