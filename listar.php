<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM pagos;");
$pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Pago en linea</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>codigo</th>
					<th>Apellido</th>
					<th>cantidad_a_pagar</th>
					<th>telefono</th>
					<th>correo</th>
					<th>codigo_postal</th>
					<th>numero_cuenta</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pagos as $pago){ ?>
				<tr>
					<td><?php echo $pago->id ?></td>
					<td><?php echo $pago->codigo ?></td>
					<td><?php echo $pago->Apellido ?></td>
					<td><?php echo $pago->cantidad_a_pagar ?></td>
					<td><?php echo $pago->telefono ?></td>
					<td><?php echo $pago->correo ?></td>
					<td><?php echo $pago->codigo_postal ?></td>
					<td><?php echo $pago->numero_cuenta ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $pago->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $pago->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>