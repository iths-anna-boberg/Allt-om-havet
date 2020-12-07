<?php

  function aoh_enqueue_scripts(){
    wp_enqueue_style('aoh-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', false, null, 'all');
    wp_enqueue_style('aoh-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false, null, 'all');
    wp_enqueue_style('aoh-custom', get_template_directory_uri().'/style.css', array('aoh-bootstrap'), 'all');
    wp_enqueue_script('aoh-bootstrap-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('aoh-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
  }

  add_action('wp_enqueue_scripts', 'aoh_enqueue_scripts');

?>