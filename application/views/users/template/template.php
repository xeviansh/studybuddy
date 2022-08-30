<?php
$this->load->view('users/template/header');
if($this->session->userdata('is_user_login')==true){}
else
    redirect('/login');
if(!empty($this->current_user)){
		$current_user = $this->current_user;
		$current_user_img = $current_user->user_img;
		$current_user_img_path = base_url() . '/assets/images/profile_imgs/' . $current_user_img;
			
		if(!file_exists($current_user_img_path) && empty($current_user_img)){
			$current_user_img_path = base_url() . '/assets/images/general-imgs/noimagefound.jpg';
		}
		
}
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
                    <a href="<?php echo base_url(); ?>dashboard" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>assets/images/logo/logo-white22.png" style="width:170px;"
                            class="avtar-img" alt="LearnPlus">
                    </a>


                    <div class="flex"></div>



                    <!-- Menu -->
                    <ul class="nav navbar-nav flex-nowrap">
                        <!-- User dropdown -->
                        <li class="nav-item dropdown ml-1 ml-md-3">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img
                                    src="<?php if(!empty($current_user_img_path)){ echo $current_user_img_path; } ?>"
                                    alt="Avatar" class="rounded-circle" width="40" height="40"></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!--   <a class="dropdown-item"
                                           href="<?php echo base_url().'student-profile'; ?>">
                                            <i class="material-icons">edit</i> Edit Account
                                        </a>-->
                                <a class="dropdown-item" href="<?php echo base_url().'student-profile'; ?>">
                                    <i class="material-icons">person</i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url() . '/user/logout'; ?>">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </div>
                        </li>
                        <!-- // END User dropdown -->

                    </ul>
                    <!-- // END Menu -->
                </div>
            </nav>
            <!-- // END Navbar -->

        </div>
    </div>
    
    <div class="mdk-header-layout__content">
        <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
            <div class="mdk-drawer-layout__content page ">
                <?php $this->load->view($main_content); ?>
                <!-- </div> -->
            </div>
            <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                <div class="mdk-drawer__content ">
                    <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                        <div class="sidebar-p-y">
                            <div class="sidebar-heading">APPLICATIONS</div>
                            <ul class="sidebar-menu sm-active-button-bg">
                                <div class="main_nav">
                                    <ul class="sidebar-menu sm-active-button-bg">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                                href="<?php echo base_url() . 'dashboard'; ?>">
                                                <i
                                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                                href="<?php echo base_url() . 'browse-courses'; ?>">
                                                <i
                                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i>
                                                Courses
                                            </a>
                                        </li>
                                     
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo base_url(); ?>exam">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Exam
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo base_url(); ?>practice">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Practice
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="<?php echo base_url(); ?>quiz">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Quiz
                                            </a>
                                        </li>

                                        <!-- take-a-quiz -->
                                        <!-- <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                                href="<?php echo base_url(); ?>quiz-result-list">
                                                <i
                                                    class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i>
                                                Quiz Results
                                            </a>
                                        </li>
                                         -->
                                        
                                    </ul>

                            </ul>
                        </div>

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

<?php
$this->load->view('users/template/footer');
?>