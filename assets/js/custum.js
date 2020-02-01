

        $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 4000,
          });
        });
        
        $(function(){
            var timer = !1;
            _Ticker = $("#T1").newsTicker();
            _Ticker.on("mouseenter",function(){
                var __self = this;
                timer = setTimeout(function(){
                    __self.pauseTicker();
                },200);
            });
            _Ticker.on("mouseleave",function(){
                clearTimeout(timer);
                if(!timer) return !1;
                this.startTicker();
            });
        });


        window.verticalScroller = function($elem) {
            var top = parseInt($elem.css("top"));
            var temp = -1 * $('#verticalScroller > a').height();
            if(top < temp) {
                top = $('#verticalScroller').height()
                $elem.css("top", top);
            }
            $elem.animate({ top: (parseInt(top)-60) }, 1000, function () {
              window.verticalScroller($(this))
            });
        }


        $(document).ready(function() {
            var i = 0;
            $("#verticalScroller > a").each(function () {
                  $(this).css("top", i);
                  i += 60;
                  window.verticalScroller($(this));
            });
        });

        $("#academic-news, #latest-job, #upcoming-batch").scrollForever({
            dir: 'top',
            placeholder: 0,
            container: 'ul',
            inner: 'li',
            speed: 1000,
            delayTime: 100,
            continuous: true,
            num: 1

        });       

