<?php

class Funcionalidad_Default{


function __construct($array, $volver){
	$this->datos = $array;
	$this->volver = $volver;	
	$this->render();
}

function render(){
?>

<div>
<p>
<h1>
	Listar Funcionalidades<br>
</h1>
<h2>
<?php

	include '../Locates/Strings_Español.php';

?>
	<div> <!-- Tabla de muestra de elementos de la tabla FUNCIONALIDAD --> 
<?php
	$lista = array('FUNCIONALIDAD_ID','FUNCIONALIDAD_NOM');

?>
	<table border = 1>
	<tr>
<?php
	foreach($lista as $titulo){
?>
		<th>
<?php
		echo $strings[$titulo];
?>
		</th>
<?php
	}
?>
	</tr>
<?php
	foreach($this->datos as $datos){
?>
	<tr>
<?php
		for($i=0;$i<count($lista);$i++){
?>
		<td>
<?php
			echo $datos[$lista[$i]];
?>
		</td>
<?php
	}
?>
<?php
	}
?>
	</table>

</div> <!-- Fin de tabla -->
<h3>
<p>
<br>
<?php
	echo '<a href=\'' . $this->volver . "\'>" . $strings['Volver'] . " </a>";
?>
</h3>
</p>

</div>

<?php
} //fin metodo render

}