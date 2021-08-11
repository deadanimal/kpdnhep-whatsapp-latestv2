@extends('layouts.main')
@section('content')
<h1>Senarai maklumbalas</h1>

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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($biliks as $bilik)

                        <tr>
                            <td>{{$bilik['phone']}}</td>
                            <td>{{$bilik['name']}}</td>
                            <td>{{$bilik['last_message']}}</td>
                            <td>{{$bilik['updated_at']}}</td>
                            <td>
                                <a href="/hantar/{{$bilik['id']}}">
                                    <button class="btn btn-success">Kemaskini maklumbalas</button>
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