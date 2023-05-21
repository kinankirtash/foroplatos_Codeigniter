<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ForoPlatos</title>
	<link rel="icon" href="<?=url_base?>/public/assets/LOGO/logofusion3_icono.png">
	<link rel="stylesheet" href="<?=url_base?>/public/css/style.css">
	<link rel="stylesheet" href="<?=url_base?>/public/css/header.css">
	<link rel="stylesheet" href="<?=url_base?>/public/css/encargos.css">
	<link rel="stylesheet" href="<?=url_base?>/public/css/menus.css">
</head>
<body>
<header>
	<div id="header" class="header">
		<form method="post">
			<div class="marca">
				<img class="logo" src="<?=url_base?>/public/assets/LOGO/Logo%20PatiPami%20color3.png">
				<h1 class="name"><input type="submit" class="name" name="name" value="FOROPLATOS">
					FOROPLATOS</input></h1>
			</div>
		</form>
		<div class="contenedorMenu">
			<ul class="menu">
				
				<nav id="hamnav">
					<label id="dibujo">
						<input type="checkbox" name="boton" value="bandera" id="bandera">
						<span></span>
					</label>
					<form id="opciones" class="submenu" method="post">
						<input type="submit" class="menuOptions menuParts" name="menus" value="MENÚS"/>
						<input type="submit" class="menuOptions menuParts" name="registro" id="modalRegistro"
						       value="REGISTRO"/>
						<input type="submit" class="menuOptions menuParts" name="login" value="LOGIN"/>
						<input type="submit" class="menuOptions menuParts" name="user" value="DATOS"/>
						<input type="submit" class="menuOptions menuParts" name="users_control"
						       value="USUARIOS"/>
						<input type="submit" class="menuOptions menuParts" name="add_recepies"
						       value="NUEVA RECETA"/>
						<input type="submit" class="menuOptions menuParts" name="recepies_control"
						       value="RECETAS"/>
						<input type="submit" class="menuOptions menuParts" name="messages_control"
						       value="MENSAJES"/>
						<input type="submit" class="menuOptions menuParts" name="contact" value="CONTACTA"/>
						<h3 type="text" class="nick"/>
						<input type="submit" class="menuOptions menuParts" name="logout" value="LOGOUT"/>
					</form>
				</nav>
			</ul>

		</div>
	</div>
	<hr class="division">
</header>
<div style="display:flex;flex-flow:column;">
</div>
<?php
cerrar_sesion_inactividad();
?>