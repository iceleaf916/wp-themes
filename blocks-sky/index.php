<?php get_header(); ?>
<?php
	if (function_exists('wp_list_comments')) {
		add_filter('get_comments_number', 'comment_count', 0);
	}
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post">
		<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

		<div class="content">
			<?php the_content('阅读全文...'); ?>
			<div class="fixed"></div>
		</div>

		<div class="meta">
			<div class="act">
				<?php
					comments_popup_link('没有评论', '1 条评论', '% 条评论', '', '评论关闭');
					edit_post_link('编辑', ' | ', '');
				?>
			</div>
			<div class="info">
				<?php
									the_time('Y年n月j日');
									printf(' |  归档于 %1$s', get_the_category_list(', '));
								?>
			</div>
			<div class="fixed"></div>
		</div>
	</div>

<?php endwhile; ?>

	<div id="pagenavi" class="block">
				<?php wp_pagenavi() ?>
	</div>

<?php else: ?>
	<div class="block">
		<div class="content small r">
			对不起, 不存在相应的文章.
		</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
