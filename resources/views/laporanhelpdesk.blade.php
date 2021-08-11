@extends('layouts.main')
@section('content')
<h1>Laporan Helpdesk</h1>
<button style="margin-bottom: 20px; " type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Tambah laporan
</button>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <strong>{{ $message }}</strong>
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <h4 class="modal-title">Tambah laporan</h4>
            </div>
            <form action="/simpan_muatnaik" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label style="padding-left:0px; text-align: left;" class="col-sm-2 col-form-label">Nama isu</label>
                        <input type="text" class="form-control" name="isu">
                    </div>
                    <div class="form-group">
                        <label style="padding-left:0px; text-align: left;" class="col-sm-2 col-form-label">Tahap</label>
                        <select class="form-control m-b" name="tahap">
                            <option value="Rendah">Rendah</option>
                            <option value="Sederhana">Sederhana</option>
                            <option value="Tinggi">Tinggi</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label style="padding-left:0px; text-align: left;" class="col-sm-2 col-form-label">Keterangan</label>
                        <textarea class="form-control message-input" name="keterangan"></textarea>
                    </div>
                    <div class="form-group ">
                        <label style="padding-left:0px; text-align: left;" class="col-sm-2 col-form-label">Lampiran</label>
                        <input type="file" name="file" class="custom-file-input" id="chooseFile">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="ibox ">
            <div class="ibox-content">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama isu</th>
                            <th>Tahap</th>
                            <th>Keterangan</th>
                            <th>Lampiran</th>
                            <th class="text-center">Saiz lampiran (kb)</th>
                            <th>Status</th>
                            <th>Keterangan Vendor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporanhelpdesks as $laporanhelpdesk)
                        <tr>
                            <td>{{$laporanhelpdesk->isu}}</td>
                            <td>{{$laporanhelpdesk->tahap}}</td>
                            <td>{{$laporanhelpdesk->keterangan}}</td>
                            <td>{{$laporanhelpdesk->nama_fail}}</td>
                            <td class="text-center">{{$laporanhelpdesk->saiz}}</td>
                            <td>{{$laporanhelpdesk->status}}</td>
                            <td>{{$laporanhelpdesk->keterangan_vendor}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#kemaskini">
                                    Kemaskini
                                </button>
                                <div class="modal inmodal" id="kemaskini" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content animated bounceInRight">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Kemaskini laporan</h4>
                                            </div>
                                            <form action="/kemaskini/{{$laporanhelpdesk->id}}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group  row">
                                                        <label style="padding-left:0px; text-align: left;" class="col-sm-2 col-form-label">Status</label>
                                                        <select class="form-control m-b" name="status">
                                                            <option value="Dalam tindakan">Dalam tindakan</option>
                                                            <option value="Selesai">Selesai</option>
                                                            <option value="Baru">Baru</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group  row">
                                                        <label style="padding-left:0px; text-align: left;" class="col-sm-4 col-form-label">Keterangan vendor</label>
                                                        <textarea class="form-control message-input" name="keterangan_vendor"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <td>
                                <a href="{{$laporanhelpdesk->laluan_fail}}" download>
                                    <button class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i></button>
                                </a>
                            </td>
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
<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>