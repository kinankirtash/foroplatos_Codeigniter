<div id="fourth" class="section">
	<div class="medida">
		<div class="grid encargos">
			<div class="contenido3">
				<div class="titulo tituloFormulario">EDIT</div>
				<div class="tituloInfoForm"></div>
				<form style="margin: 1% 0 1% 5%;" method="post">
					<input class="boton" name="recepies_control" type="submit" value="VOLVER">
				</form>
				<form class="formulario" method="post">
					<input class="apartado box1" name="editnombreReceta" type="text"
					       value="">
					<div class="apartado box4">
						<label for="lang">Dificultad</label>
						<select name="editdificultad" id="lang">
							<option value="facil">facil</option>
							<option value="media">media</option>
							<option value="dificil">dificil</option>
						</select>
						<label for="lang">Tipo</label>
						<select name="edittipo" id="lang">
							<option value="Tradicional">Tradicional</option>
							<option value="Slowfood">Slowfood</option>
							<option value="Freidora sin aceite">Freidora sin aceite</option>
						</select>
					</div>
					<input class="apartado box2" name="editpasos" type="text" value="">
					<input class="apartado box3" name="editingredientes" type="text"
					       value="">
					<input type='hidden' name='id' value=''>
					<input class="boton" name="editActual_recepie" type="submit" value="Enviar">
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

