<?php
session_start();
if (isset($_SESSION['email'])) { //checks whether the email is exists or not.
    session_destroy();} //destroy all the session variable data, with the current session.
    
    $ref = $_GET['q'];  //value of q = index.php
header("location:$ref"); //go back to index.php page, 
?>