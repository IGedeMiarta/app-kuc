@extends('layouts.pages.index')

@section('content')
    {{-- @dd($countres) --}}
    <div class="card radius-15">
        <div class="card-body">
            <div class="card-title">
                <h4 class="mb-0">Form Input</h4>
            </div>
            <hr />
            <form action="" method="post">
                @csrf
                <div class="form-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select2 Text Control</label>
                        <div class="col-sm-10">
                            <select class="single-select" name="country">
                                <option value="">select--</option>
                                @foreach ($countres as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary px-4">Register</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
