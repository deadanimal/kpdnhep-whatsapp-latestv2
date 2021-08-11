@extends('layouts.main')
<style>
    .hide {
        display: none;
    }
</style>
@section('content')
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
            <form action="/hantarrr/{{$rooms['id']}}" method="POST">
                @csrf
                <select id="template" class="form-control" onchange="malas()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>Template 1</option>
                    <option value=2>Template 2</option>
                    <option value=3>Template 3</option>
                    <option value=4>Template 4</option>
                    <option value=5>Hide -> Show</option>
                </select>
                <select id="templatela" class="form-control hide" onchange="malasla()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>Template 1</option>
                    <option value=2>Template 2</option>
                    <option value=3>Template 3</option>
                    <option value=4>Template 4</option>
                </select>                
                <!-- <div class="hide" id="hiden_div_catatan">
                    <h1>test</h1>
                </div>
                <div class="hide" id="pentadbir">
                    <h1>test2</h1>
                </div> -->
                <textarea class="form-control message-input" id="chatbox" name="hantar" placeholder="Enter message text"></textarea>
                <button class="btn btn-primary" type="submit">Hantar</button>
                <div class="hide" id="hidden_div_catatan">
                    <h1>test</h1>
                </div>
                <div class="hide" id="hidden_div_pentadbir">
                    <h1>test2</h1>
                </div>
            </form>
        </div>

    </div>
</div>
@stop

<script type="text/javascript">


    function malas() {
        var x = document.getElementById("template");
        var y = document.getElementById("chatbox");

        if(x.value != 5) {
            document.getElementById("templatela").className = "form-control hide";
        }

        if (x.value == 1) {
            y.value = 'saya malas nak tulis';
        } else if (x.value == 2) {
            y.value = '22 malas nak tulis';
        } else if (x.value == 3) {
            y.value = '33 malas nak tulis';
        } else if (x.value == 4) {
            y.value = '33 malas nak tulis';
        } else if (x.value == 5) {
            // document.getElementById('templatela').style.display = "show";
            document.getElementById("templatela").className = "form-control";

        }        
        console.log(x.value)
    }

    function malasla() {
        var x = document.getElementById("templatela");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = '11nak tulis';
        } else if (x.value == 2) {
            y.value = '12k tulis';
        } else if (x.value == 3) {
            y.value = '13k tulis';
        } else if (x.value == 4) {
            y.value = '14k tulis';
        }    
        console.log(x.value)
    }    

    function showDiv(select) {
        if (select.value == 0) {
            document.getElementById('hidden_div_catatan').style.display = "block";
            document.getElementById('hidden_div_pentadbir').style.display = "none";
        } else if (select.value == 1) {
            document.getElementById('hidden_div_catatan').style.display = "none";
            document.getElementById('hidden_div_pentadbir').style.display = "block";
        }
    }

    
</script>