<?php
try {
    $db = new mysqli("localhost", "root", "", "my_dummy_db");

}
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message=$_POST['message'];
    $is_insert = $db->query("INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')");
    if($is_insert == TRUE) {
        header('location:../thankyou/index2.html');
        exit() ;
    
    }
}
?>