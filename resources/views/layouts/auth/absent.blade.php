@extends('layouts.auth.temp')
@section('content')

    <body class="bg-register">
        <!-- wrapper -->
        <div class="wrapper">
            <div class="section-authentication-register d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto">
                        <div class="card radius-15">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5">
                                        <div class="text-center">
                                            <img src="images/login-images/undraw_Fingerprint_re_uf3f.svg" width="300"
                                                alt="absentlogo">
                                            <h2 class="mt-4 font-weight-bold" id="jam"></h2>
                                            <h4 class="font-weight-italic" id="tanggal"></h4>
                                        </div>
                                        <hr class="mb-5 mt-5">
                                        <div id="alert"></div>

                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" class="form-control" name="user" id="user">

                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="images/login-images/absent.jpg" class="card-img login-img h-100" alt="...">
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end wrapper -->
        <!-- JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <!--Password show & hide js -->


        <script type="text/javascript">
            window.onload = function() {
                dateTime();
                // day();
                alert()

            }
            // function untuk menampilkan alert intervace
            function alert() {
                var d = new Date(),
                    h, m, s, waktu;
                h = set(d.getHours());
                m = set(d.getMinutes());
                s = set(d.getSeconds());

                var cls = document.getElementById('alert')

                if (h == 7) {
                    var jam = '07:00';
                    var end = '07:05';
                } else if (h == 8) {
                    jam = '08:00';
                    end = '08:05';
                } else if (h == 9) {
                    jam = '09:00';
                    end = '09:05';
                } else if (h >= 10 && h <= 12) {
                    jam = '10:00';
                    end = '10:05';
                } else if (h == 16) {
                    jam = '07:00';
                } else if (h == 17) {
                    jam = '08:00';
                } else if (h == 18) {
                    jam = '09:00';
                } else if (h == 19) {
                    jam = '10:00';
                }
                if ((h == 7 || h == 8 || h == 9 || h == 10) && (m >= 00 && m < 06)) {
                    cls.innerHTML = `<div class="alert alert-primary " id="alert-tepat" role="alert">
									<h4 class="alert-heading" id="test">Aww yeah.</h4>
									<p> Absensi Sesi <b id="hh">${jam }}</b> Masih bisa untuk absensi kehadiran, silahkan absen sebelum <b id="ss">${end}</b> Keterlambatan hanya ditoleril dalam 5 menit. jika lebih dari waktu, sistem akan menolak pencatatan absent anda :(</p>
									<hr>
									<p class="mb-0">Jika Mengalami gangguan dalam absensi segera laporkan</p>
									</div>`
                } else if ((h == 7 && (m > 5 && m <= 59)) || (h == 8 && (m > 5 && m <= 59)) || (h == 9 && (m > 5 && m <= 59)) ||
                    (h == 10 && (m > 5 && m <= 59))) {

                    cls.innerHTML = `<div class="alert alert-danger " id="alert-terlambat" role="alert">
								<h4 class="alert-heading" id="test">Not in time :(</h4>
									<p> Absensi Sesi <b id="hh">${jam}</b> sudah ditutup pada jam <b id="ss">${end}</b> Keterlambatan hanya ditoleril dalam 5 menit. jika lebih dari waktu, sistem akan menolak pencatatan absent anda :(</p>
									<hr>
									<p class="mb-0">Jika Mengalami gangguan dalam absensi segera laporkan</p></div>`
                } else if (h >= 12 && h < 16) {
                    cls.innerHTML = `<div class="alert alert-info " id="alert-terlambat" role="alert">
								<h4 class="alert-heading" id="test">Absensi Itirahat </h4>
									<p> Absensi Untuk Isirahat sudah bisa dilakukan, hati-hati di jalan jika membeli makan, selamat beristirahat. Terimakasih Atas Kerja Kerasnya</p>
									<hr>
									<p class="mb-0">Jika Mengalami gangguan dalam absensi segera laporkan</p></div>`
                } else if (h >= 16) {
                    cls.innerHTML = `<div class="alert alert-success " id="alert-terlambat" role="alert">
								<h4 class="alert-heading" id="test">Absensi Pulang </h4>
									<p> Absensi Pulang Sesi  <b id="hh">${jam}</b> sudah bisa dilakukan, hati-hati di jalan, selamat beristirahat. Terimakasih Atas Kerja Kerasnya</p>
									<hr>
									<p class="mb-0">Jika Mengalami gangguan dalam absensi segera laporkan</p></div>`
                }

                setTimeout('alert()', 1000);

            }

            function dateTime() {
                var e = document.getElementById('jam'),
                    d = new Date(),
                    h, m, s;
                h = d.getHours();
                m = set(d.getMinutes());
                s = set(d.getSeconds());

                e.innerHTML = h + ':' + m + ':' + s;

                // format tanggal dalam bahasa
                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                    'November', 'Desember'
                ];
                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                var tgl = document.getElementById('tanggal');
                var date = new Date();
                var day = date.getDate();
                var month = date.getMonth();
                var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                var yy = date.getFullYear();
                var year = (yy < 1000) ? yy + 1900 : yy;

                tgl.innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

                setTimeout('dateTime()', 1000);
            }

            function set(e) {
                e = e < 10 ? '0' + e : e;
                return e;
            }
        </script>
    </body>
@endsection
