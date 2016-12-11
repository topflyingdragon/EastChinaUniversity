<div class="relatedposts">
<?php
  $post_num = 4; 
  global $post;
  $tmp_post = $post;
  $tags = ''; $i = 0;
  if ( get_the_tags( $post->ID ) ) {
  foreach ( get_the_tags( $post->ID ) as $tag ) $tags .= $tag->name . ',';
  $tags = strtr(rtrim($tags, ','), ' ', '-');
  $myposts = get_posts('numberposts='.$post_num.'&tag='.$tags.'&exclude='.$post->ID);
  foreach($myposts as $post) {
  setup_postdata($post);
  ?>
      <div class="relatedbox">
        <?php include('articlepic.php'); ?>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读：<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
        <div class="clear"></div>
      </div>
<?php
  $i += 1;
  }
  }
  if ( $i < $post_num ) {
  $post = $tmp_post; setup_postdata($post);
  $cats = ''; $post_num -= $i;
  foreach ( get_the_category( $post->ID ) as $cat ) $cats .= $cat->cat_ID . ',';
  $cats = strtr(rtrim($cats, ','), ' ', '-');
  $myposts = get_posts('numberposts='.$post_num.'&category='.$cats.'&exclude='.$post->ID);
  foreach($myposts as $post) {
  setup_postdata($post);
  ?>
       <div class="relatedbox">
        <?php include('articlepic.php'); ?>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读：<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
        <div class="clear"></div>
      </div>
  <?php
  }
  }
  $post = $tmp_post; setup_postdata($post);
  ?>
<div class="clear"></div>
</div>
