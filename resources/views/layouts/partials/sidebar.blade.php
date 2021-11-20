 <!-- wrapper -->
 <div class="wrapper">
     <!--sidebar-wrapper-->
     <div class="sidebar-wrapper" data-simplebar="true">
         <div class="sidebar-header">
             <a href="{{ url('/') }}">
                 <div class="">
                     <img src=" {{ asset('/images/logo.png') }}" class="logo-icon-2" alt="" />
             </a>
         </div>
         <div>
             <a href="/">
                 {{-- <h4 class="logo-text" face="verdana">KUC</h4> --}}
                 <font size="4" face="sans-serif" class="logo-text strong"><b>KUC-APP</b></font>
             </a>
         </div>
         <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
         </a>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="{{ url('/dashboard') }}">
                 <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>

         <li class="menu-label">Web Apps</li>
         @if (auth()->user()->level == 'admin')
             <li>
                 <a href="{{ url('/tagihan-admin') }}">
                     <div class="parent-icon icon-color-9"><i class="bx bx-wallet-alt"></i>
                     </div>
                     <div class="menu-title">Tagihan Admin</div>
                 </a>
             </li>
             <li>
                 <a href="{{ url('/users') }}">
                     <div class="parent-icon icon-color-3"><i class="bx bx-user-check"></i>
                     </div>
                     <div class="menu-title">Validasi User</div>
                 </a>
             </li>
         @endif
         @if (auth()->user()->level == 'kolektor')
             <li>
                 <a href="{{ url('/tagihan-kolektor') }}">
                     <div class="parent-icon icon-color-9"><i class="bx bx-wallet-alt"></i>
                     </div>
                     <div class="menu-title">Tagihan Kolektor</div>
                 </a>
             </li>
         @endif
         {{-- <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon icon-color-6"><i class="bx bx-package"></i>
                 </div>
                 <div class="menu-title"> Barang</div>
             </a>
             <ul>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Barang Masuk</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Barang Keluar</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Transfer Barang</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Adjustment Barang</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Konversi Barang</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon icon-color-4"><i class="bx bx-git-compare"></i>
                 </div>
                 <div class="menu-title">Retur</div>
             </a>
             <ul>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Retur Customer</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Retur Supplier</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon icon-color-5"><i class="bx bx-store-alt"></i>
                 </div>
                 <div class="menu-title">Master</div>
             </a>
             <ul>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Customer</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Supplier</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Plafond</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Sales</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Kendaraan</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Tarif Ritase</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Team KUC</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Jenis Barang</a>
                 </li>
             </ul>
         </li>

         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon icon-color-3"><i class="bx bx-info-square"></i>
                 </div>
                 <div class="menu-title">Logs</div>
             </a>
             <ul>
                 <li> <a href="/absensi"><i class="bx bx-right-arrow-alt"></i>Absensi</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Daftar Gaji</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Sync Faktur </a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Sales Visit</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Order Masuk</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Hasil Tagihan</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Rata-rata Bayar</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>List Promo</a>
                 </li>
                 <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Chat Group</a>
                 </li>
             </ul>
         </li> --}}

         <li class="menu-label">User</li>
         <li>
             <a href="#">
                 <div class="parent-icon icon-color-4"><i class="bx bx-user-circle"></i>
                 </div>
                 <div class="menu-title">Account</div>
             </a>
         </li>
     </ul>
     <!--end navigation-->
 </div>
 <!--end sidebar-wrapper-->
