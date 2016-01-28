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

<section class="home_screen">
	<div class="container-wrap">
		<div class="home_screen--title">
			<h2>ОСОБЕННЫЙ LANDING PAGE</h2>
			<h4>для особенных компаний</h4>
		</div>
		<div class="home_screen--worckspace">
			<div class="home_screen--shelf">
				<img src="<?php bloginfo('template_directory'); ?>/img/Curved_Shelf.png" alt="">
			</div>
			<div class="home_screen--worckspace--imac">			
				<div class="md-imac md-glare">
				    <div class="md-body">
				        <div class="md-top">
				            <div class="md-camera"></div>

				            <div class="md-screen">

				            </div>
				        </div>
				    </div>

				    <div class="md-base">
				        <div class="md-stand"></div>
				        <div class="md-foot"></div>
				    </div>
				</div>
			</div>
			<div class="home_screen--worckspace--ipad">							
				<div class="md-ipad md-white-device md-glare">
				    <div class="md-body">
				        <div class="md-front-camera"></div>

				        <div class="md-screen">
					  <-- Your content here -->
				        </div>

				        <button class="md-home-button"></button>
				    </div>
				</div>
				<div class="home_screen--worckspace--ipad--stand">
					<img class="ipad--stand" src="<?php bloginfo('template_directory'); ?>/img/Ipad-stand.png" alt="">
				</div>
			</div>
			<div class="home_screen--worckspace--lamp">
				<img src="<?php bloginfo('template_directory'); ?>/img/Yellow_lamp.png" alt="">
			</div>
		</div>
	</div>
</section>


<?php wp_footer(); ?>
</body>
</html>