<footer class="l-footer">
    <h1 class="l-logo-row">
        <a href="<?php echo home_url(); ?>" class="footer-logo logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_row.svg" alt=""></a>
    </h1>
    <div class="footer__inner">
        <small class="copyright">Copyright &#169; 2017 Higashiyama YAOI. All rights reserved.</small>
        <ul class="footer-link">
            <li>
                <a href="<?php echo home_url('/sitemap'); ?>">サイトマップ</a>
            </li>
            <li>
                <a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a>
            </li>
        </ul>
    </div>
</footer>
<!--footer end-->
<!-- SCRIPTS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/min/feature.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/min/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/min/slick.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#slider ul').autoChange({
            effect: 'fade',
            type: 'repeat',
            timeout: 3000,
            speed: 1000
        })
    });
    $(function() {
        $('.dc-menu-trigger').click(function() {
            $('.dc-menu').toggleClass("dc-menu-open");
            $('.menu-overlay').toggleClass("open");
            $('#header').toggleClass("shownav");
        });
    });
        var windowH = $(window).height();
    var logo = $('#hero-logo').height();

    function elementHeight() {
        $('#slider').css('height', windowH - logo - 60 + 'px');
    };
    elementHeight();

</script>
<?php wp_footer(); ?>
</body>

</html>