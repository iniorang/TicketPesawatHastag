<?php
try{
    $database=new PDO('mysql:dbname=ticket;host=127.0.0.1','root','');
}catch(Exception $error){
    die("Database tidak ditemukan atau salah");
}
?>