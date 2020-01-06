

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Foto Profile -->
        <div class="">
            <img src="<?= base_url('assets/img/profile/profile.png') ?>" alt="" width="200" class="rounded">
            <br>
            <div class="text-center">
                <p>User</p>
            </div>
        </div>

        <!-- Nav Item - Dashboard -->
        <?php
            //$group_id = 2;
            $menu = $this->db->select('')->from('user_menu')->join('user_access_menu', 'user_menu.id = user_access_menu.menu_id')->where('user_group_id', $group_id)->order_by('menu_id', 'ASC')->get()->result_array();
        ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <?php foreach ($menu as $m) { ?>
        <div class="sidebar-heading">
            <?= $m['menu'] ?>
            <?php $menuId = $m['menu_id'];
                $subMenu = $this->db->select('*')->where('menu_id', $menuId)->where('is_active', 1)->get('user_sub_menu')->result_array();
                foreach ($subMenu as $sm) { ?>
                    <?php if ($title == $sm['title']) : ?>
                        <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <span><?= $sm['title']; ?></span></a>
                        </li>
                <?php } ?>
                <hr class="sidebar-divider d-none d-md-block">
        </div>
        <?php } ?>

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
        <!-- End of Sidebar -->
