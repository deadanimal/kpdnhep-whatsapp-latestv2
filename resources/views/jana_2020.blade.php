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
                    <form action="/jana" method="POST">
                        @csrf
                        <div class="col-lg-2">
                            <label class=" col-form-label">Pilih Tahun</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control m-b" name="tahun">
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

<div class="row">
    <div class="col">
        <div class="ibox-content">
            <div class="row">
                <div class="col-lg-10">
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
            <table class="table">
                <thead>
                    <tr>
                        <!-- @foreach ($laporanbulanans as $laporanbulanan) -->
                        
                        <!-- <th></th> -->
                        <!-- @endforeach -->
                    </tr>
                </thead>
                <tbody>
                    <!-- @foreach ($laporanbulanans as $laporanbulanan) -->
                    <tr>
                        <td>{{$laporanbulanans->agensi[0]}}</td>
                        <!-- <td>{{$laporanbulanan->nama}}</td>
                        <td>{{$laporanbulanan->bulan}}</td> -->
                    </tr>
                    <!-- @endforeach -->
                </tbody>
            </table>


        </div>
    </div>
</div>


@stop