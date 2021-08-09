<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS only -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Dual List Script -->
    <link href="{{ url('../themes/inspinia/css/plugins/dualListbox/bootstrap-duallistbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('../themes/inspinia/css/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{url('../themes/inspinia/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">


    <!-- Ladda style -->
    <link href="{{ url('themes/inspinia/css/plugins/ladda/ladda-themeless.min.css') }}" rel="stylesheet">

    <link href="{{ url('themes/inspinia/css/plugins/dataTables/datatables.tribunal.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ url('../css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <script src="{{url('ckeditor/ckeditor.js')}}"></script>
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }

        .filter {
            display: none !important;
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc::after,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc_disabled,
        .table-bordered>thead>tr>th {
            background-color: #115272;
            color: white;
        }
    </style>
</head>

<body>

    <!--<div id="wrapper">-->
    <div id="wrapper" style="background:#115272;">
        @include('layouts.left')
        <div id="page-wrapper" class="gray-bg">
            @include('layouts.top')
            <!--@include('layouts.breadcrumb')-->
            <div class="wrapper wrapper-content animated fadeInRight">
                @if (session()->has('success'))
                <div id="xalert" class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('success'); ?>
                </div>
                @elseif (session()->has('warning'))
                <div id="xalert" class="alert alert-warning alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('warning'); ?>
                </div>
                @elseif (session()->has('alert'))
                <div id="xalert" class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('alert'); ?>
                </div>
                @elseif (session()->has('info'))
                <div id="xalert" class="alert alert-info alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('info'); ?>
                </div>
                @endif

                @yield('content')

            </div>
            @include('layouts.bottom')

        </div>
    </div>
    <script>
        //            setTimeout(function () {
        //                $('#xalert').hide('slow');
        //            }, 5000);
    </script>

    <!-- Mainly scripts -->
    <script src="{{ url('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ url('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('js/store.js') }}"></script>
    <script src="{{ url('js/jquery-idleTimeout.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- HighChart -->
    <script src="{{ url('js/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ url('js/plugins/highcharts/highcharts-3d.js') }}"></script>
    <script src="{{ url('js/plugins/highcharts/modules/exporting.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ url('js/plugins/dataTables/datatables.js') }}"></script>
    <script src="{{ url('js/plugins/dataTables/Buttons-1.4.2/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ url('../themes/ace/js/moment.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/daterangepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-timepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-datetimepicker.js') }}"></script>

    <!-- Dual Listbox -->
    <script src="{{ url('../themes/inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
    <script src="{{ url('../themes/inspinia/js/plugins/select2/select2.full.min.js') }}"></script>

    <!-- Ladda -->
    <script src="{{ url('themes/inspinia/js/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ url('themes/inspinia/js/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ url('themes/inspinia/js/plugins/ladda/ladda.jquery.min.js') }}"></script>

    <!-- Sweet alert -->
    <script src="{{ url('../themes/inspinia/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Idle Timer plugin -->
    <!--<script src="js/plugins/idle-timer/idle-timer.min.js"></script>-->
    <script src="{{ url('themes/inspinia/js/plugins/idle-timer/idle-timer.min.js') }}"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Page-Level Scripts -->
    @yield('script_datatable')

    <!-- Dual List Script-->
    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create("chartdiv", am4charts.XYChart);
            chart.scrollbarX = new am4core.Scrollbar();

            // Add data
            chart.data = [{
                "country": "USA",
                "visits": 3025
            }, {
                "country": "China",
                "visits": 1882
            }, {
                "country": "Japan",
                "visits": 1809
            }, {
                "country": "Germany",
                "visits": 1322
            }, {
                "country": "UK",
                "visits": 1122
            }, {
                "country": "France",
                "visits": 1114
            }, {
                "country": "India",
                "visits": 984
            }, {
                "country": "Spain",
                "visits": 711
            }, {
                "country": "Netherlands",
                "visits": 665
            }, {
                "country": "Russia",
                "visits": 580
            }, {
                "country": "South Korea",
                "visits": 443
            }, {
                "country": "Canada",
                "visits": 441
            }];

            // Create axes
            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "country";
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.renderer.minGridDistance = 30;
            categoryAxis.renderer.labels.template.horizontalCenter = "right";
            categoryAxis.renderer.labels.template.verticalCenter = "middle";
            categoryAxis.renderer.labels.template.rotation = 270;
            categoryAxis.tooltip.disabled = true;
            categoryAxis.renderer.minHeight = 110;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.renderer.minWidth = 50;

            // Create series
            var series = chart.series.push(new am4charts.ColumnSeries());
            series.sequencedInterpolation = true;
            series.dataFields.valueY = "visits";
            series.dataFields.categoryX = "country";
            series.tooltipText = "[{categoryX}: bold]{valueY}[/]";
            series.columns.template.strokeWidth = 0;

            series.tooltip.pointerOrientation = "vertical";

            series.columns.template.column.cornerRadiusTopLeft = 10;
            series.columns.template.column.cornerRadiusTopRight = 10;
            series.columns.template.column.fillOpacity = 0.8;

            // on hover, make corner radiuses bigger
            var hoverState = series.columns.template.column.states.create("hover");
            hoverState.properties.cornerRadiusTopLeft = 0;
            hoverState.properties.cornerRadiusTopRight = 0;
            hoverState.properties.fillOpacity = 1;

            series.columns.template.adapter.add("fill", function(fill, target) {
                return chart.colors.getIndex(target.dataItem.index);
            });

            // Cursor
            chart.cursor = new am4charts.XYCursor();

        }); // end am4core.ready()

        $(document).ready(function() {

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            })
            $(document).idleTimer(1200000)
            $('.demo1').click(function() {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function() {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
        })
        $(document).on('idle.idleTimer', function(event, elem, obj) {
            swal({
                    title: 'Peringatan',
                    text: 'Kerana anda tidak aktif menggunakan sistem, sesi anda akan tamat.',
                    type: 'warning',
                    timer: 600000,
                    showCancelButton: true,
                    cancelButtonText: 'Kekal Di Log Masuk',
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Log Keluar'
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location = '/authlogout'
                    } else {
                        window.location = ''
                    }
                })
        })
    </script>

    <style>
        body.DTTT_Print {
            background: #fff;

        }

        .DTTT_Print #page-wrapper {
            margin: 0;
            background: #fff;
        }

        button.DTTT_button,
        div.DTTT_button,
        a.DTTT_button {
            border: 1px solid #e7eaec;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }

        button.DTTT_button:hover,
        div.DTTT_button:hover,
        a.DTTT_button:hover {
            border: 1px solid #d2d2d2;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }

        .dataTables_filter label {
            margin-right: 5px;

        }

        label.required:after {
            color: #cc0000;
            content: "*";
            font-weight: bold;
            margin-left: 5px;
        }

        label.required1:after {
            color: #cc0000;
            content: "**";
            font-weight: bold;
            margin-left: 5px;
        }

        #idletimer_warning_dialog {
            background-color: white;
        }

        .ui-dialog-buttonset {
            background-color: white;
            text-align: center;
        }
    </style>
</body>

</html>