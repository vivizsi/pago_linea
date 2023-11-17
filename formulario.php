<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="id">id:</label>
		<input class="form-control" name="id" required type="text" id="id" placeholder="Ecribe tu id">

        <label for="nombre">nombre:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="escribe tu nombre">

       <label for="Apellido">Apellido:</label>
		<input class="form-control" name="Apellido" required type="text" id="Apellido" placeholder="Escriba su apellido">

		<label for="cantidad_a_pagar">cantidad_a_pagar:</label>
		<input class="form-control" name="cantidad_a_pagar" required type="text" id="cantidad_a_pagar" placeholder="escriba su fecha">
		
		<label for="telefono">telefono:</label>
		<input class="form-control" name="telefono" required type="text" id="telefono" placeholder="Escriba su numero de telefono">
		
		<label for="correo">correo:</label>
		<input class="form-control" name="correo" required type="text" id="correo" placeholder="escriba su correo">
		
		<label for="codigo_postal">codigo_postal:</label>
		<input class="form-control" name="codigo_postal" required type="text" id="codigo_postal" placeholder="escriba su codigo postal">
		
		<label for="numero_cuenta">numero_cuenta:</label>
		<input class="form-control" name="numero_cuenta" required type="text" id="numero_cuenta" placeholder="escriba su numero de cuenta">
		
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>