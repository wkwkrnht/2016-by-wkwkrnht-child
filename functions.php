<?php
add_action('wp_head',function(){echo'<link  rel="stylesheet" href="'get_stylesheet_directory_uri() . '/style.css">';},999999);
