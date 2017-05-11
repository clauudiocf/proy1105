<?php
 include '../lib/Conexion.php';
$conn = new Conexion();

if($conn->Conectar()){
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom',$totusd, $ano)";

echo $sql;
}