<?php 
    /***************************************************************
     * Template Name: Contact
     * 
     * ************************************************************/
    
?>
<?php
	get_header();
?>
	
		<div class="page-border bottom colors-e background-solid"><a href="#top" class="hover-effect">To <span class="highlight">Top</span></a></div>
		<div class="page-border left colors-e background-solid">
			<ul>
				<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<li><a href="http://www.skype.com/" target="_blank"><i class="fa fa-skype"></i></a></li>
			</ul>
		</div>
		<!-- BEGIN: Top menu -->
		<?php 
			get_template_part('nav');
		?>
		<!-- END: Top menu -->
		<ul id="dot-scroll" class="colors-e background-solid"></ul>
		<div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
			<div class="overlay-control background-90-b">
				<a class="previos" href="#"></a>
				<a class="next" href="#"></a>
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view"></div>
			<ul class="loader">
				<li class="background-highlight-e"></li>
				<li class="background-highlight-e"></li>
				<li class="background-highlight-e"></li>
			</ul>
		</div>
		<div class="overlay-window map-overlay colors-h background-75-h">
			<div class="overlay-control background-90-g">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
					<div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
					<div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
				</div>
			</div>
		</div>
		<div class="overlay-window credits-overlay colors-g background-95-g">
			<div class="overlay-control background-90-b">
				<a class="cross" href="#"></a>
			</div>
			<div class="overlay-view">
				<div class="content-container">
					<h3>Credits</h3>
						<li>
							Icons by:
							<ul>
								<li><a target="_blank" href="http://designmodo.com/">Designmodoh</a>, <a target="_blank" href="http://designmodo.com/linecons-free/">License</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="gate colors-e background-solid">
			<div class="gate-bar background-heading-e"></div>
			<ul class="loader">
				<li class="background-heading-e"></li>
				<li class="background-heading-e"></li>
				<li class="background-heading-e"></li>
			</ul>
		</div>
		<section>
			<div class="view">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/pexels-aris-ioakimidis-370659.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/pexels-aris-ioakimidis-370659.jpg" />
				<div class="content half-size colors-a">
					<div class="container">
						<h2>Contact</h2>
						<p class="title">Skrollex <span class="highlight">Theme</span></p>
					</div>
				</div>
			</div>
		
		
			<div class="view">
			    <section id="contact">
			<div class="view">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/pexels/art-brush-colors-3112.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
				<div class="content full-size colors-h">
					<div class="container">
						<h2>Contact</h2>
						<p class="header-details">Keep In Touch</p>
						<div class="row">
							<div class="col-md-6">
								<div class="text-right scroll-in-animation" data-animation="fadeInLeft">
									<p class="big-font uppercase">
										Tel: <strong class="highlight">+7 (781) 503-1810</strong>
									</p>
									<p class="big-font uppercase">
										500 Unicorn Park Dr, 21st Floor
										<br/> Woburn, MA 01801, United States
									</p>
									<p class="big-font">
										<b>
									<a href="mailto:info@ouraddress.com">info@ouraddress.com</a><br/>
									<a href="http://www.ouraddress.com/">www.ouraddress.com</a>
								</b>
									</p>
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="text-left scroll-in-animation" data-animation="fadeInRight">
									<form class="ajax-form" data-message-class="colors-e background-95 border heading" action="https://skrollex.x40.ru/theme-lynda/contact.php" method="post" novalidate="novalidate">
										<div class="row">
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Name</div>
												<input type="text" name="your-name" value="" size="40" placeholder="Name" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											<div class="col-md-6 control-group">
												<div class="alt-placeholder">Email</div>
												<input type="email" name="your-email" value="" size="40" placeholder="Email" data-validation-required-message="Please fill the required field." required>
												<div class="help-block"></div>
											</div>
											<div class="col-md-12 control-group">
												<div class="alt-placeholder">Message</div>
												<textarea name="your-message" placeholder="Message" data-validation-required-message="Please fill the required field." required></textarea>
												<div class="help-block"></div>
											</div>
											<div class="col-md-12 form-actions">
												<input class="button" type="submit" value="Send">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a class="map-open button background-lite-b border-heading-b heading-b" data-map-overlay=".map-overlay" href="#">Locate Us on Map</a>
						</div>
					</div>
				</div>
			</div>
		</section>
			</div>
		</section>
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	