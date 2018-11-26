<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson_masamori;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiban2(handlename,title,comments)values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban2/index.php");

?>