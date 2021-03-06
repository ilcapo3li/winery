<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top" dir="rtl">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}">
                <img src="{{asset('assets/assets/admin/layout/img/logo.png')}}" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
            <!-- BEGIN Language DROPDOWN -->
                 <li class="dropdown  tasks-menu " style="font-size: 1.5em">

                        @if(app()->getLocale() == 'ar')
                            <a href="{{ url('/language/en') }}" class="">
                                <i class="icon-globe"></i>
                                <span class="badge badge-danger" style="font-size: 0.5em">EN</span>
                            </a>
                        @else
                            <a href="{{ url('/language/ar') }}" class="">
                                <i class="icon-globe"></i>
                                <span class="badge badge-danger" style="font-size: 0.5em">AR</span>
                            </a>
                        @endif
                    </li>
                            
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-bell"></i>
                        <span class="badge badge-default">
					7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">12 pending</span> notifications</h3>
                            <a href="extra_profile.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 mins</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">14 hrs</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">2 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									A user IP blocked. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Storage Server #4 not responding dfdfdfd. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">5 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">9 days</span>
                                        <span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Storage server failed. </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-envelope-open"></i>
                        <span class="badge badge-default">
					4 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3>You have <span class="bold">7 New</span> Messages</h3>
                            <a href="page_inbox.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="inbox.html?a=view">
									<span class="photo">
									<img src="{{asset('assets/assets/admin/layout3/img/avatar2.jpg')}}" class="img-circle" alt="">
									</span>
                                        <span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">Just Now </span>
									</span>
                                        <span class="message">
									Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
									<span class="photo">
									<img src="{{asset('assets/assets/admin/layout3/img/avatar3.jpg')}}" class="img-circle" alt="">
									</span>
                                        <span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">16 mins </span>
									</span>
                                        <span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
									<span class="photo">
									<img src="{{asset('assets/assets/admin/layout3/img/avatar1.jpg')}}" class="img-circle" alt="">
									</span>
                                        <span class="subject">
									<span class="from">
									Bob Nilson </span>
									<span class="time">2 hrs </span>
									</span>
                                        <span class="message">
									Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
									<span class="photo">
									<img src="{{asset('assets/assets/admin/layout3/img/avatar2.jpg')}}" class="img-circle" alt="">
									</span>
                                        <span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">40 mins </span>
									</span>
                                        <span class="message">
									Vivamus sed auctor 40% nibh congue nibh... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="inbox.html?a=view">
									<span class="photo">
									<img src="{{asset('assets/assets/admin/layout3/img/avatar3.jpg')}}" class="img-circle" alt="">
									</span>
                                        <span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">46 mins </span>
									</span>
                                        <span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-calendar"></i>
                        <span class="badge badge-default">
					3 </span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li class="external">
                            <h3>You have <span class="bold">12 pending</span> tasks</h3>
                            <a href="page_todo.html">view all</a>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">New release v1.2 </span>
									<span class="percent">30%</span>
									</span>
                                        <span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
                                        <span class="progress">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
                                        <span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">10%</span>
									</span>
                                        <span class="progress">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">Web server upgrade</span>
									<span class="percent">58%</span>
									</span>
                                        <span class="progress">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">85%</span>
									</span>
                                        <span class="progress">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
									<span class="task">
									<span class="desc">New UI release</span>
									<span class="percent">38%</span>
									</span>
                                        <span class="progress progress-striped">
									<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
									</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="img-circle" src="{{asset('assets/assets/admin/layout/img/avatar3_small.jpg')}}"/>
                        <span class="username username-hide-on-mobile">
					Nick </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="{{url('/login')}}">
                                <i class="icon-key"></i> Log Out </a>

                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search " action="extra_search.html" method="POST">
                        <a href="javascript:;" class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="start ">
                    <a href="javascript:;">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('/')}}">
                                <i class="icon-home"></i>
                                Home</a>
                        </li>
                        <li>
                            <a href="{{url('/admin')}}">
                                <i class="icon-user-following"></i>
                               Profile</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="glyphicon glyphicon-user"></i>
                        <span class="title">Users</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('/admin/users')}}">
                                <i class="icon-users"></i>
                                 Users</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/users/create')}}">
                                <i class="icon-user-follow"></i>
                                Create User</a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-rocket"></i>
                        <span class="title">Posts</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="layout_horizontal_sidebar_menu.html">
                                All Posts</a>
                        </li>
                        <li>
                            <a href="index_horizontal_menu.html">
                                Create Post</a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-diamond"></i>
                        <span class="title">Catigories</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('/admin/catigories')}}">
                                All Catigories</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/catigories/create')}}">
                                Create Catigories</a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-diamond"></i>
                        <span class="title">Media</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ui_general.html">
                                All Media</a>
                        </li>
                        <li>
                            <a href="ui_buttons.html">
                                Create Media</a>
                        </li>
                       
                    </ul>
                </li>
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            