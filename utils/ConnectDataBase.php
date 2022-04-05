<?php
    $connect = new PDO('mysql:host=localhost;dbname=compar_operator;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
?>