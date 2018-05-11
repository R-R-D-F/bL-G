<?php 

/*
@PACKAGE romantheme
  ============================
       ADMIN PAGE
  ============================
*/

function roman_add_admin_page()
{
	add_menu_page('Roman Theme','Roman','manage_options','empleados','roman_theme_create_page','
dashicons-admin-post', 110);
	#add_submenu_page('roman submenu', 'roman settings', 'settins','manage_options','roman_theme_settings','roman_theme_settings_page');
}
add_action('admin_menu','roman_add_admin_page');
/*function roman_theme_settings_page()
{

}*/

function salvar()
{
	add_menu_page('Roma','Rom','manage_options','emp','roman_theme_create','
dashicons-admin-post', 110);
}

function roman_theme_create()
{
   require_once(get_template_directory() . '/salvar.php');
}

add_action('admin_menu','salvar');

function roman_theme_create_page()
{
	
	/*echo "<br><table><form action='../salvar.php' method='post' id='formulario' name='formulario'>
	<tr><td>Nombre:</td><td>             <input type='text' name='nombre' placeholder='ej. Jose Maria'></td></tr>
	<tr><td>Fecha de Nacimiento:</td><td><input type='date' name='fecha' ></td></tr>
	<tr><td>Direccion:</td><td>          <input type='text' name='direccion' placeholder='ej. nogales 23'></td></tr>
	<tr><td>Correo:</td><td>             <input type='email' name='correo' placeholder='ej. Jose Maria'></td></tr>
	<tr><td>Telefono:</td><td>           <input type='text' name='telefono' placeholder='ej. 7225155672'></td></tr>
	<tr><td>Password:</td><td>           <input type='Password' name='contrasena' placeholder='ej. 7225155672'></td></tr>
	<tr><td>Status:</td><td>             <input type='text' name='estatus' placeholder='ej. 7225155672'></td></tr>
	<tr><td> <input type='submit' value='enviar'></td></tr>
	</form></table>

	<div id='ajax'>
</div>
<script type='text/javascript'>
$(function (e) {
	$('#formulario').submit(function (e) {
		e.preventDefault()
		$('#ajax').load('salvar.php?' + $('#formulario').serialize())
	})
})
</script>"; */
	require_once(get_template_directory() . '/template-parts/form.php');
}

add_action("wp_enqueue_scripts", "dcms_insertar_js");

function dcms_insertar_js(){
    
    wp_register_script('miscript', get_template_directory_uri(). '/js/validator.js', array('jquery'), '1', true );
    wp_enqueue_script('miscript');
    
}