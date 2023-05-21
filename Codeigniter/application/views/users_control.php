<table class='lista'>
	<tr class='seccion titulos'>
		<td>NOMBRE</td>
		<td>NICK</td>
		<td>EMAIL</td>
		<td>ADMINISTRADOR</td>
		<td>ELIMINAR USER</td>
	</tr>
	<tr class='seccion'>
		<td><?=$result['nombre']?></td>
		<td><?=$result['nick']?></td>
		<td><?=$result['email']?></td>
		<td>
			<form onsubmit="return confirm('¿Realmente desea cambiar el valor nivel del Usuario?');"
			      method='POST'
			      action="<?=$_SERVER['PHP_SELF']?>">
				<div>
					<input type="radio" id="adminOption" name="adminOption" value="ADMIN"
					       <?php if ($result['esAdmin'] == 1){ ?>checked<?php } ?> disabled>
					<label>Admin</label>
				</div>
				<input type='hidden' name='id' value='<?=$result['id']?>'>
				<input class="boton" type="submit" name="addAdmin" value="CHANGE">
			</form>
		<td>
			<form onsubmit="return confirm('¿Realmente desea eliminar el registro?');" method='POST'
			      action="<?=$_SERVER['PHP_SELF']?>">
				<input type='hidden' name='id' value='<?=$result['id']?>'>
				<input class="boton" type="submit" name='delete_user2' value="ELIMINAR"/>
			</form>
		</td>
	</tr>
</table>
