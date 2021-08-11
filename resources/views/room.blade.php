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
                            <input type="text" placeholder="No telefon" class="form-control" name="phone">
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
                            <th>Tarikh</th>
                            <th>Bot aktif</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($biliks as $bilik)

                        <tr>
                            <td>{{$bilik['phone']}}</td>
                            <td>{{$bilik['name']}}</td>
                            <td>{{$bilik['updated_at']}}</td>
                            <td>
                                @if($bilik['active']) 
                                    Ya <a href="/room/{{$bilik['id']}}/aktif">Nyahaktif bot?</a>
                                @else
                                    Tidak <a href="/room/{{$bilik['id']}}/aktif">Aktifkan bot?</a>
                                @endif
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