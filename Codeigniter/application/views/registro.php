<h1 class="titulo">Sign Up</h1>
<br>
<div class="modal-content">
	<h1></h1>
	<form method="post">
		<input type="submit" class="enviar" name="login" value="LOGIN">
	</form>
	<form id="registro" class="inicio_Sesion registro" method="post">
		<input class="formulario" id="nombre" type="text" name="nombre" placeholder="Nombre">
		<input class="formulario" id="nickname" type="text" name="nickname" placeholder="Nickname">
		<input class="formulario" id="email" type="email" name="email" placeholder="tuemail@email.com"
		       onchange="validateEmail()">
		<input class="formulario" id="password" type="password" name="password" placeholder="Minimo 6 caracteres"
		       onchange="validatePassword()">
		<input type="submit" class="enviar" name="registro" value="Send">
	</form>
</div>
