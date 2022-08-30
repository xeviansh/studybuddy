<div class="d-flex align-items-center" style="min-height: 100vh">
            <div class="col-sm-6 col-md-6 col-lg-3 col-12 mx-auto max-dashboard" style="min-width:250px;">
                <!--<div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="<?php echo base_url(); ?>/assets/images/logo/primary.svg" class="avatar-img rounded-circle" alt="LearnPlus">
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="student-dashboard.html" class="navbar-brand m-0">StudyBuddy</a>
                </div>-->
				<?php
//============================Success=====================================
if(!empty($this->session->flashdata('success_notice')))
{
?>							
		<div class="alert alert-dismissible bg-success text-white border-0 fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<?php echo $this->session->flashdata('success_notice'); ?>
		</div>
<?php
}

//============================Danger=====================================
if($this->session->flashdata('danger_notice'))
{
?>							
		<div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<?php echo $this->session->flashdata('danger_notice'); 	if(isset($_SESSION['danger_notice'])){ unset($_SESSION['danger_notice']);} ?>
		</div>
<?php
}
?> 	



                <div class="card navbar-shadow" style="padding:30px;">
                    <div class="card-header text-center">
                        <img src="<?php echo base_url(); ?>/assets/images/logo/login-logo.png" style="width:80px;" class="avatar-img" alt="Study Buddy">
                        <h3 class="card-title">Study Buddy</h3>
                        <p class="card-subtitle">Access your admin account</p>
                    </div>
                    <div class="card-body" style="padding:15px 0 0 0;">
                        <?php echo validation_errors(); ?>
						<?php echo form_open(); ?>
                            <div class="form-group">
                                <label class="form-label" for="email">Email Address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email" type="email" required="" name="email" class="form-control form-control-prepended <?php if(!empty(form_error('email'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your email address" value="<?php echo set_value('email'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password" type="password" required="" name="password" class="form-control form-control-prepended <?php if(!empty(form_error('password'))){ echo 'is-invalid'; }else{  } ?>" autocomplete="off" placeholder="Your password" value="<?php echo set_value('password'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fas fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Go to <a href="<?php echo base_url(); ?>">Main Website</a>
                    </div>
                </div>
            </div>
        </div>