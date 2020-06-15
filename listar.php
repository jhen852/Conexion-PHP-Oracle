<?php include_once "encabezado.php" ?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<?php if($tipo=="Admin") { ?>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
	<?php } ?>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Precio de venta</th>
					<th>Existencia</th>
					<?php if($tipo=="Admin") { ?>
					<th>Editar</th>
					<th>Eliminar</th>
				<?php } ?>
				</tr>
			</thead>
			<tbody>
				<?php

				$conn = oci_connect("adminfarmacia", "adminf2939", "localhost/XE");
				if (!$conn) {
					 $m = oci_error();
					 trigger_error(htmlentities($m['message']), E_USER_ERROR);
					 }
					 $productos = oci_parse($conn, 'SELECT idproducto, nombre, descripcion, precio, existencia  FROM producto');
				   oci_execute($productos);

					 While(($row = oci_fetch_array($productos, OCI_BOTH)) != false){

						 ?>
						 <tr>
		 					<td><?php echo $row['IDPRODUCTO'] ?></td>
		 					<td><?php echo $row['NOMBRE'] ?></td>
		 					<td><?php echo $row['DESCRIPCION'] ?></td>
		 					<td><?php echo $row['PRECIO'] ?></td>
		 					<td><?php echo $row['EXISTENCIA'] ?></td>
							<?php if($tipo=="Admin") { ?>
		 					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" .$row['IDPRODUCTO'] ?>"><i class="fa fa-edit"></i></a></td>
		 					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=".$row['IDPRODUCTO'] ?>"><i class="fa fa-trash"></i></a></td>
						<?php } ?>
		 				</tr>
						<?php
					 }
					 oci_free_statement($productos);
					 oci_close($conn);
				 ?>
			 </tbody>
		 </table>

	</div>
