
<?php
session_start();
$_SESSION['firstName']=$_GET['name']
    ;
echo $_SESSION['firstName'];