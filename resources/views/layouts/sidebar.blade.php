<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.dash') }}" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        {{-- <span class="caret"></span> --}}
                    </a>
                </li>
                <li
                    class="nav-item {{ Request::is('admin/karyawan') ? 'active' : '' }} {{ Request::is('admin/gaji') ? 'active' : '' }} {{ Request::is('admin/detail') ? 'active' : '' }} {{ Request::is('admin/absensi') ? 'active' : '' }} {{ Request::is('admin/potongan') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Tables</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('admin/karyawan') ? 'active' : '' }}">
                                <a href="{{ route('karyawan.karyawan') }}">
                                    <span class="sub-item">Karyawan</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/gaji') ? 'active' : '' }}">
                                <a href="{{ route('gaji.gaji') }}">
                                    <span class="sub-item">Gaji</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/potongan') ? 'active' : '' }}">
                                <a href="{{ route('potongan.potongan') }}">
                                    <span class="sub-item">Potongan</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/absensi') ? 'active' : '' }}">
                                <a href="{{ route('absensi.absensi') }}">
                                    <span class="sub-item">Absensi</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/detail') ? 'active' : '' }}">
                                <a href="{{ route('detail.detail') }}">
                                    <span class="sub-item">Slip Gaji</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
