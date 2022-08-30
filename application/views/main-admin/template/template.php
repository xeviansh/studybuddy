<?php
$this->load->view('main-admin/template/header');
if($this->session->userdata('is_admin_login')==true){}
else
    redirect('/main-admin');
?>
<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">
    <!-- Header -->
    <div id="header" data-fixed class="mdk-header js-mdk-header mb-0">
        <div class="mdk-header__content">
            <!-- Navbar -->
            <nav id="default-navbar" class="navbar navbar-expand navbar-dark bg-primary m-0">
                <div class="container-fluid">
                    <!-- Toggle sidebar -->
                    <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                        <span class="material-icons">menu</span>
                    </button>

                    <!-- Brand -->
                    <a href="javascript:void(0)" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>/assets/images/logo/logo-white22.png" style="width:170px;"
                            class="avatar-img" alt="Study Buddy">
                    </a>
                    <div class="flex"></div>
                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img
                                    src="<?php echo base_url(); ?>/assets/images/people/50/guy-6.jpg" alt="Avatar"
                                    class="rounded-circle" width="40"></a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item" href="<?php echo base_url() . '/admin/logout'; ?>">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>


        </div>
    </div>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">
        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">
                <div class="container-fluid ">
                    <?php $this->load->view($main_content); ?>
                </div>
            </div>

            <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                <div class="mdk-drawer__content ">
                    <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                        <div class="sidebar-p-y">
                            <div class="sidebar-heading">APPLICATIONS</div>
                            <div class="main_nav">
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="<?php echo base_url() . 'admin/dashboard'; ?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            Dashboard
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="<?php echo base_url() . 'manage-student'; ?>">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">perm_identity</i>
                                            Manage Student
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="<?php echo base_url().'manage-instructor';?>">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">perm_identity</i>
                                            Manage Instructor
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="<?php echo base_url() . 'test-details'; ?>">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">perm_identity</i>
                                            Test Details
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                            href="<?php echo base_url() . 'question-hub'; ?>">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">perm_identity</i>
                                          Question Hub
                                        </a>
                                    </li>                                  

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button collapsed" data-toggle="collapse"
                                            href="#messages_menu" aria-expanded="false">
                                            <i
                                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                            Setting
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="messages_menu">

                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                    href="<?php echo base_url() . 'package'; ?>">
                                                    <span class="sidebar-menu-text">Manage Course</span>
                                                </a>
                                            </li>     
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                    href="<?php echo base_url() . 'section'; ?>">
                                                    <span class="sidebar-menu-text">Manage Section</span>
                                                </a>
                                            </li>                                           
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view('main-admin/template/footer');
?>