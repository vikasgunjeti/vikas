<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtcamp
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	 <?php
    /* The footer widget area is triggered if any of the areas
     * have widgets. So let's check that first.
     *
     * If none of the sidebars have widgets, then let's bail early.
     */
    if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
        return;
	 
	if (   is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
 
<aside class="fatfooter" role="complementary">
    <div class="first quarter left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second quarter widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third quarter widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
    <div class="fourth quarter right widget-area">
        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </div><!-- .fourth .widget-area -->
</aside><!-- #fatfooter -->

<?php 
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="fatfooter" role="complementary">
    <div class="first one-third left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second one-third widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
    <div class="third one-third right widget-area">
        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </div><!-- .third .widget-area -->
 
</aside><!-- #fatfooter -->
<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) : ?>
<aside class="fatfooter" role="complementary">
    <div class="first half left widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
    <div class="second half right widget-area">
        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </div><!-- .second .widget-area -->
 
</aside><!-- #fatfooter -->
<?php
elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && ! is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) :
?>
<div class="widgets">
<aside class="fatfooter" role="complementary">
    <div class="first full-width widget-area">
        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    </div><!-- .first .widget-area -->
 
</aside>
</div><!-- #fatfooter -->
     <?php
    //end of all sidebar checks.
    endif; ?>
    
<div class="footer-bottom-area">
   <div class="footer-bottom-area-left">
    <div class="bottomMenu">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>  
    </div>
<?php $test_copyright_text= get_option('test_copyright_text');?>

<div class="footer-bottom-copyright-text"><?php echo $test_copyright_text ?></div>
</div>
<div class="footer-fallback-logo-right"><img src="/rtcamp/wp-content/uploads/2020/01/footer-logo.png"/></div>
        </div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
