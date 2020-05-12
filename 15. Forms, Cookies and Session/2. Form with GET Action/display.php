<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>form-Get</h1>
<a href="studentForm.html">Go Back</a>
<br>
<br>
<?php

$name = $_GET['input_text'];
$email = $_GET['input_email'];

echo "Name:$name and Email:$email"
?>
</body>
</html>
