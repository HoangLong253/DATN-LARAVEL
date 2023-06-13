<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0"
    nonce="wCtUy2oT"></script>
<script>
$('.owl-slideshow').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
    }
})
$('.owl-partner').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 7
        },
    }
})
$('.owl-spnb').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 5
        },
    }
})
$('.owl-carousel').owlCarousel({
    items: 1,
    merge: true,
    loop: true,
    margin: 10,
    video: true,
    lazyLoad: true,
    center: true,
    responsive: {
        480: {
            items: 2
        },
        600: {
            items: 4
        }
    }
});

$('.news-slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
    arrows: false,
    vertical: true,
    verticalSwiping: true,
    centerMode: true,
    centerPadding: '0',
    dots: false,
    infinite: false,
    focusOnSelect: true,

});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#features').wowBook({
        height: 595,
        width: 1188,
        centeredWhenClosed: true,
        hardcovers: true,
        turnPageDuration: 1000,
        numberedPages: [1, -2],
        controls: {
            zoomIn: '#zoomin',
            zoomOut: '#zoomout',
            next: '#next',
            back: '#back',
            first: '#first',
            last: '#last',
            slideShow: '#slideshow',
            flipSound: '#flipsound',
            thumbnails: '#thumbs',
            fullscreen: '#fullscreen'
        },
        scaleToFit: "#container",
        thumbnailsPosition: 'bottom',
        onFullscreenError: function() {
            var msg = "Fullscreen failed.";
            if (self != top) msg =
                "The frame is blocking full screen mode. Click on 'remove frame' button above and try to go full screen again."
            alert(msg);
        }
    }).css({
        'display': 'none',
        'margin': 'auto'
    }).fadeIn(1000);

    $("#cover").click(function() {
        $.wowBook("#features").advance();
    });

    var book = $.wowBook("#features");

    function rebuildThumbnails() {
        book.destroyThumbnails()
        book.showThumbnails()
        $("#thumbs_holder").css("marginTop", -$("#thumbs_holder").height() / 2)
    }
    $("#thumbs_position button").on("click", function() {
        var position = $(this).text().toLowerCase()
        if ($(this).data("customized")) {
            position = "top"
            book.opts.thumbnailsParent = "#thumbs_holder";
        } else {
            book.opts.thumbnailsParent = "body";
        }
        book.opts.thumbnailsPosition = position
        rebuildThumbnails();
    })
    $("#thumb_automatic").click(function() {
        book.opts.thumbnailsSprite = null
        book.opts.thumbnailWidth = null
        rebuildThumbnails();
    })
    $("#thumb_sprite").click(function() {
        book.opts.thumbnailsSprite = "images/thumbs.jpg"
        book.opts.thumbnailWidth = 136
        rebuildThumbnails();
    })
    $("#thumbs_size button").click(function() {
        var factor = 0.02 * ($(this).index() ? -1 : 1);
        book.opts.thumbnailScale = book.opts.thumbnailScale + factor;
        rebuildThumbnails();
    })

});
</script>
<!-- Chữ rung -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.header__cpnname').textillate({
            in: {
            effect: 'bounceIn'
            },
            out: {
                effect: 'bounceOut'
            },
            loop: true
        });

        $('.company_desc').textillate({
            in: {
            effect: 'bounceIn'
            },
            out: {
                effect: 'bounceOut'
            },
            loop: true
        });

    });
</script>

<script>
    
/* Menu */
TL_JS.Menu = function(){
    /* Menu remove empty ul */
    if(isExist($('.menu')))
    {
        $('.menu ul li a').each(function(){
            $this = $(this);

            if(!isExist($this.next('ul').find('li')))
            {
                $this.next('ul').remove();
                $this.removeClass('has-child');
            }
        });
    }

    /* Menu fixed */
    if(isExist($(".menu")))
    {
        // $(window).scroll(function(){
        //     if($(window).scrollTop() >= $(".header").height())
        //     {
        //         $(".menu").css({position:"fixed",left:'0px',right:'0px',top:'0px',zIndex:'100'});
        //     }
        //     else
        //     {
        //         $(".menu").css({position:"relative"});
        //     }
        // });

        $(window).scroll(function(){
            var height_scrol_fix = $(".header").outerHeight()+0.00000001;
            if($(window).scrollTop() >= height_scrol_fix){$(".menu-res").addClass('fixed')}
            else { $(".menu-res").removeClass('fixed')}
    
            if($(window).scrollTop() >= height_scrol_fix){ $(".menu").addClass('fixed'); $(".menu").removeClass('no-fixed');}
            else { $(".menu").removeClass('fixed'); $(".menu").addClass('no-fixed'); }
        });
    }

    /* Mmenu */
    if(isExist($("nav#menu")))
    {
        $('nav#menu').mmenu({
            extensions	: ['position-left','fx-menu-slide', 'shadow-panels', 'listview-large' ],
            iconPanels	: false,
            counters	: true,
            keyboardNavigation : {
                enable	: true,
                enhance	: true
            },
            navbar : {
                title : 'Menu'
            },
            navbars     : true
        }, {
            searchfield : {
                clear : true,
            }
        });
    }
};

TL_JS.FixMenu = function(){
    $(window).scroll(function(){
        var k =  $(".header-top").outerHeight()+$(".header-bottom1").outerHeight();
        if($(this).scrollTop() > k)
        {
            $(".menu").addClass("fixed");
            
        }
        else
        {
            $(".menu").removeClass("fixed");
        }
    });
};
/* Ready */
$(document).ready(function(){
    TL_JS.Menu();
    TL_JS.FixMenu();
});

</script>
<script>
    // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>