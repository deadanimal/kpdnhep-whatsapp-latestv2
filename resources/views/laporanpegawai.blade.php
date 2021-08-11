@extends('layouts.main')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading mb-4">
    <div class="col-lg-10">
        <h2>Laporan Statistik Kecekapan Pegawai Pengurusan Maklumat Aplikasi Whatsapp </h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="ibox">
            <div class="ibox-content">
                <div class="form-group row">
                    <form action="/hantaq" method="POST">
                        @csrf
                        <div class="form-group">
                                <label class="col-form-label">Jarak masa</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="date" class="form-control-sm form-control" name="start" value="05/01/2021"/>
                                    <span class="input-group-addon">hingga</span>
                                    <input type="date" class="form-control-sm form-control" name="end" value="05/07/2021" />
                                </div>
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

@if ($start && $end)
<div class="row">
    <div class="col">
        <div class="ibox">
            <div class="ibox-content">
                <table>
                    <th>{{$start}}</th>
                    <th>{{$end}}</th>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
@stop
