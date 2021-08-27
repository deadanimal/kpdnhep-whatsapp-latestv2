@extends('layouts.main')
<style>
    /* #chartdiv1 {
        width: 100%;
        height: 500px;
    }
    #chartdiv2 {
        width: 100%;
        height: 500px;
    } */
    .hide {
        display: none;
    }
</style>
@section('content')
<div class="row wrapper border-bottom white-bg page-heading mb-4">
    <div class="col-lg-10">
        <h2>Laporan Statistik Kecekapan Pegawai Pengurusan Maklumat Aplikasi Whatsapp </h2>
    </div>
</div>
<div class="row text-center">
    <div class="col">
        <div class="ibox">
            <div class="ibox-content">
                <form action="/hantaq" method="POST">
                    <div class="form-group row">

                        @csrf
                        <div class="col-lg-2">
                            <label class=" col-form-label">Pilih tarikh</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="date" class="form-control-sm form-control" name="start" value="08/12/2021" />
                                <span class="input-group-addon">hingga</span>
                                <input type="date" class="form-control-sm form-control" name="end" value="08/12/2021" />
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col" style="margin-right: 30px;">
                            <button class="btn btn-primary" type="submit">Jana</button>
                            <a href="/laporanpegawai"><button class="btn btn-success">Semula</button></a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@if ($start)

<div class="ibox">
    <div class="ibox-content">
        <h3 class="text-center">Laporan Statistik Kecekapan Pegawai dari {{$start}} hingga {{$end}}.</h3>
        <table id="example1" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nama pegawai</th>
                    <th>Jumlah maklumbalas (tutup)</th>
                    <th>Jumlah aduan dicipta</th>
                    <th>Jumlah keseluruhan</th>
                    <th>Peratusan (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A. Johan Bin Ag Othman</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Abd. Aziz Bin Slamin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Adibah Binti Jalaluddin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Afidah Binti Asmat</td>
                    <td>0</td>
                    <td>320</td>
                    <td>320</td>
                    <td>8.23</td>
                </tr>
                <tr>
                    <td>Ahmad Afiq Bin Ahmad Radzi</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Ahmad Khuzairi Bin Salamat</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Al-nurhisyam Bin Ahamad</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Muhammad Syahir Husin Bin Haji Rusfan</td>
                    <td>0</td>
                    <td>728</td>
                    <td>728</td>
                    <td>18.61</td>
                </tr>
                <tr>
                    <td>Ngelingkong Anak Kusa</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Norafida Binti Bulat</td>
                    <td>0</td>
                    <td>3</td>
                    <td>3</td>
                    <td>0.08</td>
                </tr>
                <tr>
                    <td>Norazlina Binti Yaakob</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Nur Awanis Binti Katabe</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Sakima Binti Shaharudin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Sayed Mohd Nizam Bin Sayed Zahari</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Suriana Binti Isa</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Syazana Masturah Binti Othman</td>
                    <td>0</td>
                    <td>143</td>
                    <td>143</td>
                    <td>3.66</td>
                </tr>
                <tr>
                    <td>Tuan Mohd Asyraf Bin Tuan Loseng</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Uppk3-mohamed Farhan Bin Mohamed Shafiee</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Uppk4-ruslan Bin Shamsudin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Wan Asrul Effendi Bin Wan Mahmood</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Zainal Abidin Bin Ahmad</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Zaini Bin Zamri</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Zareena Binti Radin @ Saradin</td>
                    <td>0</td>
                    <td>6</td>
                    <td>6</td>
                    <td>0.15</td>
                </tr>
                <tr>
                    <td>Zulfitri A'zim Bin Zohari</td>
                    <td>0</td>
                    <td>577</td>
                    <td>577</td>
                    <td>14.75</td>
                </tr>
                <tr>
                    <td>Zulia Binti Mat Yusof</td>
                    <td>0</td>
                    <td>4</td>
                    <td>4</td>
                    <td>0.10</td>
                </tr>
                <tr>
                    <td>Zuraini Binti Yusoff</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>Jumlah</th>
                    <th>0</th>
                    <th>3912</th>
                    <th>3912</th>
                    <th>100.00</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
</div>

<div class="ibox">
    <div class="ibox-content">
        <div class="row">
            <div class="col">
                <select id="template" class="form-control" onchange="tunjukchart()">
                    <option value=1 selected>Jumlah Maklumbalas (tutup)</option>
                    <option value=2>Jumlah aduan dicipta</option>
                </select>

                <div class="chart m-lg" id="chart1">
                    <h3 class="text-center">Jumlah maklumbalas (tutup)</h3>
                    <div class="amchart" id="chartdiv1"></div>
                </div>

                <div class="chart m-lg hide " id="chart2">
                    <h3 class="text-center">Jumlah aduan dicipta</h3>
                    <div class="amchart" id="chartdiv2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@stop

<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {


        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                extend: 'copy',
                title: ''
                },
                {
                extend: 'csv',
                title: ''
                },
                {
                extend: 'excel',
                title: ''
                },
                {
                extend: 'pdf',
                title: ''
                },
                {
                extend: 'print',
                title: ''
                }
            ]
        });
    });

    $('g:has(> g[stroke="#3cabff"])').hide();
</script>

<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script type="text/javascript">
function tunjukchart(){
    var x = document.getElementById("template");

    if(x.value == 1){
        document.getElementById("chart1").className = "chart";
        document.getElementById("chart2").className = "chart hide";
    }else{
        document.getElementById("chart1").className = "chart hide";
        document.getElementById("chart2").className = "chart";
    }
}
</script>

<!-- chart -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        am4core.addLicense("ch-custom-attribution");
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv1", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

        // Add data
        chart.data = [{
            "country": "A. Johan Bin Ag Othman",
            "visits": 0
        }, {
            "country": "Abd. Aziz Bin Slamin",
            "visits": 0
        }, {
            "country": "Adibah Binti Jalaluddin",
            "visits": 0
        }, {
            "country": "Afidah Binti Asmat",
            "visits": 0
        }, {
            "country": "Ahmad Afiq Bin Ahmad Radzi",
            "visits": 0
        }, {
            "country": "Ahmad Khuzairi Bin Salamat",
            "visits": 0
        }, {
            "country": "Al-nurhisyam Bin Ahamad",
            "visits": 0
        }, {
            "country": "Muhammad Syahir Husin Bin Haji Rusfan",
            "visits": 0
        }, {
            "country": "Ngelingkong Anak Kusa",
            "visits": 0
        }, {
            "country": "Norafida Binti Bulat",
            "visits": 0
        }, {
            "country": "Norazlina Binti Yaakob",
            "visits": 0
        }, {
            "country": "Nur Awanis Binti Katabe",
            "visits": 0
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
</script>

<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        am4core.addLicense("ch-custom-attribution");
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv2", am4charts.XYChart);
        chart.scrollbarX = new am4core.Scrollbar();

        // Add data
        chart.data = [{
            "country": "A. Johan Bin Ag Othman",
            "visits": 711
        }, {
            "country": "Abd. Aziz Bin Slamin",
            "visits": 1882
        }, {
            "country": "Adibah Binti Jalaluddin",
            "visits": 1809
        }, {
            "country": "Afidah Binti Asmat",
            "visits": 3025
        }, {
            "country": "Ahmad Afiq Bin Ahmad Radzi",
            "visits": 1122
        }, {
            "country": "Ahmad Khuzairi Bin Salamat",
            "visits": 1114
        }, {
            "country": "Al-nurhisyam Bin Ahamad",
            "visits": 984
        }, {
            "country": "Muhammad Syahir Husin Bin Haji Rusfan",
            "visits": 1322
        }, {
            "country": "Ngelingkong Anak Kusa",
            "visits": 665
        }, {
            "country": "Norafida Binti Bulat",
            "visits": 580
        }, {
            "country": "Norazlina Binti Yaakob",
            "visits": 443
        }, {
            "country": "Nur Awanis Binti Katabe",
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

    chart.exporting.events.on("exportfinished", function(ev) {
        watermark.disabled = true;
    });
</script>