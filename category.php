<?php get_header(); ?>


<?php if(have_posts()): ?>
  <div class="category">
    <h1><?php the_category(", ")?></h1>
  <?php while(have_posts()): ?>
<li class="categoryList">
    <?php the_post(); ?>
    <a href="<?php echo the_permalink();?>">
    <?php the_title(); ?>
  </a>
  </li>
    <?php endwhile; ?>

  </div>
      <?php endif; ?>


<?php get_footer(); ?>