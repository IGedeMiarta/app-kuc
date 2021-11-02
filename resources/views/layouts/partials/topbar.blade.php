<!--header-->
<header class="top-header">
    @csrf
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="fas fa-align-justify h5"></i>
            </a>
        </div>

        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">

                {{-- account login --}}
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0">{{ 'NAMA' }}</p>
                                <p class="designattion mb-0 text-success">{{ 'ROLE' }}</p>
                            </div>
                            <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item"
                            href="/pegawai-detail/{{ '000' }}"><i class="fas fa-user h6"></i><span>
                                Profile</span></a>

                        <div class="dropdown-divider mb-0">

                        </div>
                        {{-- <a class="dropdown-item" href="/lol"><i
                                     class="bx bx-power-off"></i><span>Logout</span></a> --}}
                        <form action="logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt h6"></i>
                                <span>Logout</span></button>
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!--end header-->
