<?php
comprobar_sesion();
comprobar_administrador();

$sql = "SELECT * FROM receta";
$conn = connection();
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="fourth" class="section">
	<div class="medida">
		<div class="grid encargos">
			<?php if (isset($success)) {
				echo "<script type='text/javascript'>
					alert('$success');
				</script>";
			} else {
				if (isset($error)) {
					echo "<script type='text/javascript'>
					alert('$error');
				</script>";
				}
			} ?>
			<div class="contenido3">
				<table class='lista'>
					<tr class='seccion titulos'>
						<td>NOMBRE</td>
						<td>TIPO</td>
						<td>Dificultad</td>
						<td>PASOS</td>
						<td>INGREDIENTES</td>
						<td>editar</td>
						<td>eliminar</td>
					</tr>

					<?php
					if ($query->rowCount() > 0) {
						foreach ($results as $result) { ?>
							<tr class='seccion'>
								<td><?=$result['nombre']?></td>
								<td><?=$result['tipo']?></td>
								<td><?=$result['dificultad']?></td>
								<td><?=$result['pasos']?></td>
								<td><?=$result['ingredientes']?></td>
								<td>
									<form method='POST'>
										<input type='hidden' name='id' value='<?=$result['id']?>'>
										<input class="boton" type="submit" name='edit_recepie' value="-_-"/>
									</form>
								</td>
								<td>
									<form onsubmit="return confirm('¿Realmente desea eliminar la receta?');"
									      method='POST' action="<?=$_SERVER['PHP_SELF']?>">
										<input type='hidden' name='id' value='<?=$result['id']?>'>
										<input class="boton" type="submit" name='delete_recepie' value="DEL"/>
									</form>
								</td>
							</tr>
							<?php
						}
					} ?>
				</table>
			</div>
			<div class="rightStandar cafes">
				<a id="logoFusion" href="#header"><img class="logoFusion"
				                                       src="<?=url_base?>/public/assets/LOGO/logofusion2.png"></a>
				<div class="iconos">
					<a href="https://www.instagram.com/patipatu_zgz/?hl=es" target="_blank" class="inst">
						<img class="instagram" src="<?=url_base?>/public/assets/iconos/instagram_pink_mode.png">
					</a>
					<a href="https://www.facebook.com/patipatu.zgz/" target="_blank" class="face">
						<img class="facebook" src="<?=url_base?>/public/assets/iconos/facebook_pink_mode.png">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
