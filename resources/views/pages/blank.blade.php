@extends('layouts.pages.index')

{{-- @extends('layouts.partials.headerlink') --}}
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">header</h5>
                </div>

            </div>
        </div>
        <div class="card-body">
            {{-- code hire!!! --}}
            <p>
       <?= now() ?>
            </p>
        </div>
    </div>
@endsection
