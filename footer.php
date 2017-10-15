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
<script type="text/javascript">
    $(function() {
        var img = $("#slider").children("img"),
            num = img.length,
            count = 0,
            timer;
        startTimer();
        img.eq(0).addClass("show");
        
        function startTimer() {
            timer = setInterval(function() {
                img.eq(count).removeClass("show");
                count++;
                if (count >= num) {
                    count = 0;
                }
                img.eq(count).addClass("show");
            }, 4000);
        }
        $('#prev').click(function() {
            clearInterval(timer);
            img.eq(count).removeClass("show"); 
            count--;
            if (count < 0) {
                count = num - 1;
            }
            console.log(count);
            img.eq(count).addClass("show");
        });
        $('#next').click(function() {
            clearInterval(timer);
            img.eq(count).removeClass("show"); 
            count++;
            if (count > num - 1) {
                count = 0;
            }
            console.log(count);
            img.eq(count).addClass("show");
        });
    });
    $(function() {
        $('.dc-menu-trigger').click(function() {
            $('.dc-menu').toggleClass("dc-menu-open");
            $('.menu-overlay').toggleClass("open");
            $('#header').toggleClass("shownav");
        });
    });
    var windowH = $(window).height(),
        logo = $('#hero-logo').height(),
        viewport = windowH - logo - 60;
    
    function elementHeight() {
        $('#slider').css('height', viewport + 'px');
        $('.arrows').css('bottom', viewport / 1.7 + 'px');
    };
    elementHeight();
    
</script>
<?php wp_footer(); ?>
</body>

</html>