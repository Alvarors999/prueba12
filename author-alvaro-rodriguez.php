
<?php 
    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
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
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?><?php echo get_the_author_meta('profilepic') ?>" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?><?php echo get_the_author_meta('profilepic') ?>" />
				
				<div class="content half-size colors-a">
					<div class="container">
						<h2><?php echo get_the_author(); ?></h2>
						
						<p class="title"><?php echo get_author_role($curauth->ID); ?></p>
					</div>
				</div>
			</div>
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
						
						
						
						
						<div class="row">
							<div class="col-md-12">
								<div class="row post">
									
									<div class="col-md-12">
										<div class="post-body background-10-b">
											<div class="post-image">
												<a class="page-transition" href="<?php the_permalink(); ?>"><img class="fluid-width" src="<?php echo bloginfo('template_directory');?><?php echo get_the_author_meta('profilepic') ?>" alt="Imagen del autor"></a>
											</div>
										
											<?php $name = get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name')?>
											<h3><a class="page-transition" href=""><?php echo $name; ?></a></span></a></h3>
											<p class="author-p">
												<?php the_author_meta('description'); ?>	
											</p>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
									    <div class="post-body">
									        <section id="skills">
                                    			<div class="view">
                                    				<div class="content colors-e background-solid">
                                    						<h2>My <span class="highlight">Skills</span></h2>
                                    						<p class="header-details"><span class="highlight">Our Main</span> Skills</p>
                                    						<p class="lead">Aliquam scelerisque vestibulum mi, eu commodo sem vestibulum convallis. Proin sed mi vehicula, porta nisi eu, facilisis nisl. Etiam tristique mi nec fermentum vestibulum. Nullam in nisi ut tellus laoreet ultrices. In ullamcorper dictum interdum vestibulum etiam tristique mi nec fermentum commodo sem vestibulum laoreet ultrices.</p>
                                    						<div class="row">
                                    							<div class="col-md-12">
                                    								<ul class="widget-tabs nav nav-tabs background-lite-e">
                                    									<li class="active"><a href="#html5" data-toggle="tab"><?php echo get_the_author_meta('skill1') ?></a></li>
                                    									<li class=""><a href="#css3" data-toggle="tab"><?php echo get_the_author_meta('skill2') ?></a></li>
                                    									<li class=""><a href="#jquery-skill" data-toggle="tab"><?php echo get_the_author_meta('skill3') ?></a></li>
                                    									<li class=""><a href="#wordpress" data-toggle="tab"><?php echo get_the_author_meta('skill4') ?></a></li>
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
                                    									<div class="tab-pane fade" id="wordpress">
                                    										<p>Nulla egestas eu odio ac dictum. Phasellus eu odio lectus. Fusce luctus tempor mauris, vel accumsan leo. Nam libero velit, ultrices vel malesuada nec, euismod nec dolor. Maecenas congue erat sed maximus semper. Aliquam vestibulum magna sit amet pulvinar vestibulum. Cras semper condimentum ante, eget suscipit sapien. Sed ac urna nunc. Aenean viverra sem sit amet dolor pretium fringilla. Nam luctus tempus nibh vitae efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                    									</div>
                                    
                                    								</div>
                                    							</div>
                                    							<div class="col-md-12">
                                    								<div class="skillbars">
                                    									<div class="skillbar clearfix background-d" data-percent="<?php echo get_the_author_meta('skill1V') ?>%">
                                    										<div class="skillbar-title background-b heading-b"><span><?php echo get_the_author_meta('skill1') ?></span></div>
                                    										<div class="skillbar-bar background-b"></div>
                                    										<div class="skill-bar-percent heading-d"><?php echo get_the_author_meta('skill1V') ?>%</div>
                                    									</div>
                                    									<div class="skillbar clearfix background-d" data-percent="<?php echo get_the_author_meta('skill2V') ?>%">
                                    										<div class="skillbar-title background-c heading-c"><span><?php echo get_the_author_meta('skill2') ?></span></div>
                                    										<div class="skillbar-bar background-c"></div>
                                    										<div class="skill-bar-percent heading-d"><?php echo get_the_author_meta('skill2V') ?>%</div>
                                    									</div>
                                    									<div class="skillbar clearfix background-d" data-percent="<?php echo get_the_author_meta('skill3V') ?>%">
                                    										<div class="skillbar-title background-b heading-b"><span><?php echo get_the_author_meta('skill3') ?></span></div>
                                    										<div class="skillbar-bar background-b"></div>
                                    										<div class="skill-bar-percent heading-d"><?php echo get_the_author_meta('skill3V') ?>%</div>
                                    									</div>
                                    									<div class="skillbar clearfix background-d" data-percent="<?php echo get_the_author_meta('skill4V') ?>%">
                                    										<div class="skillbar-title background-c heading-c"><span><?php echo get_the_author_meta('skill4') ?></span></div>
                                    										<div class="skillbar-bar background-c"></div>
                                    										<div class="skill-bar-percent heading-d"><?php echo get_the_author_meta('skill4V') ?>%</div>
                                    									</div>
                                    								</div>
                                    							</div>
                                    						</div>
                                    					
                                    				</div>
                                    			</div>
                                    		</section>
										</div>
										<h4 id="relatedpost">Related Posts</h4>
                                            <div class="view">

                                				<div class="content small-top-padding colors-e background-solid">
                                					<div class="container">
                                						<div class="row">
		                                            	
                                							<?php 
                                								
                                								$args = array (
                                										'posts_per_page' => '4',
                                										'author' => $curauth->ID,
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
                          
                                									<div class="col-md-9">
                                										<div class="post-body background-10-b">
                                											<div class="post-image">
                                												<a class="page-transition" href="blog-single-1.html"><img class="fluid-width" src="<?php echo $postImg; ?>"></a>
                                											</div>
                                											<h3><a class="page-transition" href="<?php the_permalink(); ?>"><?php the_title() ?> <span class="highlight"></span></a></h3>
                                												<div class="position-faicons">
	                                												<div class="post-author"><i class="fa fa-calendar-o"></i> <?php the_time('j'); ?> <?php the_time('M Y'); ?></div>
	                                												<div class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></div>
																					<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-1.html#comments"><?php comments_number('No comments','1 comment', '%comments')?></a></div>
																					<div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-1.html"><?php the_category(', '); ?></a></div>
                                												</div>
                                											<p>
                                												
                                											</p>
                                											
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
									</div>
								</div>
							</div>
							<div class="col-md-12 sidebar page-transition">
								<ul>
									<?php  get_sidebar('author');?>
								</ul>
					    	</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	