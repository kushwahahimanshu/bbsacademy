<!-- Modernizr Js -->
<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery-->
<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<!-- Plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- WOW JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('assets/vendor/slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/slider/home.js') }}" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="{{ asset('assets/vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
<!-- Srollup js -->
<script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- Countdown js -->
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}" type="text/javascript"></script>
<!-- Isotope js -->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
<!-- Magic Popup js -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
<!-- Gridrotator js -->
<script src="{{ asset('assets/js/jquery.gridrotator.js') }}" type="text/javascript"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/libs/jquery.tickerNews.min.js') }}"></script>

<!-- <script type="text/javascript">
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

</script> -->
<script src="{{asset('assets/js/custum.js')}}"></script>


<!-- <script type="text/javascript">

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

    </script> -->




<script src="{{ asset('assets/ecom/js/jquery.vide.min.js') }}"></script>
<script src="{{ asset('assets/ecom/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/ecom/js/parallax.js') }}"></script>
<script src="{{ asset('assets/ecom/js/countTo.js') }}"></script>
<script src="{{ asset('assets/ecom/js/appear.js') }}"></script>
<script src="{{ asset('assets/ecom/js/main.js') }}"></script>


<script type="text/javascript">
            $(document).ready(function() {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });
        </script>