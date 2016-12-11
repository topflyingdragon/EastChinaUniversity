<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
<div class="main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="article">

<h2 class="entry-title"><?php the_title(); ?></h2>

<div class="context vcard"><?php the_content('Read more...'); ?></div>
</div>
<?php comments_template(); ?>

	<?php endwhile; else: ?>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>