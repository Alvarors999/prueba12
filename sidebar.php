<!--------------------Busqueda-------------------------->
<h2 class="widgettitle">Sidebar</h2>
<div class="sidebar-section">
    <div class="search-form"></div>
        <?php get_search_form(); ?>
</div>


<!--Zona de widgets-->
<div class="sidebar-section">
    <div class="search-form"></div>
        <!--Habilitamos una zona de widgets-->
        
        <?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Sidebar Widgets')) :?>
        <div class="warning">Sorry, no widgets</div>
        
        <?php endif; ?>
         <ul class="tag-manually">    
</ul>
</div>

<!--------------------Listado de categorias------------------->
<div class="sidebar-section">
    
    <div class="title">Categories</div>
    <?php wp_list_categories('title_li=&show_count=1'); ?>  <!--title li para quitar el titulo de la lista-->
   
</div>


<!--------------------Listado de los últimos 5 posts o posts más populares------------------->

<div class="sidebar-section">
    <h2 class="widgettitle">Last Entries</h2>
    <?php 
        $args = array (
            'type' => 'postbypost',//indica que la funcion devuelva sólo posts
            'limit' => 5, //Para limitar el numero de post que va a visualizar
        );
        
        wp_get_archives($args); //Visualiza los titulos de los ultimos 5 post
    ?>
</div>




<!--------------------Listado de los post por fecha------------------->
<div class="sidebar-section">
    
    <div class="title">Post by date</div>
   <?php
      $args = array(
          'type' => 'daily',
          'show_post_count' => 1,
          );
      wp_get_archives( $args );
    ?>
   
</div>


<!--------------------Listado de autores------------------->

<div class="sidebar-section">
    <h2 class="widgettitle">Authors</h2>
    <?php
        $args = array (
            'hide_empty' => false,  // Hace que se listen también los autores que no tienen post publicados.
            'optioncount' => true,  // Hace que salgan la cantidad de post publicados por cada autor.
        );
            wp_list_authors($args); 
    ?>  <!--Lista una lista de autores-->
</div>


<!--------------------Listado de paginas del sitio------------------->

<div class="sidebar-section">
    <h2 class="widgettitle">Pages</h2>
    <?php wp_list_pages('title_li'); ?>
</div>