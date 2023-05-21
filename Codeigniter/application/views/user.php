<div id="fourth" class="section">
	<div class="medida">
		<div class="grid encargos">
			<div class="contenido3">
				<div class="titulo tituloFormulario">DATA</div>

				<div class="tituloInfoForm"></div>
				<form onsubmit="return confirm('¿Realmente desea realizar esta acción?')"
				      action="<?=$_SERVER['PHP_SELF']?>" class="formulario2" method="post">
					<input class="apartado box1" type="text" name="nick" id="nick"
					       value="<?php echo $data['nick'] ?>">
					<input class="apartado box1" type="text" name="nombre_user" id="name"
					       value="<?php echo $data['nombre'] ?>">
					<input class=" apartado box2" type="text" name="surname1" id="surname1"
					       <?php if ($data['apellido1'] <> null){ ?>value="<?php echo $data['apellido1'] ?>"
					       <?php }else{ ?>placeholder="Primer Apellido" value=""<?php } ?>>
					<input class="apartado box2" type="text" name="surname2" id="surname2"
					       <?php if ($data['apellido2'] <> null){ ?>value="<?php echo $data['apellido2'] ?>"
					       <?php }else{ ?>placeholder="Segundo Apellido" value=""<?php } ?>>
					<input class="apartado box2" type="number" name="age" id="age" min="10"
					       <?php if ($data['edad'] <> null){ ?>value="<?php echo $data['edad'] ?>"
							<?php } else { ?> placeholder="edad" value=""<?php } ?>>
					<input class="apartado box3" type="text" name="tlf" id="tlf"
					       <?php if ($data['telefono'] <> null){ ?>value="<?php echo $data['telefono'] ?>"
					       <?php }else{ ?>placeholder="Teléfono" value=""<?php } ?> onfocus="addPrefixNumber()"
					       onchange="validateTlf()">
					<input class="apartado box4" type="text" name="email" id="email"
					       value="<?php echo $data['email'] ?>" onchange="validateEmail()">
					<input class="apartado box4" id="password" type="password" name="password"
					       placeholder="Password">
					<input class="apartado" id="repeatpassword" type="password" name="repeatpassword"
					       placeholder="REPEAT PASSWORD">
					<input class="apartado" id="newpassword" type="password" name="newpassword"
					       placeholder="NEW PASSWORD">
					<div class="botones">
						<input type="hidden" name="id" value="<?=$data['id']?>">
						<input class="boton" type="submit" name="edit_user" value="Actualizar"
						       onclick="location.reload()">
						<input class="boton" type="submit" name="change_password" value="CAMBIAR CONTRASEÑA">
						<input class="boton" type="submit" name="delete_user1" value="Eliminar">
					</div>
				</form>


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
