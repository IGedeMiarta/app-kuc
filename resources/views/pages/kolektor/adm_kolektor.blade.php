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
                                <th>Uang Muka</th>
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
                                    <td>{{ $item->uangmuka }}</td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
