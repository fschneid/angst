var skipIntro = false;
jQuery(document).ready(function ($) {
    if ($("body").hasClass("home")) {
        if (window.location.hash) {
            history.pushState("", document.title, window.location.pathname);
            skipIntro = true;
        }
        intro();
        headerScroll();
        var elem = document.querySelector('.slider');
        var flkty = new Flickity(elem, {
            // options
            cellAlign: 'left'
            , imagesLoaded: true
        });
        var scrolling = false
            , previousTop = 0
            , currentTop = 0
            , scrollDelta = 10
            , scrollOffset = 150;
        $(window).on('scroll', function () {
            if (!scrolling) {
                scrolling = true;
                (!window.requestAnimationFrame) ? setTimeout(autoHideHeader, 250): requestAnimationFrame(autoHideHeader);
            }
        });

        function autoHideHeader() {
            var currentTop = $(window).scrollTop();
            var nav = $("nav");
            var splash = $(".intro").height();
            if (previousTop - currentTop > scrollDelta) {
                //if scrolling up...
                if (currentTop <= splash) {
                    nav.removeClass("scroll");
                }
            }
            else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
                //if scrolling down...
                if (currentTop >= splash * 0.7 && !(nav.hasClass("scroll"))) {
                    nav.addClass("scroll");
                }
            }
            previousTop = currentTop;
            scrolling = false;
        }
    }
    $(".returnToHome").on("click", function (e) {
        if (document.referrer.indexOf('was-angst-macht.de') >= 0) {
            e.preventDefault();
            history.go(-1);
        }
    })
    if ($("body").hasClass("single-format-image")) {
        svgAnimation();
    }
    if ($("body").hasClass("quiz")) {
        var form = $("form");
        var current = form.find(".question").eq(0).addClass("current");
        //go Back results
        $(".moreBtn").on("click", function (e) {
            e.preventDefault();
            window.history.go(-2);
        })
        $(".answer input").on("click", function (e) {
            $(this).closest(".answer").siblings().removeClass("selected");
            $(this).closest(".answer").toggleClass("selected");
        })
        $(".next").on("click", function () {
            var next = current.next(".question");
            if ($(current).find('input:radio:checked').length > 0) {
                var index = $(".question").index(next);
                if (!(next.length)) {
                    $("input[type=submit].fixed").show();
                    $("button.fixed").hide();
                }
                else {
                    current.removeClass("current");
                    $(".number span").html(index + 1);
                    var height = current.outerHeight();
                    next.addClass("current");
                    current = next;
                    TweenMax.to(form, 0.6, {
                        y: '-=' + height + ''
                        , ease: Power1.easeOut
                    });
                }
            }
            else {
                $(current).find(".warning").show();
            }
        })
    }
    var menuOpen = false;
    var videoOverlay = new overlay();
    $(".post.category-video").on("click", function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        videoOverlay.open(id)
    });
    $(".menuBtn").on("click", function () {
        $(this).toggleClass('is-active');
        var tl = new TimelineMax({
            onStart: function () {
                $("nav.main").addClass("white")
            }
            , onReverseComplete: function () {
                $("nav.main").removeClass("white")
            }
        });
        tl.fromTo($(".menuLayer"), 0.3, {
            x: "-100%"
        }, {
            x: "0%"
            , ease: Circ.easeOut
        }).staggerFromTo($(".menuLayer li"), 0.4, {
            opacity: 0
        }, {
            opacity: 1
            , ease: Circ.easeInOut
        }, 0.2);
        if (menuOpen === false) {
            tl.play();
            menuOpen = true;
        }
        else {
            tl.reverse(0);
            menuOpen = false;
        }
    })
    if ($("body").hasClass("single-post")) {
        $('.poster').on('click', function () {
            $(this).parent().find(".youtube-player")[0].src += "&autoplay=1";
            $(this).delay(500).hide(0);
        });
    }
    $(".facts h2").html(function () {
        var text = $(this).text().split(" ");
        var last = text.pop();
        return text.join(" ") + (text.length > 0 ? " <span>" + last + "</span>" : last);
    });
});

function overlay() {
    var el;
    this.open = function (id) {
        if (!(jQuery(".videoOverlay").length)) {
            var videoUrl = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + id + '?rel=0&amp;autoplay=1&amp;showinfo=0" showinfo=0" frameborder="0" allowfullscreen></iframe>';
            el = jQuery('<div/>', {
                class: 'videoOverlay'
            }).append('<div class="videoContainer">' + videoUrl + '</div').appendTo('body');
            var closeBtn = jQuery('<div/>', {
                class: 'closeBtn'
                , on: {
                    click: this.close
                }
            }).prependTo(el);
        }
        TweenMax.from(el, 0.2, {
            opacity: 0
        });
    }
    this.close = function () {
        el.hide().remove();
    }
}

function headerScroll() {
    var controller = new ScrollMagic.Controller();
    var el = jQuery(".scrollIndicator");
    var type = jQuery(".intro .innerContent");
    var arrow = new ScrollMagic.Scene({
        duration: 50
    }).setTween(el, {
        opacity: "0"
    }).addTo(controller);
}

function intro() {
    if (skipIntro === false) {
        jQuery('.preloader').find("img").waitForImages(function () {
            jQuery(this).remove();
            jQuery('.preloader').addClass("introAnimation");
            jQuery('.preloader').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function (e) {
                setStart();
            })
        });
    }
    else {
        setStart();
    }
}

function setStart() {
    /* TweenMax.to(jQuery("nav"), 0.6, {
         x: "0"
         , ease: Circ.easeOut
         , delay: 0.2
     });*/
    jQuery(".scrollIndicator").addClass("animateIn");
    /*TweenMax.to(jQuery(".preloader"), 0.6, {
        borderBottomWidth: "6.25vw"
        , force3D: true
        , ease: Circ.easeOut
        , delay:0.2
    });*/
}

function svgAnimation() {
    //load inline    
    var url = "http://was-angst-macht.de/wp-content/uploads/2017/03/koerper.svg"
    xhr = new XMLHttpRequest();
    xhr.open("GET", url, false);
    xhr.overrideMimeType("image/svg+xml");
    xhr.send("");
    document.getElementById("svg").appendChild(xhr.responseXML.documentElement);
    var igel = jQuery("#svg svg").find("#igelText > g");
    var text = jQuery(".text").find(".snippets");
    igel.click(function () {
        igel.css("opacity", "0.5");
        jQuery(this).css("opacity", "1");
        var id = jQuery(this).attr("id");
        text.removeClass("active");
        jQuery(".snippets." + id + "").addClass("active");
    })
    var svgController = new ScrollMagic.Controller();
    
    var svgTL1 = new TimelineMax(),
    svgTL2 = new TimelineMax(),
    svgTL3 = new TimelineMax(),      
    snake = jQuery("#svg svg").find("#snake"),
    fear = jQuery("#svg svg").find("#fear"),
    smile = jQuery("#svg svg").find("#smile"),
    brain = jQuery("#svg svg").find("#brain"),
    niere = jQuery("#svg svg").find("#nniere"),
    connect = jQuery("#svg svg").find("#connect"),    
    igelAll = jQuery("#svg svg").find("#igelText"),
    indicator = jQuery(".scrollIndicator");    
    
    
    //snake
     svgTL1.to(indicator, 0.2, {opacity:0},0);
    svgTL1.from(snake, 1, {x:500},0);
    svgTL1.to(snake, 1, {opacity:1},0);
    svgTL1.to(fear, 0, {opacity:1},1);
    svgTL1.to(smile, 0, {opacity:0},1);
    svgTL1.to(brain, 1, {opacity:1},2);
    
    
    svgTL2.to(connect, 1, {strokeDashoffset:0},0);
    svgTL2.to(niere, 1, {opacity:1},0);
    
    svgTL3.to(brain, 1, {opacity:0},0);
    svgTL3.to(connect, 1, {opacity:0},0);
    svgTL3.to(niere, 1, {opacity:0},0);
    svgTL3.to(igelAll, 1, {opacity:1},1);
    
    var scene1 = new ScrollMagic.Scene({
    duration: '150%'
    })
    .setTween(svgTL1)
    .addTo(svgController);
    
   var scene2 = new ScrollMagic.Scene({
    duration: '100%',triggerElement: ".trigger2", triggerHook: 'onEnter'
    })
    .setTween(svgTL2)
    .addTo(svgController);
    
    var scene2 = new ScrollMagic.Scene({
    duration: '100%',triggerElement: ".empty", triggerHook: 'onEnter'
    })
    .setTween(svgTL3)
    .addTo(svgController);
}