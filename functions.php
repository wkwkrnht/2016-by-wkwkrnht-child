<?php
add_action('wp_enqueue_scripts',function(){wp_enqueue_style('origin-style',get_template_directory_uri() . '/styles.css');wp_enqueue_style('child-style',get_stylesheet_directory_uri() . '/style.css',array('origin-style'));});
