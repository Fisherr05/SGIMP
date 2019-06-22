<?php require_once "vistas/dependencias.php" ?>
<?php 
	session_start();
	if(isset($_SESSION['email_persona'])){
		
 ?>
<!DOCTYPE html>
<html>
	<head>
          
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Workonline-Modificar Servicio</title>

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

    </head>
	<body>
		


		<!-- HEADER -->

		<header>
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
			<!-- TOP HEADER -->
			
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

						<!-- SEARCH BAR 
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
									<!-- Wishlist 
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								 /Wishlist -->

								<!-- Cart 
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								 /Cart -->

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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="ingresar_serv.php">Ingresar Servicio</a></li>
						<li><a href="ingresar_servpla.php">Ingresar Servicio plaza de empleo</a></li>
						<li class="active"><a href="modificar_servicio.php">Modificar Servicio</a></li>
						<li><a href="eliminar_servicio.php">Eliminar Servicio</a></li>
                                                <li><a href="perfil.php">Casa</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -
		<div id="breadcrumb" class="section">
			
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				 
			</div>
			
		</div>
		/BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
                                                <FORM ACTION="modificar.php" name="frm" METHOD="POST">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Tus servicios</h3>
							</div>
							<div class="order-notes">
							<h4> </h4>
						    </div>
							
							<div class="form-group">
								
                                                                <?php
                                                                $usuario=$_SESSION['email_persona'];
                                                                //$id='3';    
                                                                try{
                                                                        require_once ('conexion.php');
                                                                        $sql="SELECT * from servicio 
                                                                        where id_servicio in (SELECT id_servicio 
                                                                        						from persona_servicio
                                                                        					   where id_persona in (select id_persona
                                                                        											from persona
                                                                        											where email_persona='$usuario'))";
                                                                         $result=$conn->query($sql);       
                                                                    } catch (Exception $ex) {
                                                                            $error=$e->getMessage();
                                                                    }
                                                                ?>
                                                            <table class="table table-hover">
                                                                <tr>
                                                                    <th>&nbsp;Descripcion&nbsp;</th>
                                                                    <th>&nbsp;Disponibilidad&nbsp;</th>
                                                                    <th>&nbsp;Tipo&nbsp;</th>
                                                                    <th style="color:#ff0000">&nbsp;Modificar&nbsp;</th>
                                                                </tr>
                                                                 <?php
                                                               
                                                                while($row = $result->fetch_array()) {
                                                                printf("
                                                                <tr>
                                                                    <td>&nbsp;%s</td>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    <td>&nbsp;%s&nbsp;</td>
                                                                    </td><td><a href=\"modificar.php?id=%d\">Modificar</a></td>
                                                                    </tr>",$row["descripcion_servicio"],$row["disponibilidad_servicio"],$row["tipo_servicio"],$row["id_servicio"]);
                                                                }
                                                                    $result->close();
                                                                    $conn->close(); 
                                                             ?>
                                                          
                                                               
                                                            </table>                                                          
                                                            
							</div>
							
							<!--<button class="btn btn-success"><i class="fa fa-clipboard"></i> Enviar</button>-->
                                                        <!--<input type="button" class="btn btn-success" value="Modificar" onclick="valida_envia()" />-->
						</div>
                                                </form>
                                        </div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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