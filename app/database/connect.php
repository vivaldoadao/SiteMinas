<?php

$host = 'localhost';
$user = 'minasang_znattech';
$pass = 'P@ssword_2021.|';
$db_name = 'minasang_znat_cms_db_2';


$conn = new MYSQLi($host, $user, $pass, $db_name);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die('Database Connectipon error:'  . $conn->connect_error);
}






?>