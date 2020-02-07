<?php 
function recent_post_news()
{
$catquery = new WP_Query('cat=3&posts_per_page=5'); ob_start();
?>
<ul class="textwidget">
<?php while ($catquery->have_posts()): $catquery->the_post();?>

	<li><a href="<?php the_permalink()?>" rel="bookmark"><?php the_title();?></a></li>
<?php endwhile; ?>
</ul>
<?php
$content = ob_get_clean();
return $content;
}
?>