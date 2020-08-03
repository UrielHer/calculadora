<?php
	if (isset($_GET['enviar'])) {
		echo '<hr>';
		echo 'Nombre '.$_GET['nombre'];
		echo '<br>Contraseña '.$_GET['contrasena'];
	}
?>