
<!-- metronic era?  -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
{{--<!--[if lt IE 9]>--}}
{{--<script src="{{asset('assets/assets/global/plugins/respond.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/assets/global/plugins/excanvas.min.js')}}"></script>--}}
{{--<![endif]-->--}}
<script src="{{asset('assets/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('assets/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{asset('assets/assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/exx/bootstrap-datepicker.min.js')}}"></script>

<script src="{{asset('assets/exx/jquery.blockUI.js')}}"></script>
<script src="{{asset('assets/exx/date.js')}}"></script>

<script src="{{asset('assets/exx/bootstrap-notify.js')}}"></script>



<script src="{{asset('assets/exx/select2.min.js')}}"></script>
{{----------------------------  datatable -------------------------------}}
<script src="{{asset('assets/exx/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/exx/DataTableResponsive.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
    });
</script>



{{--/////////////////////Initialize Notify////////////////////////--}}
<script>

    function notification(icon_msg,title_msg,notify_message,type_message,z_index=1031) {

        var notify = $.notify({
            // options
            icon: icon_msg,
            title:  title_msg ,
            message: notify_message,
        }, {
            // settings
            element: 'body',
            type: type_message,
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,

            @if(app()->getLocale() == 'ar')

            placement: {
                from: "top",
                align: "right"
            },

            @else

            placement: {
                from: "top",
                align: "left"
            },
            @endif




            @if(app()->getLocale() == 'ar')

            offset: {
                x: 680,
                y: 60
            },

            @else


            offset: {
                x:920,
                y: 60
            },
            @endif



            spacing: 10,
            z_index: z_index,
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            },

        });
        return(notify);
    }

    /////////////////////Initialize information////////////////////////
    function information(ico_msg,title,info_message) {

        var info = $.notify({
            // options
            icon: ico_msg,
            title:  title ,
            message: info_message,
        }, {
            // settings
            element: 'body',
            type: 'pastel-danger',
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "left"
            },
            offset: {
                x: 920,
                y: 60
            },

            spacing: 10,
            z_index: 1031,
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            },
            delay: 5000,
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<span data-notify="title">{1}</span>' +
            '<span data-notify="message">{2}</span>' +
            '</div>'

        });
        return(info);

    }









</script>

<script>
 @if($errors->any())
 @foreach ($errors->all() as $error)
 
 notification('glyphicon glyphicon-warning-sign', 'Warning', '{{$errors}}', 'danger');

 @endforeach 
 @endif





 </script>


@yield('custom_footer')
