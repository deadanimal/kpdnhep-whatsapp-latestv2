@extends('layouts.main')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading mb-4">
    <div class="col-lg-10">
        <h2>Laporan Statistik Bulanan </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <strong>Maklumbalas Melalui Aplikasi Whatsapp</strong>
            </li>
        </ol>
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
                            <label class=" col-form-label">Pilih Tahun</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control m-b" name="tahun">
                                <option value="1">Sila pilih tahun</option>
                                <option value="2020" selected>2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-primary" type="submit">Jana</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<h3>2020 Laporan Bulanan</h3>

<div class="ibox">
    <div class="ibox-content">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Jan</th>
                    <th>Feb</th>
                    <th>Mac</th>
                    <th>April</th>
                    <th>Mei</th>
                    <th>Jun</th>
                    <th>Jul</th>
                    <th>Ogos</th>
                    <th>Sept</th>
                    <th>Okt</th>
                    <th>Nov</th>
                    <th>Dis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Agensi kpdnhep</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

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