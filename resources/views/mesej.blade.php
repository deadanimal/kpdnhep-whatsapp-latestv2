@extends('layouts.main')
<style>
    .hide {
        display: none;
    }
</style>
@section('content')
<div class="row">
    <div class="col-lg-4">
        <a href="/aktif">
    <button class="btn btn-success">Aktif <i class="fa fa-bell" aria-hidden="true"></i></button>
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
            <form action="/hantarrr/{{$rooms['id']}}" method="POST">
                @csrf
                <select id="template" class="form-control" onchange="malas()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>Template 1</option>
                    <option value=2>Template 2</option>
                    <option value=3>Template 3</option>
                    <option value=4>Template 4</option>
                    <option value=5>Agensi</option>
                    <option value=6>Pertanyaan/Cadangan</option>
                </select>
                <select id="templatela" class="form-control hide" onchange="malasla()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>MyIPO - Perbadanan Harga Intelek Malaysia</option>
                    <option value=2>MYCC - Suruhanjaya Persaingan Malaysia</option>
                    <option value=3>SSM - Suruhanjaya Syarikat Malaysia</option>
                </select>
                <select id="pertanyaan" class="form-control hide" onchange="subpertanyaan()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>Isu Senarai Harga</option>
                    <option value=2>Isu Data Peribadi</option>
                    <option value=3>Status Aduan</option>
                </select>
                <select id="pertanyaan" class="form-control hide" onchange="subpertanyaan()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>Isu Senarai Harga</option>
                    <option value=2>Isu Data Peribadi</option>
                    <option value=3>Status Aduan</option>
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

        if (x.value != 5) {
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

        } else if (x.value == 6) {
            // document.getElementById('templatela').style.display = "show";
            document.getElementById("pertanyaan").className = "form-control";

        }
        console.log(x.value)
    }

    function malasla() {
        var x = document.getElementById("templatela");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa  *PERBADANAN HARTA INTELEK MALAYSIA* http://www.myipo.gov.my/en/contact/?lang=en Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih KPDNHEP #myipo';
        } else if (x.value == 2) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa *SURUHANJAYA PERSAINGAN MALAYSIA* http://www.mycc.gov.my/contact-us Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih KPDNHEP #mycc';
        } else if (x.value == 3) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa *SURUHANJAYA SYARIKAT MALAYSIA* http://www.ssm.com.my/Pages/contact-us.aspx Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih KPDNHEP #ssm';
        }
        console.log(x.value)
    }

    function subpertanyaan() {
        var x = document.getElementById("pertanyaan");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = '_ISU SENARAI HARGA_ Tuan/ Puan, Terima kasih kerana menghubungi KPDNHEP, Bagi membuat semakan dan perbandingan barangan terpilih, tuan/puan bolehlah memuat turun aplikasi *Price catcher* di Google Play/App Store. Jadilah pengguna yang bijak dengan membuat pilihan yang tepat. Sekian, terima kasih #harga';
        } else if (x.value == 2) {
            y.value = 'Pihak Kementerian sangat menghargai keprihatinan Tuan/Puan untuk menegakkan *hak-hak pengguna* dan mengambil perhatian atas kesulitan yang berlaku. Untuk maklumat Tuan/Puan, pada lampiran muka surat 15 (http://www.pdp.gov.my/index.php/en/akta-709/akta-perlindungan-data-peribadi-2010) , data Tuan/Puan adalah diamanahkan untuk dilindungi dan tertakluk di bawah akta tersebut. Untuk makluman jua, maklumat lengkap diperlukan untuk menjaga integriti data dan memudahkan tindakan penguatkuasaan. Sehubungan itu, sila lengkap kan butiran berikut : a) Nama (Nama Penuh Mengikut K/P) b) No.K/P (Sila Nyatakan No K/P Yang Sah) c) Alamat surat menyurat d) No telefon untuk dihubungi e) Email (Sekiranya ada) f) Nama Premis g) Alamat Premis (Sila Nyatakan Alamat Lengkap Termasuk Daerah) h) Keterangan Aduan i) Gambar Bukti (Sekiranya Ada) j) Sekiranya Aduan Berkenaan Transaksi Atas Talian Mohon Kemukakan Nama Bank Dan No Akaun Bank / No Transaksi FPX Yang Terlibat Diharapkan agar isu tersebut akan diambil tindakan yang tepat. Terima kasih. - KPDNHEP #pdpa';
        } else if (x.value == 3) {
            y.value = 'Tuan/Puan, Aduan tersebut masih dalam siasatan. Sebarang pertanyaan boleh dirujuk kepada Pegawai Penyiasat yang bertanggungjawab menjalankan siasatan ke atas aduan tuan. Pegawai Penyiasat : xxx, No.Telefon : xxx, E-mel : xxx. #status';
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