<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Oficina{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
public function insertar($nombre,$descripcion,$idusuario){
		date_default_timezone_set('America/Mexico_City');
	$fechacreada=date('Y-m-d H:i:s');
	$sql="INSERT INTO oficina (nombre,descripcion,fechacreada,idusuario) VALUES ('$nombre','$descripcion','$fechacreada','$idusuario')";
	return ejecutarConsulta($sql);
}

public function editar($idoficina,$nombre,$descripcion,$idusuario){
	$sql="UPDATE oficina SET nombre='$nombre',descripcion='$descripcion',idusuario='$idusuario' 
	WHERE idoficina='$idoficina'";
	return ejecutarConsulta($sql);
}
public function desactivar($idoficina){
	$sql="UPDATE oficina SET fechacreada='0' WHERE idoficina='$idoficina'";
	return ejecutarConsulta($sql);
}
public function activar($idoficina){
	$sql="UPDATE oficina SET fechacreada='1' WHERE idoficina='$idoficina'";
	return ejecutarConsulta($sql);
}

//metodo para mostrar registros
public function mostrar($idoficina){
	$sql="SELECT * FROM oficina WHERE idoficina='$idoficina'";
	return ejecutarConsultaSimpleFila($sql);
}

//listar registros
public function listar(){
	$sql="SELECT * FROM oficina";
	return ejecutarConsulta($sql);
}
//listar y mostrar en selct
public function select(){
	$sql="SELECT * FROM oficina";
	return ejecutarConsulta($sql);
}

public function regresaRoloficina($oficina){
	$sql="SELECT nombre FROM oficina where idoficina='$oficina'";		
	return ejecutarConsulta($sql);
}



}

 ?>
