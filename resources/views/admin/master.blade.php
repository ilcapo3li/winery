<!DOCTYPE html>
<div>
<head>

    <title>
        First Laravel
    </title>

    @include('admin.meta')
    @include('admin.styles1')
    @include('admin.scripts1')
    @yield('page_scripts')

</head>
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<div class="page-md page-header-fixed page-quick-sidebar-over-content ">

    @include('admin.fetch')


     <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                Admin   <small> Page</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{ url('/home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{ url('/admin') }}">Admin</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                  
                </ul>
               
          
                @yield('content')
                </div>
            </div>

@include('admin.quick sidebar')

</body>
</html>