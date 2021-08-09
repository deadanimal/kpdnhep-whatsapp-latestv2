@extends('layouts.main')
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-lg-8">
        <div class="ibox chat-view">
            <div class="chat-discussion">
                <div class="chat-message left">
                    <div class="message">
                        <a class="message-author" href="#"> {{$room_selected->namapengadu}} </a>
                        <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                        <span class="message-content">
                            Hello
                        </span>
                    </div>
                </div>
                @if ($room_selected->pegawai != null)
                @foreach($mesejs as $mesej)
                <div class="chat-message right">
                    <div class="message">
                        <a class="message-author" href="#"> {{$room_selected->pegawai}} </a>
                        <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                        <span class="message-content">
                            {{$mesej->chat}}
                        </span>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            @if ($room_selected->pegawai != null)
            <div class="form-group text-right">
                <form action="/mesej" method="POST">
                @csrf
                    <textarea class="form-control message-input" name="chat" placeholder="Enter message text"></textarea>
                    <button class="btn btn-primary" type="submit">Hantar</button>
                </form>
            </div>
            @endif
        </div>
        @if ($room_selected->pegawai == null)
        <a class="btn btn-primary btn-rounded btn-block" href="/terimakerja/{{$room_selected->id}}"><i class="fa fa-info-circle"></i> Tambang tugasan</a>
        @else
        <a class="btn btn-danger btn-rounded btn-block" href="/buangkerja/{{$room_selected->id}}"><i class="fa fa-info-circle"></i> Buang tugasan</a>
        @endif
    </div>
    <div class="col-lg-4">
        <div class="ibox-content">
            <ul class="list-group clear-list m-t">
                <li class="list-group-item fist-item text-center">
                    <img alt="image" class="img-circle" src="{{ url('img/default.jpg') }}" style="width: 50%" />
                    <h1>{{$room_selected->notelefon}}</h1>
                    <h3>Aktif 4 minit lepas</h3>
                </li>
                <!-- <li class="list-group-item ">
                    <h1>Fail dikongsi</h1>
                </li> -->
            </ul>

        </div>
    </div>
</div>
@stop