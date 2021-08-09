@extends('layouts.main')
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
                    <form action="/showstat">
                        @csrf
                        <div class="col-lg-2">
                            <label class=" col-form-label">Pilih Tahun</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control m-b" name="tahun">
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
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
@foreach ($laporanbulanans as $laporanbulanan)
@if($laporanbulanan->tahun != null)
<div class="row">
    <div class="col">
        <div class="ibox-content">
            <div class="row">
                <div class="col-lg-10">
                    <h1>{{$laporanbulanan->tahun}}</h1>
                    <h2>198 009</h2>
                </div>
                <div class="col-lg-2">
                    <div class="html5buttons">
                        <div class="dt-buttons btn-group flex-wrap">
                            <button class="btn btn-white btn-sm buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>CSV</span>
                            </button>
                            <button class="btn btn-white btn-sm buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>Excel</span>
                            </button>
                            <button class="btn btn-white btn-sm buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                <span>PDF</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="chartdiv"></div>
        </div>
    </div>
</div>
@endif
@endforeach

@stop
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>


<style>
    .dt-bootstrap4 .form-control-sm {
        height: 29px !important;
        padding: 2px 10px;
    }
</style>

<script>
    // Upgrade button class name
    $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

    $(document).ready(function() {
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [{
                    extend: 'copy'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-white'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile',
                    className: 'btn btn-white'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn btn-white'
                },

                {
                    extend: 'print',
                    className: 'btn btn-white',
                    customize: function(win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });
</script>