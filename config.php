<?php
    $host = 'localhost';
    $user = "root";
    $pass = "";
    $db = 'cerdaz';

$mysqli = mysqli_connect($host,$user,$pass,$db) or die('Tidak dapat terkoneksi dengan database');