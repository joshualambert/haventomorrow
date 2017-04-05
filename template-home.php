<?php
/**
 * Template Name: Home Template
 */
?>
<?php get_header(); ?>

<section class="dark slider-main">
  <div class="container">
    <?php 
      echo do_shortcode('[smartslider3 slider=2]');
    ?>
  </div>
</section>

<!-- <section class="c-padding-180 dark" style="background-image:url('http://www.haventoday.org/wp-content/uploads/2015/10/marcus-dall-col-63805.jpg')">
  <div class="container">
    <a href="#" class="play-program"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/play.png"></a>
    <h5>TODAY'S PROGRAM</h5>
    <h1>THE REVELATION OF JESUS CHRIST</h1>
    <p>This one book in the Bible seems intimidating and thrilling. But yet it is probably the most unstudied book by Christians.</p>
    <a href="#" class="o-button">VIEW SERIES</a>
  </div>
</section>
 -->
<section class="c-padding-50">
  <div class="container">
    <?php 
      echo do_shortcode('[smartslider3 slider=3]');
    ?>
  </div>
</section>

<!-- <section class="c-padding-50">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="v-middle">
          <h3>TODAY'S OFFER</h3>
          <h4>THE BROKEN WAY</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      </div>
      </div>
      <div class="col-md-4 text-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/revelationcd.jpg" width="80%">
      </div>
      <div class="col-md-4 text-center">
        <div class="v-middle">
        <a href="#" class="o-button">GET THIS RESOURCE</a>
      </div>
      </div>
    </div>
  </div>
</section>
 -->
<section class="c-padding-75 light-2">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>MEET THE SPEAKER</h3>
        <h4>CHARLES MORRIS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p><a href="#">Learn More >></a></p>
      </div>
      <div class="col-md-7">
        <img src="http://www.haventoday.ca/wp-content/uploads/2015/10/img-about.jpg">
      </div>
    </div>
  </div>
</section>

<section class="c-padding-75">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center">FEATURED</h3>
<!--         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slider.jpg" width="100%"> -->
        <?php 
          echo do_shortcode('[smartslider3 slider=5]');
        ?>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <h3 class="text-center">RECENT PRODUCTS</h3>
<!--         <div class="row">
          <div class="col-md-4 text-center">
            <img src="http://www.haventoday.org/wp-content/uploads/2017/01/JSB10-product-242x308.jpg" width="75%">
            <h5 class="text-center">The Jesus Storybook Bible (Gift Edition)</h5>
          </div>
          <div class="col-md-4 text-center">
            <img src="http://www.haventoday.org/wp-content/uploads/2016/10/GodsNotDead2_DVD-1-242x308.jpg" width="75%">
            <h5 class="text-center">God's Not Dead 2</h5>
          </div>
          <div class="col-md-4 text-center">
            <img src="http://www.haventoday.org/wp-content/uploads/2016/12/FleeingISISFindingJesus-242x308.jpg" width="75%">
            <h5 class="text-center">Fleeing ISIS, Finding Jesus</h5>
          </div>
        </div> -->
        <?php 
          echo do_shortcode('[smartslider3 slider=4]');
        ?>
      </div>
    </div>
  </div>
</section>

<section class="c-padding-25-100 blog">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <h3>TODAY'S ANCHOR</h3>
        <p><img class="float-left" src="http://www.haventoday.ca/wp-content/uploads/2017/01/Anchor01312017-2.jpg" width="100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="#">Learn More >></a></p>
      </div>
      <div class="col-md-1 border-right">
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-5">
        <h3>FEATURED BLOG POST</h3>
        <p><img class="float-left" src="http://www.haventoday.ca/wp-content/uploads/2017/01/Anchor01312017-2.jpg" width="100px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p><a href="#">Learn More >></a></p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
