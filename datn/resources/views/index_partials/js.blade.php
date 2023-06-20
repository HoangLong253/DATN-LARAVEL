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
window.onscroll = function() {
    myFunction()
};
var header = document.getElementById("menu-scroll");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
</script>
<script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1748726912209454');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1748726912209454&ev=PageView&noscript=1" /></noscript>

<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-MSB2SX5');
</script>
<div id="fb-root"></div>


<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
var chatbox = document.getElementById('fb-customer-chat');
chatbox.setAttribute("page_id", "113969381682545");
chatbox.setAttribute("attribution", "biz_inbox");
</script>


<script>
window.fbAsyncInit = function() {
    FB.init({
        xfbml: true,
        version: 'v16.0'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Btn back to top -->
<script>
    // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<noscript></noscript>