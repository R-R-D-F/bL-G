<?php 
global $wpdb;
$nombre=$_REQUEST['nombre'];
echo $nombre;
print_r('pagina salvar'); # "pagina salvar";
	/*
function guardar($nombre,$fechan,$direccion,$correo,$telefono,$pass,$estatus)
  {
  	$nombre=$_REQUEST['nombre'];
	$fechan=$_REQUEST['fecha'];
	$direccion=$_REQUEST['direccion'];
	$correo=$_REQUEST['correo'];
	$telefono=$_REQUEST['telefono'];
	$pass=$_REQUEST['contrasena'];
	$estatus=$_REQUEST['estatus'];

	$wpdb->query($wpdb->prepare("insert into wp_empleados values($nombre,$fechan,$direccion,$correo,$telefono,$pass,$estatus)"));	
	
  	return $wpdb->num_rows;
  }  




	global $wpdb;
	$nombre=$_REQUEST['nombre'];
	$fechan=$_REQUEST['fecha'];
	$direccion=$_REQUEST['direccion'];
	$correo=$_REQUEST['correo'];
	$telefono=$_REQUEST['telefono'];
	$pass=$_REQUEST['contrasena'];
	$estatus=$_REQUEST['estatus'];
	
	if(($nombre=='')or ($fechan=='') or ($direccion=='') or ($correo=='')or($telefono=='') or ($pass=='')or ($estatus==''))
	{
		$msg="Debe llenar todos los campos";
		print"<meta HTTP-EQUIV=refresh CONTENT='0, URL=altamed.php?msg=$msg'>";
	}
	else
		{
			$wpdb->query($wpdb->prepare("insert into wp_empleados values($nombre,$fechan,$direccion,$correo,$telefono,$pass,$estatus)"));			
			
					}  
					*/
?>
