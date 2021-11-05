@extends('layouts.pages.index')

{{-- @extends('layouts.partials.headerlink') --}}
@section('content')
    <div class="row justify-content-center">
        @foreach ($tagihan as $t => $item)
            {{-- <div class="card radius-15 col-sm-4 mr-2">
                <div class="card-header border-bottom-0">
                    <div class="d-lg-flex align-items-center">
                        <div>
                            <h5 class="mb-2 mb-lg-0">{{ $item->nama }}</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi fugit, quidem laboriosam commodi,
                        reiciendis delectus optio, dolorum voluptatibus eum cumque itaque aut dolores porro ratione sapiente
                        perferendis illum debitis ducimus dicta suscipit explicabo? Maxime, consequuntur asperiores delectus
                        omnis
                        minus dolorum, laborum mollitia placeat quaerat consequatur ab odit optio iusto in!</p>
                </div>
            </div> --}}

            <?php var_dump($item); ?>
        @endforeach

    </div>
@endsection
