<?php
if(isset($_POST["template-contactform-submit"] ) and $_POST["email"] != ""):
	//echo "aca entroo";
	$asunto ="Contacto desde Shopper : " . $_POST["asunto"];
	$html="";
	$html .= "<p>Nombre : ".$_POST["nombre"]." </p>";
	$html .= "<p>Apellido : ".$_POST["apellido"]." </p>";
	$html .= "<p>Telefono : ".$_POST["telefono"]." </p>";
	$html .= "<p>Email : ".$_POST["email"]." </p>";

	$html .= "<p>Mensaje : ". $_POST["mensaje"] ."</p>";

//	$html .= "<p><img src='".IMGS."email_footer.png'></p>";

	require_once  'mandrill/Mandrill.php'; 
	$mandrill = new Mandrill('1Tg-biFyBAAq8yh7GYaYWg');
	try{ 
		$message = array(
			'subject' => $asunto,
			'html' => $html ,
			'from_email' => 'admin@shopper.com.ar',
			'to' => array(
				array(
					'email' => "l.verni@ibris.com.ar",
					'name' => $_POST["nombre"] ." ". $_POST["apellido"]
				)                       
			)
		);
		$result = $mandrill->messages->send($message);   
		if($result){ 
		echo '<script type="text/javascript">window.alert("Mensaje enviado correctamente");</script>'; 
			$envio_email	= true; }
	} catch(Mandrill_Error $e) { 
		$envio_email	= false;
	}	




endif;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Shopper</title>

</head>

<body class="stretched sticky-responsive-pagemenu">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="page-section full-header ">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" class="hidden-md hidden-lg">
						<a href="index.html" class="standard-logo" ><img src="images/logo100.png" class="img-responsive" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" ><img src="images/logo100.png" class="img-responsive" alt="Canvas Logo"></a>
					</div><!-- #logo end -->
					<div id="logo" class="hidden-xs hidden-sm">
						<a href="index.html" class="standard-logo"><img src="images/logo.png" class="img-responsive" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo"><img src="images/logo.png" class="img-responsive" alt="Canvas Logo"></a>
					</div><!-- #logo end -->
					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="#" data-scrollto="#nosotros"><div>NOSOTROS</div></a></li>
							<li><a href="#" data-scrollto="#plataformas"><div>PLATAFORMAS</div></a></li>
							<li><a href="#" data-scrollto="#servicios"><div>SERVICIOS</div></a></li>
							<li><a href="#" data-scrollto="#partners"><div>PARTNERS</div></a></li>
							<li><a href="#" data-scrollto="#contactos"><div>CONTACTO</div></a></li>
						</ul>



					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax full-screen force-full-screen with-header swiper_wrapper page-section clearfix">

			<div class="slider-parallax-inner" >

				<div class="swiper-container swiper-parent" >
					<div class="swiper-wrapper" >
						<div class="swiper-slide dark" style="background-image: url('images/header.png');">
							<div class="container clearfix" >
								<div class="slider-caption slider-caption-center" >
									<h2 data-caption-animate="fadeInUp" style="font-size: 54px">BIENVENIDO A SHOPPER</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">La primer tienda online corporativa para vos y para tus empleados.</p>
					
									<div class="row text-center hidden-xs" style="width: 50%; margin: 10% 20% 0 25%; text-align: center;">				
									<form class="landing-wide-form landing-form-overlay dark nobottommargin clearfix" style="float: center;">
										
										<div class="col_full">
											<input type="email" name="template-landing5-email" class="form-control required input-lg not-dark" value="" placeholder="Email*">
										</div>
										<div class="col_full">
											<input type="password" name="template-landing5-password" class="form-control required input-lg not-dark" value="" placeholder="Password*">
										</div>

										<div class="col_full nobottommargin">
											<button class="btn btn-lg  btn-block nomargin" value="submit" type="button" style="background-color: #1ABC9C">LOGIN</button>
										</div>
									</form>
									</div>	
								</div>





							</div>
						</div>

					</div>
<!--					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>-->
					<a href="#" data-scrollto="#section-about" class="one-page-arrow dark">
						<i class="icon-angle-down infinite animated fadeInDown"></i>
					</a>
				</div>

			</div>

		</section>


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<a id="nosotros"></a>
				<div class="container clearfix" style="margin-bottom: 80px ">
					<div class="row clearfix">

						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1>LA FORMA MÁS SIMPLE DE OBTENER BENEFICIOS</h1>
							</div>
							<p class="lead" style="font-size: 14px">Shopper es una tienda online corporativa que te permite brindarle a tus clientes y empleados regalos y beneficios exclusivos de la forma más simple.<br/>
							Contamos con más de 100 partners de diversos rubros y la más amplia variedad de productos de catálogo al mejor precio.
							<br/>
							<br/>
							Asociar tu empresa a Shopper no tiene costo de implementación o mantenimiento.
							<br/>
							<br/>	
							Descubrí nuestras plataformas y conocé una nueva manera de fidelizar y brindar beneficios.							
							</p>

						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
							<!--	<img src="images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">
								<img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="400" alt="iPad">-->
								<img src="images/landing.png" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" data-delay="100" alt="Chrome">								
							</div>

						</div>

					</div>
				</div>

				<a id="plataformas"></a>
				<section id="section-about" class="page-section">
					<div class="section section dark parallax nobottommargindark parallax nobottommargin" style="background-image: url('images/background_videos.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.3">

					<div class="container clearfix " >

						<div class="heading-block center">
							<h2>PLATAFORMAS</h2>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class=" bottommargin">
									<a href="http://vimeo.com/246150111" data-lightbox="iframe" style="position: relative;">
										<img src="images/preview/video01.png" width="360px" alt="Video">
										<span class="i-overlay nobg"><img src="images/icons/video-play.png" alt="Play"></span>
									</a>
									<p style="padding-top: 10px; font-weight: bold; text-align: center;" > 
										<span class="color" style="font-weight: normal;font-size: 20px">CORPORATIVO </span> <br/>
										<span style="font-size: 16px;font-weight: normal; width: 300px; line-height: 5px;">Brindale a tus recursos la posibilidad de adquirir productos increíbles al mejor precio.</span>	
									</p>									
								</div>

							</div> 
							<div class="col-md-4">
								<div class=" bottommargin">
									<a href="https://vimeo.com/246150038" data-lightbox="iframe" style="position: relative;">
										<img src="images/preview/video02.png"  width="360px" alt="Video">
										<span class="i-overlay nobg"><img src="images/icons/video-play.png" alt="Play"></span>
									</a>
									<p style="padding-top: 10px; font-weight: bold; text-align: center;" > 
										<span class="color" style="font-weight: normal;font-size: 20px">FIN DE AÑO</span> <br/>
										<span style="font-size: 16px;font-weight: normal; width: 300px; line-height: 5px">Ofrecele a tus empleados la oportunidad de elegir el producto que desee.</span>	
									</p>									
								</div>

							</div>						
							<div class="col-md-4">
								<div class=" bottommargin">
									<a href="https://vimeo.com/247330400" data-lightbox="iframe" style="position: relative;">
										<img src="images/preview/video03.png"  width="360px" alt="Video">
										<span class="i-overlay nobg"><img src="images/icons/video-play.png" alt="Play"></span>
									</a>
									<p style="padding-top: 10px; font-weight: bold; text-align: center;" > 
										<span class="color" style="font-weight: normal;font-size: 20px">AGENDA DE REGALOS</span> <br/>
										<span style="font-size: 16px;font-weight: normal; width: 300px; line-height: 5px">La mejor opción para demostrarles a tus clientes lo importantes que son para vos.</span>	
									</p>									
								</div>

							</div>			
						</div>


						<div class="clear"></div>

					</div>
				</div>	

				</section>



				<a id="servicios"></a>
				<section id="section-services" class="page-section topmargin-lg">

					<div class="heading-block center ">
						<h2>ALCANCE DEL SERVICIO</h2>
						<span style="font-size: 18px">Shopper te brinda los productos, el canal de venta online y la logística de entrega.</span>
					</div>

					<div class="container clearfix">

						<div class="col-md-4">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
								<div class="fbox-icon">
									<i class="icon-cart"></i>
								</div>
								<h3>PRODUCTOS</h3>
								<p>Convenios con marcas de primer nivel. Tenemos alianzas con empresas de diversos rubros que nos permiten ofrecer una amplia variedad de productos. Somos importadores directos de productos chinos, permitiéndonos ofrecer catálogos especialmente diseñados para optimizar su inversión de regalos de fin de año. Contamos con seguridad y almacenamiento propio.</p>
							</div>
						</div>


						<div class="col-md-4" style="padding-left: 22px;padding-right: 22px">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<i class="icon-laptop"></i>
								</div>
								<h3>PLATAFORMA ONLINE</h3>
								<p>Sistema propio, integramente desarrollado para cubrir sus necesidades. Look&Feel personalizado. Catálogo de productos. Administración de usuarios E-commerce. Proceso de canje. Control de stock. Consulta y visualización de listas de envío. Sistema de tickets para atención y seguimiento de consultas. Dashboard con estadísticas y reportes. Soporte técnico.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<i class="icon-truck"></i>
								</div>
								<h3>LOGÍSTICA</h3>
								<p  >Logística de entrega a través de Urbano, socio estratégico con depósitos y red nacional propia. Más de 9 millones de envíos mensuales. 1500 empleados. Más de 150 vehículos propios. 64 sucursales. 2 depósitos exclusivos. 8.500 m2 de almacenamiento.</p>
							</div>
						</div>


						<div class="clear"></div>

					</div>

					<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>

				</section>


		<!-- Contact Form & Map Overlay Section
		============================================= -->

				<div id="partners"  style="padding-top: 20px; padding-bottom: 60px; background: #f5f5f5">
					<h3 style="text-align: center;">PARTNERS</h3>
					<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="7" data-items-lg="9">

					<div class="oc-item"><a href="#"><img src="images/PARTNERS/black-and-decker.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/braun-logo.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/fiorenza.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/gama.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/goodyear.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/hitachi.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/kitchenaid.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/lg.png" alt="Clients"></a></div>

					<div class="oc-item"><a href="#"><img src="images/PARTNERS/moulinex.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/nespresso.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/nikon.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/philco.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/philips.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/samsung.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/sony.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/swatch.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/volf.jpg" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/PARTNERS/whirlpool.png" alt="Clients"></a></div>


					</div>


				</div>


		<section id="">

			<div class="container clearfix" style="padding-top: 20px">

				<!-- Contact Form Overlay
				============================================= -->
				<div id="contactos">

					<div class="fancy-title title-dotted-border">
						<h3>CONTACTENOS</h3>
					</div>

					<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

					<!-- Contact Form
					============================================= -->
					<form class="nobottommargin" id="template-contactform" name="template-contactform" method="post">

						<div class="col_half">
							<label for="template-contactform-name">Nombre <small>*</small></label>
							<input type="text" id="nombre" name="nombre" value="" class="sm-form-control required" />
						</div>
						<div class="col_half col_last">
							<label for="template-contactform-lastname">Apellido <small>*</small></label>
							<input type="text" id="apellido" name="apellido" value="" class="sm-form-control required" />
						</div>
						<div class="col_half">
							<label for="template-contactform-phone">Telefono</label>
							<input type="text" id="telefono" name="telefono" value="" class="sm-form-control" />
						</div>
						<div class="col_half col_last">
							<label for="template-contactform-email">Email <small>*</small></label>
							<input type="email" id="email" name="email" value="" class="required email sm-form-control" />
						</div>


						<div class="clear"></div>

						<div class="col_full">
							<label for="asunto">Asunto <small>*</small></label>
							<input type="text" id="asunto" name="asunto" value="" class="required sm-form-control" />
						</div>

						<div class="col_full">
							<label for="mensaje">Mensaje <small>*</small></label>
							<textarea class="required sm-form-control" id="mensaje" name="mensaje" rows="6" cols="30"></textarea>
						</div>

						<div class="col_full hidden">
							<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
						</div>

						<div class="col_half">
							<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit" style="padding-bottom: 20px">Enviar Mensaje</button>
											
						</div>
						<div class="col_half col_last text-right">
							<label for="template-contactform-email" style="font-weight: normal;"></label>
					
						</div>						

					</form>



				</div><!-- Contact Form Overlay End -->

			</div>



		</section><!-- Contact Form & Map Overlay Section End -->		



			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2018 All Rights Reserved by Shopper Arg<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
<!--							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>-->
						</div>

						<div class="clear"></div>

<!--						<i class="icon-envelope2"></i> info@shopper.com.ar <span class="middot">&middot;</span> <i class="icon-headphones"></i> +54-11-4964-4048 <span class="middot">&middot;</span> -->
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>

	<script type="text/javascript">

		jQuery('#google-map').gMap({
			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [32,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}

		});
	</script>

</body>
</html>