<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    <?php if(is_page("menupage")) :?>
             <link rel="stylesheet" href="<?php echo get_theme_file_uri("css/menu.css"); ?>" />
      <?php else: ?>
           <link rel="stylesheet" href="<?php echo get_theme_file_uri("css/style.css"); ?>" />
    <?php endif; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <title>cafeLP2</title>
     <?php wp_head(); ?>
  </head>
 
  <body>
    <?php wp_body_open(); ?>
    <header>
      <div class="headerContents">
        <p>comcom</p>
        <div class="menu">
          <a href="<?php echo get_home_url("/");?>">Home</a>
          <a href="<?php echo esc_url(home_url("/#menu"))?>">Menu</a>
          <a href="<?php echo esc_url(home_url("/#about"))?>">About</a>
          <a href="<?php echo esc_url(home_url("/form/") )?>">Form</a>
          <button>×</button>

          <!--headerContenets-->

          <div class="humberger">
            <span class="hum"></span>
            <span class="hum"></span>
            <span class="hum"></span>
          </div>
          <!--humberger-->
        </div>
      </div>

    
    </header>

    <div class="bodyClass">
     
      