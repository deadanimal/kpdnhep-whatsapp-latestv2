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
                            <input type="text" placeholder="Pegawai" class="form-control" name="name">
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
                            <th>No telefon</th>
                            <th>Nama</th>
                            <th>Mesej terakhir</th>
                            <th>Tarikh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($biliks as $bilik)

                        <tr>
                            <td>{{$bilik['phone']}}</td>
                            <td>{{$bilik['name']}}</td>
                            <td>{{$bilik['last_message']}}</td>
                            <td>{{$bilik['updated_at']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@stop