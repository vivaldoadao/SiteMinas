<?php


$db = mysqli_connect("localhost", "minasang_znattech","P@ssword_2021.|", "minasang_znat_cms_db_2");
$db->set_charset("utf8");
if (mysqli_connect_error()) {
    echo "Falha ao se conectar".mysqli_connect_error();
}


?>