
<h1 class="titulo">MENSAJES</h1>
<table class='lista'>
	<tr class='seccion titulos'>
		<td>REMITENTE</td>
		<td>MENSAJE</td>
		<td>LEER</td>
		<td>ELIMINAR</td>
	</tr>

	<?php
	if ($query->rowCount() > 0) {
		foreach ($results as $result) {
			?>
			<tr class='seccion'>
				<td><?=$result['remitente']?></td>
				<td><?=$result['texto']?></td>
				<td>
					<form method='POST' onsubmit="return confirm('¿Marcar mensaje como leído?');"
					      action="<?=$_SERVER['PHP_SELF']?>">
						<div>
							<input type="radio" id="readMessage" name="readMessage" value="LEIDO"
							       <?php if ($result['leido'] == 1){ ?>checked<?php } ?>>
							<label>LEIDO</label>
						</div>
						<input type='hidden' name='id' value='<?=$result['id']?>'>
						<input class="boton" type="submit" name="read" value="READ">
					</form>
				<td>
					<form onsubmit="return confirm('¿Realmente desea eliminar el mensaje?');" method='POST'
					      action="<?=$_SERVER['PHP_SELF']?>">
						<input type='hidden' name='id' value='<?=$result['id']?>'>
						<input class="boton" type="submit" name='delete_messages' value="ELIMINAR"/>
					</form>
				</td>
			</tr>
			<?php
		}
	} ?>
</table>
