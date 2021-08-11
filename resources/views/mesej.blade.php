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
                <select name="status" class="form-control" onchange="showDiv(this)">
                    <option value="0">Test</option>
                    <option value="1">Test1</option>
                </select>
                <div class="hide" id="hiden_div_catatan">
                    <h1>test</h1>
                </div>
                <div class="hide" id="pentadbir">
                    <h1>test2</h1>
                </div>
                <textarea class="form-control message-input" name="hantar" placeholder="Enter message text"></textarea>
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