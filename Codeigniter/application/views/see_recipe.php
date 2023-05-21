<div id="fourth" class="section">
	<div class="medida">
		<div class="grid encargos">

			<div class="contenido3">
				<form style="margin: 1% 0 1% 5%; display: grid; grid-template-columns: repeat(3,1fr)" method="post">
					<input class="boton botonComent" name="tradicional" type="submit" value="TRADICIONAL">
					<input class="boton botonComent" name="slowfood" type="submit" value="SLOWFOOD">
					<input class="boton     botonComent" name="freidora" type="submit" value="FREIDORA">
				</form>
				<div class="titulo tituloFormulario">RECETA</div>
				<div class="tituloInfoForm"></div>
				<div class="verRecetasComentarios">
					<div class="formulario formularioRecetas">
						<input class="apartado ver" type="text"
						       style="
						       background-color: transparent;
						       text-align: center;
						       font-family: OverRainbow;
						       font-weight: bold;
						       font-size: 3vh;
						       color: var(--pink-resalt);
						       display: grid;
						       grid-column: 1/3;
						       grid-row: 1;"
						       value="<?=$recepie['nombre']?>" readonly>
						<input class="apartado ver" type="text"
						       style="
						       display: grid;
						       grid-column: 2;
						       grid-row: 2;
						       height: 25%"
						       value="<?=$recepie['dificultad']?>" readonly>
						<input class="apartado ver" type="text"
						       style="
						       display: grid;
						       grid-column: 1;
						       grid-row: 2;
						       height: 20%"
						       value="<?=$recepie['tipo']?>" readonly>
						<input class="apartado ver" type="text"
						       style="
						       margin-top: -18%;
						       display: grid;
						       grid-column: 1/3;
						       grid-row: 3;"
						       value="<?=$recepie['pasos']?>" readonly>
						<input class="apartado ver" type="text"
						       style="
						       display: grid;
						       grid-column: 1/3;
						       grid-row: 4;"
						       value="<?=$recepie['ingredientes']?>" readonly>
					</div>
					<div class="comentarios">
						<div class="tabla">
							<table class='lista comentariosList'>
								<tr class='seccion titulos coment'>
									<td class="userNameComent">Usuario</td>
									<td>Comentario</td>
									<td>Nota</td>
								</tr>
								<tr class='seccion coment'>
									<td class="userNameComent"></td>
									<td style="word-wrap: break-word;max-width: 50px;"></td>
									<td><input type="text" readonly="readonly" style="text-align: center">
									</td>
									<td>
										<form method='POST'>
											<input type='hidden' name='id' value=''>
											<input class="boton" type="submit" name='delete_comentario'
											       value="Delete"/>
										</form>
									</td>
								</tr>
							</table>
						</div>
						<div>
							<form class="comentarios" method="post">
								<input type='hidden' name='id_receta' value='' readonly="readonly">
								<input type='hidden' name='id_user' value='' readonly="readonly">
								<input type="text" name="comentario" class="apartado"
								       style="word-wrap:break-word;max-width: 500px;"
								       placeholder="Escriba un comentario">
								<label for="lang">NOTA:</label>
								<select name="nota" id="lang">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<input class="boton botonComent" name="add_comentario" type="submit" value="COMENTAR">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="rightStandar cafes">
				<a id="logoFusion" href="#header">
					<img class="logoFusion" src="<?=url_base?>/public/assets/LOGO/logofusion2.png"></a>
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
