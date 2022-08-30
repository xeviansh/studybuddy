<div class="d-flex align-items-center" style="min-height: 100vh;background:#fbfbfb;">
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 mx-auto" style="min-width: 300px;">
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
if(!empty($this->session->flashdata('danger_notice')))
{
?>							
		<div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		<?php echo $this->session->flashdata('danger_notice'); ?>
		</div>
<?php
}
?> 	
                <div class="card navbar-shadow" style="padding:30px;">
                    <div class="card-header text-center">						<img src="<?php echo base_url(); ?>assets/images/logo/login-logo.png" style="width:80px;" class="avatar-img" alt="Study Buddy">
                        <h3 class="card-title">Create an Account</h3>
                        <p class="card-subtitle">CREATE A NEW ACCOUNT</p>
                    </div>
                    <div class="card-body">
                        <?php echo validation_errors(); ?>
						<?php echo form_open(); ?>						<div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="email">First Name:</label>
                                <div class="input-group input-group-merge">
                                    <input type="text"  name="fname" required class="form-control form-control-prepended <?php if(!empty(form_error('fname'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your First Name" value="<?php echo set_value('fname'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label class="form-label" for="email">Last Name:</label>
                                <div class="input-group input-group-merge">
                                    <input type="text"  name="lname" required class="form-control form-control-prepended <?php if(!empty(form_error('lname'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your Last Name" value="<?php echo set_value('lname'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="form-label" for="email">Email Address:</label>
                                <div class="input-group input-group-merge">
                                    <input  type="email"  name="email" required class="form-control form-control-prepended <?php if(!empty(form_error('email'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your email address" value="<?php echo set_value('email'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
									 <?php echo form_error('email'); ?>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="form-label" for="password">password:</label>
                                <div class="input-group input-group-merge">
                                    <input type="password"  name="password" required class="form-control form-control-prepended <?php if(!empty(form_error('password'))){ echo 'is-invalid'; }else{  } ?>" autocomplete="off" placeholder="Your password" value="<?php echo set_value('password'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fas fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label class="form-label" for="password">Confirm password:</label>
                                <div class="input-group input-group-merge">
                                    <input  type="password"  name="confirm_password" required class="form-control form-control-prepended <?php if(!empty(form_error('confirm_password'))){ echo 'is-invalid'; }else{  } ?>" autocomplete="off" placeholder="Your password" value="<?php echo set_value('confirm_password'); ?>">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fas fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
													
     
							<div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="custom-control custom-checkbox"> 
                                    <input id="terms" type="checkbox" name="terms" class="custom-control-input <?php if(!empty(form_error('terms'))){ echo 'is-invalid'; }else{  } ?>"  value="agree" required>
                                    <label for="terms" class="custom-control-label text-black-70"><a href="#" class="text-black-70" style="text-decoration: underline;">I read and agree to Terms & Conditions</a></label>
                                </div>
                            </div>
							
							<div class="form-group  col-lg-12 col-md-12 col-sm-12"> 
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
							
                        <?php echo form_close() ?>
                    </div>
					<div class="card-footer text-center text-black-50">Already have an account? <a href="<?php echo base_url(); ?>/login">Login</a></div>					</div>
                </div>
            </div>
        </div>