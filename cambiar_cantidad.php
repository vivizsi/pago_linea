<?php
if (!isset($_POST["cantidad_a_pagar"])) {
	exit("No hay cantidad_a_pagar");
}
if (!isset($_POST["indice"])) {
	exit("No hay índice");
}
$cantidad_a_pagar_ = floatval($_POST["cantidad_a_pagar"]);
$indice = intval($_POST["indice"]);
session_start();
if ($cantidad_a_pagar > $_SESSION["carrito"][$indice]->existencia) {
	header("Location: ./vender.php?status=5");
	exit;
}
$_SESSION["carrito"][$indice]->cantidad_a_pagar = $cantidad_a_pagar;
$_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad_a_pagar * $_SESSION["carrito"][$indice]->precioVenta;
header("Location: ./vender.php");
