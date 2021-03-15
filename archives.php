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
				<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/pexels-mohamed-almari-368893.jpg" /><img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/pexels-mohamed-almari-368893.jpg" />
				<div class="content half-size colors-a">
					<div class="container">
						<h2>Archives</h2>
						<p class="title">Skrollex <span class="highlight">Theme</span></p>
					</div>
				</div>
			</div>
		
            <div class="row">
                <main class="cards">
                  <article class="card">
                      
                    <div class="text">
                      <h3>Photoshoots</h3>
                      
                        <?php  
                            $args = array(
                                'post_type' => 'photo_shoot',   // Hacer que cuando no haya plugin no salga el error.
                                'type' => 'postbypost',
                                'limit' => 10,
                            );
                            wp_get_archives($args);
                        ?>
                      
                        
                    </div>
                  </article>
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Last entries</h3>
                      
                        <?php
				            $args = array (
				                'type' => 'postbypost',
				            );
				            wp_get_archives( $args );
				        ?>
                      
                        
                    </div>
                  </article>
                  
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Categories</h3>
                      
                         <?php
				            wp_list_categories('title_li=&show_count=1');
				          ?>
                      
                        
                    </div>
                  </article>
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Tag list</h3>
                      
                        <?php
			            	list_tags( 10 );
			            ?>
                      
                        
                    </div>
                  </article>
                  
                  
                   <article class="card">
                      
                    <div class="text">
                      <h3>Seamlessly visualize quality</h3>
                      
                        <?php
			              $args = array(
			                  'orderby' => 'post_count',
			                  'order' => 'DESC',
			                  'hide_empty' => false,
			                  'optioncount' => 1,
			                  );
			              wp_list_authors( $args );
			            ?>
                      
                        
                    </div>
                  </article>
                  
                   <article class="card">
                      
                    <div class="text">
                      <h3>Daily Archives</h3>
                      
                       <?php
			              $args = array(
			                  'type' => 'daily',
			                  'show_post_count' => 1,
			                  );
			              wp_get_archives( $args );
			            ?>
                      
                        
                    </div>
                  </article>
                  
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Monthly Archives</h3>
                      
                      <?php
			              $args = array(
			                  'type' => 'monthly',
			                  'show_post_count' => 1,
			                  );
			              wp_get_archives( $args );
			            ?>
                      
                        
                    </div>
                  </article>
                  
                   <article class="card">
                      
                    <div class="text">
                      <h3>Yearly Archives</h3>
                      
                      <?php
			              $args = array(
			                  'type' => 'yearly',
			                  'show_post_count' => 1,
			                  );
			              wp_get_archives( $args );
			            ?>
                      
                        
                    </div>
                  </article>
                  
                   <?php  
                        $args = array(
                            'display_name',
                            'ID',    // Sacar el avatar o intentarlo.
                            'user_email',
                        );
                        $authors = get_users($args); // devuelve coleccion de objetos de tipo usuario.
                        
                        foreach($authors as $author) {
                            
                        
                    ?>
                    
                  <article class="card">
                     
                    <div class="text">
                      <h3>Posts by <?php echo $author->display_name; ?></h3>
                      
                      <?php  
	                        $args = array(   // Intentar hacer que cuando no haya post salga un mensajito
	                          'author' => $author->ID,
	                          'orderby' =>'post_date',
	                          'order' => 'desc',
	                        );
	                        $myquery = new WP_Query($args);
					    	if ($myquery->have_posts() ):
								while ($myquery->have_posts() ):
								$myquery->the_post();
	                        
	                        $post_by_author = get_posts($args);
	                        echo '<li><a href="' .get_permalink($post->ID). '">'.$post->post_title.'</a></li>'; // El permalink al estar fuera de un loop. Ya no coge el permalink por si mismo y hay que especificar.
	
	                        endwhile;
	                        else:
	                        echo "<p>No post published yet...</p>";
	                        endif;
	                        
	                        wp_reset_query();
	                    ?>
                      
                        
                    </div>
                  </article>
                  <?php 
                        }
                    ?>
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Most Popular Posts</h3>
                      
                      <?php  
                        $args = array (
                            'meta_key' => 'numvisits', // Indicamos el meta field por el que vamos a filtrar la busqueda
                            'orderby' => 'meta_value_num',  // Le decimos a wp que ordene por el valor del meta field
                        );
                        
                        $popular = new WP_Query($args);
                        if($popular->have_posts()):
                            while($popular->have_posts()):
                                $popular->the_post();
                                echo '<li><a href="' .get_permalink($post->ID). '">'.$post->post_title.'</a> ( '.get_num_visits($post->ID).' )</li>'; // El permalink al estar fuera de un loop. Ya no coge el permalink por si mismo y hay que especificar.

                            endwhile;
                        endif;
                        
                        wp_reset_query();
                        
                    ?>
                      
                        
                    </div>
                  </article>
                  
                  
                  <article class="card">
                      
                    <div class="text">
                      <h3>Most Commented Posts</h3>
        
                       <?php  
	                        $args = array (
	                    
	                            'orderby' => 'comment_count',  // Le decimos a wp que ordene por el numero de comentarios
	                            'posts_per_page' => 2,
	                        );
	                        
	                        $popular = new WP_Query($args);
	                        if($popular->have_posts()):
	                            while($popular->have_posts()):
	                                $popular->the_post();
	                                echo '<li><a href="' .get_permalink($post->ID). '">'.$post->post_title.'</a> ( '.get_comments_number($post->ID).' ) </li>'; // El permalink al estar fuera de un loop. Ya no coge el permalink por si mismo y hay que especificar.
	
	                            endwhile;
	                        endif;
	                        
	                        wp_reset_query();
	                        
	                    ?>
                      
                      
                        
                    </div>
                  </article>
                  
                 
        
                  
                  
                  
                  
                </main>
            </div>
		</section>
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	