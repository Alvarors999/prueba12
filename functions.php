<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    /*************************************************
    
        Theme Supports
    
    
    **************************************************/
    add_theme_support('post-thumbnails');  //Le damos soporte al tema para que en el backend nos deje poner la imagen destacada en los post/entradas
    add_theme_support('post-formats', array('audio', 'video', 'gallery', 'image', 'quote', 'link'));
    
    
    
 
 
  function save_comment_meta_checkbox($comment_id){
    $save_meta_checkbox = $_POST['consent'];
    if($save_meta_checkbox == 'on'){
    $value = 'Checkbox is checked: I accept the privacy policy';
    }else{
    $value = 'Checkbox is NOT checked: I do not accept';
    }
    add_comment_meta($comment_id, 'consent', $value, true);
    }
    add_action('comment_post', 'save_comment_meta_checkbox', 1);

 
 
    
    
    function add_theme_scripts() {
        
        //1º Registramos la hoja de estilos (opcional si la hoja de estilos es la principal -style.css-)
        
            wp_enqueue_style('style', get_stylesheet_uri());
        
        
            wp_register_script('less', get_template_directory_uri() . '/bower_components/less.js/dist/less.min.js', array(''), null, false);
            wp_enqueue_script('less');
            
            wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array('jquery'), null, true);
            wp_enqueue_script('jquery');
            
            wp_register_script('lib', get_template_directory_uri() . '/lib/tween/tween.min.js', array('jquery'), null, true);
            wp_enqueue_script('lib');
            
            wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null, true);
            wp_enqueue_script('bootstrap');
            
            wp_register_script('modernizr', get_template_directory_uri() . '/lib/modernizr-edited.js', array('jquery'), null, true);
            wp_enqueue_script('modernizr');
            
            wp_register_script('smooth', get_template_directory_uri() . '/lib/SmoothScroll-1.4.9/SmoothScroll.js', array('jquery'), null, true);
            wp_enqueue_script('smooth');
            
            wp_register_script('cookie', get_template_directory_uri() . '/bower_components/jquery-cookie/jquery.cookie.js', array('jquery'), null, true);
            wp_enqueue_script('cookie');
            
            wp_register_script('maps','https://maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), null, true);
            wp_enqueue_script('maps');
            
            wp_register_script('bootstrapvalidation', get_template_directory_uri() . '/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js', array('jquery'), null, true);
            wp_enqueue_script('bootstrapvalidation');
            
            wp_register_script('minicolors', get_template_directory_uri() . '/bower_components/minicolors/jquery.minicolors.min.js', array('jquery'), null, true);
            wp_enqueue_script('minicolors');
            
            wp_register_script('slick', get_template_directory_uri() . '/bower_components/slick.js/slick/slick.min.js', array('jquery'), null, true);
            wp_enqueue_script('slick');
            
            wp_register_script('shuffle', get_template_directory_uri() . '/bower_components/shufflejs/dist/jquery.shuffle.min.js', array('jquery'), null, true);
            wp_enqueue_script('shuffle');
            
            wp_register_script('lettering', get_template_directory_uri() . '/bower_components/textillate/assets/jquery.lettering.js', array('jquery'), null, true);
            wp_enqueue_script('lettering');
            
            wp_register_script('fittext', get_template_directory_uri() . '/bower_components/textillate/assets/jquery.fittext.js', array('jquery'), null, true);
            wp_enqueue_script('fittext');
            
            wp_register_script('textillate', get_template_directory_uri() . '/bower_components/textillate/jquery.textillate.js', array('jquery'), null, true);
            wp_enqueue_script('textillate');
            
            wp_register_script('prism', get_template_directory_uri() . '/lib/prism/prism.js', array('jquery'), null, true);
            wp_enqueue_script('prism');
            
            wp_register_script('bundle', get_template_directory_uri() . '/scripts/script-bundle.js', array('jquery'), null, true);
            wp_enqueue_script('bundle');
            
            wp_register_script('mboot', get_template_directory_uri() . '/styles/masonry/assets/js/core/bootstrap-3.3.7.min.js', array('jquery'), null, true);
            wp_enqueue_script('mboot');
            
            wp_register_script('mmagnific', get_template_directory_uri() . '/styles/masonry/assets/js/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true);
            wp_enqueue_script('mmagnific');
            
            wp_register_script('mpopup', get_template_directory_uri() . '/styles/masonry/assets/js/magnific-popup/magnific-popup-zoom-gallery.js', array('jquery'), null, true);
            wp_enqueue_script('mpopup');
            
            wp_register_script('mzoom', get_template_directory_uri() . '/styles/masonry/assets/js/magnific-popup/magnific-popup-zoom-gallery.js', array('jquery'), null, true);
            wp_enqueue_script('mzoom');
            
            wp_register_script('mjq', get_template_directory_uri() . '/styles/masonry/assets/js/main/jquery.appear.js', array('jquery'), null, true);
            wp_enqueue_script('mjq');
            
            wp_register_script('misotope', get_template_directory_uri() . '/styles/masonry/assets/js/main/isotope.pkgd.min.js', array('jquery'), null, true);
            wp_enqueue_script('misotope');
            
            wp_register_script('mparalax', get_template_directory_uri() . '/styles/masonry/assets/js/main/parallax.min.js', array('jquery'), null, true);
            wp_enqueue_script('mparalax');
            
            wp_register_script('mcount', get_template_directory_uri() . '/styles/masonry/assets/js/main/jquery.countTo.js', array('jquery'), null, true);
            wp_enqueue_script('mcount');
            
            wp_register_script('mowl', get_template_directory_uri() . '/styles/masonry/assets/js/main/owl.carousel.min.js', array('jquery'), null, true);
            wp_enqueue_script('mowl');
            
            wp_register_script('mpopup', get_template_directory_uri() . '/styles/masonry/assets/js/main/jquery.sticky.js', array('jquery'), null, true);
            wp_enqueue_script('mpopup');
            
            wp_register_script('mpopup', get_template_directory_uri() . '/styles/masonry/assets/js/main/ion.rangeSlider.min.js', array('jquery'), null, true);
            wp_enqueue_script('mpopup');
            
            wp_register_script('mimages', get_template_directory_uri() . '/styles/masonry/assets/js/main/imagesloaded.pkgd.min.js', array('jquery'), null, true);
            wp_enqueue_script('mimages');
            
            wp_register_script('mmain', get_template_directory_uri() . '/styles/masonry/assets/js/main/main.js', array('jquery'), null, true);
            wp_enqueue_script('mmain');
            
            
    
        
    }
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
    
    

    
    
    /*Register the widget area in sidebars*/
    
    function generaltheme_widgets_init() {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id' => 'sidebar',
            'description' => 'Sidebar Widget Area',
            'before_widget' => '<div class="title">', /*%2$s sirve para coger el 'name', en este caso Sidebar Widgets*/
            'after_widget' => '</div>'
        
        ));
    }
    add_action('widgets_init', 'generaltheme_widgets_init');
    
    
    
    /*
     * Obtener un listado con los tag de un post
     *
     */


     function list_tags( $limit ) {
         $args = array(
            'orderby' => 'count', // Ordena según el número de post que tenga cada tag
            'order' => 'DESC', // Ordena de más a menos post por tag
            'number' => $limit, // Devuelve el número de tags establecido por $limit
            );
         $tags = get_tags( $args );
         foreach ( (array) $tags as $tag){
             echo '<a href="' . get_tag_link ($tag->term_id) . '"rel="tag">' . $tag->name . '<span class="heavyblue pull-right">' . $tag->count . "</span></a><br>";
         }
     }    
    
   function get_num_visits($post_id) {
       $numvisits = 1;
       $sufix = " Visits";
       
       if(!add_post_meta($post_id, 'numvisits', $numvisits, true)) {
           $numvisits = get_post_meta($post_id, 'numvisits', true) + 1;
           $sufix = " Visits";
           update_post_meta($post_id,'numvisits',$numvisits);
       }
       return $numvisits.$sufix;
   }
   
   
   /*
        Add social media fields to user profile in backend
        @param array
        @return array
   */
   
   function add_social_media($user_methods) {
       $user_methods['facebook'] = 'Facebook account:';
       $user_methods['instagram'] = 'Instagram account:';
       $user_methods['twitter'] = 'Twitter account:';
       
       $user_methods['profilepic'] = 'Profile Picture:';
       return $user_methods;
   }
   add_filter('user_contactmethods', 'add_social_media');
   
   /*
    Add skills fields in user profile
    @param $user    user object
   */
   
   function add_skills_fields($user) {?>
       <!-- Descripcion del panel donde vamos a colocar los nuevos campos -->
       <h3>User skills information</h3>
       <!-- Crear una tabla con los nuevos campos de las skills -->
       <table class="form-table">
           <tr>
               <th><label for="skill1">Skill 1</label></th>
               <td>
                   <input type="text" name="skill1" id="skill1" class="regular-text" value="<?php echo get_the_author_meta('skill1', $user->ID); ?>">
                   <span class="description"> Please, enter your first skill description</span>
               </td>
               <th><label for="skill1V">Skill 1 Value</label></th>
               <td>
                   <input type="text" name="skill1V" id="skill1V" class="regular-text" value="<?php echo get_the_author_meta('skill1V', $user->ID); ?>">
                   <span class="description"> Please, enter your first skill value</span>
               </td>
           </tr>
           
           <tr>
               <th><label for="skill2">Skill 2</label></th>
               <td>
                   <input type="text" name="skill2" id="skill2" class="regular-text" value="<?php echo get_the_author_meta('skill2', $user->ID); ?>">
                   <span class="description"> Please, enter your second skill description</span>
               </td>
               <th><label for="skill2V">Skill 2 Value</label></th>
               <td>
                   <input type="text" name="skill2V" id="skill2V" class="regular-text" value="<?php echo get_the_author_meta('skill2V', $user->ID); ?>">
                   <span class="description"> Please, enter your second skill value</span>
               </td>
           </tr>
           
           <tr>
               <th><label for="skill3">Skill 3</label></th>
               <td>
                   <input type="text" name="skill3" id="skill3" class="regular-text" value="<?php echo get_the_author_meta('skill3', $user->ID); ?>">
                   <span class="description"> Please, enter your third skill description</span>
               </td>
               <th><label for="skill3V">Skill 3 Value</label></th>
               <td>
                   <input type="text" name="skill3V" id="skill3V" class="regular-text" value="<?php echo get_the_author_meta('skill3V', $user->ID); ?>">
                   <span class="description"> Please, enter your third skillvalue</span>
               </td>
           </tr>
           
           <tr>
               <th><label for="skill4">Skill 4</label></th>
               <td>
                   <input type="text" name="skill4" id="skill4" class="regular-text" value="<?php echo get_the_author_meta('skill4', $user->ID); ?>">
                   <span class="description"> Please, enter your fourth skill description</span>
               </td>
               <th><label for="skill1V">Skill 4 Value</label></th>
               <td>
                   <input type="text" name="skill4V" id="skill4V" class="regular-text" value="<?php echo get_the_author_meta('skill4V', $user->ID); ?>">
                   <span class="description"> Please, enter your fourth skill value</span>
               </td>
           </tr>
           
           
           
       </table>
       
    <?php
   }
   
   add_action('show_user_profile', 'add_skills_fields');
   add_action('edit_user_profile', 'add_skills_fields');
   
   
   
   function save_skills_fields ($user_id) {
       update_user_meta($user_id, 'skill1', $_POST['skill1']);
       update_user_meta($user_id, 'skill1V', $_POST['skill1V']);
       
       update_user_meta($user_id, 'skill2', $_POST['skill2']);
       update_user_meta($user_id, 'skill2V', $_POST['skill2V']);
       
       update_user_meta($user_id, 'skill3', $_POST['skill3']);
       update_user_meta($user_id, 'skill3V', $_POST['skill3V']);
       
       update_user_meta($user_id, 'skill4', $_POST['skill4']);
       update_user_meta($user_id, 'skill4V', $_POST['skill4V']);
   }
   add_action('personal_options_update', 'save_skills_fields');
   add_action('edit_user_profile_update', 'save_skills_fields');
   
   
   function get_author_role($author_id) {
       $user_info = get_userdata($author_id);
       return implode (', ', $user_info->roles);
   }
   
   // ----------------------- Comentarios ----------------------------
   
   /*
   * Delete url field from comments form
   * @param $fields List of comments form fields
   */
   
   function remove_comment_fields($fields) {
       unset($fields['url']);
       return $fields;
   }
   add_filter('comment_form_default_fields', 'remove_comment_fields');
   

  
   /*
   * Add consent for RGPD 
   * @param $fields List of comments form fields
   */
   
   function add_RGPD_consent_checkbox($fields) {
       $fields['consent'] = '<p class="comment-form-public">
                            <input type ="checkbox" name="consent" id="consent">
                            <label for="consent">Check this box to give us permission to publicly post your review
                            (Accept our <a href="#">privacy policy</a>)</label>
                            </p>';
    return $fields;
       
   }
    add_filter('comment_form_default_fields', 'add_RGPD_consent_checkbox');


    /*
    * Reorder comment form fields
    * @param array $fields List of comments form fields.
    */
   function reorder_comment_form_fields($fields) {
    if (!is_user_logged_in()) {
        $aux_fields = array();
        array_push($aux_fields, $fields['author']);
        array_push($aux_fields, $fields['email']);
        array_push($aux_fields, $fields['comment']);
        array_push($aux_fields, $fields['cookies']);
        array_push($aux_fields, $fields['consent']);
    
        return $aux_fields;
    }else {
        return $fields;
    }
    
    }
    add_action('comment_form_fields', 'reorder_comment_form_fields'); // no se puede hacer el add_action con comment_form_default_fields.
    
    
    
    /*
    * Save the privacy policy approved in DDBB
    * @param array $fields List of comments form fields.
    */
    
    function save_comment_consent($comment_id) {
        
        $consent_value = $_POST['consent'];
        
        if($consent_value == true) {
            $valor = "Checkbox is checked. I accept the privacy policy";
        }else {
            $valor = "Checkbox not checked. I don´t accept the privacy policy";
        }
        
        add_comment_meta($comment_id, 'consent', $valor, true);
    }
    add_action('comment_post', 'save_comment_consent');
    
    /**
    *   Create a new Consent column in the back-end comments area
    *   @param array $columns Comment Area Columns
    */
    
    function create_consent_column($columns) {
        $columns = array(
        'cb' => '<input type="checkbox"/>', // Hay que investigar que name de le pone wp a este cb
        'author' => 'Author',
        'comment' => 'Comment',
        'consent' => 'Consent Privacy Policy',
        'response' => 'In Response To',
        'date' => 'Submitted On',
    );
        return $columns;
    }
    add_filter('manage_edit-comments_columns', 'create_consent_column');
    
    /**
    *   Display the Consent in the new Column Consent in the back-end Comments area
    *   @param array $columns Comment Area Columns Number
    */
    
    function show_comment_consent($col, $comment_id) {
        if($col == 'consent') {
            $t = get_comment_meta($comment_id, 'consent', true);
            echo $t;
        }
    
    }
    add_action('manage_comments_custom_column', 'show_comment_consent', 10, 2);  // el 10 es la prioridad y el 2 es el numero de argumentos que permite la funcion.
    
    /*
        el problema no era la prioridad sino el numero de argumentos que acepta la funcion que es el ultimo parámetro. Si no lo especificamos solo admite 1 parametro.    
    */
    
    
    
    /**
     * Change logo on wp-admin log in template
     */    
    
    function custom_login_logo() { 
        ?>
        <style>
            #login h1 a, .login h1 a {
                background-image:url("<?php echo get_template_directory_uri() . '/images/logo.png' ?>");
                background-position:center;
                background-size:contain;
                width:300px !important;
            }
           
        </style>
    
    <?php    
    }
    
    add_action('login_enqueue_scripts', 'custom_login_logo');
    
    /**
     * Change login logo link url 
     */
     
     function my_login_logo_url() {
         return home_url();   // Redirecciona al front
     }
     add_filter('login_headerurl', 'my_login_logo_url');
     
     function customize_login_headertext($headertext) {
         $headertext= esc_html__('Welcome to Bar Racuda!', 'wadawsd');
         return $headertext;
     }
     add_filter('login_headertext', 'customize_login_headertext');   // No funciona esta deshabilitado creo o algo asi
     
     function customize_login_error () {
         return 'Ooops, you must enter an username and password...';
     }
     add_filter('login_errors', 'customize_login_error');
     
     function my_login_redirection( $redirect_to, $request, $user ) {
    //is there a user to check
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                // redirect them to the default place
                return $redirect_to;
            } else {
                return home_url();
            }
        } else {
            return $redirect_to;
        }
    }
     add_filter('login_redirect','my_login_redirection', 10, 3);
     
     function change_login_background() {
        ?>
        <style>
            .login {
                background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5));
                background-image:url("<?php echo get_template_directory_uri() . '/images/bg/picjumbo/picjumbo.com_IMG_7432.jpg' ?>");
            }
        </style>
        
        <?php
        
     }
     add_action('login_enqueue_scripts', 'change_login_background');
     
     
     /**
     * 
     * Incluir los custom post type en la query por defecto de WP
     * cuando estemos en la plantilla archive.php (Y por extensión en search.php)
     * 
     */

     function namespace_add_custom_types( $query ) {
        if( is_year() || is_month() || is_day() || is_category()
        || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $query->set( 'post_type', array('post', 'photo_shoot' ));
        return $query;
        }
        }
        add_filter( 'pre_get_posts', 'namespace_add_custom_types' );