<html>
	<body>
		<hr><center><h3><u>FORMULARIO</u></h3></center><hr>
		<form action="datosformulario.php" method="GET">  <!--para transferir datos por GET: method="GET"-->
			<center>
				<table border="2px">
					<tr>
						<td>Nombre de Usuario:</td>
						<td><input type="text" name="nombre"/></td>
					</tr>
					<tr>
						<td>Contraseña:</td>
						<td><input type="password" name="contrasena"/></td>
					</tr>
					<tr>
						<td>Sexo:</td>
						<td>
							<input type="radio" name="sexo" value="0" checked />Femenino<br>
							<input type="radio" name="sexo" value="1"/>Masculino
						</td>
					</tr>
					<tr>
						<td>Pasatiempos:</td>
						<td>
							<input type="checkbox" name="pasat1" value="1"/>Música<br>
							<input type="checkbox" name="pasat2" value="1"/>Leer<br>
							<input type="checkbox" name="pasat3" value="1"/>Cine
						</td>
					</tr>
					<tr>
						<td>Grado de Estudios:</td>
						<td>
							<select name="grado">
								<option value="1">TSU</option>
								<option value="2">Ingeniería</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Comentarios:</td>
						<td>
							<textarea name="coment"></textarea>
						</td>
					</tr>
					<input type="hidden" name="oculto" value="Información Oculta"/>
					<tr>
						<td><input type="submit" name="enviar" value="Enviar"/></td>
						<td><input type="reset" name="borrar" value="Borrar"/></td>
					</tr>
				</table>
			</center>
		</form>
	</body>
</html>