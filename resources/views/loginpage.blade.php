<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/eaduanlogo-100x100.png" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="51K94FZMnzAEEKuFVUVlmkzY664dAni1CnC7vsbE">

    <title>eAduan 2.0</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/aos.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/all.min.css">
    <link rel="stylesheet" href="https://e-aduan.kpdnhep.gov.my/assets/portal/css/style.css">


    <!-- Scripts -->
    <script>
        window.Laravel = {
            "csrfToken": "51K94FZMnzAEEKuFVUVlmkzY664dAni1CnC7vsbE"
        };
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <a href="#" class=""><span class="mr-2 "></span> <span class="d-none d-md-inline-block">Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna</span></a> -->
                    <a href="https://e-aduan.kpdnhep.gov.my"><img src="assets/portal/images/logo1white.png" style="width: 10%;"></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">Hotline: 1 - 800 - 886 - 800</span></a>
                    <div class="float-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4 offset-sm-4 my-sm-5 text-center" style="margin-bottom: 8rem !important; margin-top: 8rem !important;">
        <h2><strong>ADMIN LOGIN</strong></h2>
        <form action="/customlogin" method="POST">
        @csrf
        <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="No. KP/Pasport">
        </div>
        <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Kata Laluan">
        </div>
            <button class="btn btn-primary block full-width m-b" type="submit">Log Masuk</button>
        </form>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <h2 class="footer-heading mb-4">E-Aduan 2.0</h2>
                        <p>Laman E-Aduan ini dikhaskan bagi menyalurkan aduan isu-isu kepenggunaan dan intergriti untuk kegunaan
                            KPDNHEP </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="footer-heading mb-4">Maklumat</h2>
                    <p>
                        <a href="#">Hakcipta</a> | <a href="#">Penafian</a> | <a href="#">Dasar Privasi</a> | <a href="#">Dasar Keselamatan</a>
                    </p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="copyright">
                            <small><a href="https://e-aduan.kpdnhep.gov.my/login2">Hakcipta &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> Kementerian Perdagangan Dalam Negeri Dan Hal
                                    Ehwal Pengguna (KPDNHEP)
                                </a><br>
                                Paparan Terbaik Menggunakan Internet Explorer 10, Mozilla Firefox 40.0, Google Chrome 53.0 Ke Atas
                                Dengan Resolusi 1280 x 800 Ke Atas
                        </p></small>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://e-aduan.kpdnhep.gov.my/assets/web/assets/jquery/jquery.min.js"></script>

    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/popper.min.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/owl.carousel.min.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/jquery.sticky.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/jquery.waypoints.min.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/jquery.animateNumber.min.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/jquery.fancybox.min.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/jquery.easing.1.3.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/aos.js"></script>
    <script src="https://e-aduan.kpdnhep.gov.my/assets/portal/js/main.js"></script>
















    <style>
        label.required:after {
            color: #cc0000;
            content: "*";
            font-weight: bold;
            margin-left: 5px;
        }
    </style>
</body>

</html>