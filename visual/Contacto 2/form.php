<?php
$conexion=mysqli_connect("localhost","root","","empresas")

$Empresa =$_POST['Empresa'];
$TG =$_POST['Turno y grupo'];
$Redes =$_POST['redes'];
$Descrip =$_POST['Descripcion'];

if($_FILES["archivo"]){
$nombre_base=basename($_FILES["archivo"]["name"]);
}else{
    echo "No hay archivo";
}

?>