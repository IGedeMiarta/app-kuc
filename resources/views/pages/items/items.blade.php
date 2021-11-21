@extends('layouts.auth.temp')

@section('content')

    <a href="{{ url('/') }}">
        <div class="text-center mb-2 mt-5">
            <img src="{{ asset('/images/logo.png') }}" width="80" alt="">
            <h3 class="mt-4 font-weight-bold">{{ $title }}</h3>
        </div>
    </a>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="{{ url('/items') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <body class="bg-register">
        <div class="container">
            @if ($items->count())
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-voilet">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent text-white">{{ $item->namabarang }}</li>
                                        <li class="list-group-item bg-transparent text-white">{{ $item->merk }}</li>
                                        <li class="list-group-item bg-transparent text-white">
                                            {{ 'Rp ' . $item->hargajual1 }}
                                        </li>
                                        <li class="list-group-item bg-transparent text-white">
                                            {{ $item->toko + $item->gudang . ' ' . $item->satuan }}</li>
                                        {{-- <li class="list-group-item bg-transparent text-white">{{ $item->gudang }}</li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center fs-2">No post found</p>
            @endif

            <div class="d-flex justify-content-center">
                {{ $items->links() }}
            </div>


        </div>
    </body>
@endsection
