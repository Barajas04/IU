<?php

class Evento_default{
	//VISTA PARA LISTAR EVENTOS

	private $datos;
	private $volver;

	function __construct($array, $volver){
		$this->datos = $array;
		$this->volver = $volver;
		$this->render();
	}

	function render(){
		?>

		<head><link rel="stylesheet" href="../Styles/styles.css" type="text/css" media="screen" /></head>
			<p>
				<h2>
					<?php


					include '../Locates/Strings_'.$_SESSION['IDIOMA'].'.php';


					?>
					<div>
						<?php

						$lista = array('EVENTO_ID','EVENTO_NOMBRE','EVENTO_ORGANIZADOR','EVENTO_DESCRIPCION','LUGAR_NOMBRE');//AQUI HAY QUE METER ID LUGAR CLIENTE Y PAGO


						?>
						<head>
							<link rel="stylesheet" href="../Styles/styles.css" type="text/css" media="screen" />
							<link rel="stylesheet" type="text/css" href="../Styles/print.css" media="print" />
						</head>
						<div id="wrapper">

							<nav>

								<div class="menu">


									<ul>
										<li><a href="../Functions/Desconectar.php"><?php echo  $strings['Cerrar Sesión']; ?></a></li>
										<li><?php echo $strings['Usuario'].": ". $_SESSION['login']; ?></li>

									</ul>

									<?php echo '<a href=\'' . $this->volver . "'>" . $strings['Volver'] . " </a>"; ?></li>
									<a href='./EVENTO_Controller.php?accion=<?php echo $strings['Consultar']?>'><?php echo $strings['Consultar']?></a>
									<a href='./EVENTO_Controller.php?accion=<?php echo $strings['Insertar']?>'><?php echo $strings['Insertar']?></a>
									<a href='./EVENTO_Controller.php?accion=<?php echo $strings['Listar personas']?>'><?php echo $strings['Listar personas']?></a>


								</div>
							</nav>
						<table id="btable" border = 1>
							<tr>
								<?php

								foreach($lista as $titulo){

									echo "<th>";

									?>
									<?php
									echo $strings[$titulo];
									?>
									</th>
									<?php
								}
								?>
							</tr>
							<?php


							for ($j=0;$j<count($this->datos);$j++){



								echo "<tr>";
								foreach ($this->datos [$j] as $clave => $valor) {
									for ($i = 0; $i < count($lista); $i++) {
										if ($clave === $lista[$i]) {
											?>

											<?php

											echo "<td>";


											echo $valor;

											echo "</td>";
										}
									}
								}
								?>

								<?php


								?>

								<td>
									<a href='EVENTO_Controller.php?EVENTO_NOMBRE=<?php echo $this->datos[$j]['EVENTO_NOMBRE'] . '&accion='.$strings['Modificar']; ?>'><?php echo $strings['Modificar'] ?></a>
								</td>
								<td>
									<a href='EVENTO_Controller.php?EVENTO_NOMBRE=<?php echo $this->datos[$j]['EVENTO_NOMBRE'] . '&accion='.$strings['Borrar']; ?>'><?php echo $strings['Borrar'] ?></a>
								</td>


								<?php

								echo "<tr>";

							}
							?>

						</table>

					</div>
					<h3>
			<p>
				<?php
				echo '<a class="form-link" href=\'' . $this->volver . "'>" . $strings['Volver'] . " </a>";
				?>
				</h3>
			</p>

		</div>

		<?php
	} //fin metodo render

}

