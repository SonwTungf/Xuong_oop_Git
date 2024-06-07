<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Start Css --}}

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap1.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('admin/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/datepicker/date-picker.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/vectormap-home/vectormap-2.0.2.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/colors/default.css') }}" id="colorSkinCSS">

    {{-- --}}


    {{-- End Css --}}

</head>

<body class="crm_body_bg">

    @include('layouts.navbar')

    <section class="main_content dashboard_part large_header_bg">
        @include('layouts.header')
        @yield('main')
        @include('layouts.footer')
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>




    <script src=" {{ asset('admin/js/jquery1-3.4.1.min.js') }}"></script>

    <script src=" {{ asset('admin/js/popper1.min.js') }}"></script>

    <script src=" {{ asset('admin/js/bootstrap.min.html') }}"></script>

    <script src="{{ asset('admin/js/metisMenu.js') }}"></script>

    <script src="{{ asset('admin/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ asset('admin/vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ asset('admin/vendors/datepicker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/chartjs/roundedBar.min.js') }}"></script>

    <script src="{{ asset('admin/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('admin/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('admin/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('admin/vendors/am_chart/amcharts.js') }}"></script>

    <script src="{{ asset('admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ asset('admin/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('admin/vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ asset('admin/vendors/apex_chart/apex_dashboard.js') }}"></script>
    <script src="{{ asset('admin/vendors/echart/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('admin/vendors/chart_am/chart-custom.js') }}"></script>

    <script src="{{ asset('admin/js/dashboard_init.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
</body>

</html>
