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
</div>
<!--------------------Listado de autores------------------->

<div class="sidebar-section">
    <h2 class="widgettitle">Authors</h2>
    <?php
        $args = array (
            'hide_empty' => false,  // Hace que se listen también los autores que no tienen post publicados    
            'optioncount' => true,
        );
            wp_list_authors($args); 
    ?>  <!--Lista una lista de autores-->
</div>
