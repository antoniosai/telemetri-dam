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
</head>

<body>

    <div id="app">
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>


        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo" data-navbar-theme="theme4">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a class="mobile-search morphsearch-search" href="#">
                                <i class="ti-search"></i>
                            </a>
                            <a href="index.html" style="font-size: 18px; font-family: Nunito">
                                <img class="img-fluid" src="{{ $info->logo }}" style="width: 40px" alt="Theme-Logo" />
                                &nbsp;Telemetri DAM
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <div>
                                <ul class="nav-left">
                                    <li>
                                        <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                    </li>
                                    <li>
                                        <a class="main-search morphsearch-search" href="#">

                                            <i class="ti-search"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav-right">
                                    <li class="header-notification lng-dropdown">
                                        <a href="#" id="dropdown-active-item">
                                            <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                        </a>
                                        <ul class="show-notification">
                                            <li>
                                                <a href="#" data-lng="en">
                                                    <i class="flag-icon flag-icon-gb m-r-5"></i> English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-lng="es">
                                                    <i class="flag-icon flag-icon-es m-r-5"></i> Spanish
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-lng="pt">
                                                    <i class="flag-icon flag-icon-pt m-r-5"></i> Portuguese
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" data-lng="fr">
                                                    <i class="flag-icon flag-icon-fr m-r-5"></i> French
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-notification">
                                        <a href="#!">
                                            <i class="ti-bell"></i>
                                            <span class="badge">5</span>
                                        </a>
                                        <ul class="show-notification">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center" src="/assets/images/user.png"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">John Doe</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center" src="/assets/images/user.png"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Joseph William</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center" src="/assets/images/user.png"
                                                        alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Sara Soudein</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                                            consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-notification">
                                        <a href="#!" class="displayChatbox">
                                            <i class="ti-comments"></i>
                                            <span class="badge">9</span>
                                        </a>
                                    </li>
                                    <li class="user-profile header-notification">
                                        <a href="#!">
                                            <img src="/assets/images/user.png"
                                                alt="User-Profile-Image">
                                            <span>John Doe</span>
                                            <i class="ti-angle-down"></i>
                                        </a>
                                        <ul class="show-notification profile-notification">
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-settings"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="ti-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="ti-email"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html">
                                                    <i class="ti-lock"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="ti-layout-sidebar-left"></i> Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <div id="morphsearch" class="morphsearch">
                                    <form class="morphsearch-form">
                                        <input class="morphsearch-input" type="search" placeholder="Search..." />
                                        <button class="morphsearch-submit" type="submit">Search</button>
                                    </form>
                                    <div class="morphsearch-content">
                                        <div class="dummy-column">
                                            <h2>People</h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                                                    alt="Sara Soueidan" />
                                                <h3>Sara Soueidan</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                                                    alt="Shaun Dona" />
                                                <h3>Shaun Dona</h3>
                                            </a>
                                        </div>
                                        <div class="dummy-column">
                                            <h2>Popular</h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="/assets/images/avatar-1.png"
                                                    alt="PagePreloadingEffect" />
                                                <h3>Page Preloading Effect</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="/assets/images/avatar-1.png"
                                                    alt="DraggableDualViewSlideshow" />
                                                <h3>Draggable Dual-View Slideshow</h3>
                                            </a>
                                        </div>
                                        <div class="dummy-column">
                                            <h2>Recent</h2>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="/assets/images/avatar-1.png"
                                                    alt="TooltipStylesInspiration" />
                                                <h3>Tooltip Styles Inspiration</h3>
                                            </a>
                                            <a class="dummy-media-object" href="#!">
                                                <img src="/assets/images/avatar-1.png"
                                                    alt="NotificationStyles" />
                                                <h3>Notification Styles Inspiration</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>

                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="card card_main p-fixed users-main">
                            <div class="user-box">
                                <div class="card-block">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-friend-list">
                                    <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                                        data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-1.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Josephin Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe"
                                        data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice"
                                        data-toggle="tooltip" data-placement="left" title="Alice">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-2.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alice</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia"
                                        data-toggle="tooltip" data-placement="left" title="Alia">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u2.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Alia</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen"
                                        data-toggle="tooltip" data-placement="left" title="Suzen">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Suzen</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield"
                                        data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-3.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Michael Scofield</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk"
                                        data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-4.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Irina Shayk</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi"
                                        data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-5.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Sara Tancredi</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon"
                                        data-toggle="tooltip" data-placement="left" title="Samon">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-1.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Samon</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize"
                                        data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Daizy Mendize</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield"
                                        data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-3.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Loren Scofield</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk"
                                        data-toggle="tooltip" data-placement="left" title="Shayk">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-4.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Shayk</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara"
                                        data-toggle="tooltip" data-placement="left" title="Sara">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u3.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-danger"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Sara</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe"
                                        data-toggle="tooltip" data-placement="left" title="Doe">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/avatar-1.png"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Doe</div>
                                        </div>
                                    </div>
                                    <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary"
                                        data-toggle="tooltip" data-placement="left" title="Lary">
                                        <a class="media-left" href="#!">
                                            <img class="media-object img-circle" src="/assets/images/task/task-u1.jpg"
                                                alt="Generic placeholder image">
                                            <div class="live-status bg-success"></div>
                                        </a>
                                        <div class="media-body">
                                            <div class="f-13 chat-header">Lary</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox">
                            <i class="icofont icofont-rounded-left"></i> Josephin Doe
                        </a>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-circle m-t-5" src="/assets/images/avatar-1.png"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about
                                    yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about
                                    yourself?</p>
                                <p class="chat-time">8:20 a.m.</p>
                            </div>
                        </div>
                        <div class="media-right photo-table">
                            <a href="#!">
                                <img class="media-object img-circle m-t-5" src="/assets/images/avatar-2.png"
                                    alt="Generic placeholder image">
                            </a>
                        </div>
                    </div>
                    <div class="chat-reply-box p-b-20">
                        <div class="right-icon-control">
                            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                            <div class="form-icon">
                                <i class="icofont icofont-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <menu-admin></menu-admin>
                                
                            </div>
                        </nav>
                        <div class="pcoded-content">

                            
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4 id="judul"></h4>
                                            </div>
                                        </div>
                                        <div class="page-body">
                                            <router-view></router-view>
                                            
                                        </div>
                                    </div>
                                    {{-- <div id="styleSelector"> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script type="text/javascript" src="/assets/js/script.js"></script>

    <script src="/assets/js/pcoded.min.js"></script>
    <script src="/assets/js/demo-12.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.min.js"></script>

    <script src="/js/app.js"></script>

</body>

</html>
