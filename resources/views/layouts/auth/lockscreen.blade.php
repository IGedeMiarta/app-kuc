@extends('layouts.auth.temp')
@section('content')

    <body class="bg-lock-screen">
        <!-- wrapper -->
        <div class="wrapper">
            <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
                <div class="card shadow-none bg-transparent">
                    <div class="card-body p-md-5 text-center">
                        <h2 class="text-white" id="jam"></h2>
                        <h5 class="text-white" id="tanggal"></h5>
                        <div class="">
                            <img src=" /images/icons/user.png" class="mt-5" width="120" alt="" />
                        </div>
                        <p class="mt-2 text-white">{{ 'Username' }}</p>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" placeholder="Password" autofocus required />
                            </div>
                            <button type="submit" class="btn btn-light btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- end wrapper -->
        <script type="text/javascript">
            window.onload = function() {
                jam();
                day();
            }

            function jam() {
                var e = document.getElementById('jam'),
                    d = new Date(),
                    h, m, s;
                h = d.getHours();
                m = set(d.getMinutes());
                s = set(d.getSeconds());

                e.innerHTML = h + ':' + m + ':' + s;
                setTimeout('jam()', 1000);
            }

            function set(e) {
                e = e < 10 ? '0' + e : e;
                return e;
            }

            function day() {
                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                    'November', 'Desember'
                ];
                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                var e = document.getElementById('tanggal');
                var date = new Date();
                var day = date.getDate();
                var month = date.getMonth();
                var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                var yy = date.getFullYear();
                var year = (yy < 1000) ? yy + 1900 : yy;

                e.innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
            }
        </script>
    </body>

@endsection
