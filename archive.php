<?php
    /*
    * The template for display search results pages
    */
	get_header();
	
	if(have_posts()) {
	    $total_results = $wp_the_query->found_posts;
	    if($total_results > 1) {
	        $results = $total_results . " Posts";
	    }else {
	        $results = $total_results . " Post";
	    }
	    // Como tengo posts debo saber que es lo que estoy listando
	    if(is_category()) {
	        $word = single_cat_title('', false) . " category ";
	    }  elseif (is_tag()) {
	            $word = single_tag_title('', false) . " tag ";
	    }  elseif (is_day()) {
	            $word = get_the_date();
	    }  elseif (is_month()) {
	            $word = get_the_date('F Y');
	    }  elseif (is_year()) {
	            $word = get_the_date('Y');
	    }
	} else {
	    $results = "No Post";
	}
	
	
	
	
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
						<h2>Search for: <?php echo $word; ?> </span></h2>
						<p class="title">Total Results: <?php echo $results; ?></p>
					</div>
				</div>
			</div>
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
    					<div class="row">
    						<div class="col-md-9">
    							
    							
    							
    						    <?php
    						    if (have_posts()) :?>
    						      <table>
                                      <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                      </tr>
    						    
    						        <?php
    						        while (have_posts()) :
    						            the_post();
    						            get_template_part('content','list');
    						        endwhile;
    						        echo '<tbody></table>';
                                          echo '<div class="text-center"><hr>';
                                         the_posts_pagination( array(
                                                  'prev_text' => 'Previous page',
                                                  'next_text' => 'Next page',
                                                  'title_li' => null,
                                                  'before_page_number' => '<span class="meta-nav screen-reader-text"> </span>',
                                              ));
                                          echo '</div><br><br><br>';
    						        else:
    						            echo "There are not published posts yet...";
    						        endif;      
    						    ?>
                                </table>
    						</div>
    						
							<div class="col-md-3 sidebar page-transition">
        						<ul>
        							<?php  get_sidebar();?>
        						</ul>
						    </div>
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
		
		
		