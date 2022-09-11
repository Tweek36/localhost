<?php
echo printf('qwer');
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$db = new PDO("mysql:host=localhost;dbname=info", "root", "");
$STH = $db->prepare("INSERT INTO members ( user_ID, login, password, email, tel ) values ( null, '$login', '$password', '$email', $tel )");  
$STH->execute();

$db = null;