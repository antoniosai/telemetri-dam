@php
    $info = App\Model\Info::first();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mash Able - Premium Admin Template</title>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/icon/SVG-animated/svg-weather.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/menu-search/css/component.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/dashboard/horizontal-timeline/css/style.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/dashboard/amchart/css/amchart.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/widget/calender/pignose.calendar.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/pages/flag-icon/flag-icon.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="">

    <div id="app">

        <main-app></main-app>

    </div>

    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/assets/js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="/assets/js/modernizr.js"></script>
    <script type="text/javascript" src="/assets/js/css-scrollbars.js"></script>

    <script type="text/javascript" src="/assets/js/moment.min.js"></script>
    <script type="text/javascript" src="/assets/pages/widget/calender/pignose.calendar.min.js"></script>


    <script src="/assets/js/c3.js"></script>
    <script type="text/javascript" src="/assets/js/classie.js"></script>

    <script src="/assets/pages/chart/knob/jquery.knob.js"></script>
    <script type="text/javascript" src="/assets/pages/widget/jquery.sparkline.js"></script>

    <script src="/assets/js/d3.js"></script>
    <script src="/assets//js/rickshaw.js"></script>

    <script src="/assets//js/raphael.min.js"></script>
    <script src="/assets/js/morris.js"></script>

    <script src="/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="/assets/pages/chart/float/jquery.flot.pie.js"></script>

    <script type="text/javascript" src="/assets/pages/dashboard/horizontal-timeline/js/main.js"></script>

    <script type="text/javascript" src="/assets/pages/dashboard/amchart/js/amcharts.js"></script>
    <script type="text/javascript" src="/assets/pages/dashboard/amchart/js/serial.js"></script>
    <script type="text/javascript" src="/assets/pages/dashboard/amchart/js/light.js"></script>
    <script type="text/javascript" src="/assets/pages/dashboard/amchart/js/custom-amchart.js"></script>

    <script type="text/javascript" src="/assets/js/i18next.min.js"></script>
    <script type="text/javascript" src="/assets/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="/assets/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-i18next.min.js"></script>

    <script type="text/javascript" src="/assets/pages/dashboard/custom-dashboard.js"></script>

    <script src="/assets/js/pcoded.min.js"></script>
    <script src="/assets/js/demo-12.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>

    <script src="/js/app.js"></script>

</body>

</html>
