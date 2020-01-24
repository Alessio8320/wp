<?php       //wordpress necessita di link per eseguire le sue funzioni
            //le specifico qui sotto con id e link
function child_scripts(){
                        //id                      //link
    wp_enqueue_style("bootstrap-css","https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");

    wp_enqueue_script("bootstrap-1","https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('jquery'));

    wp_enqueue_script("bootstrap-2","https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array('jquery'));
}
add_action('wp_enqueue_scripts','child_scripts');

function child_setup() {
    register_nav_menus( array(
        'main'   => 'main menu'
    ) );
}
add_action('after_setup_theme', 'child_setup');