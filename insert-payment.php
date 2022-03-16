<?php
if(isset($_POST['add'])){


    $Name=$_POST['Name'];
    $payment_Sshedulel=$_POST['payment_Sshedule'];
    $Bill_Number=$_POST['Bill_Numbere'];
    $Amount_Paid=$_POST['Amount_Paid'];
    $Balance_amount=$_POST['Balance_amount'];
    
    $query="INSERT INTO payment (Name ,payment_Sshedule ,Bill_Number ,Amount_Paid ,Balance_amount) values('$Name','$payment_Sshedulel','$Bill_Number','$Amount_Paid','$Balance_amount') ";
     mysqli_query($connect,$query);
     header('location:payment.php');
    }
?>