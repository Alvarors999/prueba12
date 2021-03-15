<?php

/*

    Template Name:Private zone

*/

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
			
			
			if(is_user_logged_in()) {
			    // Tenemos un usuario logueado
			    $user = wp_get_current_user();  // Devuelve un objeto de tipo user.  El objeto usuario que hace login
			    $rol = get_author_role($user->ID); // El rol o roles del usuario que ha hecho login
			    $user_name = $user->display_name;   // El nombre del usuario que ha hecho login
			    
			    $saludo = "Hello, " . "<span class='highlight'>" . $user_name . "</span>" .  "! You are logged in as " . "<span class='highlight'>" . $rol . "</span>";
			}else {
			    // No hay un usuario logueado
			    $saludo = "You are not logged.";
			}
			
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
						<h2>Private <span class="highlight">Zone</span></h2>
						<p class="title"><?php echo $saludo ?></span></p>
					</div>
				</div>
			</div>
			<!-- POST DESTACADO -->
			
		
			<div class="view">
				<div class="content small-top-padding colors-e background-solid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							<?php  
							    if(is_user_logged_in()){
							        // Tenemos que mostrar un link al admin area .
							        switch ($rol) {
							            case 'administrator' :
							                $info = "informacion personalizada para grupo de administrator";
							                break;
							            case 'author' :
							                $info = "informacion personalizada para grupo de author";
							                break;
							            case 'editor' :
							                $info = "informacion personalizada para grupo de editor";
							                break;
							            case 'contributer' :
							                $info = "informacion personalizada para grupo de contributer";
							                break;
							            case 'subscriber' :
							                $info = "informacion personalizada para grupo de subscriber";
							                break;
							        }
							        // Tenemos que mostrar un link para que haga logout.
							        // Tenemos que mostrar informacion particular para ese usuario (en realidad, para todos los usuarios con ese rol)
							?>
							       <div class="view" id="who-we-are">
                    				<div class="content pane">
                    					<div class="container-fluid">
                    						<div class="row">
                    							<div class="col-md-6 stretch-height pane">
                    								<div class="view fluid-height">
                    									<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/JimLukach/69-edited.jpg" />
                    									<div class="content incut colors-d background-transparent">
                    										<div class="position-middle-center text-center">
                    										    <?php wp_register('',''); ?>
                    										    <?php wp_loginout(home_url()); ?>
                    										
                    										</div>
                    											
                    									</div>
                    								</div>
                    							</div>
                    							<div class="col-md-6  stretch-height pane">
                    								<div class="view fluid-height">
                    									<div class="content incut colors-h background-solid">
                    										<div class="position-middle-center">
                    											<h3 class="text-left"><span class="highlight"></span> <?php echo $user_name ?></h3>
                    											<p class="subtitle highlight"><strong><?php echo $rol; ?></strong></p>
                    											<p><?php echo $info;  ?></p>
                    											<p>Aenean nisi neque, aliquam ut nibh sit amet, finibus sagittis tortor aenean consectetur.</p>
                    										</div>
                    									</div>
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
                    	    <?php  
							    }else {
							        
							        
							        
							?>
							        <div class="view" id="who-we-are">
                    				<div class="content pane">
                    					<div class="container-fluid">
                    						<div class="row">
                    							<div class="col-md-6 stretch-height pane">
                    								<div class="view fluid-height">
                    									<img alt class="bg" src="<?php echo bloginfo('template_directory');?>/images/bg/JimLukach/69-edited.jpg" />
                    									<div class="content incut colors-d background-transparent">
                    										<div class="position-middle-center text-center">
                    										    <?php 
                        										    $args = array (
                        										      'echo' => true,                    // Para visualizar el form (TRUE) o recogerlo en una variable(FALSE)
                        										      'remember' => true,               // Visualiza el checkbox Remember Me (TRUE) o no (FALSE)
                        										      'form_id' => "loginform",         // Asigna un valor a la etiqueta id del form
                        										      'id_username' => "username",      // Asigna un valor al id del campo username
                        										      'id_password' => "pass",          // Asigna un valor al id del campo password
                        										      'id_remember' => "rmb",           // Asigna un valor al id del campo Remember me 
                        										      'id_submit' => "sub",             // Asigna un valor al id del boton submit
                        										     // 'redirect' => $url,               // URL absoluta donde redireccionar el form
                        										      'label_username' => "User: "  ,    // Etiqueta para el campo username
                        										      'label_password' => "Pass: "  ,    // Etiqueta para el campo password
                        										      'label_remember' => "Remember me", // Etiqueta para el campo remember
                        										      'label_log_in' => "Log In",    // Value del boton SUBMIT
                         										    );
                        										    wp_login_form($args); 
                        										    
                    										    ?>
                    										    <?php wp_register(); ?>
                    										
                    										</div>
                    											
                    									</div>
                    								</div>
                    							</div>
                    							<div class="col-md-6  stretch-height pane">
                    								<div class="view fluid-height">
                    									<div class="content incut colors-h background-solid">
                    										<div class="position-middle-center">
                    										    <?php wp_register('', ''); ?>
                    											<h3 class="text-left"><span class="highlight"></span> </h3>
                    											<p class="subtitle highlight"><strong></strong></p>
                    											<p></p>
                    											<p>Aenean nisi neque, aliquam ut nibh sit amet, finibus sagittis tortor aenean consectetur.</p>
                    										</div>
                    									</div>
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
							        
							        
							<?php
							    }
							?>
						
								
								
								
							
								
							</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- END: Page content -->
		<?php
			get_footer();
		?>	