@extends('layouts.main')
<style>
    .hide {
        display: none;
    }
</style>
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
            <button class="btn btn-default btn-block" style="height:120px; border-radius: 12px;">
                <h1>Tugasan <i class="fa fa-tasks" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="/room">
            <button class="btn btn-default btn-block" style="height:120px; border-radius: 12px;">
                <h1>Semua <i class="fa fa-circle-o-notch" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-8">

        <div class="ibox chat-view">
            <div class="chat-discussion">
                @foreach($mesejs as $mesej)
                @if ($mesej['direction'] == "receive")
                <div class="chat-message left">
                    <div class="message">
                        <a class="message-author" href="#"> {{$rooms['name']}} </a>
                        <span class="message-date">{{$mesej['created_at']}}</span>
                        <span class="message-content">
                            {{$mesej['message_text']}}
                        </span>
                    </div>
                </div>
                @else
                <div class="chat-message right">
                    <div class="message">
                        <a class="message-author" href="#"> Pegawai </a>
                        <span class="message-date"> {{$mesej['created_at']}} </span>
                        <span class="message-content">
                            {{$mesej['message_text']}}
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="form-group text-right">
            @if(Auth::user()->role_code == 1)
                @if ($rooms['officer_name'] == "Tiada")
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button>
                    
                </form>
                @elseif ($rooms['officer_name'] == null)
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button> 
                </form>
                @else
                <form action="/room/{{$rooms['id']}}/officer_buang" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-danger">Buang tugas</button>
                    
                </form>
                @endif
            @elseif(Auth::user()->role_code == 2)
                @if ($rooms['officer_name'] == "Tiada")
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button>
                    
                </form>
                @elseif ($rooms['officer_name'] == null)
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button> 
                </form>
                @else
                <form action="/room/{{$rooms['id']}}/officer_buang" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-danger">Buang tugas</button>
                    
                </form>
                @endif
            @elseif(Auth::user()->role_code == 3)
                @if ($rooms['officer_name'] == "Tiada")
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button>
                    
                </form>
                @elseif ($rooms['officer_name'] == null)
                <form action="/room/{{$rooms['id']}}/officer" method="POST">
                    @csrf
                    <a href="/aktif" class="btn btn-success">Kembali</a>

                    <button type="submit" class="btn btn-primary">Tambah tugas</button> 
                </form>
                @else
                    @if($rooms['officer_name'] == Auth::user()->name)
                    <form action="/room/{{$rooms['id']}}/officer_buang" method="POST">
                        @csrf
                        <a href="/aktif" class="btn btn-success">Kembali</a>

                        <button type="submit" class="btn btn-danger">Buang tugas</button>
                        
                    </form>
                    @else
                    <a href="/aktif" class="btn btn-success">Kembali</a>
                    @endif
                @endif
            @endif
        </div>

    </div>

    <div class="col-lg-4">

        <div class="ibox">

            <div class="ibox-title text-center">
                <h1>{{$rooms['name']}}</h1>
                <h3>{{$rooms['phone']}}</h3>
            </div>

        </div>

    </div>
</div>
@stop