$.fn.autoChange = function (config) {
    var options = $.extend({
        effect: 'fade',
        type: 'repaet',
        timeout: 3000,
        speed: 1000
    }, config);

    return this.each(function () {
        var current = 0;
        var next = 1;
        var elementP = $(this);
        var element = $(elementP).children();

        var windowH = $(window).height();
        var logo = $('#hero-logo').height();

        $(element).hide();
        $(element[0]).show();

        function elementHeight() {
            $('#slider').css('height', windowH - logo - 60 + 'px');
        };
        
        elementHeight();
        $(window).on('resize', function () {
            elementHight();
        });
        var change = function () {
            if (options.effect == 'fade') {
                $(element[current]).fadeOut(options.speed);
                $(element[next]).fadeIn(options.speed);
            } else if (options.effect == 'slide') {
                $(element[current]).slideUp(options.speed);
                $(element[next]).slideDown(options.speed);
            }

            if (options.type == 'repeat') {
                if ((next + 1) < element.length) {
                    current = next;
                    next++;
                } else {
                    current = element.length - 1;
                    next = 0;
                }
            }

            if (options.type == 'stop') {
                if ((next + 1) < element.length) {
                    current = next;
                    next++;
                } else {
                    return;
                }
            }
        };
      var timer = setInterval(function(){change();}, options.timeout);
    });
};