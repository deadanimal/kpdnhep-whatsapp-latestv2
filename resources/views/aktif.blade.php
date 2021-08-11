@extends('layouts.main')
@section('content')
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
                            <th>Tarikh</th>
                            <!-- <th>Bot aktif</th> -->
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($biliks as $bilik)

                        <tr>
                            <td>{{$bilik['phone']}}</td>
                            <td>{{$bilik['name']}}</td>
                            <td>{{$bilik['last_message']}}</td>
                            <td>{{$bilik['updated_at']}}</td>
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