 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3 ">
     <div class="breadcrumb-title pr-3">KUC</div>
     <div class="pl-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb mb-0 p-0">
                 <li class="breadcrumb-item"><a href="/"><i class='bx bx-home-alt'></i></a>
                 </li>
                 @if (isset($headerlink))
                     @foreach ($headerlink as $link => $view)
                         @if ($link != '#')
                             <li class="breadcrumb-item" aria-current="page"><a
                                     href="{{ $link }}">{{ $view }}</a></li>
                         @else
                             <li class="breadcrumb-item active" aria-current="page">{{ $view }}</li>
                         @endif
                     @endforeach
                 @else
                     <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                 @endif
             </ol>
         </nav>
     </div>
 </div>
 <!--end breadcrumb-->
