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
            <button class="btn btn-default btn-block" style="height:120px; border-radius: 12px;">
                <h1>Aktif <i class="fa fa-bell" aria-hidden="true"></i></h1>
            </button>
        </a>
    </div>
    <div class="col-lg-4">
        <a href="/tugasans">
            <button class="btn btn-success btn-block" style="height:120px; border-radius: 12px;">
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
<div class="row d-flex justify-content-center mt-3">
    <div class="col-lg-8 mt-3">

        <div class="ibox chat-view">
            <div class="chat-discussion">
                @foreach($mesejs as $key=>$mesej)
                @if ($mesej['direction'] == "receive")

                <div class="chat-message left">
                    <div class="message">
                        <a class="message-author" href="#"> {{$room['name']}} </a>
                        <span class="message-date">{{date('d-m-Y h:m:s', strtotime($room['created_at']))}}</span>
                        <span class="message-content">
                            {{$mesej['message_text']}}
                        </span>
                        @if($mesej['media_url'] != null)
                        <span class="message-content">
                            <img src="{{$mesej['media_url']}}" alt="testing" style="max-width: 500px;">
                        </span>
                        <span class="message-content">
                            <a href="{{$mesej['media_url']}}">Buka lampiran</a>
                        </span>
                        @endif
                    </div>
                    <!-- {{$mesej['message_type']}} -->
                    <!-- <input id="adu" type="checkbox" value="{{$mesej['id']}}" onchange="nomboradu()"> -->
                    <a href="/potong/{{$room['id']}}/{{ $key }}">
                        <button class="btn btn-warning btn-sm">Cipta aduan</button>
                    </a>

                </div>
                @else
                <div class="chat-message right">
                    <div class="message">
                        <a class="message-author" href="#"> {{Auth::user()->name}} </a>
                        <span class="message-date"> {{date('d-m-Y h:m:s', strtotime($room['created_at']))}} </span>
                        <span class="message-content">
                            {{$mesej['message_text']}}
                        </span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="form-group text-right my-3">
            <form action="/hantarrr/{{$room['id']}}" method="POST">
                @csrf
                <select id="template" class="form-control" onchange="malas()">
                    <option value=0 selected>Pilih Status</option>
                    <option value=5>Agensi</option>
                    <option value=6>Pertanyaan/Cadangan</option>
                    <option value=7>Luar Bidang Kuasa</option>
                    <option value=8>Maklumat Tak Lengkap</option>
                    <option value=9>Tidak Releven</option>
                    <option value=10>Rujuk TTPM</option>
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
                    <option value=4>Isu Tiada Tanda Harga</option>
                    <option value=5>Pertanyaan Berkaitan Nombor Aduan</option>
                    <option value=6>Kedai SST</option>
                    <option value=7>Lain-lain</option>
                    <option value=8>Tiada Kawalan Harga Barang/Perkhidmatan</option>
                    <option value=9>Program Subsidi Petrol</option>
                </select>
                <select id="luarbidang" class="form-control hide" onchange="subluarbidang()">
                    <option value=0 selected>Pilih Template</option>
                    <option value=1>JKDM - Jabatan Kastam Diraja Malaysia</option>
                    <option value=2>SKMM - Suruhanjaya Komunikasi dan Multimedia Malaysia</option>
                    <option value=3>CFM - Customer Forum Of Malaysia</option>
                    <option value=4>BNM - Bank Negara Malaysia</option>
                    <option value=5>JIM - Jabatan Imigresen Malaysia</option>
                    <option value=6>JKM - Jabatan Kebajikan Masyarakat</option>
                    <option value=7>JAKIM - Jabatan Kemajuan Islam Malaysia</option>
                    <option value=8>JKR - Jabatan Kerja Raya</option>
                    <option value=9>KSM - Kementerian Sumber Manusia</option>
                    <option value=10>KKM - Kementerian Kesihatan Malaysia</option>
                    <option value=11>KPKT - Kementerian Perumahaan dan Kerajaan Tempatan Mahkamah</option>
                    <option value=12>MOA - Kementerian Pertanian dan Industri Asas Tani</option>
                    <option value=13>MOT - Kementerian Pengangkutan Malaysia/JPJ</option>
                    <option value=14>MOTAC - Kementerian Seni, Pelancongan, Seni dan Budaya Malaysia</option>
                    <option value=15>PDRM - Polis Diraja Malaysia</option>
                    <option value=16>MAVCOM - Suruhanjaya Penerbangan Malaysia</option>
                    <option value=17>PBT - Pihak Berkuasa Tempatan</option>
                    <option value=18>SPRM - Suruhanjaya Pencegahan Rasuah Malaysia</option>
                </select>
                <!-- <div class="hide" id="hiden_div_catatan">
                    <h1>test</h1>
                </div>
                <div class="hide" id="pentadbir">
                    <h1>test2</h1>
                </div> -->
                <textarea class="form-control message-input my-3" id="chatbox" name="hantar" placeholder="Enter message text"></textarea>
                <button class="btn btn-primary" type="submit">Hantar</button>
            </form>
            <a href="/hantar/{{$room ['id']}}">
                <button class="btn btn-success btn-block">Refresh</button>
            </a>
        </div>

    </div>
    <div class="col-lg-4">

        <div class="ibox">

            <div class="ibox-title text-center">
                <h1>{{$room['name']}}</h1>
                <h3>{{$room['phone']}}</h3>
                <p class="card-text">Status bot:
                    @if ($room['active'] == 1)
                    Aktif
                    @else
                    Tidak aktif
                    @endif
                </p>
                @if ($room['active'] == 1)
                <a href="/room/{{$room['id']}}/aktif" class="btn btn-danger">Nyahaktifkan Bot?</a>
                @else
                <a href="/room/{{$room['id']}}/aktif" class="btn btn-primary">Aktifkan Bot?</a>
                @endif
            </div>
        </div>

    </div>
</div>
@stop

<script type="text/javascript">
    function nomboradu() {
        var a = document.getElementById("adu");
        var b = document.getElementById("nombor");
        if (a.value != null) {
            b.value = $key;
        }

    }

    function malas() {
        var x = document.getElementById("template");
        var y = document.getElementById("chatbox");

        if (x.value != 5) {
            document.getElementById("templatela").className = "form-control hide";
        }

        if (x.value != 6) {
            document.getElementById("pertanyaan").className = "form-control hide";
        }

        if (x.value != 7) {
            document.getElementById("luarbidang").className = "form-control hide";
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
        } else if (x.value == 7) {
            // document.getElementById('templatela').style.display = "show";
            document.getElementById("luarbidang").className = "form-control";
        } else if (x.value == 8) {
            y.value = 'Tuan/Puan, \nTerima kasih kerana menghubungi KPDNHEP. Sila lengkapkan butiran aduan seperti berikut : (a) Nama (Nama Penuh Mengikut K/P). (b) No.K/P (Sila Nyatakan No K/P Yang Sah). (c) Alamat surat menyurat. (d) No telefon untuk dihubungi. (e) Email (Sekiranya ada). (f) Nama Premis. (g) Alamat Premis (Sila Nyatakan Alamat Lengkap Termasuk Daerah). (h) Keterangan Aduan. (i) Gambar Bukti (Sekiranya Ada). (j) Sekiranya Aduan Berkenaan Transaksi Atas Talian Mohon Kemukakan Nama Bank Dan No Akaun Bank / No Transaksi FPX Yang Terlibat. Setelah selesai, sila taip TAMAT. Terima kasih. *Hanya aduan melalui pesanan teks sahaja yang akan diproses.* *Sekiranya Tuan/Puan gagal untuk melengkapkan maklumat yang diperlukan dalam tempoh 3 hari bekerja, pihak kami menganggap Tuan/Puan tidak berminat untuk meneruskan aduan ini dan seterusnya aduan ini akan DITUTUP* #maklumattidaklengkap';
        } else if (x.value == 9) {
            y.value = 'Tuan/ Puan, \nSekian Terima Kasih \n#kpdnhep';
        } else if (x.value == 10) {
            y.value = 'Tuan/ Puan, \nBerdasarkan semakan, aduan tuan/puan disarankan untuk memfailkan tuntutan tuan/puan kepada *TRIBUNAL TUNTUTAN PENGGUNA MALAYSIA (TTPM)* melalui saluran-saluran berikut: \na) Sistem e-Tribunal V2 di https://ttpm.kpdnhep.gov.my \nb) Hadir ke Pejabat TTPM yang berhampiran. \nc) Talian Hotline TTPM 1-800-889-811 \nSekian, terima kasih \nKPDNHEP #ttpm';
        }


        console.log(x.value)
    }

    function malasla() {
        var x = document.getElementById("templatela");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = 'Tuan/ Puan,\nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa  *PERBADANAN HARTA INTELEK MALAYSIA* \nhttp://www.myipo.gov.my/en/contact/?lang=en \nSila rujuk pautan tersebut untuk perhatian selanjutnya. \nSekian, terima kasih \nKPDNHEP #myipo';
        } else if (x.value == 2) {
            y.value = 'Tuan/ Puan, \nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa *SURUHANJAYA PERSAINGAN MALAYSIA* \nhttp://www.mycc.gov.my/contact-us \nSila rujuk pautan tersebut untuk perhatian selanjutnya. \nSekian, terima kasih \nKPDNHEP #mycc';
        } else if (x.value == 3) {
            y.value = 'Tuan/ Puan, \nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di bawah bidang kuasa *SURUHANJAYA SYARIKAT MALAYSIA* \nhttp://www.ssm.com.my/Pages/contact-us.aspx \nSila rujuk pautan tersebut untuk perhatian selanjutnya. \nSekian, terima kasih \nKPDNHEP #ssm';
        }
        console.log(x.value)
    }

    function subpertanyaan() {
        var x = document.getElementById("pertanyaan");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = '_ISU SENARAI HARGA_ \nTuan/ Puan, Terima kasih kerana menghubungi KPDNHEP, Bagi membuat semakan dan perbandingan barangan terpilih, tuan/puan bolehlah memuat turun aplikasi *Price catcher* di Google Play/App Store. Jadilah pengguna yang bijak dengan membuat pilihan yang tepat. Sekian, terima kasih \n#harga';
        } else if (x.value == 2) {
            y.value = 'Pihak Kementerian sangat menghargai keprihatinan Tuan/Puan untuk menegakkan *hak-hak pengguna* dan mengambil perhatian atas kesulitan yang berlaku. Untuk maklumat Tuan/Puan, pada lampiran muka surat 15 (http://www.pdp.gov.my/index.php/en/akta-709/akta-perlindungan-data-peribadi-2010) , data Tuan/Puan adalah diamanahkan untuk dilindungi dan tertakluk di bawah akta tersebut. Untuk makluman jua, maklumat lengkap diperlukan untuk menjaga integriti data dan memudahkan tindakan penguatkuasaan. Sehubungan itu, sila lengkap kan butiran berikut : \na) Nama (Nama Penuh Mengikut K/P) \nb) No.K/P (Sila Nyatakan No K/P Yang Sah) \nc) Alamat surat menyurat \nd) No telefon untuk dihubungi \ne) Email (Sekiranya ada) \nf) Nama Premis \ng) Alamat Premis (Sila Nyatakan Alamat Lengkap Termasuk Daerah) \nh) Keterangan Aduan \ni) Gambar Bukti (Sekiranya Ada) \nj) Sekiranya Aduan Berkenaan Transaksi Atas Talian Mohon Kemukakan Nama Bank Dan No Akaun Bank / No Transaksi FPX Yang Terlibat Diharapkan agar isu tersebut akan diambil tindakan yang tepat. \nTerima kasih. \nKPDNHEP #pdpa';
        } else if (x.value == 3) {
            y.value = 'Tuan/Puan, \nAduan tersebut masih dalam siasatan. Sebarang pertanyaan boleh dirujuk kepada Pegawai Penyiasat yang bertanggungjawab menjalankan siasatan ke atas aduan tuan. \nPegawai Penyiasat : xxx \nNo.Telefon : xxx \nE-mel : xxx. #status';
        } else if (x.value == 4) {
            y.value = 'Tuan/Puan, \nAdalah dimaklumkan bahawa kerajaan tiada menetapkan/menggariskan harga perkhidmatan/barangan selain daripada barang kawalan. Namun begitu, adalah menjadi satu kesalahan sekiranya pekedai tidak meletakkan tanda harga untuk barangan/perkhidmatan tersebut. Jadilah pengguna yang bijak dengan membuat pilihan yang tepat. Sekian, terima kasih \nKPDNHEP #tandaharga';
        } else if (x.value == 5) {
            y.value = 'Aduan anda telah didaftarkan ke dalam Sistem e-Aduan KPDNHEP. No. Aduan: *01823252* Semakan Aduan boleh dibuat melalui: \na) Portal eAduan https://eaduan.kpdnhep.gov.my \nb) Aplikasi Ez ADU KPDNKK (Android dan IOS) \nc) Call Center : 1800 – 886 - 800. \nd) Emel ke e-aduan@kpdnhep.gov.my. **Pendaftaran menggunakan Nama dan No. K/P diperlukan untuk semakan melalui Aplikasi Ez ADU. \nSekian, terima kasih \nKPDNHEP #aduan';
        } else if (x.value == 6) {
            y.value = 'Tuan/Puan, \nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP. Untuk makluman, pelaksanaan SST adalah dibawah Jabatan Kastam Diraja Malaysia. Untuk sebarang semakan kedai yang berdaftar dengan SST, tuan/puan boleh melayari laman web MySST di pautan berikut: https://sst01.customs.gov.my/account/inquiry Untuk maklumat lanjut, sila rujuk pihak JABATAN KASTAM DIRAJA MALAYSIA. \nJabatan Kastam Diraja Malaysia, \nKompleks Kementerian Kewangan No 3, Persiaran Perdana, Presint 2, \n62596, Putrajaya \n03-8323 7499/7522 @ 03 8882 2289/2303/2492/2617 \n1300888500. \nSekian, Terima Kasih. \nKPDNHEP #sst';
        } else if (x.value == 7) {
            y.value = 'Tuan/ Puan, \nSekian Terima Kasih. - KPDNHEP #lainlain';
        } else if (x.value == 8) {
            y.value = 'Tuan/Puan, \nAdalah dimaklumkan bahawa kerajaan tidak menetapkan/menggariskan harga perkhidmatan/barangan selain daripada barang kawalan. Namun begitu, adalah menjadi satu kesalahan sekiranya pekedai meletakkan harga yang terlalu tinggi untuk barangan/perkhidmatan tersebut. Jadilah pengguna yang bijak dengan membuat pilihan yang tepat. \nSekian, terima kasih. \nKPDNHEP #hargapasaran';
        } else if (x.value == 9) {
            y.value = 'Tuan/ Puan, \n*PROGRAM SUBSIDI PETROL* \nSemakan boleh dibuat bermula 15 Oktober 2019. https://psp.kpdnhep.gov.my/ Sila rujuk pautan tersebut untuk semak kelayakan/kemas kini maklumat/maklumat lain yang berkaitan psp. \nWhatsApp pertanyaan psp : +6019-2786356. \nTalian hotline : 1800886800 \nPertanyaan juga boleh dibuat di Pejabat KPDNHEP Negeri dan Cawangan yang berdekatan. \nSekian, terima kasih. \nKPDNHEP #psp';
        }

        console.log(x.value)
    }

    function subluarbidang() {
        var x = document.getElementById("luarbidang");
        var y = document.getElementById("chatbox");


        if (x.value == 1) {
            y.value = 'Tuan/ Puan, \nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *JABATAN KASTAM DIRAJA MALAYSIA* http://aduan.customs.gov.my/aduanawam/index1.php \nSila rujuk pautan tersebut untuk perhatian selanjutnya. \nSekian, terima kasih \nKPDNHEP #kastam';
        } else if (x.value == 2) {
            y.value = 'Tuan/ Puan, \nBerdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *SURUHANJAYA KOMUNIKASI DAN MULTIMEDIA MALAYSIA* https://aduan.skmm.gov.my/ Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih. -KPDNHEP #skmm';
        } else if (x.value == 3) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *CONSUMER FORUM OF MALAYSIA* http://complaint.cfm.my/ Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih. -KPDNHEP #cfm';
        } else if (x.value == 4) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa. *BANK NEGARA MALAYSIA* http://www.bnm.gov.my/index.php Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih. - KPDNHEP #bnm';
        } else if (x.value == 5) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa  *JABATAN IMIGRESEN MALAYSIA* http://app.imi.gov.my/feedback/index.php?lang=1 Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #imigresen';
        } else if (x.value == 6) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *JABATAN KEBAJIKAN MASYARAKAT* http://www.jkm.gov.my/ Sila rujuk pautan tersebut di ruangan maklum balas untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #jkm';
        } else if (x.value == 7) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *JABATAN KEMAJUAN ISLAM MALAYSIA* http://www.islam.gov.my/maklumbalas Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #jakim';
        } else if (x.value == 8) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *JABATAN KERJA RAYA* https://aduan.jkr.gov.my/ Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #jkr';
        } else if (x.value == 9) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN SUMBER MANUSIA* http://mohr.spab.gov.my/eApps/system/index.do Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #ksm';
        } else if (x.value == 10) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN KESIHATAN MALAYSIA* http://moh.spab.gov.my/eApps/system/index.do Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #kkm';
        } else if (x.value == 11) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN PERUMAHAN DAN KERAJAAN TEMPATAN* https://aduan.kpkt.gov.my/aduan-online/entry/aduanperumahan.cfm Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #kpkt';
        } else if (x.value == 12) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN PERTANIAN DAN INDUSTRI ASAS TANI* http://www.moa.gov.my/hubungi-kami Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #moa';
        } else if (x.value == 13) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN PENGANGKUTAN * http://mot.spab.gov.my/eApps/system/index.do Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #mot';
        } else if (x.value == 14) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *KEMENTERIAN PELANCONGAN, SENI DAN BUDAYA MALAYSIA* http://motac.spab.gov.my/eApps/system/index.do Sila rujuk pihak tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #motac';
        } else if (x.value == 15) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *POLIS DIRAJA MALAYSIA* Sila rujuk pihak tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #pdrm';
        } else if (x.value == 16) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *SURUHANJAYA PENERBANGAN MALAYSIA* https://www.mavcom.my/en/consumer/make-a-complaint/ Sila rujuk pihak tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #mavcom';
        } else if (x.value == 17) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *SURUHANJAYA PENERBANGAN MALAYSIA* https://www.mavcom.my/en/consumer/make-a-complaint/ Sila rujuk pihak tersebut untuk perhatian selanjutnya. Sekian, terima kasih - KPDNHEP #pbt';
        } else if (x.value == 18) {
            y.value = 'Tuan/ Puan, Berdasarkan semakan, didapati aduan/pertanyaan tuan/puan adalah di luar bidang kuasa KPDNHEP dan lebih menjurus kepada bidang kuasa *SURUHANJAYA PENCEGAHAN RAHSUAH MALAYSIA* http://www.sprm.gov.my/index.php/hubungi-kami/ibu-pejabat Sila rujuk pautan tersebut untuk perhatian selanjutnya. Sekian, terima kasih KPDNHEP #sprm';
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