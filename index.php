<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/wp-content/uploads/2015/03/657068.ico" type="image/x-icon" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE">
    </script>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navigation" role="navigation">
		<div class="container">		
			 <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	 <a href="#nowhere" class="hamburger-slim" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></a>					
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">		      	     
		      <ul class="nav navbar-nav navbar-right navigation__list">		      
		        <li><a href="#go_about" class="smoothScroll">УСЛУГИ</a></li>
		        <li><a href="#go_serv" class="smoothScroll">ПОРТФОЛИО</a></li>
		        <li><a href="#go_ben" class="smoothScroll">АКЦИИ</a></li>
		        <li><a href="#go_production" class="smoothScroll">О НАС</a></li>
		        <li><a href="#go_cont" class="smoothScroll">КОНТАКТЫ</a></li>
		        <li><a href="#" class="smoothScroll">СТОИМОСТЬ</a></li>  		       
		      </ul>
		    </div><!-- /.navbar-collapse -->			                  
		</div>
	</nav>

	<section class="initial-screen">
		<div class="container-fluid">
			<div class="row">				
				<div class="initial-screen__slider">
					<h2>ОСОБЕННЫЙ LANDING PAGE</h2>
					<div class="initial-screen--macbook">
						<img src="<?php bloginfo('template_directory'); ?>/img/macbook.png" alt="">
					</div>
					<ul class="grid">
						  <li class="one"><span class="s"></span></li>
						<!--   <li class="two"><span class="s"></span></li>
						  <li class="three"><span class="s"></span></li>
						  <li class="four"><span class="s"></span></li> -->
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php wp_footer(); ?>
</body>
</html>