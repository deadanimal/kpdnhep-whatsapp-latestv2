@extends('layouts.main')
@section('content')
<div class="row" style="margin-bottom: 30px;">
    <div class="col-lg-4">
        <a href="/aktif">
            <button class="btn btn-success btn-block" style="height:120px; border-radius: 12px;">
                <h1>Aktif <i class="fa fa-bell" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="/tugasans">
            <button class="btn btn-success btn-block" style="height:120px; border-radius: 12px;">
                <h1>Tugasan <i class="fa fa-tasks" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="/room">
            <button class="btn btn-success btn-block" style="height:120px; border-radius: 12px;">
                <h1>Semua <i class="fa fa-circle-o-notch" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
</div>
<h1>Senarai maklumbalas aktif</h1>
<div class="row">
    <div class="col">
        <div class="ibox ">
            <div class="ibox-content">

                <table class="table">
                    <thead>
                        <tr>
                            <th>No telefon</th>
                            <th>Nama</th>
                            <th>Mesej terakhir</th>
                            <th>Tarikh Mula</th>
                            <th>Pegawai</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($biliks as $bilik)
                        <tr>
                            <td>{{$bilik['phone']}}</td>
                            <td>{{$bilik['name']}}</td>
                            <td>{{ date('d-m-Y h:m:s', strtotime($bilik['updated_at'])) }}</td>
                            <td>{{ date('d-m-Y h:m:s', strtotime($bilik['created_at'])) }}</td>
                            <td>
                                @if($bilik['officer_name'] != "Najhan")
                                Tiada
                                @else
                                {{$bilik['officer_name']}}
                                @endif
                            </td>
                            <!-- <td>
                                @if($bilik['active']) 
                                    Ya <a href="/room/{{$bilik['id']}}/aktif">Nyahaktif bot?</a>
                                @else
                                    Tidak <a href="/room/{{$bilik['id']}}/aktif">Aktifkan bot?</a>
                                @endif
                            </td> -->
                            <td>
                                <a href="/hantaraktif/{{$bilik['id']}}">
                                    <button class="btn btn-success">Papar</button>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@stop