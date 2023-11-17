<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["id"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["Apellido"]) || 
	!isset($_POST["cantidad_a_pagar"]) || 
	!isset($_POST["telefono"]) || 
	!isset($_POST["correo"])   || 
	!isset($_POST["codigo_postal"]) || 
	!isset($_POST["numero_cuenta"]) 
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$Apellido = $_POST["Apellido"];
$cantidad_a_pagar = $_POST["cantidad_a_pagar"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$codigo_postal = $_POST["codigo_postal"];
$numero_cuenta = $_POST["numero_cuenta"];

$sentencia = $base_de_datos->prepare("UPDATE pagos SET id = ?, nombre = ?,  Apellido = ?, cantidad_a_pagar = ?, telefono = ?, correo = ?, codigo_postal = ?, numero_cuenta = ? WHERE id = ?;");
$resultado = $sentencia->execute([$id, $nombre, $Apellido, $cantidad_a_pagar, $telefono,$correo,$codigo_postal,$numero_cuenta, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>