<?php get_header(); ?>
<?php
$categories = get_the_category();
$slug = $categories[0]->slug;
$url = $categories[0]->category_description;

if(trim($url) != ""){ ?>
	<script> window.top.location.href='<?php echo $url; ?>'</script>
<?php } ?>

<div class="blog">
    <div class="container">
        <div class="col-md-8 blog-left" >
            <?php
            if($slug=="honorary_professor" || $slug=="teachers_style" || $slug=="visiting_scholar" ){
                include "archive_honorary_professor.php";
            }else{
                include "archive_normal.php";
            }
            ?>
        </div>

        <div class="col-md-4 single-page-right">
            <?php
            get_sidebar();
            ?>
        </div>

        <div class="clearfix"> </div>

    </div>
</div>

<?php get_footer(); ?>