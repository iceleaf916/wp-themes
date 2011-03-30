<!-- sidebar START -->
<div id="sidebar">

	<!-- sidebar right -->
	<div id="sidebar_right">
	<?php
		if (is_single()) {
			$posts_widget_title = '最新文章';
		} else {
			$posts_widget_title = '随机推荐';
		}
	?>
		<!-- tag cloud -->
		<div class="widget widget_categories">
			<h3>标签云</h3>
			<ul>
				<?php wp_tag_cloud('smallest=12&largest=12&number=50&orderby=count'); ?>
			</ul>
		</div>
		<!-- recent posts -->
		<div class="widget widget_pages">
			<h3><?php echo $posts_widget_title; ?></h3>
			<ul>
				<?php
				if (is_single()) {
					$posts = get_posts('numberposts=5&orderby=post_date');
				} else {
					$posts = get_posts('numberposts=5&orderby=rand');
				}
				foreach($posts as $post) : setup_postdata($post); ?>
				<li><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; $post = $posts[0]; ?>
			</ul>
		</div>

		<!-- recent comments -->
		<div class="widget widget_categories">
			<h3>最新评论</h3>
			<ul>
				<?php wp_recentcomments(); ?>
			</ul>
		</div>

		<!-- categories -->
		<div class="widget widget_categories">
			<h3>文章分类</h3>
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
			</ul>
		</div>

		<!-- archives -->
		<div class="widget widget_categories">
			<h3>月份归档</h3>
			<ul>
				<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
					<option value=""><?php echo attribute_escape(__('Select Month')); ?></option><?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
				</select>

			</ul>
		</div>

		<!-- blogroll -->
		<div class="widget widget_links">
			<h3>友情链接</h3>
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		</div>
		<div class="widget widget_links">
			<h3>META</h3>
			<ul>
				<?php wp_register('<li id="register">', '</li>'); ?>
				<li><?php wp_loginout(); ?></li>
			</ul>
		</div>

		


	</div>
</div>
<!-- sidebar END -->
