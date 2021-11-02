@extends('layouts.pages.index')

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
            <div class="card-header radius-10 border">
                {{-- <div class="row mb-5">
                    <div class="form-group select2-sm col-sm-4">
                        <label>Jabatan</label>
                        <select name="jabatan" id="" class="custom-select form-selects custom-select-sm ">
                            <option value=""></option>
                            @foreach ($jabatan as $jabatan)
                                <option value="{{ $jabatan->KdJabatan }}">{{ $jabatan->NamaJabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group select2-sm col-sm-4">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control form-control-sm">
                    </div>
                    <div class="form-group select2-sm col-sm-4">
                        <label>Tanggal Sampai</label>
                        <input type="date" name="tgl_sampai" id="tgl_sampai" class="form-control form-control-sm">
                    </div>
                </div> --}}
                {{-- <hr> --}}
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tabelAbsen" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
