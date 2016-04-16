<?php
/**
 * Template Name: Homepage
 */
?>
 
<?php get_header() ?>

<!--<div id="header-cta">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/lmglogo.png" alt="" />
</div>-->
<div id="img-texture"></div>
<div id="header-cta">
    <h2>
        <span class="welcome">Welcome to</span>
        <div class="lmd-text"></br>Linda Michele-Dobel</br></div>
        <span class="photo">Photography</span>
    </h2>
    <p>Portraits with a photojournalistic approach resulting in beautiful fine art!</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-push-2 col-sm-5 col-sm-push-1">
                <a href="/contact" class="btn default push-right">Book A Session</a>
            </div>
            <div class="col-md-4 col-md-push-2 col-sm-5 col-sm-push-1 no-mobile">
                <a href="/portfolio" class="btn default push-left">View My Portfolio</a>
            </div>
        </div>
    </div>
</div>

<!--<div id="slides">
    <ul class="slides-container">
      <li>
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/baby-bw.jpg" alt="">
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/trees-girl.jpg" alt="">
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/horse-clr.jpg" alt="">
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri() ?>/dist/img/green-field.jpg" alt="">
      </li>
    </ul>
</div>-->
<?php
$args = array( 'post_type' => 'billboard-photo', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
echo "<div id=\"slides\">";
    echo "<ul class=\"slides-container\">";
    
    while ( $loop->have_posts() ) : $loop->the_post();

        echo '<li>';
             echo '<img src="';
             the_field("image");
             echo '" alt="';
             the_field("alt_text");
             echo '" />';
        echo '</li>';
        
    endwhile;

   echo "</ul>";
echo "</div>";
?>

<a href="#" id="scroll-down" class="animated bounce infinite">
    <img src="<?php echo get_template_directory_uri() ?>/dist/img/arrow-down.png" alt="" />
</a>

<div id="home-content">
    <div style="height:1000px"></div>
</div>

<?php get_footer() ?>