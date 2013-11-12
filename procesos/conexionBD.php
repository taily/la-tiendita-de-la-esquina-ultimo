<?php
	function conectarBD($host,$baseDeDatos,$usuario,$contrasenia){
		$conexion = mysql_connect($host,$usuario,$contrasenia);
		mysql_select_db($baseDeDatos,$conexion);
		return $conexion;
	}
	function consultar($query,$conexion){
		$q=mysql_query($query,$conexion);
		$fila=mysql_fetch_row($q);
		return $fila;
	}
	function operacion($query,$conexion){
		$q=mysql_query($query,$conexion);
	}
?>