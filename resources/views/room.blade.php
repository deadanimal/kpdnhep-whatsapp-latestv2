@extends('layouts.main')
@section('content')
<h1>Senarai maklumbalas</h1>
<div class="row">
    <div class="col">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Tapisan</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <form action="/cari" method="POST">
                        @csrf
                        <div class="col-lg-2">
                            <input type="date" class="form-control" placeholder="Tarikh" name="tarikh">
                        </div>
                        <div class="col-lg-2">
                            <input type="text" placeholder="No telefon" class="form-control" name="notelefon">
                        </div>
                        <div class="col-lg-2">
                            <input type="text" placeholder="Pegawai" class="form-control" name="pegawai">
                        </div>
                        <div class="col-lg-2">
                            <input type="text" placeholder="No aduan" class="form-control" name="noaduan">
                        </div>
                        <div class="col-lg-2">
                            <input type="text" placeholder="Nama pengadu" class="form-control" name="namapengadu">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-w-m btn-success">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="ibox ">
            <div class="ibox-content">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Tarikh</th>
                            <th>No telefon</th>
                            <th>Pegawai</th>
                            <th>No aduan</th>
                            <th>Nama pengadu</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->tarikh}}</td>
                            <td>{{$room->notelefon}}</td>
                            <td>
                                @if ($room->pegawai == null)
                                <span class="text-danger">TIADA</span>
                                @else
                                {{$room->pegawai}}
                                @endif
                            </td>
                            <td>{{$room->noaduan}}</td>
                            <td>{{$room->namapengadu}}</td>
                            <td class="text-center">
                                <a href="/hantar/{{$room->id}}">
                                    <button class="btn btn-success">Papar mesej</button>
                                </a>
                                <!-- <button class="btn btn-success" type="button" href="/hantar/{{$room->id}}">Maklumbalas</button> -->
                                <!-- <a href="/hantar/{{$room->id}}"><i class="fa fa-arrow-circle-o-right"></i></a> -->
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