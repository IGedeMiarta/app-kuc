@extends('layouts.pages.index')

{{-- @extends('layouts.partials.headerlink') --}}
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">Verifikasi User</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="card-body radius-10 border">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Last Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->level }}</td>
                                        <td>
                                            @if ($item->status == 'waiting')
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-light-warning btn-block radius-30">Waiting</a>
                                            @elseif($item->status == 'active')
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-light-success btn-block radius-30">Active</a>
                                            @elseif($item->status == 'disable')
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-light-danger btn-block radius-30">Disable</a>
                                            @endif
                                        </td>
                                        <td>{{ date('d M Y', strtotime($item->updated_at)) }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-light-primary radius-10 users-verif"
                                                data-toggle="modal" data-target="#exampleModal"
                                                data-userid="{{ $item->id }}"><i class="bx bx-edit-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-light-primary">
                        <h5 class="modal-title" id="exampleModalLabel text-primary">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('user.update') }}" method="post" id="modal-users">
                            @csrf
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" name="fullname" class="form-control" id="fullname">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="user">User</option>
                                    <option value="kolektor">Kolektor</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="waiting">Waiting</option>
                                    <option value="active">Active</option>
                                    <option value="disable">Disable</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                <button type="submit" class="btn btn-primary btn-block"><i class="bx bx-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
