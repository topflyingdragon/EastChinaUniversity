<style>
.footer h3.panel-title {
    color: #FFFFFF;
    font-family: KaiTi;
    font-size: 1.4em;
    margin: 1.5em 0 2em;
    font-weight: 600;
    text-align: left;
    letter-spacing: 7px;
}
.footer-bottom-left {
    float: left;
    margin-top: 1.4em;
    width: 50%;
    text-align: left;
    max-width: calc(100% - 60px);
}
.footer-right {
    float: right;
    margin-top: 12px;
}

.footer {
    padding: 0px;
    background-size: cover;
    height: 205px;
    margin-top:-23px;
}
#ext-link {
    border-bottom: 0px solid #DDDADA;
}
.footer-bottom {
    padding: 0;
}
.ext-link li {
    padding-top: 0px;
    padding-left: 0px;
}
@media (max-width: 480px){
.footer-bottom-left {
    float: none;
    margin-top: 0;
    width: 100% !important;
}
}
</style>
<div class="footer">
    <div class="ext-link-panel">
        <div class="container">
            <div id="ext-link" class="footer-bottom ext-link">
                <h3 class="panel-title" >笃行致知    明德崇法</h3>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p>
                        版权所有 华东政法大学 Copyright 2012 ECUPL ALL Rights Reserved.<br>
                        松江校区：松江大学园区龙源路555号 邮编：201620<br>
                        长宁校区：万航渡路1575号 邮编：200042
                    </p>
                </div>
                <div class="footer-right">
                    <ul>
                        <li class="weixin-icon">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/qr1.png" /></a>
                             <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/qr2.png" /></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>