<?php
get_header();

echo get_template_part('partials/section', 'hero');
echo get_template_part('partials/section', 'recetas');
echo get_template_part('partials/section', 'productos');
echo get_template_part('partials/section', 'tomalo');
echo get_template_part('partials/section', 'main-container');

get_footer();
?>