<?php 

if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    $number =$_POST['number'];
    $mailfrom =$_POST['mail'];
    $message =$_POST['message'];


    $mailto = "nomanfahad7@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an E-mail from ".$name.".\n\n".$message;



    mail($mailto, $number, $txt, $headers);
    header("Location: contact.php?mailsend");
    

}


?>