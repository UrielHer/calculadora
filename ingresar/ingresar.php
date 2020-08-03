<html>
	<body>
		<hr><center><h3><u>FORMULARIO</u></h3></center><hr>
		<form action="datosingresar.php" method="GET">  <!--para transferir datos por GET: method="GET"-->
			<center>
				<table border="2px">
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="nombre"/></td>
					</tr>
					<tr>
						<td>Contraseña:</td>
						<td><input type="password" name="contrasena"/></td>
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