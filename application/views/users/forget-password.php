  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <style> 
.red_error {
    color: red;
    display: block;
    width: 100% !important;
    font-size: 19px;
}

.success_error {
    color: green;
    display: block;
    width: 100% !important;
    font-size: 19px;
}

.loader {
    border: 5px solid #cacaca;
    border-radius: 50%;
    border-top: 5px solid #141B78;
    border-bottom: 5px solid #141B78;
    width: 25px;
    height: 25px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}
.preloader_box {
    position: absolute;
    width: 100%;
    background: #a2a2a280;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9999999;
    justify-content: center;
    text-align: center;
    align-items: center;
	display:none;
}
.loader {
    border: 7px solid #717171;
    border-radius: 50%;
    border-top: 7px solid #141B78;
    border-bottom: 7px solid #141B78;
    width: 40px;
    height: 40px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
  </style>


<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>Study</b>Buddy</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
  <div class="preloader_box"><div class="loader"></div></div>
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

      <form id="forget_password"  action=""  method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		  <div class="email_error red_error"></div>
		  <div class="success"></div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url().'login'; ?>">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url().'register'; ?>" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script>
jQuery(document).ready(function($){
$("#forget_password").submit(function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			$('.preloader_box').css('display','flex');
			var form = $('#forget_password').serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url();?>user/forget_password_mail',
				data: form, // serializes the form's elements.
				dataType: "JSON",
				success: function(data)
				{
					// var result = $.parseJSON(data);
					console.log(data);
				
				if(data['email_error'] != ''){
				$('.email_error').html(data['email_error']);	
					
				}
				else{
					$('.email_error').html('');
					
				}
				
				
				 if(data['success'] != '' && data['status'] == 1){
					
					$('#forget_password').html('<div class="input-group mb-3"><input type="text" class="form-control opt" name="opt" placeholder="Enter Otp"><div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div><div class="otp_error red_error"></div></div><div class="row"><div class="col-12"><button type="submit" name="otp_bt" class="btn btn-primary btn-block otp_bt">Continue</button></div></div>');
					
					
					$('.success').html(data['success']);
					$('.email_error').html('');
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
			var form = $('#forget_password').serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url();?>user/otp_verification',
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
				
				
				 if(data['status'] != '' && data['status'] == 1){
					
					$('#forget_password').html('<div class="input-group mb-3"><input type="text" class="form-control pass" name="pass" placeholder="Enter Password"><div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div></div><div class="input-group mb-3"><input type="text" class="form-control confirm_pass" name="confirm_pass" placeholder="Enter Confirm Password"><div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div><div class="password_error red_error"></div></div><div class="row"><div class="col-12"><button type="submit" name="sub_password" class="btn btn-primary btn-block sub_password">Submit</button></div></div>');
					
					
					$('.success').html(data['success']);
					$('.otp_error').html('');
				}
				
					$('.preloader_box').css('display','none'); 			
				}
			}); 
		});
		
		
		
		$(document).on('click','.sub_password',function(e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			$('.preloader_box').css('display','flex');
			var form = $('#forget_password').serialize();

			$.ajax({
				type: "POST",
				url: '<?php echo base_url();?>user/change_otp_password',
				data: form, // serializes the form's elements.
				dataType: "JSON",
				success: function(data)
				{
					// var result = $.parseJSON(data);
					console.log(data);
				
				if(data['password_error'] != ''){
				$('.password_error').html(data['password_error']);	
					
				}
				else{
					$('.password_error').html('');
					
				}
				
				
				 if(data['status'] != '' && data['status'] == 1){
					 
					swal("Success", "Well done, Your password has been changed successfully.", "success")
					
					$('#forget_password').html('<div class="success_error">Your password has been changed successfully.</div>');
					//$('.success').html(data['success']);
					$('.password_error').html('');
				}
				
					$('.preloader_box').css('display','none'); 			
				}
			}); 
		}); 
		
		
		});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
