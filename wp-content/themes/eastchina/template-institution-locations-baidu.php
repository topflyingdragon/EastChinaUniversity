<?php
/**
 * Template Name: 机构分布_百度地图
 *
 */
get_header(); ?>
    <div class="blog">
        <div class="container">
            <?php if ( have_posts() ) : the_post(); ?>
                <div style="text-align: center; padding: 10px">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div id="map" style="width:auto; height:600px;"></div>
                <script type="text/javascript">
                    var map_data = <?php echo strip_tags(get_the_content()); ?>;
                </script>
            <?php endif; ?>
        </div>
    </div>

    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=z0fqPSrBcsnxmerNcF0C643cLjdNX8OC"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />

<script type="text/javascript">
    var map = new BMap.Map('map');
    var poi = new BMap.Point(116.307852,20.057031);
    map.centerAndZoom(poi, 3);
    map.enableScrollWheelZoom();
    map_data.forEach(function(data){
        var html = '<div class="title"><a href="'+data.url+'" target="_blank">'+data.title+'</a></div><div class="content">'+data.text+'</div>';
        var searchInfoWindow = null;
        searchInfoWindow = new BMapLib.SearchInfoWindow(map, html, {
            title  : data.title,
            width  : 290,             //宽度
            height : 105,              //高度
            panel  : "panel",         //检索结果面板
            enableAutoPan : true,     //自动平移
            searchTypes   :[]
        });
        var poi = new BMap.Point(data.position[0],data.position[1]);
        var marker = new BMap.Marker(poi);
        marker.addEventListener("click", function(e){
            searchInfoWindow.open(marker);
        })
        map.addOverlay(marker); //在地图中添加marker
    })
</script>
<?php get_footer(); ?>