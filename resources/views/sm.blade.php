@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-10 col-lg-push-1">
        <div class="row m-b">
            <div class="col-md-8 message">
                <div class="row">
                    <div class="col-sm-4 col-xs-6">
                        <i class="fa fa-whatsapp text-center" style="font-size: 120px; color:#54C861"></i>
                        <h3>Whatsapp</h3>
                    </div>

                    <div class="col-sm-8 col-xs-6">
                        <div class="row">
                            @if ( Auth::user()->role_code != vendor)
                            <div class="col-sm-4">
                                <h4>Senarai Maklumbalas</h4>
                                <ul>
                                    <li>
                                        <a class="nav-link text-center" href="/room">Semua</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="/tugasans">Tugasan</a>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="/aktif">Aktif</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4>Laporan</h4>
                                <ul>
                                    <li><a class="nav-link text-center" href="/laporanbulanan">Bulanan</a>
                                    </li>
                                    <li><a class="nav-link text-center" href="/laporanpegawai">Pegawai</a>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            <div class="col-sm-4">
                                @if ( Auth::user()->role_code == superadmin)
                                <h4>Senarai Pentadbiran</h4>
                                <ul>
                                    <li><a class="nav-link text-center" href="/laporanhelpdesk">Laporan Helpdesk</a>
                                    </li>
                                    <li><a class="nav-link text-center" href="/dokumenfasa">Simpanan dokumen mengikut fasa</a>
                                    </li>
                                </ul>
                                @endif
                                @if ( Auth::user()->role_code == vendor)
                                <h4>Senarai Pentadbiran</h4>
                                <ul>
                                    <li><a class="nav-link text-center" href="/laporanhelpdesk">Laporan Helpdesk</a>
                                    </li>
                                    <li><a class="nav-link text-center" href="/dokumenfasa">Simpanan dokumen mengikut fasa</a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop