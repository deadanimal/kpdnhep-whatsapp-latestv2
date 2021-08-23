<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="rOg867nYBTBbG50L6qPon0ZV4GzbRrJ0siTpmSZE">

    <title>eAduan 2.0</title>

    <link href="https://e-aduan.kpdnhep.gov.my/css/app.css" rel="stylesheet">

    <!-- Dual List Script -->
    <link href="https://e-aduan.kpdnhep.gov.my/../themes/inspinia/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">
    <link href="https://e-aduan.kpdnhep.gov.my/../themes/inspinia/css/plugins/select2/select2.min.css" rel="stylesheet">

    <!-- Ladda style -->
    <link href="https://e-aduan.kpdnhep.gov.my/themes/inspinia/css/plugins/ladda/ladda-themeless.min.css" rel="stylesheet">

    <link href="https://e-aduan.kpdnhep.gov.my/themes/inspinia/css/plugins/dataTables/datatables.tribunal.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="https://e-aduan.kpdnhep.gov.my/themes/inspinia/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <script src="https://e-aduan.kpdnhep.gov.my/ckeditor/ckeditor.js"></script>
    <style>
        .filter {
            display: none !important;
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc::after,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc_disabled,
        .table-bordered>thead>tr>th {
            background-color: #115272;
            color: white;
        }
    </style>
</head>

<body>

    <!--<div id="wrapper">-->
    <div id="wrapper" style="background:#115272;">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="background-image: url(https://e-aduan.kpdnhep.gov.my/images/header-profile-skin-1.png) !important;">
                        <div class="dropdown profile-element" align='center'>
                            <a href="/dashboard">
                                <span>
                                    <img alt="image" class="img-md" style="width: 100% !important;" src="https://e-aduan.kpdnhep.gov.my/img/logo2_0.png" />
                                </span>
                            </a>
                            <!--                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">hariz</strong>
                            </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://e-aduan.kpdnhep.gov.my/logout"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Log out
                            </a>
                        </li>
                    </ul>-->
                        </div>
                        <!--                <div class="logo-element">
                    IN+
                </div>-->
                    </li>



                    <p style="color: #e1e4ea; background: -moz-linear-gradient(to right, #115272 , #f3f3f4); margin-bottom: 0px; padding-top: 5px; height: 30px;">
                        <strong>&nbsp;&nbsp;&nbsp;ADUAN KEPENGGUNAAN</strong>
                    </p>
                    <!--<hr style="width:100%;border-top: 1px solid #226383;margin:0;padding:0;">-->

                    <li class="">
                        <a href=""><i class="fa fa-bars"></i> <span class="nav-label">Aduan Kepenggunaan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/carian/admin">Carian Ikut Kriteria</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="/admin-case">Aduan Baru</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/call-center-case">Aduan Baru Call Center</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/sas-case">Pendaftaran Aduan Khas</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/kemaskini">Kemaskini Aduan (Maklumat Tidak Lengkap)</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/dataentry/create">Data Entry</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <!--<div class="hr-line-solid" style="color: white;"></div>-->
                    <!--<hr style="width:100%;border-top: 1px solid #226383;margin:0;padding:0;">-->

                    <li class="">
                        <a href=""><i class="fa fa-bars"></i> <span class="nav-label">Pengurusan Aduan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/tugas">Penugasan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/pindah">Pindah Aduan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/tugas-semula">Penugasan Semula</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/siasat">Penyiasatan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/bukasemula">Buka Semula</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/tutup">Penutupan</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/pertanyaan-admin"><i class="fa fa-question-circle"></i> <span class="nav-label">Pertanyaan/Cadangan</a>
                    </li>
                    <p style="color: #e1e4ea; background: -moz-linear-gradient(to right, #115272 , #f3f3f4); margin-bottom: 0px; padding-top: 5px; height: 30px;">
                        <strong>&nbsp;&nbsp;&nbsp;ADUAN INTEGRITI</strong>
                    </p>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/integriticarian"><i class="fa fa-search"></i> <span class="nav-label">Carian Ikut Kriteria</a>
                    </li>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/integritiadmin"><i class="fa fa-tasks"></i> <span class="nav-label">Aduan Baru</a>
                    </li>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/integritikemaskini"><i class="fa fa-pencil"></i> <span class="nav-label">Kemaskini Aduan (Maklumat Tidak Lengkap)</a>
                    </li>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/integritikemaskinimaklumat"><i class="fa fa-pencil-square"></i> <span class="nav-label">Kemaskini Maklumat Aduan</a>
                    </li>

                    <li class="">
                        <a href=""><i class="fa fa-bars"></i> <span class="nav-label">Pengurusan Aduan</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integrititugas">Penugasan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integrititugassemula">Penugasan Semula</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integritisiasat">Penyiasatan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integrititutup">Penutupan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integritibukasemula">Buka Semula</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integritiaccess">Akses Maklumat Pengadu</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/integritimeeting">Tetapan Mesyuarat JMA</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <li class="">
                        <a href="https://e-aduan.kpdnhep.gov.my/laporan/list"><i class="fa fa-bar-chart"></i> <span class="nav-label">Laporan</a>
                    </li>

                    <li class="">
                        <a href=""><i class="fa fa-bars"></i> <span class="nav-label">Pengurusan Maklumat EP</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/caseenquirypaper/infos">Carian</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/caseenquirypaper/dataentries">Daftar Baharu</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/caseenquirypaper/assignments">Penugasan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/enquirypaper/reassignments">Penugasan Semula</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/caseenquirypaper/investigations">Penyiasatan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/caseenquirypaper/closures">Penutupan</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <!--<div class="hr-line-solid" style="color: white;"></div>-->
                    <!--<hr style="width:100%;border-top: 1px solid #226383;margin:0;padding:0;">-->

                    <li class="">
                        <a href=""><i class="fa fa-cogs"></i> <span class="nav-label">Pentadbiran</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/ref">Selenggara Parameter</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/user">Selenggara Pengguna</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/publicuser">Selenggara Pengguna Awam</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/menu">Selenggara Menu</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/role">Selenggara Peranan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/letter">Selenggara Templat Surat</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/email">Selenggara Templat Email</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/branch">Selenggara Cawangan</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/holiday">Selenggara Cuti</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/workingday">Selenggara Hari Minggu</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/log">Audit Trail</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/agensi">Selenggara Agensi</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/settings/edit">Selenggara Tetapan Sistem</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/logmyidentity/carian">Log Capaian myIdentity</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/announcement">Selenggara Pengumuman</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/backup">Backup Data</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <li class="">
                        <a href=""><i class="fa fa-gears"></i> <span class="nav-label">Pentadbiran Media Sosial</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/feedback/template">Templet Media Sosial</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <li class="">
                        <a href=""><i class="fa fa-cog"></i> <span class="nav-label">Pentadbiran CMS</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/menucms">Selenggara Menu</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/article">Selenggara Artikel</a></li>
                            <!--</ul>-->
                            <!--<ul class="nav nav-second-level">-->
                            <li class="no"><a href="https://e-aduan.kpdnhep.gov.my/portalcms">Selenggara Keterangan Portal</a></li>
                            <!--</ul>-->
                        </ul>
                    </li>

                    <li class="">
                        <a href="/feedback"><i class="fa fa-exclamation-triangle"></i> <span class="nav-label">Media Sosial</a>
                    </li>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-success " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Selamat Datang {{Auth::user()->name;}}</span>
                        </li>
                        <li>
                            <div class="dropdown profile-element">
                                <span>
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <img alt="image" class="img-circle" src="https://e-aduan.kpdnhep.gov.my/img/default.jpg" style="width: 48px" />
                                    </a>
                                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                        <li>
                                            <a href="https://e-aduan.kpdnhep.gov.my/editprofile/112092">
                                                <i class="fa fa-user"></i> Profil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://e-aduan.kpdnhep.gov.my/user/changepassword/112092">
                                                <i class="fa fa-key"></i> Tukar Kata Laluan
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <form action="/signout" method="POST">
                                                <a href="/signout">
                                                    <i class="fa fa-unlock-alt"></i> Log Keluar
                                                </a>
                                            </form>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--@include('layouts.breadcrumb')-->
            <div class="wrapper wrapper-content animated fadeInRight">
                @if (session()->has('success'))
                <div id="xalert" class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('success'); ?>
                </div>
                @elseif (session()->has('warning'))
                <div id="xalert" class="alert alert-warning alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('warning'); ?>
                </div>
                @elseif (session()->has('alert'))
                <div id="xalert" class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('alert'); ?>
                </div>
                @elseif (session()->has('info'))
                <div id="xalert" class="alert alert-info alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?= session()->get('info'); ?>
                </div>
                @endif

                @yield('content')

            </div>
            @include('layouts.bottom')

        </div>
    </div>
    <script>
        //            setTimeout(function () {
        //                $('#xalert').hide('slow');
        //            }, 5000);
    </script>

    <!-- Mainly scripts -->
    <script src="{{ url('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ url('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ url('js/store.js') }}"></script>
    <script src="{{ url('js/jquery-idleTimeout.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- HighChart -->
    <script src="{{ url('js/plugins/highcharts/highcharts.js') }}"></script>
    <script src="{{ url('js/plugins/highcharts/highcharts-3d.js') }}"></script>
    <script src="{{ url('js/plugins/highcharts/modules/exporting.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ url('js/plugins/dataTables/datatables.js') }}"></script>
    <script src="{{ url('js/plugins/dataTables/Buttons-1.4.2/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ url('../themes/ace/js/moment.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/daterangepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-timepicker.js') }}"></script>
    <script src="{{ url('../themes/ace/js/bootstrap-datetimepicker.js') }}"></script>

    <!-- Dual Listbox -->
    <script src="{{ url('../themes/inspinia/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js') }}"></script>
    <script src="{{ url('../themes/inspinia/js/plugins/select2/select2.full.min.js') }}"></script>

    <!-- Ladda -->
    <script src="{{ url('themes/inspinia/js/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ url('themes/inspinia/js/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ url('themes/inspinia/js/plugins/ladda/ladda.jquery.min.js') }}"></script>

    <!-- Sweet alert -->
    <script src="{{ url('../themes/inspinia/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Idle Timer plugin -->
    <!--<script src="js/plugins/idle-timer/idle-timer.min.js"></script>-->
    <script src="{{ url('themes/inspinia/js/plugins/idle-timer/idle-timer.min.js') }}"></script>

    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Page-Level Scripts -->
    @yield('script_datatable')

    <!-- Dual List Script-->
    <script>
        $(document).ready(function() {

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            })
            $(document).idleTimer(1200000)
            $('.demo1').click(function() {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function() {
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
            });
        })
        $(document).on('idle.idleTimer', function(event, elem, obj) {
            swal({
                    title: 'Peringatan',
                    text: 'Kerana anda tidak aktif menggunakan sistem, sesi anda akan tamat.',
                    type: 'warning',
                    timer: 600000,
                    showCancelButton: true,
                    cancelButtonText: 'Kekal Di Log Masuk',
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Log Keluar'
                },
                function(isConfirm) {
                    if (isConfirm) {
                        window.location = '/authlogout'
                    } else {
                        window.location = ''
                    }
                })
        })
    </script>

    <style>
        body.DTTT_Print {
            background: #fff;

        }

        .DTTT_Print #page-wrapper {
            margin: 0;
            background: #fff;
        }

        button.DTTT_button,
        div.DTTT_button,
        a.DTTT_button {
            border: 1px solid #e7eaec;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }

        button.DTTT_button:hover,
        div.DTTT_button:hover,
        a.DTTT_button:hover {
            border: 1px solid #d2d2d2;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }

        .dataTables_filter label {
            margin-right: 5px;

        }

        label.required:after {
            color: #cc0000;
            content: "*";
            font-weight: bold;
            margin-left: 5px;
        }

        label.required1:after {
            color: #cc0000;
            content: "**";
            font-weight: bold;
            margin-left: 5px;
        }

        #idletimer_warning_dialog {
            background-color: white;
        }

        .ui-dialog-buttonset {
            background-color: white;
            text-align: center;
        }
    </style>
</body>

</html>