<?php if ( is_home() ) { ?>
  <div class="widget">
    <h3>友情链接</h3>
    <div class="r-links">
      <ul>
        <?php wp_list_bookmarks('orderby=link_id&categorize=0&category=&title_li='); ?>
      </ul>
    </div>
  </div>
<?php } ?>