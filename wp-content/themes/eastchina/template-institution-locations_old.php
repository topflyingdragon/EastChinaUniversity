<?php
/**
 * Template Name: 机构分布_高德地图
 *
 */
get_header(); ?>
    <div class="blog">
        <div class="container">
            <?php if ( have_posts() ) : the_post(); ?>
                <div style="text-align: center; padding: 10px">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div id="amap" tabindex="0"></div>
                <script type="text/javascript">
                    var map_data = <?php echo strip_tags(get_the_content()); ?>;
                </script>
            <?php endif; ?>
        </div>
    </div>

<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=89126804c8ef9199ba8e2f35d48e4487"></script>
<script type="text/javascript">
    $(function(){
        var map = new AMap.Map('amap',{
            resizeEnable: true,
            zoom: 1,
            center: [116.480983, 39.989628]
        });
        map_data.forEach(function(data){
            var marker = new AMap.Marker({
                position: data.position
            });
            marker.setMap(map);
            var circle = new AMap.Circle({
                center: data.position,
                redius: 100,
                fillOpacity:0.1,
                fillColor:'#09f',
                strokeColor:'#09f',
                strokeWeight:1
            });
            circle.setMap(map);
            var html = '<div class="title"><a href="'+data.url+'" target="_blank">'+data.title+'</a></div><div class="content">'+data.text+'</div>';
            var info = new AMap.InfoWindow({
                content: html,
                offset:new AMap.Pixel(0,-28),
                size:new AMap.Size(200,0)
            })
            AMap.event.addListener(marker, 'click',function(){
                info.open(map, marker.getPosition())
            });

        })
    });
</script>
<?php get_footer(); ?>