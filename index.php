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
			<a href="#" class="home_screen--shelf">
				<span class="link-title">Стоимость</span>
				<img src="<?php bloginfo('template_directory'); ?>/img/Curved_Shelf.png" alt="">
				<img class="ball" src="<?php bloginfo('template_directory'); ?>/img/Object.png" alt="">
			</a>
			<a href="#" class="home_screen--cloud">
				<span class="link-title">Связаться с нами</span>
				<img src="<?php bloginfo('template_directory'); ?>/img/Curves-7.png" alt="">
				<img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
			</a>
			<div class="home_screen--worckspace--imac">			
				<div class="md-imac md-glare">
				    <div class="md-body">
				        <div class="md-top">
				            <div class="md-camera"></div>

				            <div class="md-screen">
								<span id="user-caption">
									hi! <br>
									We are amazing! <br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur perspiciatis, ex repudiandae officia! Ullam magnam sed, ratione! Doloribus eaque, quas. <br>
									<!-- Lorem ipsum dolor sit amet. <br>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum voluptatem dolores voluptates maiores reiciendis, similique pariatur rem perspiciatis provident! Deserunt consectetur, cumque culpa dolores provident enim. Delectus, quis. Laudantium, qui? -->
								</span>
								<p class="console">
								    <span></span><span id="caption"></span><span id="cursor">|</span>
								</p>
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
				<span class="link-title">Стоимость</span>							
				<div class="md-ipad md-white-device md-glare">
				    <div class="md-body">
				        <div class="md-front-camera"></div>
				        <div class="md-screen">
					        <a href="#" class="fotorama"   data-loop="true"  data-arrows="false" data-click="true" data-swipe="true" data-autoplay="3000">					        	
					        	<img src="<?php bloginfo('template_directory'); ?>/img/replace-with-your-ui1.jpg" alt="">
					        	<img src="<?php bloginfo('template_directory'); ?>/img/screencapture-bmw-web-artcraft-com-1454661116692.png" alt="">
					        	<img src="<?php bloginfo('template_directory'); ?>/img/screencapture-generator-web-artcraft-com-1454661048148.png" alt="">
					        </a>					  		
				        </div>

				        <button class="md-home-button"></button>
				    </div>
				</div>
				<div class="home_screen--worckspace--ipad--stand">
					<img class="ipad--stand" src="<?php bloginfo('template_directory'); ?>/img/Ipad-stand.png" alt="">
				</div>
			</div>
			<a href="#" class="home_screen--worckspace--radio">
				<span class="link-title">Акции</span>
				<img src="<?php bloginfo('template_directory'); ?>/img/Radio.png" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/img/clock.png" alt="" class="clock">				
			</a>
			<div class="home_screen--worckspace--lamp">
				<img src="<?php bloginfo('template_directory'); ?>/img/Yellow_lamp.png" alt="">				
			</div>
			<div class="home_screen--worckspace--books">
				<img class="home_screen--worckspace--books--flag" src="<?php bloginfo('template_directory'); ?>/img/flag.png" alt="">
				<img class="home_screen--worckspace--books--box" src="<?php bloginfo('template_directory'); ?>/img/Box.png" alt="">
				<img src="<?php bloginfo('template_directory'); ?>/img/Books.png" alt="">				
			</div>
			<a href="#" class="home_screen--tape">
				<img  class="home_screen--tape--img"  src="<?php bloginfo('template_directory'); ?>/img/tape.png" alt="">
				<span class="link-title">Наши услуги</span>
			</a>
		</div>
	</div>
</section>

<footer class="polygon">
	
</footer>


<?php wp_footer(); ?>
</body>
</html>