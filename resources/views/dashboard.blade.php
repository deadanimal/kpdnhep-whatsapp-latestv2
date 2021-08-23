@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/tugas">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-random fa-5x"></i>-->
                        <img alt="Tugasan Baru" src="https://e-aduan.kpdnhep.gov.my/img/TugasBaru.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Tugasan Baru </h4>
                        <h2 class="font-bold">1</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/siasat">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-book fa-5x"></i>-->
                        <img alt="Dalam Siasatan" src="https://e-aduan.kpdnhep.gov.my/img/DalamSiasatan.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Dalam Siasatan </h4>
                        <h2 class="font-bold">0</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/tutup">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-file-archive-o fa-5x"></i>-->
                        <img alt="Menunggu Pengesahan Penutupan" src="https://e-aduan.kpdnhep.gov.my/img/PengesahanPenutupan.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Menunggu Pengesahan Penutupan </h4>
                        <h2 class="font-bold">7</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<!--  -->
<div class="row">
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/integrititugas">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-random fa-5x"></i>-->
                        <img alt="Tugasan Baru" src="https://e-aduan.kpdnhep.gov.my/img/TugasBaru.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Tugasan Baru </h4>
                        <h4>(Integriti)</h4>
                        <h2 class="font-bold">274</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/integritisiasat">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-book fa-5x"></i>-->
                        <img alt="Dalam Siasatan" src="https://e-aduan.kpdnhep.gov.my/img/DalamSiasatan.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Dalam Siasatan </h4>
                        <h4>(Integriti)</h4>
                        <h2 class="font-bold">0</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="https://e-aduan.kpdnhep.gov.my/integrititutup">
            <div class="widget style1 blue-bg">
                <div class="row">
                    <div class="col-xs-2">
                        <!--<i class="fa fa-file-archive-o fa-5x"></i>-->
                        <img alt="Menunggu Pengesahan Penutupan" src="https://e-aduan.kpdnhep.gov.my/img/PengesahanPenutupan.png" style="width: 45px; height: 45px;" />
                    </div>
                    <div class="col-xs-10 text-right">
                        <h4 class="font-bold" style="font-weight: 900"> Menunggu Pengesahan Penutupan </h4>
                        <h4>(Integriti)</h4>
                        <h2 class="font-bold">0</h2>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title blue-bg">
                <h5>Paparan Semua Aduan Mengikut Bahagian (2021)</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" id="search-form2" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-lg-10">
                            <label for="state" class="col-lg-4 control-label">Negeri</label>
                            <div class="col-lg-8">
                                <select class="form-control input-sm" id="state" name="state">
                                    <option value="" selected="selected">-- SILA PILIH --</option>
                                    <option value="01">JOHOR</option>
                                    <option value="02">KEDAH</option>
                                    <option value="03">KELANTAN</option>
                                    <option value="04">MELAKA</option>
                                    <option value="05">NEGERI SEMBILAN</option>
                                    <option value="06">PAHANG</option>
                                    <option value="07">PULAU PINANG</option>
                                    <option value="08">PERAK</option>
                                    <option value="09">PERLIS</option>
                                    <option value="10">SELANGOR</option>
                                    <option value="11">TERENGGANU</option>
                                    <option value="12">SABAH</option>
                                    <option value="13">SARAWAK</option>
                                    <option value="14">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                    <option value="15">WILAYAH PERSEKUTUAN LABUAN</option>
                                    <option value="16">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <label for="branch" class="col-sm-4 control-label">Bahagian / Cawangan</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm" id="branch" name="branch">
                                    <option value="" selected="selected">-- SILA PILIH --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <label for="CA_INVSTS" class="col-sm-4 control-label">Status Aduan</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm" id="CA_INVSTS" name="CA_INVSTS">
                                    <option value="" selected="selected">-- SILA PILIH --</option>
                                    <option value="1">ADUAN BARU</option>
                                    <option value="2">PENUGASAN (DALAM SIASATAN)</option>
                                    <option value="3">SIASATAN SELESAI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <label for="tempoh_aduan" class="col-sm-4 control-label">Tempoh Aduan</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm" id="tempoh_aduan" name="tempoh_aduan">
                                    <option value="" selected="selected">-- SILA PILIH --</option>
                                    <option value="0">Baru</option>
                                    <option value="1">Lebih daripada 7 hari</option>
                                    <option value="2">Lebih daripada 16 hari</option>
                                    <option value="3">Lebih daripada 21 hari</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <button type="submit" class="btn btn-primary btn-sm">Carian</button>
                        <a class="btn btn-default btn-sm" href="https://e-aduan.kpdnhep.gov.my/dashboard">Semula</a>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="users-table" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Hari</th>
                                <th>No. Aduan</th>
                                <th>Aduan</th>
                                <th>Nama Pengadu</th>
                                <th>Nama Premis Yang Diadu</th>
                                <th>Nama Penyiasat</th>
                                <th>Status Aduan</th>
                                <th>Tarikh Penerimaan</th>
                                <th>Bahagian / Cawangan</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="ibox-content" style="padding-bottom: 15px !important">
        <div class="row">
            <form method="POST" action="https://e-aduan.kpdnhep.gov.my/dashboard" accept-charset="UTF-8" id="search-form" class="form-horizontal"><input name="_token" type="hidden" value="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="Tahun" class="col-sm-2 control-label">Tahun</label>
                        <div class="col-sm-10">
                            <select class="form-control input-sm" id="Tahun" name="Tahun">
                                <option value="2021" selected="selected">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="Negeri" class="col-sm-2 control-label">Negeri</label>
                        <div class="col-sm-10">
                            <select class="form-control input-sm" id="Negeri" name="Negeri">
                                <option value="" selected="selected">-- SILA PILIH --</option>
                                <option value="01">JOHOR</option>
                                <option value="02">KEDAH</option>
                                <option value="03">KELANTAN</option>
                                <option value="04">MELAKA</option>
                                <option value="05">NEGERI SEMBILAN</option>
                                <option value="06">PAHANG</option>
                                <option value="07">PULAU PINANG</option>
                                <option value="08">PERAK</option>
                                <option value="09">PERLIS</option>
                                <option value="10">SELANGOR</option>
                                <option value="11">TERENGGANU</option>
                                <option value="12">SABAH</option>
                                <option value="13">SARAWAK</option>
                                <option value="14">WILAYAH PERSEKUTUAN KUALA LUMPUR</option>
                                <option value="15">WILAYAH PERSEKUTUAN LABUAN</option>
                                <option value="16">WILAYAH PERSEKUTUAN PUTRAJAYA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label for="BahagianCawangan" class="col-sm-4 control-label">Bahagian/Cawangan</label>
                        <div class="col-sm-8">
                            <select class="form-control input-sm" id="BahagianCawangan" name="BahagianCawangan">
                                <option value="" selected="selected">-- SILA PILIH --</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group" align="center">
                        <button class="btn btn-primary btn-sm" id="btnsubmit" type="button">Carian</button>
                        <a href="https://e-aduan.kpdnhep.gov.my/dashboard" class="btn btn-default btn-sm">Semula</a>
                    </div>
                </div>
            </form>
        </div>
        <div id="container" style="height: 500px; margin: 0 auto"></div>
    </div>
</div>
<!-- Modal Create Attachment Start -->
<div class="modal inmodal fade in" id="modal-announcement" role="dialog" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id='modalEditContent' style="border-radius: 30px;">
            <div class="modal-header" style="background: #1c84c6; color: white; text-align: center;">
                <strong>PENGUMUMAN</strong>
            </div>
            <div class="modal-body" style="background: white; ">
                <div class="alert alert-info">
                    <h3>Sistem eAduan 2.0</h3>
                    Selamat datang ke sistem eAduan 2.0
                </div>
            </div>
            <div class="modal-footer" style="background: #1c84c6;">
                <p class="text-center">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Tutup</button>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Start -->
<div id="modal-show-summary" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id='ModalShowSummary'></div>
    </div>
</div>
<div id="modal-show-invby" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id='ModalShowInvBy'></div>
    </div>
</div>
@stop