<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
<body>
<!--<form action="<?php echo esc_url( admin_url('salvar.php') ); ?>" method="post">
  <label for="mail">Quisiera que me proporcionaras tu dirección de correo electrónico</label>
  <input type="email" id="mail" name="mail">
  <button>Enviar</button>
</form>
-->
<div class="wrap">
	<table>
      <form action="" method="post">
        <tr><td>  Nombre: </td><td><input type="text" name="nombre" value="" /></td></tr>
          <tr><td> Fecha de Nacimiento:</td><td>   <input type="date" name="fecha" value="" /></td></tr>
          <tr><td> Direccion: </td><td><input type="text" name="direccion" value="" /></td></tr>
          <tr><td> Email: </td><td><input type="email" name="correo" value="" /></td></tr>
          <tr><td> Telefono: </td><td><input type="text" name="telefono" value="" /></td></tr>
          <tr><td> Password: </td><td><input type="Password" name="pass" value="" /></td></tr>
         <tr><td>  Estatus:</td><td> <input type="text" name="estatus" value="" /></td></tr>
          <tr><td> <input name="Submit" type="submit" value="Submit"></td></tr>
      </form>
      </table>
      <form method="post">
          <?php   
          global $wpdb;
                  $nombre = $_POST["nombre"];
                  $fecha = $_POST["fecha"];
                  $direccion = $_POST["direccion"];
                  $email = $_POST["correo"];
                  $telefono = $_POST["telefono"];
                  $Password = $_POST["pass"];
                  $estatus = $_POST["estatus"];

                  echo $nombre;
          $contactus_table = $wpdb->prefix."empleados";

          $sql = "INSERT INTO $contactus_table (nombre, fecha, direccion, correo, telefono, pass, estatus) VALUES ('$nombre', '$fecha', '$direccion', '$email', '$telefono', '$Password', '$estatus');";                  
            $wpdb->query($sql) 

     ?>
     </form>
     </div>

    
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
        	<?php

global $wpdb;

$result = $wpdb->get_results ( "
    SELECT * 
    FROM  wp_empleados
" );

foreach ( $result as $page )
{
  
           echo "<tr>
                <td>$page->id_emp</td>
                <td>$page->nombre</td>
                <td>$page->fecha</td>
                <td>$page->direccion</td>
                <td>$page->correo</td>
                <td>$page->telefono</td>
                <td>$page->pass</td>
                <td>$page->estatus</td>
            </tr>";
}

            ?>
            </tbody>
        <tfoot>
            
        </tfoot>
    </table>

</body>
<script type="text/javascript">
	var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("¡Yo esperaba una dirección de correo, cariño!");
  } else {
    email.setCustomValidity("");
  }
});
	
$(document).ready( function () {
    $('#example').DataTable();
} );
</script>
</html>

/ Definimos la función
function ss_scripts() {
// El primer paso es usar wp_register_script para registrar el script que queremos cargar. Fíjense que aquí sí usamos *get_template_directory_uri()*
wp_register_script( 'primer-script', get_template_directory_uri() . '/js/algunjs.js', array( 'jquery'), '1.0.0', true );
wp_register_script( 'segundo-script', get_template_directory_uri() . '/js/otrojs.js', array( 'jquery'), '1.0.0', false );
// Una vez que registramos el script debemos colocarlo en la cola de WordPress
wp_enqueue_script( 'app-script' );
wp_enqueue_script( 'segundo-script' );
}

// Agregamos la función a la lista de cargas de WordPress.
add_action( 'wp_enqueue_scripts', 'ss_scripts' );
