<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>

	<div class="post">
		<h3 class="title"><?php the_title(); ?></h3>
		
		<div class="meta">
			<div class="info">
				发表于：<?php the_time('Y年n月j日'); 
				printf(' | 归档于: %1$s', get_the_category_list(', ')); ?> 
				| 标签: <?php the_tags('', ', ' ,''); ?>
			</div>
			
			<div class="fixed"></div>
		</div>
		<div class="content">
			<script type="text/javascript"><!--
google_ad_client = "ca-pub-7660329485539611";
/* feed广告 */
google_ad_slot = "3511431185";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
			<?php the_content(); ?>
			<div class="fixed">本文短网址：<a href="<?php wp_ozh_yourls_raw_url( $echo = true)?>" rel="nofollow alternate short shorter shorturl shortlink" title="<?php the_title_attribute(); ?>"><?php wp_ozh_yourls_raw_url( $echo = true)?></a></div>
		</div>

			<div id="related_posts">
				<div class="related_posts">
					<?php wp23_related_posts(); ?>
				</div>
			</div>

		<div class="meta">
			<div class="act">
				<a href="#respond">发表评论</a>
				 | <a href="<?php trackback_url(); ?>" rel="trackback">Trackback</a>
				<?php edit_post_link('编辑', ' | ', ''); ?>
			</div>
			
			
			<div class="fixed"></div>
		</div>
	</div>

	<div id="postnavi" class="block">
		<div class="content g">
			<span class="prev"><?php previous_post_link('&laquo; %link') ?></span>
			<span class="next"><?php next_post_link('%link &raquo;') ?></span>
			<div class="fixed"></div>
		</div>
	</div>

<?php else : ?>

	<div class="block">
		<div class="content small r">
			对不起, 不存在相应的文章.
		</div>
	</div>

<?php endif; ?>

<?php
	if (function_exists('wp_list_comments')) {
		comments_template('', true);
	} else {
		comments_template();
	}
?>

<?php get_footer(); ?>
