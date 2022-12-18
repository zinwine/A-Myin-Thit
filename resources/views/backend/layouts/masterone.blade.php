<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('backend/css/button.css')}}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/bootstrap.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/bootstrap-responsive.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/bootstrap-wysihtml5.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/colorpicker.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/datepicker.css') !!}"/>

    <link rel="stylesheet" href="{!! asset('backend/css/fullcalendar.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/matrix-media.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/matrix-style.css') !!}"/>

    <link rel="stylesheet" href="{!! asset('backend/css/select2.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('backend/css/uniform.css') !!}"/>

    <link href="{!! asset('backend/font-awesome/css/font-awesome.css') !!}" rel="stylesheet"/>
    <link rel="stylesheet" href="{!! asset('backend/css/jquery.gritter.css') !!}"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1>
        <a href="#">AMyinThit Admin</a>
        {{--<img src="{{asset('frontend/photo/logo/logo.png')}}" alt="" class="img-responsive" width="">--}}
    </h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown"
                                                      data-target="#profile-messages" class="dropdown-toggle"><i
                        class="icon icon-user"></i> <span class="text">Welcome User</span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="{{url('/')}}"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages"
                                                   class="dropdown-toggle"><i class="icon icon-envelope"></i> <span
                        class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
            </ul>
        </li>
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class=""><a title="" href="{{url('/')}}"><i class="icon icon-share-alt"></i> <span
                        class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="@yield('dashboard')"><a href="{{url('admin/')}}"><i class="icon icon-home"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="submenu @yield('project')"><a href="#"><i class="icon icon-file"></i> <span>Project</span></a>
            <ul>
                <li><a href="{{url('admin/project')}}">View all project</a></li>
                <li><a href="{{url('admin/completedproject')}}">View completed project</a></li>
                <li><a href="{{url('admin/currentproject')}}">View current project</a></li>
                <li><a href="{{url('admin/futureproject')}}">View up coming project</a></li>
                <li><a href="{{url('admin/project/create')}}">Add project</a></li>
            </ul>
        </li>
        <li class="submenu @yield('blog')"><a href="#"><i class="icon icon-picture"></i> <span>Blog</span></a>
            <ul>
                <li><a href="{{url('admin/blog')}}">View allblog</a></li>
                <li><a href="{{url('admin/blog/create')}}">Add blog</a></li>
            </ul>
        </li>
        <li class="submenu @yield('message')"><a href="#"><i class="icon icon-envelope-alt"></i> <span>Message</span>
                <span class="label label-important">5</span></a>
            <ul>
                <li><a href="{{url('admin/servicemessage')}}"><span>Booking message</span>
                        <span
                                class="label label-important">3</span></a></li>
                <li><a href="{{url('admin/contactmessage')}}"><span>Contact message</span>
                        <span
                                class="label label-important">2</span></a></li>
            </ul>
        </li>
        <li class="submenu @yield('user')"><a href="#"><i class="icon icon-user"></i> <span>User</span></a>
            <ul>
                <li><a href="{{url('admin/user')}}">View all user</a></li>
                <li><a href="{{url('admin/role')}}">View user role</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header" STYLE="z-index: 0;">
        <div id="breadcrumb" style="padding-bottom: 1px;">
            @yield('pagelink')
        </div>
        @yield('pagetitle')
    </div>
    <!--End-breadcrumbs-->


    <div class="container-fluid" style="padding-top: 60px;">
        @yield('content')

    </div>
</div>
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2017 &copy; AMyinThit Admin.</div>
</div>

<!--end-Footer-part-->

<script src="{!! asset('backend/js/excanvas.min.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.min.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.ui.custom.js') !!}"></script>
<script src="{!! asset('backend/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.flot.min.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.flot.resize.min.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.peity.min.js') !!}"></script>
<script src="{!! asset('backend/js/fullcalendar.min.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.dashboard.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.gritter.min.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.interface.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.chat.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.validate.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.form_validation.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.wizard.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.uniform.js') !!}"></script>
<script src="{!! asset('backend/js/select2.min.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.popover.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.tables.js') !!}"></script>

<script src="{!! asset('backend/js/bootstrap-colorpicker.js') !!}"></script>
<script src="{!! asset('backend/js/bootstrap-datepicker.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.toggle.buttons.js') !!}"></script>
<script src="{!! asset('backend/js/masked.js') !!}"></script>
<script src="{!! asset('backend/js/matrix.form_common.js') !!}"></script>
<script src="{!! asset('backend/js/wysihtml5-0.3.0.js') !!}"></script>
<script src="{!! asset('backend/js/jquery.peity.min.js') !!}"></script>
<script src="{!! asset('backend/js/bootstrap-wysihtml5.js') !!}"></script>


<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

// if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

// if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
// else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>