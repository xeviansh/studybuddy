<?php
if(!empty($result)){
		$user_img = $result->user_img;
		$user_img_path = base_url() . '/assets/images/profile_imgs/' . $user_img;
			
		if(!file_exists($user_img_path) && empty($user_img)){
			$user_img_path = base_url() . '/assets/images/general-imgs/noimagefound.jpg';
		}
		
		
	?>

                        <div class="bg-primary mdk-box js-mdk-box mb-0" style="height: 192px;" data-effects="parallax-background blend-background">
                            <div class="mdk-box__bg" style="visibility: visible;">
                                <div class="mdk-box__bg-front" style="background-image: url(&quot;assets/images/1280_rsz_aman-dhakal-205796-unsplash.jpg&quot;); background-position: center center; transform: translate3d(0px, 0px, 0px); will-change: opacity; opacity: 1; margin-top: -59.6409px;"></div>
                            <div class="mdk-box__bg-rear" style="transform: translate3d(0px, 0px, 0px); will-change: opacity; opacity: 0; margin-top: -59.6409px;"></div></div>
                        </div>
						
						
                        <div class="container-fluid page__container d-flex align-items-end position-relative mb-4">
                            <div class="avatar avatar-xxl position-absolute bottom-0 left-0 right-0">
                                <img src="<?php echo $user_img_path; ?>" alt="avatar" class="avatar-img rounded-circle border-3">
                            </div>
                            <ul class="nav nav-tabs-links flex" style="margin-left: 148px;">
                                <li class="nav-item">
                                    <a href="student-profile.html" class="nav-link active">Profile</a>
                                </li>
                            </ul>
                        </div>

                        <div class="container-fluid page__container mb-3">
                            <div class="row flex-sm-nowrap">
 
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                       <div class="">
                         <?php echo validation_errors(); ?>
						<?php echo form_open_multipart(); ?>
						<div class="row">
						<div class="col-md-6">
								 <div class="form-group">
									<label class="form-label" for="email">User ID:</label>
									<div class="input-group input-group-merge">
										<input type="text"  name="fname" required class="form-control form-control-prepended"   value="<?php echo $result->student_userId; ?>" disabled>
										<div class="input-group-prepend">
											<div class="input-group-text">
												<span class="far fa-user"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label class="form-label" for="title">User Img</label>

								<input type="file" name="profile_img" class="quizfile ">
								<div class="input-group mb-3">
								<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
								</div>
								<input type="text" class="form-control" disabled="" placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1">
								<div class="input-group-append">
								<button class="quizbrowse input-group-text btn btn-primary" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
								</div>
								</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								 <div class="form-group">
									<label class="form-label" for="email">First Name:</label>
									<div class="input-group input-group-merge">
										<input type="text"  name="fname" required class="form-control form-control-prepended <?php if(!empty(form_error('fname'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your First Name" value="<?php echo $result->fname; ?>">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<span class="far fa-user"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="email">Last Name:</label>
									<div class="input-group input-group-merge">
										<input type="text"  name="lname" required class="form-control form-control-prepended <?php if(!empty(form_error('lname'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your Last Name" value="<?php echo $result->lname; ?>">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<span class="far fa-user"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="email">Your email address:</label>
									<div class="input-group input-group-merge">
										<input  type="email"  name="email" required class="form-control form-control-prepended <?php if(!empty(form_error('email'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your email address" value="<?php echo $result->email; ?>">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<span class="far fa-envelope"></span>
											</div>
										</div>
										 <?php echo form_error('email'); ?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="email">Your phone no:</label>
									<div class="input-group input-group-merge">
										<input  type="number"  name="phone" required class="form-control form-control-prepended <?php if(!empty(form_error('phone'))){ echo 'is-invalid'; }else{  } ?>"  autocomplete="off" placeholder="Your phone no." value="<?php echo $result->phone; ?>">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<span class="far fa-envelope"></span>
											</div>
										</div>
										 <?php echo form_error('phone'); ?>
									</div>
								</div>  	
							</div>
						</div>	

							<div class="form-group "> 
                                <button type="submit" name="updateprofile" class="btn btn-primary btn-block">Submit</button>
                            </div>
							
                        <?php echo form_close() ?>
                                            </div>
                                        </div>
                                    </div>
                                   
 
                                </div>
                            </div>
                        </div>
<?php
}
?>