<?php 
    /***************************************************************
     * Template Name: Photoshoot
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
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stocksnap/37450BE2D6.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/stocksnap/37450BE2D6.jpg" />
				<div class="content half-size colors-a">
					<div class="container">
						<h2>Photo <span class="highlight">shoot</span></h2>
						<p class="title">Skrollex <span class="highlight">Theme</span></p>
					</div>
				</div>
			</div>
		
		
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<?php
								
									$paged = get_query_var('paged') > 1 ? get_query_var('paged') : 1;
									$args = array(
										'posts_per_page' => 1,
										'post_type' => 'photo_shoot',
										'paged' => $paged,
									);

									$myquery = new WP_Query($args);
									if ($myquery->have_posts() ):
										while ($myquery->have_posts() ):
										$myquery->the_post();

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
										<div class="post-author"><i class="fa fa-user"></i> <?php the_author()?></div>
										<div class="post-comments"><i class="fa fa-comments-o"></i> <a class="page-transition" href="<?php the_permalink(); ?>"><?php comments_number('No comments', '1 comment', '% comments');  ?></a></div>
										<div class="post-permalink"><i class="fa fa-link"></i> <a class="page-transition" href="blog-single-1.html"><?php the_category(' ,'); ?></a></div>
									</div>
									<div class="col-md-9">
										<div class="post-body background-10-b">
											<div class="post-image">
												<a class="page-transition" href="<?php the_permalink(); ?>"><img class="fluid-width" src="<?php echo $postImg;?>" alt="Post with Featured Image"></a>
											</div>
											<h3><a class="page-transition" href="<?php the_permalink(); ?>"><?php the_title(); ?></span></a></h3>
											    <div class="chic_deco">
													<br>
													<div class="col">
														<i class="fa fa-fw" aria-hidden="true"></i>
														<span><?php echo get_post_meta( get_the_ID(), 'photoshoot_type', true ); ?> |</span>
													</div>
													<div class="col">
														<i class="fa fa-fw" aria-hidden="true"></i>
														<span><?php echo get_post_meta( get_the_ID(), 'photoshoot_hour', true ); ?> |</span>
													</div>
													<div class="col">
														 <i class="fa fa-tags" aria-hidden="true"></i>
														<span><?php echo get_post_meta( get_the_ID(), 'photoshoot_name', true ); ?> |</span>
													
													</div>
													<div class="col">
														<i class="fa fa-calendar" data-animation="fadeInUp"></i>
															<span><?php echo get_post_meta( get_the_ID(), 'photoshoot_date', true ); ?> |</span>
													</div>
													<div class="col">
														<i class="fa fa-fw" aria-hidden="true"></i>
														<span><?php echo get_post_meta( get_the_ID(), 'price', true ); ?> |</span>
													</div>
													<div class="col">
														<i class="fa fa-fw" aria-hidden="true"></i>
														<span><?php echo get_post_meta( get_the_ID(), 'photoshoot_place', true ); ?></span>
													</div>
						
												</div>
											<p><a href="<?php the_permalink(); ?>" class="page-transition post-read-more readmore">Read more...</a></p>
											<div class="post-tags styled-list">
												<i class="fa fa-tags"></i>
												<ul>
													<li><a class="page-transition" href="#"><?php the_tags('');?></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								
								<?php 
								endwhile;
								
								
								
								else:
								echo "Todavia no hay posts publicados";
								endif;
								wp_reset_postdata();
							?>
							<div class="row paginatecustom">
									<div class="text-center col-md-offset-3 col-md-9">
									<?php		
										$big = 999999999; // se necesita un número salido de madre

						                   echo paginate_links( array(
						
						                    'prev_text' => 'Previous Page',
						
						                    'next_text' => 'Next Page',
						
						                    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
						
						                    'format' => '?paged=%#%',
						
						                    'current' => max( 1, get_query_var('paged') ),
						
						                    'total' => $myquery->max_num_pages
						
						                  ) );
										?>
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
			</div>
		</section>
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	