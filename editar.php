<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM pagos WHERE id = ?;");
$sentencia->execute([$id]);
$pago = $sentencia->fetch(PDO::FETCH_OBJ);
if($pago === FALSE){
	echo "¡No existe algún pago con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar pago con el ID <?php echo $pago->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $pago->id; ?>">
	
			<label for="id">id:</label>
			<input value="<?php echo $pago->id ?>" class="form-control" name="id" required type="text" id="id" placeholder="coloca tu id">

		    <label for="nombre">nombre:</label>
			<input value="<?php echo $pago->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="ingresa tu nombre">

			
			<label for="Apellido">Apellido</label>
			<input value="<?php echo $pago->Apellido ?>" class="form-control" name="Apellido" required type="text" id="Apellido" placeholder="ingrese su apellido">

        	<label for="cantidad_a_pagar">cantidad_a_pagar:</label>
		  	<input value="<?php echo $pago->cantidad_a_pagar ?>" class="form-control" name="cantidad_a_pagar" required type="text" id="cantidad_a_pagar" placeholder="ingrese la cantidad que va a pagar">

            <label for="id">telefono:</label>
			<input value="<?php echo $pago->telefono ?>" class="form-control" name="telefono" required type="text" id="telefono" placeholder="ingresa tu numero de telefono">

			<label for="correo">correo:</label>
			<input value="<?php echo $pago->correo ?>" class="form-control" name="correo" required type="text" id="correo" placeholder="ingrese su correo electronico">

			<label for="codigo_postal">codigo_postal:</label>
			<input value="<?php echo $pago->codigo_postal ?>" class="form-control" name="codigo_postal" required type="text" id="codigo_postal" placeholder="ingrese su codigo postal">
			
			<label for="numero_cuenta">numero_cuenta:</label>
			<input value="<?php echo $pago->numero_cuenta ?>" class="form-control" name="numero_cuenta" required type="text" id="numero_cuenta" placeholder="ingrese su numero de cuenta">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
