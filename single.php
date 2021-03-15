<?php
	get_header();
	
	//hallamos los ids de la categorias del post para luego poder buscar los relacionados
	$catsid = wp_get_post_categories($post->ID);
	//hallamos el id del post para excluirlo de la consulta de posts relacionados
	$mypostid = $post->ID;
	
	//Actualizamos el numero de visitas
	$num_visits = get_num_visits($mypostid);
	
	
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
		<?php the_post(); ?>
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
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stocksnap/37450BE2D6.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stocksnap/37450BE2D6.jpg" />
				<div class="content half-size colors-a">
					<div class="container">
						<h2><?php the_title(); ?></span></h2>
						<p class="title"></p>
					</div>
				</div>
			</div>
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<?php 

								if (has_post_thumbnail()): //Devuele true si el post tiene imagen destacada y false en caso contrario
									$postImg = get_the_post_thumbnail_url(); // Devuelve la url de la imagen destacada del post
								else:
									$postImg = get_template_directory_uri()."/images/bg/pexels/art-brush-colors-3112.jpg";
								endif;
								?>
								<div class="row post">
									<div class="col-md-3 post-meta">
										<div class="post-day"><?php the_time('j'); ?></div>
										<div class="post-month"><?php the_time('M Y'); ?></div>
										<div class="post-author"><i class="fa fa-user"></i> <?php  the_author_posts_link(); ?></div>
										<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-1.html#comments"><?php comments_number('No comments','1 comment', '% comments')?></a></div>
										<div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-1.html"><?php the_category(', '); ?></a></div>
										<div class="post-permalink"><i class="fa fa-eye"></i> <a class="page-transition" href="blog-single-1.html"><?php echo $num_visits; ?></a></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-10-b">
											<div class="post-image">
												<a class="page-transition" ><img class="fluid-width" src="<?php echo $postImg ?>" alt="Post with Featured Image"></a>
											</div>
											<h3><a class="page-transition" href="<?php the_permalink(); ?>"><?php the_title(); ?></span></a></h3>
											<p>
											    <?php the_content(); ?>
											</p>
										
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li>
													<?php
													    $mytags = wp_get_post_tags($post->ID);
													    foreach($mytags as $tag) {
													    echo '<a class="page-transition" href="'.get_tag_link($tag->term_id) .' ">'.$tag->name .', ' .'</a>';
													    
													   }
													 ?>
													    
													
													
													</a></li>
												</ul>
											</div>
											<div id="post-author">
												<h4><?php echo $num_visits ;?></h4>
												<div class="undervisits"></div>
            									<h4>About the Author</h4>
            									<div>
            										<p>
            											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            										</p>
            									</div>
            								</div>
            								
            								<!--Ultimos 3 post relacionados-->
            								<h4 id="relatedpost">Related Posts</h4>
                                            <div class="view">

                                				<div class="content small-top-padding colors-e background-solid">
                                					<div class="container">
                                						<div class="row">
		                                            	
                                							<?php 
                                								
                                								$args = array (
                                										'posts_per_page' => '3',
                                										'category__in' => $catsid,	//hay que excluir el post principal y tiene que coincidir con una categoria del post principal (el argumento admite un array de ids)
                                										'post__not_in' =>array($mypostid),
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
                                										
                                										
                                										
                                										
                                							<div class="col-md-8">
                                								<div class="row post">
                          
                                									<div class="col-md-9 border-bottom">
                                										<div class="post-body background-10-b">
                                											<div class="post-image">
                                												<a class="page-transition" href="blog-single-1.html"><img class="fluid-width" src="<?php echo $postImg; ?>"></a>
                                											</div>
                                											<h3><a class="page-transition" href="<?php the_permalink(); ?>"><?php the_title() ?> <span class="highlight"></span></a></h3>
                                												<div class="position-faicons">
	                                												<div class="post-author"><i class="fa fa-calendar-o"></i> <?php the_time('j'); ?> <?php the_time('M Y'); ?></div>
	                                												<div class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></div>
																					<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="blog-single-1.html#comments"><?php comments_number('No comments','1 comment', '% comments')?></a></div>
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
                                			<div id="comments">
												<h4><?php comments_number('No comments', '1 comment', '% comments');  ?></h4>
												<ol class="comment-list">
													
												</ol>
            								
										</div>
            							<div class="commentsdiv">
            								<?php comments_template(); ?>
            							</div>
            								
            								
									</div>
								</div>
						
							   
							</div>
						
					</div>
						<div class="col-md-3 sidebar page-transition">
								<ul>
									<?php  get_sidebar();?>
								</ul>
						</div>
				</div>
			</div>
		</section>
		
		<!-- END: Page content -->
			
			<?php
				get_footer();
			?>
		