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
                    <form action="/jananik" method="POST">
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
                    <td>-</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
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