<!-- Sidebar -->
<?php if ($this->session->userdata("role_id") == "1") { ?>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-trash-restore"></i>
            </div>
            <div class="sidebar-brand-text mx-1">Bank Sampah</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/index'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/nasabah'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Nasabah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/sampah'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Jenis Sampah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/setor'); ?>">
                <i class="fas fa-fw fa-trash"></i>
                <span>Setor Sampah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/verifikasi'); ?>">
                <i class="fas fa-fw fa-money-check-alt"></i>
                <span>Verifikasi Penarikan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

<?php } else if ($this->session->userdata("role_id") == "3") { ?>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-trash-restore"></i>
            </div>
            <div class="sidebar-brand-text mx-1">Bank Sampah</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Super Admin
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('superadm/index'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('superadm/nasabah'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Nasabah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('superadm/sampah'); ?>">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Jenis Sampah</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('superadm/m_user'); ?>">
                <i class="fas fa-fw fa-user-edit"></i>
                <span>Management User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('superadm/transaksi'); ?>">
                <i class="fas fa-fw fa-trash"></i>
                <span>Transaksi</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

<?php } else if ($this->session->userdata("role_id") == "2") { ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('nasabah/index_nasabah'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-trash-restore"></i>
            </div>
            <div class="sidebar-brand-text mx-1">Bank Sampah</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Nasabah
        </div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('nasabah/index_nasabah'); ?>">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>My Profile</span></a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/editProfile'); ?>">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>Edit Profile</span></a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('nasabah/cek_saldo'); ?>">
                <i class="fas fa-fw fa-money-check-alt"></i>
                <span>Cek Saldo</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>


<?php } ?>

<!-- End of Sidebar -->