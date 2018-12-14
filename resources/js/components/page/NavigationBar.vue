<template>
	<nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
            <div class="navbar-logo" data-navbar-theme="theme2">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
                <a class="mobile-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                </a>
                <a href="index.html" style="font-size: 18px; font-family: Nunito">
                    <img class="img-fluid"  v-bind:src="$store.state.info.logo"  style="width: 40px" alt="Theme-Logo" />
                    &nbsp;{{ $store.state.info.nama_sistem }}
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
                        	<a id="txt-time">6:43PM</a>
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
                                        <i class="flag-icon flag-icon-id m-r-5"></i> Indonesia
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
                        <!-- <li class="header-notification">
                            <a href="#!" class="displayChatbox">
                                <i class="ti-comments"></i>
                                <span class="badge">9</span>
                            </a>
                        </li> -->
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
                                    <router-link :to="{name: 'user_profile'}">
                                        <i class="ti-user"></i> Profile
                                    </router-link>
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
                                    <a href="#!" @click.prevent="$auth.logout()">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</template>


<script>
	export default {
		name: 'NavigationBar',

		mounted: function() {
			this.startTime()
		},

		methods: {
			startTime: function() {
				var interval = setInterval(function() {
	                var momentNow = moment();
	                $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' ' + momentNow.format('dddd').substring(0,3).toUpperCase());
	                $('#txt-time').html(momentNow.format('DD MMMM YYYY - hh:mm:ss A'));
	            }, 100);
			},

			checkTime: function(i) {
			  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			  return i;
			}
		}

	}
</script>