<?php get_header(); ?>


<?php if(have_posts()): ?>
  <div class="single">
  <?php while(have_posts()): ?>

    <?php the_post(); ?>
    <div class="singleTitle">
    News:  <?php the_title(); ?>
    </div>
    <div class="singleCategory">
    category: <?php echo the_category(",") ; ?>
    </div>
    <div class="singleContents">
      <?php if(get_the_content()): ?>
    Contents: <?php echo the_content(); ?>
    <?php else: ?>
      Contents: No Contents
      <?php endif; ?>
  </div>

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
          </div>


<?php get_footer(); ?>