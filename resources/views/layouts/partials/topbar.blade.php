<!--header-->
<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>


        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <div class="d-flex justify-content-end">
                        <h6 class="user-name mt-3 mb-0 justify-content-end">{{ auth()->user()->fullname }} </h6>

                        <p class="designattion mt-2  ml-n5 mb-0 text-success">{{ strtoupper(auth()->user()->level) }}
                        </p>
                    </div>
                </li>

                {{-- account login --}}
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0 ">{{ auth()->user()->fullname }}</p>
                                <p class="designattion mb-0 text-success">
                                    {{ strtoupper(auth()->user()->level) }}</p>
                            </div>
                            <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item"
                            href="/pegawai-detail/{{ '000' }}"><i
                                class="bx bx-user"></i><span>Profile</span></a>

                        <div class="dropdown-divider mb-0">

                        </div>
                        {{-- <a class="dropdown-item" href="/lol"><i
                                     class="bx bx-power-off"></i><span>Logout</span></a> --}}
                        <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i
                                    class="bx bx-power-off"></i><span>Logout</span></button>
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!--end header-->
