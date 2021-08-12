@extends('layouts.main')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading mb-4">
    <div class="col-lg-10">
        <h2>Laporan Statistik Kecekapan Pegawai Pengurusan Maklumat Aplikasi Whatsapp </h2>
    </div>
</div>
<div class="row text-center">
    <div class="col">
        <div class="ibox">
            <div class="ibox-content">
                <div class="form-group row">
                    <form action="/hantaq" method="POST">
                        @csrf
                        <div class="col-lg-2">
                            <label class=" col-form-label">Pilih tarikh</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="date" class="form-control-sm form-control" name="start" value="08/12/2021" />
                                <span class="input-group-addon">hingga</span>
                                <input type="date" class="form-control-sm form-control" name="end" value="08/12/2021" />
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" type="submit">Jana</button>
                            <a href="/laporanpegawai"><button class="btn btn-success">Semula</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($start)

<div class="ibox">
    <div class="ibox-content">
        <h3 class="text-center">Laporan Statistik Kecekapan Pegawai dari {{$start}} hingga {{$end}}.</h3>
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nama pegawai</th>
                    <th>Jumlah maklumbalas (tutup)</th>
                    <th>Jumlah aduan dicipta</th>
                    <th>Jumlah keseluruhan</th>
                    <th>Peratusan (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A. Johan Bin Ag Othman</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Abd. Aziz Bin Slamin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Adibah Binti Jalaluddin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Afidah Binti Asmat</td>
                    <td>0</td>
                    <td>320</td>
                    <td>320</td>
                    <td>8.23</td>
                </tr>
                <tr>
                    <td>Ahmad Afiq Bin Ahmad Radzi</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Ahmad Khuzairi Bin Salamat</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Al-nurhisyam Bin Ahamad</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Muhammad Syahir Husin Bin Haji Rusfan</td>
                    <td>0</td>
                    <td>728</td>
                    <td>728</td>
                    <td>18.61</td>
                </tr>
                <tr>
                    <td>Ngelingkong Anak Kusa</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Norafida Binti Bulat</td>
                    <td>0</td>
                    <td>3</td>
                    <td>3</td>
                    <td>0.08</td>
                </tr>
                <tr>
                    <td>Norazlina Binti Yaakob</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Nur Awanis Binti Katabe</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Sakima Binti Shaharudin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Sayed Mohd Nizam Bin Sayed Zahari</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Suriana Binti Isa</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Syazana Masturah Binti Othman</td>
                    <td>0</td>
                    <td>143</td>
                    <td>143</td>
                    <td>3.66</td>
                </tr>
                <tr>
                    <td>Tuan Mohd Asyraf Bin Tuan Loseng</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Uppk3-mohamed Farhan Bin Mohamed Shafiee</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Uppk4-ruslan Bin Shamsudin</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Wan Asrul Effendi Bin Wan Mahmood</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Zainal Abidin Bin Ahmad</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
                <tr>
                    <td>Zaini Bin Zamri</td>
                    <td>0</td>
                    <td>2</td>
                    <td>2</td>
                    <td>0.05</td>
                </tr>
                <tr>
                    <td>Zareena Binti Radin @ Saradin</td>
                    <td>0</td>
                    <td>6</td>
                    <td>6</td>
                    <td>0.15</td>
                </tr>
                <tr>
                    <td>Zulfitri A'zim Bin Zohari</td>
                    <td>0</td>
                    <td>577</td>
                    <td>577</td>
                    <td>14.75</td>
                </tr>
                <tr>
                    <td>Zulia Binti Mat Yusof</td>
                    <td>0</td>
                    <td>4</td>
                    <td>4</td>
                    <td>0.10</td>
                </tr>
                <tr>
                    <td>Zuraini Binti Yusoff</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0.03</td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Jumlah</th>
                <th>0</th>
                <th>3912</th>
                <th>3912</th>
                <th>100.00</th>
            </tr>
        </tfoot>
        </table>
    </div>
</div>
@endif

@stop

<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>