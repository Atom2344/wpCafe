    <?php get_header(); ?>


              <?php if(have_posts()): ?>
                <div class="form">
                <?php while(have_posts()): ?>

                   <?php the_post(); ?>
                     <?php  the_title(); ?>
                     <?php the_content(); ?>
                 
                <?php endwhile; ?>
                </div>
                <?php endif; ?>
     

            
 <div class="slide">
              <div class="slideContents">
                <div class="imgClass">
                  <img src="<?php echo get_theme_file_uri("img/top1.jpg")?>" id="slide1" />
                </div>
                <div class="imgClass">
                  <img src="<?php echo get_theme_file_uri("img/top2.jpg")?>" id="slide2" />
                </div>
                <div class="imgClass">
                  <img src="<?php echo get_theme_file_uri("img/top3.jpg")?>" id="slide3" />
                </div>
              </div>
            </div>
            <!-- <img src="img/top1.jpg" /> -->
         
   <?php get_footer(); ?>