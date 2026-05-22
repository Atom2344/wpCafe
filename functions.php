<?php
function my_theme_script(){
  wp_enqueue_script("all", get_theme_file_uri("/js/main.js"),[],"20260520",true);
}

add_action("wp_enqueue_scripts", "my_theme_script");
?>

