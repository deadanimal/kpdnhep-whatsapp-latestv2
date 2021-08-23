@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <h2>Senarai Aduan</h2>
            <style>
                .tdnota {
                    padding-left: 10px
                }

                .divnota {
                    width: 20px;
                    height: 20px;
                    vertical-align: middle;
                    display: table-cell
                }

                .spannota {
                    padding-left: 10px;
                    font-weight: bold;
                    display: table-cell
                }
            </style>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <p style="text-align:center; font-weight:bold; font-size:13px">Nota</p>
                            <div align="center">
                                <table class="tablenota" border="1" width="100%" style="border-color: #C0C0C0">
                                    <tr>
                                        <td align="center" style="font-weight:bold; width:10vw">Kod Warna Peringatan</td>
                                        <td class="tdnota">
                                            <div style="display:table-row">
                                                <div class="divnota" style="background-color:#3F6"></div>
                                                <div class="spannota">Baru</div>
                                            </div>
                                        </td>
                                        <td class="tdnota">
                                            <div style="display:table-row">
                                                <div class="divnota" style="background-color:#FF3"></div>
                                                <div class="spannota">Lebih daripada 7 hari</div>
                                            </div>
                                        </td>
                                        <td class="tdnota">
                                            <div style="display:table-row">
                                                <div class="divnota" style="background-color:#F0F"></div>
                                                <div class="spannota">Lebih daripada 14 hari</div>
                                            </div>
                                        </td>
                                        <td class="tdnota">
                                            <div style="display:table-row">
                                                <div class="divnota" style="background-color:#F00"></div>
                                                <div class="spannota">Lebih daripada 21 hari</div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox-content">
                <form method="POST" action="https://e-aduan.kpdnhep.gov.my/admin-case" accept-charset="UTF-8" id="search-form" class="form-horizontal"><input name="_token" type="hidden" value="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="CA_CASEID" class="col-sm-4 control-label">No. Aduan</label>
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" id="CA_CASEID" name="CA_CASEID" type="text" value="">
                                    <input class="form-control input-sm" id="SEARCH" name="SEARCH" type="hidden" value="1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CA_SUMMARY" class="col-sm-4 control-label">Keterangan Aduan</label>
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" name="CA_SUMMARY" type="text" value="" id="CA_SUMMARY">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CA_NAME" class="col-sm-4 control-label">Nama Pengadu</label>
                                <div class="col-sm-8">
                                    <input class="form-control input-sm" name="CA_NAME" type="text" value="" id="CA_NAME">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!--                                <div class="form-group">
                                    <label for="CA_RCVDT" class="col-sm-4 control-label">Tarikh Penerimaan</label>
                                    <div class="col-sm-8">
                                        <input class="form-control input-sm" name="CA_RCVDT" type="text" value="" id="CA_RCVDT">
                                    </div>
                                </div>-->
                            <div class="form-group" id="date">
                                <label for="CA_RCVDT_FROM" class="col-sm-4 control-label">Tarikh Penerimaan</label>
                                <div class="col-sm-8">
                                    <div class="input-daterange input-group" id="datepicker">
                                        <input class="form-control input-sm" id="CA_RCVDT_FROM" name="CA_RCVDT_FROM" type="text" value="">
                                        <span class="input-group-addon">hingga</span>
                                        <input class="form-control input-sm" id="CA_RCVDT_TO" name="CA_RCVDT_TO" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="CA_INVSTS" class="col-sm-4 control-label">Status Aduan</label>
                                <div class="col-sm-8">
                                    <select class="form-control input-sm" id="CA_INVSTS" name="CA_INVSTS">
                                        <option value="" selected="selected">-- SILA PILIH --</option>
                                        <option value="1">ADUAN BARU</option>
                                        <option value="2">PENUGASAN (DALAM SIASATAN)</option>
                                        <option value="7">MAKLUMAT TIDAK LENGKAP</option>
                                        <option value="3">SIASATAN SELESAI</option>
                                        <option value="0">PINDAH KE NEGERI/BAHAGIAN/CAWANGAN LAIN</option>
                                        <option value="4">PENUTUPAN (RUJUK KE AGENSI KPDNHEP)</option>
                                        <option value="5">PENUTUPAN (RUJUK KE TRIBUNAL)</option>
                                        <option value="8">PENUTUPAN (DILUAR BIDANG KUASA)</option>
                                        <option value="11">PENUTUPAN (MAKLUMAT TIDAK LENGKAP)</option>
                                        <option value="9">PENGESAHAN PENUTUPAN</option>
                                        <option value="6">PERTANYAAN</option>
                                        <option value="12">SELESAI (MAKLUMAT TIDAK LENGKAP)</option>
                                    </select>
                                </div>
                            </div>
                            <!--                                <div class="form-group">
                                    <label for="sa" class="col-sm-4 control-label">Saluran Aduan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control input-sm" id="sa" name="sa"><option value="" selected="selected">-- SILA PILIH --</option><option value="0">Web</option><option value="00">Call Center</option><option value="000">ezAdu</option><option value="SAS0">High Profile</option></select>
                                    </div>
                                </div>-->
                            <!--                                <div class="form-group">
                                    <label for="CA_CASESTS" class="col-sm-4 control-label">Status Perkembangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control input-sm" id="CA_CASESTS" name="CA_CASESTS"><option value="" selected="selected">-- SILA PILIH --</option><option value="1">BELUM DIBERI PENUGASAN</option><option value="2">TELAH DIBERI PENUGASAN</option></select>
                                    </div>
                                </div>-->
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input class="btn btn-primary btn-sm" type="submit" value="Carian">
                        <a href="https://e-aduan.kpdnhep.gov.my/admin-case" class="btn btn-default btn-sm">Semula</a>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin-case/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Aduan Baru</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="admin-case-table" class="table table-striped table-bordered table-hover dataTables-example" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Bil.</th>
                                <th>
                                    <center>Hari</center>
                                </th>
                                <th>No. Aduan</th>
                                <th>Keterangan Aduan</th>
                                <th>Nama Pengadu</th>
                                <th>Status Aduan</th>
                                <!--<th>Status Perkembangan</th>-->
                                <th>Tarikh Penerimaan</th>
                                <th>Tindakan</th>
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
<!-- Modal Start -->
<div id="modal-show-summary" class="modal fade" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id='ModalShowSummary'></div>
    </div>
</div>
<!-- Modal End -->
@stop