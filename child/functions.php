<?php
defined('ABSPATH')||exit;
add_action('wp_enqueue_scripts',function(){wp_enqueue_style('sn-child',get_stylesheet_directory_uri().'/style.css',['sn-main'],'6.0.0');},25);
