@extends('layouts.pages.index')


@section('content')
    @if (session()->has('success'))
        @dd(session('seccess'))
        {{-- <div class="alert alert-success col-md-8" role="alert">
            {{ session('success') }}
        </div> --}}
    @endif
    <div class="user-profile-page">
        <div class="card radius-15">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 col-lg-7 border-right">
                        <div class="d-md-flex align-items-center">
                            <div class="mb-md-0 mb-3">
                                <img src="https://via.placeholder.com/110x110" class="rounded-circle shadow" width="130"
                                    height="130" alt="" />
                            </div>
                            <div class="ml-md-4 flex-grow-1">
                                <div class="d-flex align-items-center mb-1">
                                    <h4 class="mb-0">{{ $pegawai->Nama }}</h4>
                                </div>
                                <p class="text-primary fs-5"><i class='bx bx-buildings'></i>Karya Utama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <table class="table table-sm table-borderless mt-md-0 mt-3">
                            <tbody>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>:</td>
                                    <td>{{ $pegawai->jabatan->NamaJabatan }} <span
                                            class="badge badge-success">{{ $pegawai->StatusPegawai }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>:</td>
                                    <td>{{ date('Y', strtotime(now())) - date('Y', strtotime($pegawai->Tgl_Lahir)) }}
                                        Tahun</td>
                                </tr>
                                <tr>
                                    <th>Alamat:</th>
                                    <td>:</td>
                                    <td>{{ $pegawai->Alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Tahun Bergabung:</th>
                                    <td>:</td>
                                    <td>{{ date('m / Y', strtotime($pegawai->Tgl_Masuk)) }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!--end row-->
                <ul class="nav nav-pills">
                    <li class="nav-item"> <a class="nav-link active" id="profile-tab" data-toggle="tab"
                            href="#Biography"><span class="p-tab-name">Detail</span><i
                                class='bx bxs-user-rectangle font-24 d-sm-none'></i></a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#Edit-Profile"><span
                                class="p-tab-name">Edit Profile</span><i
                                class='bx bx-message-edit font-24 d-sm-none'></i></a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Biography">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-none border mb-0 mb-3">
                                    <div class="card-body">
                                        <h5 class="mb-3">Detail Pegawai</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h6 class="mb-0"><i class="bx bx-id-card "></i>
                                                {{ $pegawai->NoKTP }}
                                            </h6>
                                        </li>
                                        <li class="list-group-item">
                                            <h6 class="mb-0"><i class="lni lni-phone"></i>
                                                {{ $pegawai->Telpon }}
                                            </h6>
                                        </li>
                                        <li class="list-group-item">
                                            <h6 class="mb-1"><i class='bx bx-user-voice'></i>
                                                {{ $pegawai->Agama }}
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card shadow-none border mb-0 radius-15">
                                    <div class="card-body">
                                        <h5 class="mb-3">About</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem velit natus harum
                                            quisquam alias porro facere eveniet laboriosam! Ex optio vero amet? Quia fugit
                                            veritatis praesentium dolores nulla excepturi ipsa laudantium aliquid illum,
                                            dignissimos sunt veniam quae suscipit doloribus commodi, pariatur in recusandae
                                            sit dolor adipisci! Harum blanditiis facere molestias nesciunt omnis atque
                                            quasi, nisi vitae voluptas et enim aliquid laboriosam, odio expedita possimus?
                                            Ad delectus repudiandae natus quibusdam obcaecati sapiente debitis dolorum enim
                                            fugit praesentium aspernatur nobis, maxime labore at, officia eum molestias,
                                            tempore error recusandae. Maiores expedita magni veritatis. Impedit consectetur
                                            iste enim reprehenderit cum nobis id accusamus?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Edit-Profile">
                        <div class="card shadow-none border mb-0 radius-15">
                            <div class="card-body">
                                <div class="form-body">
                                    <form action="" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-lg-5 border-right">
                                                <div class="form-group">
                                                    <label>No KTP</label>
                                                    <input type="number" name="NoKTP"
                                                        class="form-control @error('NoKTP')
                                                        is-ivalid
                                                    @enderror"
                                                        value="{{ $pegawai->NoKTP }}">
                                                    @error('NoKTP')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="Nama"
                                                        class="form-control @error('Nama')
                                                        is-ivalid
                                                    @enderror"
                                                        value="{{ $pegawai->Nama }}">
                                                    @error('Nama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Telpon</label>
                                                    <input type="text" name="Telpon" class="form-control"
                                                        value="{{ $pegawai->Telpon }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea name="Alamat" class="form-control" id="Alamat" cols="30"
                                                        rows="5">{{ $pegawai->Alamat }}</textarea>
                                                </div>

                                            </div>
                                            <div class="col-12 col-lg-7">
                                                <div class="form-group">
                                                    <label>Agama</label>
                                                    <select class="single-select" name="Agama">
                                                        @if (isset($pegawai->Agama))
                                                            <option value="{{ $pegawai->Agama }}" selected>
                                                                {{ $pegawai->Agama }}
                                                            </option>
                                                        @endif
                                                        <option value="Budha">Budha</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Gender</label>
                                                        <select class="form-control" name="Jenis_Kelamin">
                                                            @if ($pegawai->Jenis_Kelamin == 'Laki-laki')
                                                                <option value="Laki-laki" selected>Laki-laki</option>
                                                            @else
                                                                <option value="Perempuan" selected>Perempuan</option>
                                                            @endif
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Jabatan</label>
                                                        <select class="single-select" name="KodeJabatan">
                                                            @if (isset($jabatan))
                                                                <option value="{{ $pegawai->jabatan->KodeJabatan }}"
                                                                    selected>
                                                                    {{ $pegawai->jabatan->NamaJabatan }}</option>
                                                            @endif
                                                            @foreach ($jabatan as $jabatan)

                                                                <option value="{{ $jabatan->KodeJabatan }}">
                                                                    {{ $jabatan->NamaJabatan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="Tempat_Lahir" id=""
                                                            value="{{ $pegawai->Tempat_Lahir }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="Tgl_Lahir" id=""
                                                            value="{{ date('Y-m-d', strtotime($pegawai->Tgl_Lahir)) }}">
                                                    </div>
                                                </div>


                                                <button class="btn btn-success" type="submit">Simpan</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
