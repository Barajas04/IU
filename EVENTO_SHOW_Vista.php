<?php

class Evento_Show{
//VISTA PARA MOSTRAR CONSULTA DE PAGINAS

function __construct(){	
	$this->render();
}

function render(){
?>

	<head><link rel="stylesheet" href="../Styles/styles.css" type="text/css" media="screen" /></head>
	<p>


<?php
include '../Locates/Strings_'.$_SESSION['IDIOMA'].'.php';
	include '../Functions/EVENTODefForm.php';


	$lista = array('EVENTO_NOMBRE');

?>
		<h1><span class="form-title">
			<center><?php echo $strings['Consultar evento']; ?><br>
		</h1>
	</p>
	<p>
	<h3>

	<br><br>
	<form action='EVENTO_Controller.php' method='post'>
		<ul class="form-style-1">
		<?php
		createForm($lista,$DefForm,$strings,$values='',false,false);
?>
	<input type='submit' name='accion' value='<?php echo $strings['Consultar']; ?>'><br>
	
	</form>
	<br>
<?php
        	echo '<a class="form-link" href=\'EVENTO_Controller.php\'>' . $strings['Volver'] . '</a>';
?>

	</h3>
	</p>

	</div>

<?php
}

}