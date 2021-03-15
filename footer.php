	<!-- BEGIN: Footer -->
		<footer class="colors-g page-transition non-preloading">
			<div class="container scroll-in-animation" data-animation="fadeInDown">
				<div class="row">
					<div class="col-md-3">
						<h4>DREAM<span class="highlight">BIG</span></h4>
						<div class="footer-description">
							<p>Mauris metus tellus, lacinia nec efficitur quis, rhoncus et mi.</p>
						</div>
						<p class="social-links">
							<a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a>
							<a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a>
							<a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-printerest"></i></a>
							<a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						</p>
					</div>
					<div class="col-md-3">
						<h5>Additional Links</h5>
						<ul class="simple">
							<li><a href="<?php echo get_page_link(get_page_by_title('Home')); ?>">Home</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Blog')); ?>">Blog</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Photoshoot')); ?>">Photoshoot</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Archives')); ?>">Archives</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Private Zone')); ?>">Private Zone</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Contacts')); ?>">Contact</a></li>
							<li><a href="<?php echo get_page_link(get_page_by_title('Policy')); ?>">Policy</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Recent Posts</h5>
						<ul class="simple">
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
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
										endwhile;
									else:?>
										<li><a href="">We haven´t post anything yet.</a></li>
										
										
							<?php   
								endif;
								wp_reset_query();
							?>	
							
						</ul>
					</div>
					
				</div>
			</div>
			<div class="bottom text-center background-5-b">
				© 2020 All Rights Reserved. <a href="#" class="open-overlay-window heading" data-overlay-window=".credits-overlay">Credits.</a>
			</div>
		</footer>
		
	</body>
    <?php
		wp_footer();
	?>
</html>