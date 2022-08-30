<div class="d-flex align-items-center" style="min-height: 100vh;background:#fbfbfb;">
            <div class="col-sm-6 col-md-6 col-lg-3 col-12 mx-auto" style="min-width: 250px;">
               <!-- <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                        <img src="< ?php echo base_url(); ?>assets/images/logo/logo-black12.png" class="avatar-img" alt="Study Buddy">
                    </div>
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
		<?php echo $this->session->flashdata('success_notice'); if(isset($_SESSION['success_notice'])){ unset($_SESSION['success_notice']); } ?>
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
		<?php echo $this->session->flashdata('danger_notice'); if(isset($_SESSION['danger_notice'])){ unset($_SESSION['danger_notice']); }?>
		</div>
<?php } ?> 	
                <div class="card navbar-shadow" style="padding:30px;">
                    <div class="card-header text-center">	
				<img src="<?php echo base_url(); ?>assets/images/logo/login-logo.png" style="width:80px;" class="avatar-img" alt="Study Buddy">
                        <h3 class="card-title">Student Login</h3>
                        <p class="card-subtitle" id="errorAttempt">Access your account</p>
                    </div>
                    <div class="card-body" style="padding:15px 0 0 0;">
                        <?php echo validation_errors(); ?>
						<form action="" method="post" id="otp_login">
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
                        </form>
						<div class="login_info"></div>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Don't have an account? <a href="<?php echo base_url(); ?>register">Register</a>
                    </div>
                </div>
            </div>
        </div>
			
<script>
jQuery(document).ready(function($){
$("#otp_login").submit(function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			$('.preloader_box').css('display','flex');
			var form = $('#otp_login').serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url();?>user/otp_login',
				data: form, // serializes the form's elements.
				dataType: "JSON",
				success: function(data)
				{ // var result = $.parseJSON(data);
					console.log(data);
				
				if(data['login_info'] != ''){
					$('#errorAttempt').html(data['login_info']);	
					$('#errorAttempt').addClass('text-danger');
					
				}
				else{
					$('#errorAttempt').html('');
					
				}
				
				
				 if(data['success'] != '' && data['status'] == 1){					
					$('#otp_login').html('<div class="input-group mb-6"><input type="text" class="form-control opt" name="opt" placeholder="Enter Verification Code"><div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div><div class="otp_error red_error"></div></div><div class="row"><div class="col-12"><button type="submit" name="otp_bt" class="btn btn-primary btn-block otp_bt">Continue</button></div></div>');
					
					
					$('.success').html(data['success']);
					$('.login_info').html('');
				}
				else{
					$('.success').html('');
	
					
				} 
					$('.preloader_box').css('display','none'); 			
				}
			}); 
		});
		
		
		$(document).on('click','.otp_bt',function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			$('.preloader_box').css('display','flex');
			var form = $('#otp_login').serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url();?>user/login_otp_verification',
				data: form, // serializes the form's elements.
				dataType: "JSON",
				success: function(data)
				{
					// var result = $.parseJSON(data);
					console.log(data);
				
				if(data['otp_error'] != ''){
				$('.otp_error').html(data['otp_error']);	
					
				}
				else{
					$('.otp_error').html('');
					
				}
				
				
				 if(data['status'] != '' && data['status'] == 1 && data['url'] != '' ){
					
					$('#otp_login').html('<div class="success_error">you can login.</div>');
					window.location.href = data['url'];
					
				}
				
					$('.preloader_box').css('display','none'); 			
				}
			}); 
		});
			
		
		});

$(document).ready(function(){
	$(function() {
		$(this).bind("contextmenu", function(event) {
			event.preventDefault();
			alert('Right click disable in this site!!')
		});
	});
});
</script>