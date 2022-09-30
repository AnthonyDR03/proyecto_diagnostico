<?php
session_start();
if($_SERVER['SERVER_ADDR'] =="127.0.0.1"){
    $conexion=mysqli_connect("localhost","root","","bd_diagnostico");
}else
    $conexion=mysqli_connect("localhost","root","","bd_diagnostico");
?>