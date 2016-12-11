<?php if ( is_home() ) { ?>
<div class="widget">
<div class="tags">
<h3>标签云集</h3>
<div style="margin-top:5px">
<?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=39&orderby=count&order=RAND');?></div>

</div><div class="clear"></div>
</div>
<?php } ?>