<?php
error_reporting(E_ALL|E_STRICT);
$servername = "localhost";
$database = "blog";
$username = "root";
$password = "vitor123";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = $conn->query("INSERT INTO artigos (id, titulo, conteudo) VALUES (5, 'Artigo 4 ', 'lallalalallal')");
//var_dump($sql);
