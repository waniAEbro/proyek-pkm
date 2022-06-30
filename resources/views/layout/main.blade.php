<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
<link rel="icon" type="image/png" href="/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Rumah Kompetisi - {{$title}}
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- CSS Files -->
<link href="/css/bootstrap.min.css" rel="stylesheet" />
<link href="/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="/demo/demo.css" rel="stylesheet" />
<style>
    .home-header {
        min-height: 0;
        height: 400px!important;
    }
    .MultiCarousel {
        float: left;
        overflow: hidden;
        padding: 15px;
        width: 100%;
        position:relative;
    }
    .MultiCarousel .MultiCarousel-inner {
        transition: 1s ease all;
        float: left;
    }
    .MultiCarousel .MultiCarousel-inner .item { float: left;}
    .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; margin:10px; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
    .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }

    .filter:after {
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        position: absolute;
        content: '';
        opacity: 0.9;
    }
    .filter-dark:after {
        background-image: linear-gradient(to bottom, rgba(5,5,5,0), rgba(5,5,5,1));
    }

    @media(max-width: 1200px) {
        .hilang {
            bottom:23vh!important;
        }
    }

    @media(max-width: 992px) {
        .hilang {
            display : none!important;
        }
    }
</style>
</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="50">
    <div class="container">
    <div class="navbar-translate">
        <a class="navbar-brand" href="/" rel="tooltip" title="Belajar Riset dan Menulis Karya Ilmiah dengan Mudah serta Menyenangkan" data-placement="bottom">
        Rumah Kompetisi
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar top-bar"></span>
        <span class="navbar-toggler-bar middle-bar"></span>
        <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">
                <p>Home</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <p>Info Event</p>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                <p>Paket Kelas</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                <a class="dropdown-item" href="/">
                    <p>English Class</p>
                </a>
                <a class="dropdown-item" href="/">
                    <p>English Class</p>
                </a>
                <a class="dropdown-item" href="/">
                    <p>English Class</p>
                </a>
                <a class="dropdown-item" href="/">
                    <p>English Class</p>
                </a>
            </div>
        </li>
        <li class="nav-item">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control bg-light" placeholder="Search ...">
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </div>
                </div>
            </form>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">
                <p>Admin</p>
            </a>
        </li>
        @endauth
        <li class="nav-item">
            @guest
            <a class="nav-link btn btn-neutral btn-round" href="login">
            Login
            </a>
            @endguest
            @auth
            <a class="nav-link btn btn-neutral btn-round" href="logout">
                Log Out
                </a>
            @endauth
        </li>
        </ul>
    </div>
    </div>
</nav>

@yield("main")

<footer class="footer" data-background-color="black">
    <div class=" container d-flex justify-content-between align-items-center">
        <nav>
            <ul>
            <li>
                <a href="https://wa.me/08554511221" target="_blank">
                    <i class="fa-solid fa-phone"></i>
                    08554511221
                </a>
            </li>
            <li>
                <a href="mailto:rumahkompetisi@gmail.com">
                    <i class="fa-solid fa-envelope"></i>
                    rumahkompetisi@gmail.com
                </a>
            </li>
            </ul>
        </nav>
        <div class="copyright" id="copyright">
            &copy;
            <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Rumah Kompetisi, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>
        </div>
    </div>
</footer>
</div>
<!--   Core JS Files   -->
<script src="/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/js/core/popper.min.js" type="text/javascript"></script>
<script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
<script>
$(document).ready(function() {
    // the body of this function is in assets/js/now-ui-kit.js
    nowuiKit.initSliders();
});

function scrollToDownload() {

    if ($('.section-download').length != 0) {
    $("html, body").animate({
        scrollTop: $('.section-download').offset().top
    }, 1000);
    }
}
</script>
<script>
    $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>
</body>

</html>