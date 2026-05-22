
<?php get_header(); ?>

      <section class="main">
        <div class="main-contents">
          <div class="top-contents">
            <p id="top-message" class="fadeIn" >
              <?php the_field("top-message");?>
            </p>

            <div class="news">

            <?php 
               $args = [
                "post_type" => "post",
                "post_per_page" => "5",
               ];

               $the_query = new WP_Query($args);
            ?>


              <?php if($the_query->have_posts()): ?>
                <h1>News</h1>
                 <ul>
                <?php while($the_query->have_posts()): ?>

                   <?php $the_query->the_post(); ?>
                   <li class="newsList">
                    <a href="<?php the_permalink(); ?>">
                     <?php echo the_title(); ?>
                    </a>
                    </li>
                   
                <?php endwhile; ?>
                  </ul>
                  <a href="<?php  echo home_url("/news/")?>" id="newsShow">一覧を見る</a>
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
          <!--top-contents-->
          <div class="menu-contents">
            <h2 id="menu">Menu</h2>
            <div class="menu-mainContents">
              <div class="coffee">
                <p class="fadeIn">
                  Our signature drinks are crafted with passion and precision.
                  We start with ethically sourced, premium Arabica beans,
                  roasted in small batches to unlock their unique flavor
                  profiles.

                  <br /><a href="<?php echo esc_url(home_url("/menupage/") )?>">drink</a>
                </p>
                <label>
                  <input type="checkbox" style="display: none" class="menuPage"/>

                  <img
                    src="<?php echo get_theme_file_uri("img/coffee.jpg")?>"
                  />
                </label>
              </div>
              <div class="food">
                <label>
                  <input type="checkbox" style="display: none" class="menuPage"/>
                  <img
                    src="<?php echo get_theme_file_uri("img/food.jpg")?>"
                  />
                </label>
                <p class="fadeIn">
                  Savor the perfect harmony of fresh ingredients and artisanal
                  craft. Our kitchen celebrates seasonal flavors with a menu
                  designed to nourish both body and soul.
                  <br /><a href="<?php echo esc_url(home_url("/menupage/") )?>">food</a>
                </p>
              </div>
            </div>
            <!--menu-mainContents-->
          </div>
          <!--menu-contents-->
        </div>
        <!--main-contents-->
        <div class="main-about">
          <h2 id="about">about</h2>
          <div class="aboutImg">
            <div class="location">
              <p>location</p>
              <img src="<?php echo get_theme_file_uri("img/location.jpg")?>" />
            </div>
            <div class="schedule">
              <p>schedule</p>
              <img src="<?php echo get_theme_file_uri("img/schedulu.png")?>" />
            </div>
          </div>
        </div>
        <!--main-about-->
      </section>
   
<?php get_footer(); ?>