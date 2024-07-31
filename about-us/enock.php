<?php
$name = "am learning encrption type";
$pass = password_hash($name, PASSWORD_BCRYPT);
echo $pass;

?>