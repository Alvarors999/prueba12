<div class="page-border right colors-e background-solid"></div>
		<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation" id="top-nav">
			<div class="container">
				<div class="navbar-header">
					<a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>
					<a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>
					<a class="navbar-brand" href="#">DREAM<span class="highlight">BIG</span></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						
						<?php if (is_front_page()) { ?> <!--is front page devuelve true si estamos en el front-->
							<li><a href="#home" class="hover-effect">Home</a></li>
							<li><a href="#about" class="hover-effect">About</a></li>
							<li><a href="#team" class="hover-effect">Team</a></li>
							<li><a href="#services" class="hover-effect">Services</a></li>
							<li><a href="#work" class="hover-effect">Work</a></li>
							<li><a href="#skills" class="hover-effect">Skills</a></li>
							
							
						<?php } else { ?>
							<li><a href="<?php echo get_page_link(get_page_by_title('Home')); ?>" class="hover-effect">Home</a></li>     <!--echo get_option el parametro de entrada devuelve un string que es el mismo nombre que le ponemos a la pagina en el backend-->
							<li><a href="<?php echo get_option('Home'); ?>#about" class="hover-effect">About</a></li>
							<li><a href="<?php echo get_option('Home'); ?>#team" class="hover-effect">Team</a></li>
							<li><a href="<?php echo get_option('Home'); ?>#services" class="hover-effect">Services</a></li>
							<li><a href="<?php echo get_option('Home'); ?>#work" class="hover-effect">Work</a></li>
							<li><a href="<?php echo get_option('Home'); ?>#skills" class="hover-effect">Skills</a></li>
							

						
						<?php }; ?>
	
						
						<li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
			<div class="ext-nav background-95-h page-transition">
			<div class="view half-height">
				<img alt class="bg static" src="<?php echo bloginfo('template_directory');?>/images/bg/JohnKraus/2.jpg" />
				<div class="content no-top-padding no-bottom-padding  full-height">
					<div class="container-fluid  full-height">
						<div class="row full-height">
							<a href="<?php echo get_page_link(get_page_by_title('Blog')); ?>" class="col-md-6 colors-a background-95-a full-height">
								<div>
									<span class="side-label">All The Latest</span>
									<span class="side-title">Blog</span>
								</div>
							</a>
							<a href="<?php echo get_page_link(get_page_by_title('Photoshoot')); ?>" class="col-md-6 colors-f background-95-f full-height">
								<div>
									<span class="side-label">Documentation</span>
									<span class="side-title">Photo Session</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid  half-height">
				<div class="row full-height">
					<a href="<?php echo get_page_link(get_page_by_title('Contact')); ?>" class="col-md-4 colors-g background-solid full-height border-bottom border-lite">
						<div>
							<span class="side-label">Awesome</span>
							<span class="side-title">Contact</span>
						</div>
					</a>
					
					<a href="<?php echo get_page_link(get_page_by_title('Archives')); ?>" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
						<div>
							<span class="side-label">We Are Designers</span>
							<span class="side-title">Archives</span>
						</div>
					</a>
						<a href="<?php echo get_page_link(get_page_by_title('Private Zone')); ?>" class="col-md-4 colors-g background-solid full-height border-bottom border-left border-lite">
						<div>
							<span class="side-label">We Are Designers</span>
							<span class="side-title">Private Zone</span>
						</div>
					</a>
				
				</div>
			</div>
		</div>