@extends('layouts.main')
<style>
    #chartdiv {
        width: 100%;
        height: 500px;
    }
</style>
@section('content')
<div class="row wrapper border-bottom white-bg page-heading mb-4">
    <div class="col-lg-10">
        <h2>Laporan Statistik Bulanan </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <strong>Maklumbalas Melalui Aplikasi Whatsapp</strong>
            </li>
        </ol>
    </div>
</div>
<div class="row text-center">
    <div class="col">
        <div class="ibox">
            <div class="ibox-content">
                <div class="form-group row">
                    <form action="/jananik" method="POST">
                        @csrf
                        <div class="col-lg-2">
                            <label class=" col-form-label">Pilih Tahun</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control m-b" name="tahun">
                                <option value="1">Sila pilih tahun</option>
                                <option value="2020" selected>2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" type="submit">Jana</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<h3>2020 Laporan Bulanan</h3>

<div class="ibox">
    <div class="ibox-content">
        <table id="example" class="display nowrap" style="width:50%">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mac</th>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Ogos</th>
                    <th>Sept</th>
                    <th>Okt</th>
                    <th>Nov</th>
                    <th>Dis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Agensi kpdnhep</td>
                    <td>447</td>
                    <td>254</td>
                    <td>247</td>
                    <td>323</td>
                    <td>247</td>
                    <td>200</td>
                    <td>204</td>
                    <td>216</td>
                    <td>184</td>
                    <td>193</td>
                    <td>152</td>
                    <td>115</td>
                </tr>
                <tr>
                    <td>BNM</td>
                    <td>15</td>
                    <td>9</td>
                    <td>8</td>
                    <td>11</td>
                    <td>7</td>
                    <td>2</td>
                    <td>10</td>
                    <td>1</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>CFM</td>
                    <td>15</td>
                    <td>9</td>
                    <td>8</td>
                    <td>11</td>
                    <td>7</td>
                    <td>2</td>
                    <td>10</td>
                    <td>1</td>
                    <td>6</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="ibox">
    <div class="ibox-content">
        <div id="chartdiv"></div>
    </div>
</div>

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
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

        // Create chart instance
        var chart = am4core.create("chartdiv", am4charts.PieChart);

        // Set data
        var selected;
        var types = [
            {
                type: "Januari",
                percent: 70,
                color: chart.colors.getIndex(0),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Februari",
                percent: 70,
                color: chart.colors.getIndex(1),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Mac",
                percent: 70,
                color: chart.colors.getIndex(3),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "April",
                percent: 70,
                color: chart.colors.getIndex(5),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Mei",
                percent: 70,
                color: chart.colors.getIndex(7),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Jun",
                percent: 70,
                color: chart.colors.getIndex(9),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Julai",
                percent: 70,
                color: chart.colors.getIndex(11),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Ogos",
                percent: 70,
                color: chart.colors.getIndex(2),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "September",
                percent: 70,
                color: chart.colors.getIndex(4),
                subs: [{
                    type: "Oil",
                    percent: 15
                }, {
                    type: "Coal",
                    percent: 35
                }, {
                    type: "Nuclear",
                    percent: 20
                }]
            },
            {
                type: "Oktober",
                percent: 30,
                color: chart.colors.getIndex(6),
                subs: [{
                    type: "Hydro",
                    percent: 15
                }, {
                    type: "Wind",
                    percent: 10
                }, {
                    type: "Other",
                    percent: 5
                }]
            },
            {
                type: "November",
                percent: 30,
                color: chart.colors.getIndex(10),
                subs: [{
                    type: "Hydro",
                    percent: 15
                }, {
                    type: "Wind",
                    percent: 10
                }, {
                    type: "Other",
                    percent: 5
                }]
            },
            {
                type: "Disember",
                percent: 30,
                color: chart.colors.getIndex(8),
                subs: [{
                    type: "Hydro",
                    percent: 15
                }, {
                    type: "Wind",
                    percent: 10
                }, {
                    type: "Other",
                    percent: 5
                }]
            }
        ];

        // Add data
        chart.data = generateChartData();

        // Add and configure Series
        var pieSeries = chart.series.push(new am4charts.PieSeries());
        pieSeries.dataFields.value = "percent";
        pieSeries.dataFields.category = "type";
        pieSeries.slices.template.propertyFields.fill = "color";
        pieSeries.slices.template.propertyFields.isActive = "pulled";
        pieSeries.slices.template.strokeWidth = 0;

        function generateChartData() {
            var chartData = [];
            for (var i = 0; i < types.length; i++) {
                if (i == selected) {
                    for (var x = 0; x < types[i].subs.length; x++) {
                        chartData.push({
                            type: types[i].subs[x].type,
                            percent: types[i].subs[x].percent,
                            color: types[i].color,
                            pulled: true
                        });
                    }
                } else {
                    chartData.push({
                        type: types[i].type,
                        percent: types[i].percent,
                        color: types[i].color,
                        id: i
                    });
                }
            }
            return chartData;
        }

        pieSeries.slices.template.events.on("hit", function(event) {
            if (event.target.dataItem.dataContext.id != undefined) {
                selected = event.target.dataItem.dataContext.id;
            } else {
                selected = undefined;
            }
            chart.data = generateChartData();
        });

    }); // end am4core.ready()
</script>