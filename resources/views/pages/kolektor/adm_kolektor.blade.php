@extends('layouts.pages.index')

{{-- @extends('layouts.partials.headerlink') --}}
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">{{ $title }}</h5>
                </div>

            </div>
        </div>
        <div class="card-body ">
            <div class="card-body radius-10 border">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Sales</th>
                                <th>Tanggal</th>
                                <th>Jatuh Tempo</th>
                                <th>Kode Faktur</th>
                                <th>Total Harga</th>
                                <th>Sisa Bayar</th>
                                <th>Kota</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tempo as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->namasales }}</td>
                                    <td>{{ Date('d/m/Y', strtotime($item->tanggal)) }}</td>
                                    <td>{{ Date('d/m/Y', strtotime($item->tanggal2)) }}</td>
                                    <td>{{ $item->kodefakturjual }}</td>
                                    <td>{{ $item->totalharga }}</td>
                                    <td>{{ $item->sisabayar }}</td>
                                    <td>{{ $item->namakota }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" id="datafaktur"
                                            data-faktur="{{ $item->kodefakturjual }}" data-toggle="modal"
                                            data-target="#collectorModal">
                                            Buat Tagihan
                                        </button>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="collectorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hubungkan Collector</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2 mt-2">
                        <div class="col-md-6">
                            <span>Tanggal Transaksi</span>
                            <input type="datetime" class="form-control form-control-sm" name="tanggal" id="tanggal"
                                readonly>
                        </div>
                        <div class="col-md-6">
                            <span>Tanggal Jatuh Tempo</span>
                            <input type="datetime" class="form-control form-control-sm" name="tanggal2" id="tanggal2"
                                readonly>
                        </div>

                    </div>
                    <div class="row mb-2 mt-2">
                        <div class="col-md-4">
                            <span>Faktur</span>
                            <input type="text" class="form-control form-control-sm" name="kodefakturjual"
                                id="kodefakturjual" readonly>
                        </div>
                        <div class="col-md-4">
                            <span>Nama</span>
                            <input type="text" class="form-control form-control-sm" name="nama" id="nama" readonly>
                        </div>
                        <div class="col-md-4">
                            <span>Kode Customer</span>
                            <input type="text" class="form-control form-control-sm" name="kodecustomer" id="kodecustomer"
                                readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span>Alamat</span>
                            <textarea name="alamat" class="form-control form-control-sm" id="alamat" cols="30"
                                rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <span>Alamat</span>
                            <textarea name="namakota" class="form-control form-control-sm" id="namakota" cols="30"
                                rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
