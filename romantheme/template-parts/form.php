<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/validator.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/validator.js"></script>

</head>
<body>
<!--<form action="<?php echo esc_url( admin_url('salvar.php') ); ?>" method="post">
  <label for="mail">Quisiera que me proporcionaras tu dirección de correo electrónico</label>
  <input type="email" id="mail" name="mail">
  <button>Enviar</button>
</form>
-->
<div class="wrap">
	<TABLE><form action="" method="post" data-toggle="validator" role="form" id="myForm">
  <div class="form-group">
    <TR><td><label for="inputName" class="control-label">Nombre</label></td>
    <td><input type="text" class="form-control" id="inputName" name="nombre" placeholder="Cina Saffary" required></td></TR>
  </div>
   <div class="form-group">
    <label for="inputName" class="control-label">Fecha</label>
    <input type="date" class="form-control" id="inputName" name="fecha" placeholder="Cina Saffary" required>
  </div>
   <div class="form-group">
    <label for="inputName" class="control-label">Direccion</label>
    <input type="text" class="form-control" id="inputName" name="direccion" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="correo" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputName" class="control-label">Telefono</label>
    <input type="text" class="form-control" id="inputName" name="telefono" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-inline row">
      <div class="form-group col-sm-6">
        <input type="password" data-minlength="6" name="pass" class="form-control" id="inputPassword" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
      
    </div>
  </div>

  <div class="form-group">
    <label for="inputName" class="control-label">Estatus</label>
    <input type="text" class="form-control" id="inputName" name="estatus" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</TABLE>
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

$('#myForm').validator()
</script>
</html>

