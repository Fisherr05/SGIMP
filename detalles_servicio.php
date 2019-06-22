<?php require_once "vistas/dependencias.php" ?>
<?php 
	session_start();
	if(isset($_SESSION['email_persona'])){
		
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Detalle Servicios</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


		<![endif]-->
		<style>

form{ width:250px; margin:0 auto; padding:10px; border: 1px solid #d9d9d9;}
form p, form input[type = "submit"]{text-align:center; font-size:20px;}


input[type = "radio"]{ display:none;/*position: absolute;top: -1000em;*/}
label{ color:grey;}

.clasificacion{
    direction: rtl;
    unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label{color:orange;}
input[type = "radio"]:checked ~ label{color:orange;}

</style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +032-234-432</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>workonline@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 593 ECUADOR</a></li>
					</ul>
					<div id="navbar" class="navbar navbar-inverse">

          <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" >
            <a href="#" style="color: white"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['email_persona']; ?>  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="procesos\salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						

								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="perfil.php">Principal</a></li>
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="./img/c1.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/d1.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/d2.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/c3.jpg" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="./img/c1.png" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/d1.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/tc1.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="./img/s1.jpg" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">
								 <?php
								$dato= $_GET['profesion'];
								$conn=new mysqli("localhost","root","","workonline");
								$sql = "SELECT descripcion_servicio FROM servicio where tipo_servicio='$dato'";
								$result=$conn->query($sql);
								$fila = $result->fetch_array();
													echo $fila ["descripcion_servicio"];
													echo "</p>";

								?>

							</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="index.php">Puntaje(s) | Añade tu caificaion</a>
							</div>
							<div>
								
								<span class="product-available">Disponible</span>
							</div>
						
							   <?php
								$dato= $_GET['profesion'];
								$conn=new mysqli("localhost","root","","workonline");
								$sql = "SELECT *  FROM persona where id_persona in(SELECT id_persona FROM persona_servicio where id_servicio in (SELECT id_servicio FROM servicio where tipo_servicio='$dato'))";
								$result=$conn->query($sql);
								$fila = $result->fetch_assoc();
													echo "Nombre: ". $fila ["nombre_persona"];
													echo "<p>";
													echo "Apellido: "; // un separador 
													echo $fila["apellido_persona"];
													echo "<p>";
													echo "Email: "; // un separador
													echo $fila ["email_persona"];
													echo "<p>";
													echo "Edad: "; // un separador
													echo $fila["edad_persona"]. " años";
													echo "</p>";
													echo "Telefono de contacto: "; // un separador
													echo "[Ecuador]+53-".$fila["telefono_persona"];
													echo "</p>";


								?>
							<!--<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i>Añadir a Lista</a></li>
								
							</ul>-->

							<ul class="product-links">
								<li>Nuestras Redes:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Informacion</a></li>
								<li><a data-toggle="tab" href="#tab3">Comentarios</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>
												 <?php
												$dato= $_GET['profesion'];
												$conn=new mysqli("localhost","root","","workonline");
												$sql = "SELECT *  FROM persona where id_persona in (SELECT id_persona FROM persona_servicio where id_servicio in(SELECT id_servicio FROM servicio where tipo_servicio='$dato'))";
												$sql1 = "SELECT * FROM servicio where tipo_servicio='$dato'";
												$result1=$conn->query($sql1);
												$fila1 = $result1->fetch_array();
												$result=$conn->query($sql);
												$fila = $result->fetch_array();
																	echo "Nuestro cliente ". $fila ["nombre_persona"]." ".$fila["apellido_persona"]." ofrece un ".$fila1 ["tipo_servicio"]." con un enfasis en ".$fila1 ["descripcion_servicio"];
																	echo "<p>";
																
												?>
											</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>buen trabajador.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Buen trabajador</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">Carlos</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Muy Puntual</p>
														</div>
													</li>
													<li>

														<div class="review-heading">
															<h5 class="name">Jose</h5>
															<p class="date">06 FEB 2019, 11:40 AM</p>
															
															 <?php
															$dato= $_GET['profesion'];
															$conn=new mysqli("localhost","root","","workonline");
															$sql = "SELECT *  FROM calificacion where id_calificacion in (SELECT id_calificacion
																														  from empleador_calificacion
																														 where id_empleado in (SELECT id_empleado
																														                   from empleado
																														                    where servicio_empleado='$dato')) ";
															$result=$conn->query($sql);

															$fila = $result->fetch_array();
																				echo "Puntuacion: ".$fila['puntuacion']."/5"." ";
																				echo "<p>";


															?>					



														</div>

														<div class="review-body">
															<?php	
															echo "Comentario: ".$fila['descripcion']." ";								
																			
															?>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">

												<div id="wrapper">


												<form action="calificacion.php" method="post">
												<input class="input" type="text"name="comentario" placeholder="Comentario">	
												<p class="clasificacion">


												<input id="radio1" type="radio" name="estrellas" value="5"><label for="radio1">&#9733;</label><input id="radio2" type="radio" name="estrellas" value="4"><label for="radio2">&#9733;</label><input id="radio3" type="radio" name="estrellas" value="3"><label for="radio3">&#9733;</label><input id="radio4" type="radio" name="estrellas" value="2"><label for="radio4">&#9733;</label><input id="radio5" type="radio" name="estrellas" value="1"><label for="radio5">&#9733;</label>
												</p>
												<input id="profe" name="profe" type="hidden" value="<?php echo $dato;?>">
												<p><input type="submit" value="Calificar" name="accion" /></p>
												</form>
												</div>


											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Siguenos en <strong> REDES</strong></p>
							
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">NOSOTROS</h3>
								<p>Empresa que brinda oferta y demanda de servicios de manera online.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>593 ECUADOR</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+032-234-567</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>workonline@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">

									<li><a href="pruebaproducto.php?profesion=servicios administrativos">Administracion</a></li>
									<li><a href="pruebaproducto.php?profesion=doctor general">Salud</a></li>
									<li><a href="pruebaproducto.php?profesion=pandero">Alimentos</a></li>
									<li><a href="pruebaproducto.php?profesion=servicio de arquitecto">Construccion</a></li>
									
									
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informacion</h3>
								<ul class="footer-links">
									<li><a href="#">Quienes somos</a></li>
									<li><a href="#">Contactenos</a></li>
									<li><a href="#">Politica de Privacidad</a></li>
									<li><a href="#">Ordenar</a></li>
									<li><a href="#">Terminos y Condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="index.php">Iniciar Sesion</a></li>
									<li><a href="#">Tarjeta</a></li>
									<li><a href="#">Listas</a></li>
									<li><a href="#">Ordenes</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
<?php 
}else{
	session_unset();
   	session_destroy();
	header("location:../index.php");
}
?>
