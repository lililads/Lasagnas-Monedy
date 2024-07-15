<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lasagñas Monedy</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="shortcut icon" href="icono.png">
	<link rel="stylesheet" type="text/css" href="monedy.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				<img src="images/logo.jpg" width="160px">
			</div>
			<!--fin col-md-3-->

			<div class="col-md-11">
				<h1>Lasagñas Monedy</h1>
			</div>
			<!--fin col-md-3-->

		</div>
		<!--fin row-->
	</div>
	<!--fin container-->

	<h2 class="segundo">¡Pide ya en el formulario a continuación!</h2>
	<center><img src="images/flecha.gif"></center>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div class="panel panel-default">
						<div class="panel-heading">Datos Personales</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="nombreApellido">Nombres y Apellidos</label>
								<input type="text" class="form-control" id="nombreApellido" required><br>
								<label for="direccion">Dirección</label>
								<input type="text" class="form-control" id="direccion" required><br>
								<label for="telefono">Teléfono</label>
								<input type="tel" class="form-control" id="telefono" required>
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Nuestro menú</h2>
							<select id="categoria" onchange="mostrarMenu(this.value)">
                        <option value="">Seleccione una opcion</option>
                        <option value="lasagnas">Lasagnas</option>
                        <option value="combos">Combos</option>
                        <option value="bebidas">Bebidas</option>
                    </select>
						</div>
					</div>


					<div id="lasagnas" class="row" style="display:none;">
						<h3>Lasagñas</h3>
						<div class="col-md-4">
							<center><img src="images/lag1.png">
								<br>
								<h4 class="text-primary">Clásica</h4>
								<h4 class="text-primary">$10.000</h4><br>
								<input type="number" name="lag1" value="0" min="0"></center>
						</div>
						<!--fin div regadera-->

						<div class="col-md-4">
							<center><img src="images/lag2.png">
								<br>
								<h4 class="text-primary">Pollo y Pesto</h4>
								<h4 class="text-primary">$12.000</h4><br>
								<input type="number" name="lag2" value="0" min="0"></center>
						</div>
						<!--fin div guantes-->

						<div class="col-md-4">
							<center><img src="images/lag3.png">
								<br>
								<h4 class="text-primary">Mariscos</h4>
								<h4 class="text-primary">$15.000</h4><br>
								<input type="number" name="lag3" value="0" min="0"></center>
						</div>
						<!--fin div pala-->
						<div class="clearfix"></div>
						<br>
						<div class="col-md-4">
							<center><img src="images/lag4.png" class="img-fluid">
								<br>
								<h4 class="text-primary">Tres Quesos</h4>
								<h4 class="text-primary">$8.000</h4><br>
								<input type="number" name="lag4" value="0" min="0"></center>
						</div>
						<!--fin div pala-->

						<div class="col-md-4">
							<center><img src="images/lag5.png">
								<br>
								<h4 class="text-primary">Rusticana</h4>
								<h4 class="text-primary">$16.000</h4><br>
								<input type="number" name="lag5" value="0" min="0"></center>
						</div>
						<!--fin div pala-->

						<div class="col-md-4">
							<center><img src="images/lag6.png">
								<br>
								<h4 class="text-primary">Berenjena Parmesana</h4>
								<h4 class="text-primary">$14.000</h4><br>
								<input type="number" name="lag6" value="0" min="0"></center>
						</div>
						<!--fin div pala-->
						<div class="clearfix"></div>
						<br>
						<div class="col-md-4">
							<center><img src="images/lag7.png">
								<br>
								<h4 class="text-primary">Cerdo a la BBQ</h4>
								<h4 class="text-primary">$16.000</h4><br>
								<input type="number" name="lag7" value="0" min="0"></center>
						</div>
						<!--fin div pala-->

						<div class="col-md-4">
							<center><img src="images/lag8.png">
								<br>
								<h4 class="text-primary">Salmón con Espinacas</h4>
								<h4 class="text-primary">$20.000</h4><br>
								<input type="number" name="lag8" value="0" min="0"></center>
						</div>
						<!--fin div pala-->

						<div class="col-md-4">
							<center><img src="images/lag9.png">
								<br>
								<h4 class="text-primary">Pavo con Champiñones</h4>
								<h4 class="text-primary">$22.000</h4><br>
								<input type="number" name="lag9" value="0" min="0"></center>
						</div>
						<!--fin div pala-->
						<div class="clearfix"></div>
						<br>
						<div class="col-md-4">
							<center><img src="images/lag10.png">
								<br>
								<h4 class="text-primary">Carne con Chorizo Criollo</h4>
								<h4 class="text-primary">$15.000</h4><br>
								<input type="number" name="lag10" value="0" min="0"></center>
						</div>
						<!--fin div pala-->
					</div>



					<div id="combos" class="row" style="display:none;">
						<h3>Combos</h3>
						<div class="col-md-4">
							<center><img src="images/combo1.png">
								<br>
								<h4 class="text-primary">Aventura del Mar</h4>
								<h5>Lasagña de Mariscos con Limonada de Hierbabuena</h5>
								<h4 class="text-primary">$22.000</h4><br>
								<input type="number" name="combo1" value="0" min="0"></center>
						</div>
						<!--fin div combo 1-->

						<div class="col-md-4">
							<center><img src="images/combo2.png">
								<br>
								<h4 class="text-primary">Fusión Mediterránea</h4>
								<h5>Lasagña de Pollo y Pesto con Limonada de Frutos Rojos</h5>
								<h4 class="text-primary">$20.000</h4><br>
								<input type="number" name="combo2" value="0" min="0"></center>
						</div>
						<!--fin div combo 2-->

						<div class="col-md-4">
							<center><img src="images/combo3.png">
								<br>
								<h4 class="text-primary">Festín Sureño</h4>
								<h5>Lasagña de Cerdo a la BBQ con Limonada de Mango</h5>
								<h4 class="text-primary">$22.000</h4><br>
								<input type="number" name="combo3" value="0" min="0"></center>
						</div>
						<!--fin div combo 3-->

						<div class="clearfix"></div>
						<br>
						<div class="col-md-4">
							<center><img src="images/combo4.png">
								<br>
								<h4 class="text-primary">Fiesta Colombiana</h4>
								<h5>Lasagña de Carne con Chorizo Criollo y Agua de Panela</h5>
								<h4 class="text-primary">$17.000</h4><br>
								<input type="number" name="combo4" value="0" min="0"></center>
						</div>
						<!--fin div combo 4-->

						<div class="col-md-4">
							<center><img src="images/combo5.png">
								<br>
								<h4 class="text-primary">Explosión de Sabores</h4>
								<h5>Lasagña de Pavo con Champiñones y Limonada Natural</h5>
								<h4 class="text-primary">$25.000</h4><br>
								<input type="number" name="combo5" value="0" min="0"></center>
						</div>
						<!--fin div combo 5-->

						<div class="col-md-4">
							<center><img src="images/combo6.png">
								<br>
								<h4 class="text-primary">Exquisitez Italiana</h4>
								<h5>Lasagña Rusticana y Limonada de Frutos Rojos</h5>
								<h4 class="text-primary">$24.000</h4><br>
								<input type="number" name="combo6" value="0" min="0"></center>
						</div>
						<!--fin div combo 6-->
					</div>


					<div id="bebidas" class="row d-flex align-items-center justify-content-center"" style="display:none;">
						<h3>Bebidas</h3>
						<div class="col-md-4 text-center">
							<center><img src="images/b1.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Limonada de Frutos Rojos</h4>
								<h4 class="text-primary">$10.000</h4><br>
								<input type="number" name="beb1" value="0" min="0"></center>
						</div>
						<!--fin div b1-->

						<div class="col-md-4">
							<center><img src="images/b2.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Limonada de Hierbabuena</h4>
								<h4 class="text-primary">$10.000</h4><br>
								<input type="number" name="beb2" value="0" min="0"></center>
						</div>
						<!--fin div b2-->


						<div class="col-md-4">
							<center><img src="images/b3.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Limonada de Mango</h4>
								<h4 class="text-primary">$10.000</h4><br>
								<input type="number" name="beb3" value="0" min="0"></center>
						</div>
						<!--fin div b3-->

						<div class="clearfix"></div>

						<br>
						<div class="col-md-4">
							<center><img src="images/b4.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Limonada Natural</h4>
								<h4 class="text-primary">$5.000</h4><br>
								<input type="number" name="beb4" value="0" min="0"></center>
						</div>
						<!--fin div b4-->

						<div class="col-md-4">
							<center><img src="images/b5.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Agua de Panela</h4>
								<h4 class="text-primary">$3.000</h4><br>
								<input type="number" name="beb5" value="0" min="0"></center>
						</div>
						<!--fin div b5-->

						<div class="col-md-4">
							<center><img src="images/b6.png" class="img-responsive center-block">
								<br>
								<h4 class="text-primary">Agua</h4>
								<h4 class="text-primary">$1.500</h4><br>
								<input type="number" name="beb6" value="0" min="0"></center>
						</div>
						<!--fin div b6-->
					</div>
					<br>
					<center><button type="submit" class="btn btn-primary">Hacer pedido</button></center>

					<br><br>
					<?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $lag1 = $_POST['lag1'];
                        $lag2 = $_POST['lag2'];
                        $lag3 = $_POST['lag3'];
                        $lag4 = $_POST['lag4'];
                        $lag5 = $_POST['lag5'];
                        $lag6 = $_POST['lag6'];
                        $lag7 = $_POST['lag7'];
                        $lag8 = $_POST['lag8'];
                        $lag9 = $_POST['lag9'];
                        $lag10 = $_POST['lag10'];
                        
                        $combo1 = $_POST['combo1'];
                        $combo2 = $_POST['combo2'];
                        $combo3 = $_POST['combo3'];
                        $combo4 = $_POST['combo4'];
						$combo5 = $_POST['combo5'];
						$combo6 = $_POST['combo6'];
                        
                        $beb1 = $_POST['beb1'];
                        $beb2 = $_POST['beb2'];
                        $beb3 = $_POST['beb3'];
                        $beb4 = $_POST['beb4'];
                        $beb5 = $_POST['beb5'];
                        $beb6 = $_POST['beb6'];
                        
                        $totlag1 = $lag1*10000;
                        $totlag2 = $lag2*12000;
                        $totlag3 = $lag3*15000;
                        $totlag4 = $lag4*8000;
                        $totlag5 = $lag5*16000;
                        $totlag6 = $lag6*14000;
                        $totlag7 = $lag7*16000;
                        $totlag8 = $lag8*20000;
                        $totlag9 = $lag9*22000;
                        $totlag10 = $lag10*15000;
                        
                        $totcombo1 = $combo1*22000;
                        $totcombo2 = $combo2*20000;
                        $totcombo3 = $combo3*22000;
                        $totcombo4 = $combo4*17000;
						$totcombo5 = $combo5*25000;
						$totcombo6 = $combo6*24000; 
                        
                        $totbeb1 = $beb1*10000;
                        $totbeb2 = $beb2*10000;
                        $totbeb3 = $beb3*10000; 
                        $totbeb4 = $beb4*5000;
                        $totbeb5 = $beb5*3000;
                        $totbeb6 = $beb6*1500; 
                        
                        $totallag=0;
                        $totalcombo=0;
                        $totalbebidas=0;
                        $total=0;
                        
                        $totallag = $totlag1 + $totlag2 + $totlag3 + $totlag4 + $totlag5 + $totlag6 + $totlag7 + $totlag8 + $totlag9 + $totlag10; 
                        $totalcombo = $totcombo1 + $totcombo2 + $totcombo3 + $totcombo4 + $totcombo5 + $totcombo6;
                        $totalbebidas = $totbeb1 + $totbeb2 + $totbeb3 + $totbeb4 + $totbeb5 + $totbeb6;
                        $total = $totallag + $totalcombo + $totalbebidas;
                        
                        echo "<b><center><h4 class='ultimos'> El costo de tu pedido es $". $total . " pesos </b></center></h4>";
                        echo "<b><center><h4 class='ultimos'> En unos minutos llegará a tu casa </b></center></h4>";
                        echo '<center><img src="images/domicilio.gif"></center>';
                        echo "<b><center><h4 class='ultimos'> ¡Gracias por tu compra! </b></center></h4>";
                    } 
            ?>
						<br>

						<div id="carrusel" class="container-fluid">
							<div class="row">
								<div class="col-md-12">
									<h2 class="segundo">Galería</h2>
									<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
											<li data-target="#myCarousel" data-slide-to="3"></li>
											<li data-target="#myCarousel" data-slide-to="4"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="images/pub1.jpg">
											</div>

											<div class="item">
												<img src="images/pub2.jpg">
											</div>

											<div class="item">
												<img src="images/pub3.jpg">
											</div>

											<div class="item">
												<img src="images/pub4.jpg">
											</div>

											<div class="item">
												<img src="images/pub5.jpg">
											</div>
										</div>

										<!-- Left and right controls -->
										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
									<!--fin carrusel-->
								</div>
								<!--fin col md 9-->
							</div>
						</div>

						<script>
							function mostrarMenu(categoria) {
							                            // Ocultar todos los divs de contenido
							                            document.getElementById('lasagnas').style.display = 'none';
							                            document.getElementById('combos').style.display = 'none';
							                            document.getElementById('bebidas').style.display = 'none';
							
							                            // Mostrar el div de contenido seleccionado
							                            if(categoria) {
							                                document.getElementById(categoria).style.display = 'block';
							                            }
							                        }
							
						</script>

				</form>
				<br>
				<footer>
					<div class="container-fluid footer-container">
						<div class="row">
							<div class="col-md-12 social-icons">
								<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f facebook"></i></a>
								<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram instagram"></i></a>
								<a href="https://api.whatsapp.com/send?phone=+1234567890" target="_blank"><i class="fab fa-whatsapp whatsapp"></i></a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="rights">Todos los derechos reservados &copy; 2024 Lasagnas Monedy</p>
							</div>
						</div>
					</div>
				</footer>

			</div>
		</div>
	</div>




	</div>
	</div>
	</div>

</body>
</html>