<div id="tab-title">
<div class="tab">
  <ul id="tabnav">
    <li>最新文章</li>
    <li class="selected">热门文章</li>
    <li>随机推荐</li>
  </ul>
</div>
<div class="clear"></div>
<div id="tab-content">
  <ul class="hide">
    <?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
    <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <span style="margin-right:5px">&bull;</span><?php the_title(); ?>
      </a></li>
    <?php endforeach; ?>
  </ul>
  <ul>
    <?php simple_get_most_viewed(); ?>
  </ul>
  <ul class="hide">
    <?php $myposts = get_posts('numberposts=10&orderby=rand');foreach($myposts as $post) :?>
    <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <span style="margin-right:5px">&bull;</span><?php the_title(); ?>
      </a></li>
    <?php endforeach; ?>
  </ul>
</div>
</div>