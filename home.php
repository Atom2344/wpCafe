    <?php get_header(); ?>
    
    <div class="news">
              <?php if(have_posts()): ?>
                <h1>News</h1>
                 <ul>
                <?php while(have_posts()): ?>

                   <?php the_post(); ?>
                   <li class="newsList">
                    <a href="<?php the_permalink(); ?>">
                     <?php echo the_title(); ?>
                    </a>
                    </li>
                   
                <?php endwhile; ?>
                  </ul>
                  <div id ="pagination">
                <?php the_posts_pagination() ;?>
                </div>
                <?endif; ?>
            </div>

            
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
          </div>
   <?php get_footer(); ?>