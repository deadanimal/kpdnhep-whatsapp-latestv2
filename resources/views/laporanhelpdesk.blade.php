@extends('layouts.main')
@section('content')
<h1>Senarai Aduan</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Tambah laporan
</button>
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <h4 class="modal-title">Tambah laporan</h4>
            </div>
            <form action="/simpan_muatnaik" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama isu</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="isu"></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Tahap</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="tahap"></div>
                    </div>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Keterangan</label>
                        <textarea class="form-control message-input" name="keterangan"></textarea>
                    </div>
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

                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Lampiran</label>
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="chooseFile">
                            <!-- <label class="custom-file-label" for="chooseFile">Select file</label> -->
                        </div>
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

                            <td>
                                @if($laporanhelpdesk->status == null)
                                <span class="text-danger">Tiada khabar</span>
                                @else
                                {{$laporanhelpdesk->status}}
                                @endif
                            </td>
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
                                                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Status</label>
                                                        <div class="col-sm-10"><input type="text" class="form-control" name="status"></div>
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