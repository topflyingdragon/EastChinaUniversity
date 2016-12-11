<?php
/*
Template Name: 友情链接
*/
?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
  <div id="content">
    <div class="main">
<div class="article">
<div class="creeklink">
<ul><?php wp_list_bookmarks('orderby=id&category_orderby=id'); ?></ul>
</div>
<div class="clear"></div>
<div class="linkstandard">
<h2 style="color:#FF0000">申请友情连接前请看：</h2>
<ul>
<li>一、<span style="color:#FF0066">谢绝第一次来我博客就申请友情链接</span>，在此之前我希望的是博客之间的交流，而不是直接交换链接。</li>
<li>二、如果您的站还未被baidu或google收录，申请链接暂不予受理！</li>
<li>三、如果您的站原创内容少之又少，申请连接不予受理！</li>
<li>四、其他暂且保留，有想到的再添加。</li>
</ul>
</div>
</div>

<?php comments_template(); ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>