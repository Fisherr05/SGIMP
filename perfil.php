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

		<title>WorkOnline</title>

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
                <!--  CSS de Bootstrap -->
    

    </head>
	<body>
		<!-- HEADER -->
		<header>
			

			<!-- MAIN HEADER -->
			<div id="header">

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


				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" width="250" height="100">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->


						<div class="col-md-6">
							<div class="header-search">
                                                            <form>
									<input class="input" placeholder="Busca aqui">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>

		
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
							

								<!-- Perfil -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
										<i class="fa fa-user"></i>
										<span>Perfil</span>
										
									</a>
									<div class="cart-dropdown">
										 <?php
                                                                    //$id=$_GET['id_persona'];
                                                                //$id='3';    
                                                                try{
                                                                        require_once ('conexion.php');
                                                                        $sql="select *from PERSONA where id_persona=1 ";
                                                                         $result=$conn->query($sql);       
                                                                    } catch (Exception $ex) {
                                                                            $error=$e->getMessage();
                                                                    }
                                                                ?>
											<div class="product-widget">
												<div class="img-rounded" >
													<img src="./img/perfil.png" class="img-thumbnail" alt="Cinque Terre" width="270" height="100">
												</div>
												<div>
                                                                                                   
												</div>
												
											</div>

											
										
										<div class="cart-summary">
											<?php
                                                                    //$id=$_GET['id_persona'];
                                                                //$id='3';    
                                                                try{
                                                                        require_once ('conexion.php');
                                                                        $sql="select *from PERSONA where id_persona=2";
                                                                         $result=$conn->query($sql);       
                                                                    } catch (Exception $ex) {
                                                                            $error=$e->getMessage();
                                                                    }
                                                                ?>
                                                            <table>
                                                                <tr>
                                                                    <th>&nbsp;&nbsp;</th>
                                                                    <th>&nbsp;&nbsp;</th>
                                                                
                                                                    <th>&nbsp;&nbsp;</th>
                                                                
                                                                    <th>&nbsp;&nbsp;</th>
                                                                
                                                                    <th>&nbsp;&nbsp;</th>                                                                  
                                                              
                                                                    <th>&nbsp;&nbsp;</th>
                                                                </tr>
                                                                
                                                                 <?php
                                                               
                                                                while($row = $result->fetch_array()) {
                                                                printf("
                                                                <tr>
                                                                    <td>&nbsp;%s %s</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    </tr>
                                                                <tr>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    </tr>
                                                                <tr>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    </tr>
                                                                <tr>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    
                                                                    </tr>",$row["nombre_persona"],$row["apellido_persona"],$row["telefono_persona"],$row["direccion_persona"],$row["email_persona"],$row["edad_persona"],$row["id_usuario"]);
                                                                }
                                                                    $result->close();
                                                                    $conn->close(); 
                                                             ?>	
                                                                </table>
										</div>
										<div class="cart-btns">
											
                                                                                    <a href="ingresar_serv.php">Servicios  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!--  -->


								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
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

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Los mejores<br>Plomeros</h3>
								<a href="detalles_servicio.php?profesion=plomero" class="cta-btn">ver ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Los Mejores<br>Pintores</h3>
								<a href="#" class="cta-btn">ver ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Los mejores<br>Albañiles</h3>
								<a href="#" class="cta-btn">ver ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Mas votados</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Plomeria</p>
												<h3 class="product-name"><a href="#">Plomero a domicilio</a></h3>
												
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i> Ver perfil</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Albañil</p>
												<h3 class="product-name"><a href="#">Albañil</a></h3>
												
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i> Ver perfil</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product03.png" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Limpieza</p>
												<h3 class="product-name"><a href="#">Limpieza a domicilio</a></h3>
												
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i> Ver perfil</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product04.png" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Manualidades</p>
												<h3 class="product-name"><a href="#">Se realiza cualquier manualidad</a></h3>
												
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i> Ver perfil</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product05.png" alt="">
												
											</div>
											<div class="product-body">
												<p class="product-category">Limpieza</p>
												<h3 class="product-name"><a href="#">Limpieza a domicilio</a></h3>
												
												<div class="product-rating">
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-user"></i> Ver perfil</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		


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

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			
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