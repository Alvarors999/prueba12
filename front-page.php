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
					<ul>
						<li>
							Photos by:
							<ul>
								<li><a target="_blank" href="https://www.flickr.com/photos/katya_alagich/">Katya Alagich</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/65047661@N00/">Jim Lukach</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/johanl/">Johan Larsson</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/johny/">John Kraus</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/geishaboy500/">THOR</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="https://www.flickr.com/photos/stf-o/">stephane</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 License</a></li>
								<li><a target="_blank" href="http://www.pexels.com/">Pexels</a>, <a target="_blank" href="http://www.pexels.com/photo-license/">CC0 License</a></li>
								<li><a target="_blank" href="https://stocksnap.io/">Stocksnap</a>, <a target="_blank" href="https://stocksnap.io/license">CC0 License</a></li>
								<li><a target="_blank" href="http://picjumbo.com/">Picjumbo</a>, <a target="_blank" href="http://picjumbo.com/about-author/">Picjumbo License</a></li>
							</ul>
						</li>
						<li>
							Video by:
							<ul>
								<li><a target="_blank" href="http://mazwai.com/">Mazwai</a>, <a target="_blank" href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0 License</a></li>
							</ul>
						</li>
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
		
		
		
		
		<!-- BEGIN: Page content -->
		<section id="home">
			<div class="view">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stephane/1.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stephane/7-edited.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stephane/42-edited.jpg" />
				<div class="content home-lynda full-size colors-e background-0">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="textillate highlight" data-textillate-options="{loop:true, in:{effect:'flipInY', reverse:false}, out:{effect:'flipOutY', reverse:false}}">
									<ul class="texts">
										<li>We Are Designers</li>
										<li>We Are Programmers</li>
										<li>We Are Coders</li>
										<li>We Are Developers</li>
										<li>We Are Creative</li>
									</ul>
								</div>
								<h1 class="heading text-left">DREAM BIG</h1>
								<p class="box border background-10-b">
									We are a French global design studio based in Paris, applying a design that knows no limits and promotes a positive change.
								</p>
								<div class="big-separator"></div>
								<p><a href="#about" class="button background-20-d border">About Us</a><a href="#work" class="button background-20-f border">Our Work</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="view">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_IMG_5790.jpg" />
				<div class="content pane">
					<div class="container-fluid">
						<div class="row hidden-xs hidden-sm">
							<div class="col-md-4 colors-b">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">Responsive</h3>
										<p class="title">Layout</p>
									</div>
									<div class="col-xs-12 success heading-b banner-cell">
										Responsive Styling
										<br /> Retina Ready
									</div>
								</div>
							</div>
							<div class="col-md-4 colors-c">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">Parallax</h3>
										<p class="title">Effects</p>
									</div>
									<div class="col-xs-12 warning heading-c banner-cell">
										Highly Optimized
										<br /> Smooth Animations
									</div>
								</div>
							</div>
							<div class="col-md-4 colors-d">
								<div class="row">
									<div class="col-xs-12 banner-cell">
										<h3 class="light-font-weight">Bootstrap</h3>
										<p class="title">Framework</p>
									</div>
									<div class="col-xs-12 info heading-d banner-cell">
										Adapted for Multicolor Sections
										<br /> Highly Customized
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>About</h2>
						<p class="header-details"><span class="highlight">We Create</span> Awesome Stuff</p>
						<p class="lead">Our creative approach is based on the concept of lightness initiated by Marc Berthier: a global reflection on liberty, mobility, modernity, technologies, economy and ecology.
						Our goal is to create objects with a durable style, manufactured with care, offering a meaningful experience.</p>
						<div class="row">
							<div class="col-md-4">
								<div class="col-icon">
									<i class="li_bulb"></i>
								</div>
								<div class="col-content">
									<h4>Web <span class="highlight">Development</span></h4>
									<p>The single most important factor for the success of your software project is the team and talent that you hire. You need smart developers who understand your business.
										At LiteBreeze, we not only recruit great programmers; we search hard to find developers with great communication skills, the right attitude, and who understand user-friendliness.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-icon">
									<i class="li_t-shirt"></i>
								</div>
								<div class="col-content">
									<h4>Internet <span class="highlight">Marketing</span></h4>
									<p>A common complaint when it comes to professional services in general is the difficulty of working with “those other guys”.

										At LiteBreeze we embrace service quality at all times; we aim to answer your questions before you’ve even asked them.
										
										Clear estimates, achieved deadlines, frequent yet concise reports, and much much more. The service quality concept is one of our four core principles.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-icon">
									<i class="li_megaphone"></i>
								</div>
								<div class="col-content">
									<h4>Client <span class="highlight">Support</span></h4>
									<p>The  Client Support team is available 24 hours a day Monday through Friday in all countries.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view" id="how-we-work">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_IMG_7432.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" />
				<div class="content colors-h">
					<div class="container">
						<h3><span class="highlight">How</span> We Work</h3>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<p class="text-center">The X3 website is highly customizable, with hundreds of style combinations to choose from. Select from a variety of skins, colors, layouts and fonts to create a truly unique website design. X3 also comes loaded with image gallery layouts including slideshow, columns, grids and carousels</p>
							</div>
						</div>
						<div class="row icon-set">
							<div class="col-md-3 text-center">
								<p>
									<i class="li_eye circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Awesome</span></p>
								<p>A multi-award-winning digital media platform that sits at the intersection of photography and everything.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_like circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Innovative</span></p>
								<p>Our awards culminate in some of the most viewed exhibitions in global history.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_paperplane circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Creative</span></p>
								<p>We connect the best photographic talent with major international brands to collaborate on meaningful, narrative-led campaigns.</p>
							</div>
							<div class="col-md-3 text-center">
								<p>
									<i class="li_lab circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
								</p>
								<p class="title"><span class="underline-text">Experimental</span></p>
								<p>Priority application is given to 1854 Access Members. Join today to unlock access to paid opportunities, get unlimited access to British Journal of Photography content and free entry to all of our awards.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="team">
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>Team</h2>
						<p class="header-details"><span class="highlight">Who </span>We Are</p>
						<p class="lead">Our success depends on the <strong class="highlight">strength of our team.</strong> he world’s oldest and most influential photography title. We are home to some of the photography industry’s most prestigious awards. And our in-house agency connects the best photographic talent with major international brands to produce game-changing visual campaigns.</p>
						<div class="row">
							<div class="col-md-3 col-sm-6  col-xs-6">
								<div class="hover-overlay">
									<img alt="Mike Johnson" src="<?php echo bloginfo('template_directory');?>/images/our-team/1.jpg" title="Mike Johnson" class="fluid-width">
									<div class="overlay background-90-b">
										<div>
											<p class="text-center text-uppercase heading-b">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<div class="separator-small"></div>
											<p class="text-center">
												<a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook heading-b"></i></a>
												<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube heading-b"></i></a>
												<a target="_blank" href="https://github.com/"><i class="fa fa-github heading-b"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="caption">
									<p>
										<span class="title">Mike Johnson</span>
										<br/>
										<span class="highlight">CEO &amp; Founder</span>
									</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6  col-xs-6">
								<div class="hover-overlay">
									<img alt="Jessica Specter" src="<?php echo bloginfo('template_directory');?>/images/our-team/2.jpg" title="Jessica Specter" class="fluid-width">
									<div class="overlay background-90-b">
										<div>
											<p class="text-center text-uppercase heading-b">
												Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</p>
											<div class="separator-small"></div>
											<p class="text-center">
												<a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
												<a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
												<a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
												<a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
												<a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="caption">
									<p>
										<span class="title">Jessica Specter</span>
										<br/>
										<span class="highlight">Creative Director</span>
									</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6  col-xs-6">
								<div class="hover-overlay">
									<img alt="Lynda Smith" src="<?php echo bloginfo('template_directory');?>/images/our-team/3.jpg" title="Lynda Smith" class="fluid-width">
									<div class="overlay background-90-b">
										<div>
											<p class="text-center text-uppercase heading-b">
												Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
											</p>
											<div class="separator-small"></div>
											<p class="text-center">
												<a target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr heading-b"></i></a>
												<a target="_blank" href="https://www.dropbox.com/"><i class="fa fa-dropbox heading-b"></i></a>
												<a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing heading-b"></i></a>
												<a target="_blank" href="http://vk.com/"><i class="fa fa-vk heading-b"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="caption">
									<p>
										<span class="title">Andrew Miles</span>
										<br/>
										<span class="highlight">Developer</span>
									</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6  col-xs-6">
								<div class="hover-overlay">
									<img alt="Lynda Smith" src="<?php echo bloginfo('template_directory');?>/images/our-team/4.jpg" title="Lynda Smith" class="fluid-width">
									<div class="overlay background-90-b">
										<div>
											<p class="text-center text-uppercase heading-b">
												Exercitation ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</p>
											<div class="separator-small"></div>
											<p class="text-center">
												<a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
												<a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
												<a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
												<a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
												<a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
											</p>
										</div>
									</div>
								</div>
								<div class="caption">
									<p>
										<span class="title">Lynda Smith</span>
										<br/>
										<span class="highlight">Programmer</span>
									</p>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="view" id="who-we-are">
				<div class="content pane">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 stretch-height pane">
								<div class="view fluid-height">
									<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/JimLukach/69-edited.jpg" />
									<div class="content incut colors-d background-transparent">
										<div class="position-middle-center text-center">
											<a class="button background-lite-c heading-c" href="#work">View Our Work</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6  stretch-height pane">
								<div class="view fluid-height">
									<div class="content incut colors-h background-solid">
										<div class="position-middle-center">
											<h3 class="text-left"><span class="highlight">Who</span> We Are</h3>
											<p class="subtitle highlight"><strong>dream big is a multi-award winning digital media company that sits at the intersection of photography and everything.</strong></p>
											<p>
												Through the lenses of world-class photographers, British Journal of Photography explores rich and timely stories of art, culture, politics and society. BJP sets the bar for photographic journalism — and has done ever since writers like Arthur Conan Doyle and George Bernard Shaw first graced our pages in the 1800s
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-------------------------------- Posts -------------------------------->
		
		
		<section id="team">
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>Blog</h2>
						<p class="header-details"><span class="highlight">Our </span>News</p>
						<p class="lead">Our blog <strong class="highlight">where our users </strong> publish their blogs and news about photography.</p>
					</div>
				</div>
			</div>
		</section>
		
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
						<div class="row">
							<?php 
								
								$args = array (
										'post_type' => 'post',
										'posts_per_page' => '4',
										
									);
								
								$myquery = new WP_Query($args);
								if($myquery->have_posts()):
									while($myquery->have_posts()):
										$myquery->the_post();   //Nos permite usar todas las funciones de the_xxxx
										
										if (has_post_thumbnail()): //Devuele true si el post tiene imagen destacada y false en caso contrario
											$postImg = get_the_post_thumbnail_url(); // Devuelve la url de la imagen destacada del post
										else:
											$postImg = get_template_directory_uri()."/images/bg/pexels/art-brush-colors-3112.jpg";
										endif;
										?>
										
										
										
										
							<div class="col-md-6">
								<div class="row post">
									<div class="col-md-3 post-meta">
										<div class="post-day"><?php the_time('j'); ?></div>
										<div class="post-month"><?php the_time('M Y'); ?></div>
										<div class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></div>
										<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-1.html#comments"><?php comments_number('No comments','1 comment', '% comments')?></a></div>
										<div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-1.html"><?php the_category(', '); ?></a></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-10-b">
											<div class="post-image">
												<a class="page-transition" href="blog-single-1.html"><img class="fluid-width" src="<?php echo $postImg; ?>"></a>
											</div>
											<h3><a class="page-transition" href="<?php the_permalink(); ?>"><?php the_title() ?> <span class="highlight"></span></a></h3>
											<p>
												<?php 
													the_excerpt();
												?>
											</p>
											<p>
												
											</p>
											<p><a href="<?php the_permalink(); ?>" class="page-transition post-read-more">Read more...</a></p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="#"><?php the_tags('', ', ', '');?></a></li>
													<li><a class="page-transition" href="#"></a></li>
													<li><a class="page-transition" href="#"></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>			
							<?php
										endwhile;
									else:
							?>
							<div class="col-md-6">
								<div class="row post">
									<div class="col-md-3 post-meta">
										<div class="post-day"></div>
										<div class="post-month"></div>
										<div class="post-author"><i class="fa fa-user"></i> </div>
										<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-1.html#comments"></a></div>
										<div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-1.html"></a></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-10-b">
											<div class="post-image">
												<a class="page-transition" href="blog-single-1.html"><img class="fluid-width" src="<?php echo bloginfo('template_directory');?>/images/blog/848x433/37.jpg" alt="Post with Featured Image"></a>
											</div>
											<h3><a class="page-transition" href="blog-single-1.html"><span class="highlight"></span></a></h3>
											<p>
												We haven´t post anything yet.
											</p>
											<p>
												
											</p>
											<p><a href="blog-single-1.html" class="page-transition post-read-more">Read more...</a></p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
											
											</div>
										</div>
									</div>
								</div>
							</div>			
							
							<?php   
								endif;
								wp_reset_query();
							?>
							
						</div>
					</div>
				</div>
			</div>
		<section id="services">
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>Services</h2>
						<p class="header-details"><span class="highlight">We Are Here</span> For You</p>
						<p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="row">
							<div class="col-md-3 top-line">
								<h4>Web<br />Design</h4>
								<p class="highlight">Duis ipsum dolor sit amet incididunt ut labore et dolore magna.</p>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
								<ul class="simple">
									<li>Responsive design</li>
									<li>Template development</li>
									<li>Rich media banners</li>
									<li>Frontend development</li>
									<li>Backend development</li>
									<li>Content creation</li>
									<li>Content audit</li>
									<li>Copywriting</li>
									<li>Photography</li>
								</ul>
							</div>
							<div class="col-md-3 top-line">
								<h4>Internet<br />Marketing</h4>
								<p class="highlight">Excepteur ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
								<p>Excepteur sint occaecat elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
								<ul class="simple">
									<li>Facebook advertising</li>
									<li>SEO and SEM</li>
									<li>Facebook apps</li>
									<li>Context advertising</li>
									<li>Rich media banners</li>
									<li>Game development</li>
									<li>Content creation</li>
									<li>Testing</li>
								</ul>
							</div>
							<div class="col-md-3 top-line">
								<h4>Digital<br />production</h4>
								<p class="highlight">Lorem ipsum dolor sit amet, consectetur adipisicing elit eiusmod consequat.</p>
								<p>Duis aute irure elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul class="simple">
									<li>Rich media banners</li>
									<li>Audio production</li>
									<li>Photography</li>
									<li>Design</li>
									<li>Content creation</li>
									<li>Content audit</li>
									<li>Project management</li>
									<li>Technical requirements</li>
									<li>Testing</li>
								</ul>
							</div>
							<div class="col-md-3 top-line">
								<h4>Application<br />Development</h4>
								<p class="highlight">Commodo ipsum dolor sit amet dolore magna aliqua.</p>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
								<ul class="simple">
									<li>Facebook apps</li>
									<li>Brand immersion &amp; research</li>
									<li>Competitive analysis</li>
									<li>Stakeholder interviews</li>
									<li>Content audit</li>
									<li>Project/platform planning</li>
									<li>Technical requirements</li>
									<li>Testing</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/pexels/art-brush-colors-3112.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
				<div class="content half-size colors-h">
					<div class="container">
						<div class="show-list slogan">
							<div class="show-item">We Are Designers</div>
							<div class="show-item">We Are Programmers</div>
							<div class="show-item">We Are Coders</div>
							<div class="show-item">We Are Developers</div>
							<div class="show-item">We Are Creative</div>
						</div>
						<div class="separator"></div>
						<p class="text-center big-font">
							<em>— Lorem ipsum dolor sit amet —</em>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="work">
			<div class="view">
				<div class="content no-bottom-padding colors-e background-solid">
					<div class="container">
						<h2>Our <span class="highlight">Work</span></h2>
						<p class="header-details"><span class="highlight">Some Recent</span> Projects</p>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
					</div>
					<div class="gallery colors-h background-solid" data-default-group="all" data-overlay=".gallery-overlay">
						<div class="container-fluid">
							<div class="filter">
								<ul class="nav nav-pills text-center">
									<li><a class="hover-effect" data-group="all" href="#">All</a></li>
									<li><a class="hover-effect" data-group="web" href="#">Web</a></li>
									<li><a class="hover-effect" data-group="video" href="#">Video</a></li>
									<li><a class="hover-effect" data-group="photography" href="#">Photography</a></li>
									<li><a class="hover-effect" data-group="design" href="#">Design</a> </li>
								</ul>
							</div>
							<div class="row">
								<div class="grid">
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["design"]'>
										<a href="" class="hover-overlay">
											<img alt="Project 1" src="<?php echo bloginfo('template_directory');?>/images/img/0101.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Image</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "video"]'>
										<a href="#!portfolio-item-2.html" class="hover-overlay">
											<img alt="Project 2" src="<?php echo bloginfo('template_directory');?>/images/img/03333.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">YouTube Video</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-youtube-square heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>
										<a href="#!portfolio-item-3.html" class="hover-overlay">
											<img alt="Project 3" src="<?php echo bloginfo('template_directory');?>/images/img/03.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Slider</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-th heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "video"]'>
										<a href="#!portfolio-item-4.html" class="hover-overlay">
											<img alt="Project 4" src="<?php echo bloginfo('template_directory');?>/images/img/07.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Vimeo Video</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>
										<a href="#!portfolio-item-5.html" class="hover-overlay">
											<img alt="Project 5" src="<?php echo bloginfo('template_directory');?>/images/img/05.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Slider</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-th heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web", "design"]'>
										<a href="#!portfolio-item-6.html" class="hover-overlay">
											<img alt="Project 6" src="<?php echo bloginfo('template_directory');?>/images/img/04.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Image</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["design", "video", "web"]'>
										<a href="#!portfolio-item-7.html" class="hover-overlay">
											<img alt="Project 7" src="<?php echo bloginfo('template_directory');?>/images/img/10.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Vimeo Video</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["web"]'>
										<a href="#!portfolio-item-8.html" class="hover-overlay">
											<img alt="Project 8" src="<?php echo bloginfo('template_directory');?>/images/img/09.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Image</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design", "video", "web"]'>
										<a href="#!portfolio-item-9.html" class="hover-overlay">
											<img alt="Project 9" src="<?php echo bloginfo('template_directory');?>/images/img/08.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">YouTube Video</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-youtube-square heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "design"]'>
										<a href="#!portfolio-item-10.html" class="hover-overlay">
											<img alt="Project 10" src="<?php echo bloginfo('template_directory');?>/images/img/11.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Vimeo Video</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-vimeo-square heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["photography", "web"]'>
										<a href="#!portfolio-item-11.html" class="hover-overlay">
											<img alt="Project 11" src="<?php echo bloginfo('template_directory');?>/images/img/07.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Image</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-picture-o heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
									<div class="item col-md-3 col-sm-4 col-xs-6" data-groups='["web", "design"]'>
										<a href="#!portfolio-item-12.html" class="hover-overlay">
											<img alt="Project 12" src="<?php echo bloginfo('template_directory');?>/images/img/20.jpg" />
											<div class="overlay background-90-a">
												<div class="hidden-xs">
													<p class="title heading-a">Slider</p>
													<p class="text-center heading-a"><strong>Excepteur sint lorem ipsum dolor sit amet consectetur.</strong></p>
													<p class="text-center"><i class="fa fa-th heading-a"></i></p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="process">
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>Our <span class="highlight">Process</span></h2>
						<p class="header-details"><span class="highlight">We Make</span> Our Customers Happy</p>
						<p class="lead">Curabitur eget nulla ut neque aliquam dictum. Nam sollicitudin leo dui, non malesuada felis aliquam non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus finibus tempor neque vel scelerisque. Cras nec ex ut eleifend mollis ut a nibh. Vivamus commodo est sit amet ultricies.</p>
						<div class="process">
							<div class="row process-row">
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_search heading"></i></div>
									<p class="title">Research</p>
									<p class="text-center">Vestibulum placerat, ipsum vel mollis ornare, libero ex dapibus diam, gravida tempor.</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_pen heading"></i></div>
									<p class="title">Concept</p>
									<p class="text-center">Vestibulum vel dictum dolor, eget luctus risus. Nullam scelerisque viverra nisl et vehicula, in ut tellus.</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_settings heading"></i></div>
									<p class="title">Develop</p>
									<p class="text-center">Mauris venenatis vulputate ligula eu finibus. Donec pretium libero lacus, vitae maximus purus dapibus.</p>
								</div>
								<div class="col-md-3 process-step">
									<div class="process-box"><i class="li_paperplane heading"></i></div>
									<p class="title">Test</p>
									<p class="text-center">Proin gravida, est sed vestibulum cursus, enim libero sollicitudin lacus, vel ornare nunc.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<p class="text-center">Aliquam fermentum massa ac est sollicitudin, at ultricies ligula tristique. Cras finibus, nulla ac convallis feugiat, nisl nisl lobortis est, eget auctor velit magna vel nunc. Donec nec eros rhoncus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="view" id="numbers">
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/picjumbo/picjumbo.com_IMG_7432.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" />
				<div class="content half-size colors-h">
					<div class="container-fluid">
						<h3>Our <span class="highlight">Numbers</span></h3>
						<p class="title"><span class="highlight">Some of the</span> cool facts about us</p>
						<div class="row counters">
							<div class="col-md-3 counter background-35-b">
								<div class="count player row heading background-10-light">210</div>
								<div class="caption">Projects</div>
							</div>
							<div class="col-md-3 counter background-35-h">
								<div class="count player row heading background-10-light">120</div>
								<div class="caption">Clients</div>
							</div>
							<div class="col-md-3 counter background-35-b">
								<div class="count player row heading background-10-light">3459</div>
								<div class="caption">Followers</div>
							</div>
							<div class="col-md-3 counter background-35-h">
								<div class="count player row heading background-10-light">7</div>
								<div class="caption">Years</div>
							</div>
						</div>
					</div>
					<div class="container">
						<p class="text-center ">Donec vulputate sit amet dolor vel pharetra donec pharetra.</p>
					</div>
				</div>
			</div>
		</section>
		<section id="skills">
			<div class="view">
				<div class="content colors-e background-solid">
					<div class="container">
						<h2>Our <span class="highlight">Skills</span></h2>
						<p class="header-details"><span class="highlight">Our Main</span> Skills</p>
						<p class="lead">Aliquam scelerisque vestibulum mi, eu commodo sem vestibulum convallis. Proin sed mi vehicula, porta nisi eu, facilisis nisl. Etiam tristique mi nec fermentum vestibulum. Nullam in nisi ut tellus laoreet ultrices. In ullamcorper dictum interdum vestibulum etiam tristique mi nec fermentum commodo sem vestibulum laoreet ultrices.</p>
						<div class="row">
							<div class="col-md-6">
								<ul class="widget-tabs nav nav-tabs background-lite-e">
									<li class="active"><a href="#html5" data-toggle="tab">HTML5</a></li>
									<li class=""><a href="#css3" data-toggle="tab">CSS3</a></li>
									<li class=""><a href="#jquery-skill" data-toggle="tab">jQuery</a></li>
									<li class=""><a href="#wordpress" data-toggle="tab">Wordpress</a></li>
									<li class=""><a href="#seo" data-toggle="tab">SEO</a></li>
									<li class=""><a href="#photoshop" data-toggle="tab">Photoshop</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade active in" id="html5">
										<p>Fusce hendrerit enim et lacus rutrum, fermentum consectetur mauris hendrerit. Mauris scelerisque, est eget convallis blandit, lorem est scelerisque dolor, non dapibus orci enim ut risus. Praesent rhoncus ex sit amet nunc luctus, nec eleifend erat suscipit. In feugiat dui eget gravida dignissim. Quisque sed dictum felis. Integer viverra iaculis nulla, a euismod est. Nulla nec felis ipsum. Phasellus sed scelerisque nisl, eu condimentum metus. Aenean convallis risus nec eleifend pharetra. Vivamus rhoncus eleifend mi in imperdiet. Nullam a justo quis dolor viverra elementum. Nam eleifend leo quis elementum cursus.</p>
									</div>
									<div class="tab-pane fade" id="css3">
										<p>Sed dapibus, leo ut egestas convallis, leo purus condimentum ipsum, sit amet lobortis odio nisi id enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi suscipit, mi in interdum volutpat, quam mi porta nisi, dapibus placerat sapien tortor eleifend arcu. Cras sit amet euismod mi, non imperdiet felis. Praesent eros nibh, ullamcorper ut suscipit sit amet, mattis sollicitudin lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis in enim sit amet nibh placerat consectetur id et enim. Nunc nec dui ac ligula posuere posuere vel id metus. Integer maximus eros nec lobortis tempor.</p>
									</div>
									<div class="tab-pane fade" id="jquery-skill">
										<p>Nam eget ex mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam blandit, enim nec rutrum maximus, odio purus maximus odio, vel mattis nisi ante ut velit. Nam ut turpis vel dolor maximus dictum. Donec blandit turpis ut vulputate facilisis. Nam est nisi, posuere vitae posuere in, viverra non tellus. Pellentesque congue, sapien eget sollicitudin sollicitudin, est leo imperdiet ante, facilisis viverra mi augue in leo. Vestibulum felis urna, pharetra et eros ut, mattis consequat mi. Curabitur id tortor mattis, aliquet eros hendrerit, mattis metus. Ut dignissim vel augue in congue. Nulla a ante ut mi scelerisque suscipit. Aenean condimentum turpis mi, sit amet ullamcorper mi commodo non.</p>
									</div>
									<div class="tab-pane fade" id="php">
										<p>Nulla egestas eu odio ac dictum. Phasellus eu odio lectus. Fusce luctus tempor mauris, vel accumsan leo. Nam libero velit, ultrices vel malesuada nec, euismod nec dolor. Maecenas congue erat sed maximus semper. Aliquam vestibulum magna sit amet pulvinar vestibulum. Cras semper condimentum ante, eget suscipit sapien. Sed ac urna nunc. Aenean viverra sem sit amet dolor pretium fringilla. Nam luctus tempus nibh vitae efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
									</div>
									<div class="tab-pane fade" id="wordpress">
										<p>Fusce non commodo sapien, quis ultrices enim. Proin in placerat urna. Nulla luctus leo nec massa vestibulum consequat quis a quam. Maecenas et leo ut orci fringilla ornare non sit amet lectus. Donec ornare eros tortor, sit amet condimentum lectus placerat ut. Duis lacus neque, lacinia non nunc id, aliquet tincidunt orci. In tellus felis, posuere non est rhoncus, tincidunt elementum sapien. Sed non sagittis ante. Duis ultricies mi dolor, feugiat blandit metus ullamcorper nec. Nullam semper gravida consequat. Suspendisse potenti. Mauris sit amet nisi at enim lacinia dignissim. Aenean suscipit pulvinar ex, eu venenatis magna dapibus sit amet.</p>
									</div>
									<div class="tab-pane fade" id="seo">
										<p>Proin non augue posuere, iaculis tortor in, molestie lorem. Praesent ut gravida sem. Aenean sit amet lorem leo. Curabitur risus ante, pulvinar vel erat viverra, porttitor volutpat turpis. Praesent et sapien interdum, sollicitudin nisi non, bibendum leo. Duis posuere lectus velit, vel volutpat massa blandit non. Donec pellentesque vel magna ut dignissim. Pellentesque luctus fringilla eros, in tempus neque venenatis consectetur. Pellentesque purus mauris, laoreet eget augue in, pellentesque sagittis arcu. Etiam at blandit lectus, sit amet volutpat tellus.</p>
									</div>
									<div class="tab-pane fade" id="photoshop">
										<p>Donec ac consectetur neque, vel eleifend nisi. In et nibh at neque convallis tincidunt. Aliquam sodales odio vel malesuada interdum. Duis auctor malesuada lorem. Nulla sed neque ut dui imperdiet congue ut sit amet enim. Phasellus vel commodo dui. Aliquam eu eleifend diam, vitae dapibus velit. Suspendisse ac est hendrerit, mollis lectus vel, accumsan urna. Quisque sit amet iaculis libero, sed maximus justo. Nunc laoreet non libero eu vehicula. Vestibulum ex lectus, pharetra non elementum et, gravida quis mauris. Donec sodales odio eget accumsan blandit.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="skillbars">
									<div class="skillbar clearfix background-d" data-percent="40%">
										<div class="skillbar-title background-b heading-b"><span>HTML5</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">40%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="45%">
										<div class="skillbar-title background-c heading-c"><span>CSS3</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">45%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="50%">
										<div class="skillbar-title background-b heading-b"><span>jQuery</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">50%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="40%">
										<div class="skillbar-title background-c heading-c"><span>PHP</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">40%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="90%">
										<div class="skillbar-title background-b heading-b"><span>Wordpress</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">90%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="75%">
										<div class="skillbar-title background-c heading-c"><span>SEO</span></div>
										<div class="skillbar-bar background-c"></div>
										<div class="skill-bar-percent heading-d">75%</div>
									</div>
									<div class="skillbar clearfix background-d" data-percent="70%">
										<div class="skillbar-title background-b heading-b"><span>Photoshop</span></div>
										<div class="skillbar-bar background-b"></div>
										<div class="skill-bar-percent heading-d">70%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	