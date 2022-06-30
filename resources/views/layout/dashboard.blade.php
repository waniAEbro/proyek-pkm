<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="/dashboard/img/apple-icon.png">
<link rel="icon" type="image/png" href="/dashboard/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>
    Now UI Dashboard by Creative Tim
</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- CSS Files -->
<link href="/dashboard/css/bootstrap.min.css" rel="stylesheet" />
<link href="/dashboard/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="/dashboard/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar bg-dark" data-color = "blue">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo bg-light text-center">
        <a class="navbar-brand" href="/" rel="tooltip" title="Belajar Riset dan Menulis Karya Ilmiah dengan Mudah serta Menyenangkan" data-placement="bottom">
        <img height="30px" src="https://drive.google.com/uc?export=view&id=1tOpOiuy-Y06a3W37FZ0Zj1DUDTmigCqR" alt="">
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li class="active ">
            <a href="./dashboard.html">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="./icons.html">
            <i class="now-ui-icons education_atom"></i>
            <p>Icons</p>
            </a>
        </li>
        <li>
            <a href="./map.html">
            <i class="now-ui-icons location_map-big"></i>
            <p>Maps</p>
            </a>
        </li>
        <li>
            <a href="./notifications.html">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Notifications</p>
            </a>
        </li>
        <li>
            <a href="./user.html">
            <i class="now-ui-icons users_single-02"></i>
            <p>User Profile</p>
            </a>
        </li>
        <li>
            <a href="./tables.html">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Table List</p>
            </a>
        </li>
        <li>
            <a href="./typography.html">
            <i class="now-ui-icons text_caps-small"></i>
            <p>Typography</p>
            </a>
        </li>
        </ul>
    </div>
    </div>
    @yield("main")
</div>
<!--   Core JS Files   -->
<script src="/dashboard/js/core/jquery.min.js"></script>
<script src="/dashboard/js/core/popper.min.js"></script>
<script src="/dashboard/js/core/bootstrap.min.js"></script>
<script src="/dashboard/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="/dashboard/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/dashboard/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/dashboard/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="/dashboard/demo/demo.js"></script>
<script>
    $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

    });
</script>
</body>

</html>