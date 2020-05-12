<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
<h1>Cookies</h1>
<?php
$cookie_name = "chamara";
$cookie_value = "php_boot_camp";
setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
if (!isset($_COOKIE[$cookie_name])) {
    echo "wellcome $cookie_value nice to meet you";
} else {
    echo "Hey ". $cookie_value." you are back"."<br/>";
    echo "value is:".$_COOKIE[$cookie_name];

}
?>
</body>
</html>