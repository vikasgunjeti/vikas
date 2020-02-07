<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; ?>
 <div class="wppsac-post-slides">
	<div class="wppsac-post-content-position">	
		<!-- Content-left/right -->
		<div class="wppsac-post-content-left wp-medium-4 wpcolumns">
			<div class="wppsac-post-inner-content">
					<h2 class="wppsac-post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
						<?php if($showContent) {  ?>	
						<div class="wppsac-post-content">
							<?php
							$customExcerpt = get_the_excerpt();				
							if (has_excerpt($post->ID))  { ?>
								<div class="wppsac-sub-content"><?php echo $customExcerpt ; ?></div> 
							<?php } else {
								$excerpt = strip_shortcodes(strip_tags(get_the_content())); ?>
							<div class="wppsac-sub-content"><?php echo wprps_limit_words($excerpt,$words_limit); ?></div>					
							<?php } ?>
						</div>
						<?php } ?>
			</div>
		</div>
		<div class="wppsac-post-image-bg">
			<a href="<?php the_permalink(); ?>">
				<?php if( has_post_thumbnail()  ) { ?>
				<img src="<?php echo esc_url($feat_image); ?>" alt="<?php the_title_attribute(); ?>" />
				<?php  } ?>
			</a>
		</div>
	</div>
</div>