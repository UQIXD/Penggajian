<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Penggajian</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- framework bootstrap -->

    <!-- datepicker bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link href="{{ asset('assets/toastr/build/toastr.min.css') }}" rel="stylesheet" />


    @livewireStyles

</head>

<body data-background-color="dark" style="color: white">
    <div class="wrapper">
        <div class="main-header">

            @include('layouts.navbar')

        </div>

        @include('layouts.sidebar')

        <div class="main-panel">
            <div class="content">
                {{ $slot }}
            </div>
            @include('layouts.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

    <script src="{{ asset('assets/toastr/build/toastr.min.js') }}"></script>

    <script src="{{ asset('sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('assets/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/select2.js') }}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    {{-- <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script> --}}
    <script>
        $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });

        $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });

        $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: 'rgba(255, 255, 255, .5)',
            fillColor: 'rgba(255, 255, 255, .15)'
        });
    </script>

    <script>
        window.addEventListener('tampil-Kry', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('tampil-Abs', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('tampil-Gaji', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('pesan-kry', event => {
            toastr.warning(event.detail.message, "Peringatan!");
        });
        window.addEventListener('pesan-abs', event => {
            toastr.warning(event.detail.message, "Peringatan!");
        });
        window.addEventListener('pesan-gaji', event => {
            toastr.warning(event.detail.message, "Peringatan!");
        });
        window.addEventListener('hide-tambah-kry', event => {
            $('#modal-tambah').modal('hide');
            toastr.success(event.detail.message, "Sukses!");
        });
        window.addEventListener('hide-tambah-abs', event => {
            $('#modal-tambah').modal('hide');
            toastr.success(event.detail.message, "Sukses!");
        });
        window.addEventListener('hide-tambah-gaji', event => {
            $('#modal-tambah').modal('hide');
            toastr.success(event.detail.message, "Sukses!");
        });
        window.addEventListener('hide-tambah-det', event => {
            $('#modal-tambah').modal('hide');
            toastr.success(event.detail.message, "Sukses!");
        });
        window.addEventListener('tampil-rubah-gaji', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('tampil-rubah-abs', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('tampil-rubah-kry', event => {
            $('#modal-tambah').modal('show');
        });
        window.addEventListener('tampil-hapus-kry', event => {
            $('#modal-hapus').modal('show');
        });
        window.addEventListener('tampil-hapus-abs', event => {
            $('#modal-hapus').modal('show');
        });
        window.addEventListener('tampil-hapus-gaji', event => {
            $('#modal-hapus').modal('show');
        });
        window.addEventListener('hide-hapus-kry', event => {
            $('#modal-hapus').modal('hide');
            toastr.error(event.detail.message, "Sukses!");
        });
        window.addEventListener('hide-hapus-abs', event => {
            $('#modal-hapus').modal('hide');
            toastr.error(event.detail.message, "Sukses!");
        });
        window.addEventListener('hide-hapus-gaji', event => {
            $('#modal-hapus').modal('hide');
            toastr.error(event.detail.message, "Sukses!");
        });
    </script>

    @stack('jsku')

    @livewireScripts
</body>

</html>
