<?php

session_start();

$host="ec2-3-219-229-143.compute-1.amazonaws.com";
$port="5432";
$user="lffjupovuwkowk";
$database="d9ubq55up557s";
$password="9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666";

$conn = pg_connect("dbname=d9ubq55up557s host=ec2-3-219-229-143.compute-1.amazonaws.com port=5432 user=lffjupovuwkowk password=9d5ed4768450704643a229dc1dc5329bd6a7b339eedffd464875a9398b678666") or
die ("Não foi possível conectar ao servidor PostGreSQL");

?>