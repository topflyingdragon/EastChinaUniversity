<?php
/**
 * Template Name: 机构分布_GOOGLE
 *
 */
get_header(); ?>
    <div class="blog">
        <div class="container">
            <?php if ( have_posts() ) : the_post(); ?>
                <div style="text-align: center; padding: 10px">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div id="googleMap" style="width:auto; height:600px;"></div>
                <script type="text/javascript">
                    var map_data = <?php echo strip_tags(get_the_content()); ?>;
                </script>
            <?php endif; ?>
        </div>
    </div>

<script async defer src="http://maps.google.cn/maps/api/js?key=AIzaSyAGH3wt7z8KamnoCl0TbHSD9OpKUEeX_P4&callback=initMap"></script>
<script type="text/javascript">
    function initMap() {
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            scaleControl: true,
            center: {lat: 39.0, lng: 116.0},
            zoom: 2
        });
        map_data.forEach(function(data){
            var infowindow = new google.maps.InfoWindow;
            var html = '<div class="title"><a href="'+data.url+'" target="_blank">'+data.title+'</a></div><div class="content">'+data.text+'</div>';
            infowindow.setContent(html);
            var pos = {lat: data.position[0], lng: data.position[1]};
            var marker = new google.maps.Marker({map: map, position: pos});
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        });
    }
</script>
<?php get_footer(); ?>