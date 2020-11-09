
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


<script src="{{asset('assets/frontend/js/main-slider-script.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/appear.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.js')}}"></script>
<script src="{{asset('assets/frontend/js/script.js')}}"></script>
<script src="{{asset('assets/frontend/js/color-settings.js')}}"></script>
<script src="{{asset('assets/frontend/js/scripts.js')}}"></script>
<script src="{{asset('assets/frontend/js/goto-btn.js')}}"></script>
<script src="{{asset('assets/frontend/js/gallery.js')}}"></script>


<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navigation").style.background = "rgb(13, 165, 216)";
        } else {
            document.getElementById("navigation").style.background = "transparent";
        }
    }

    /*----------------------------------------------------
    /* Responsive Navigation
    /*--------------------------------------------------*/
    jQuery(document).ready(function($){
        $('.primary-navigation').not('.mobile-menu-wrapper').find('.menu').clone().appendTo('.mobile-menu-wrapper').hide();

        $('.toggle-mobile-menu').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $('body').toggleClass('mobile-menu-active');
        });

        // prevent propagation of scroll event to parent
        $(document).on('DOMMouseScroll mousewheel', '.mobile-menu-wrapper', function(ev) {
            var $this = $(this),
                scrollTop = this.scrollTop,
                scrollHeight = this.scrollHeight,
                height = $this.height(),
                delta = (ev.type == 'DOMMouseScroll' ?
                    ev.originalEvent.detail * -40 :
                    ev.originalEvent.wheelDelta),
                up = delta > 0;

            var prevent = function() {
                ev.stopPropagation();
                ev.preventDefault();
                ev.returnValue = false;
                return false;
            }

            if ( $('a#pull').css('display') !== 'none' ) { // if toggle menu button is visible ( small screens )

                if (!up && -delta > scrollHeight - height - scrollTop) {
                    // Scrolling down, but this will take us past the bottom.
                    $this.scrollTop(scrollHeight);
                    return prevent();
                } else if (up && delta > scrollTop) {
                    // Scrolling up, but this will take us past the top.
                    $this.scrollTop(0);
                    return prevent();
                }
            }
        });
    }).on('click', function(event) {

        var $target = jQuery(event.target);
        if ( ( $target.hasClass("fa") && $target.parent().hasClass("toggle-caret") ) ||  $target.hasClass("toggle-caret") ) {// allow clicking on menu toggles
            return;
        }

        jQuery('').removeClass('mobile-menu-active');
    });




</script>

