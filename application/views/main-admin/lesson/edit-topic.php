<style>
.hide_box{
	display:none;
}
.upload_video,
.upload_file {
    position: absolute;
    visibility: hidden;
}	
</style>        
<?php

if(!empty($topic)){
$topic = $topic[0];
$topic_title = $topic->topic_title;
$topic_category = $topic->topic_category;
$quiz_id = $topic->quiz_id;
$youtube_link = $topic->youtube_link;
$video = $topic->video;
$document = $topic->document;
}
?>	
						<div class="media align-items-center mb-headings">
                                <div class="media-body">
                                    <h1 class="h2">Edit Topic</h1>
                                </div>
                                <div class="media-right">
                                    <a  class="custom_bk_bt" href="javascript:window.history.go(-1);">Back</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
									<div class="card">
									<div class="card-header">
										<h4 class="card-title">Information</h4>
									</div>
									<div class="card-body">									
									<?php echo form_open_multipart(); ?>
									
									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Title:</label>
                                        <div class="col-sm-9">
											<input type="text"
											name="topic_title"
											id="title"
											class="form-control <?php if(!empty(form_error('topic_title'))){ echo 'is-invalid'; } ?>"
											placeholder="Write a title"
											value="<?php if(!empty($topic_title)){ echo $topic_title; } ?>">
											<?php echo form_error('topic_title'); ?>
                                        </div>
                                    </div>



									<div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Choose Option:</label>
                                        <div class="col-sm-9">
											<select class="form-control <?php if(!empty(form_error('topic_category'))){ echo 'is-invalid'; } ?>" id="topic_category" name="topic_category">
											<option>Choose Category</option>
												<option value="you_tube_link_bx" <?php if(!empty($topic_category)){ if($topic_category=='you_tube_link_bx'){ echo 'selected'; }} ?>>You Tube</option>
												<option value="upload_video_bx" <?php if(!empty($topic_category)){ if($topic_category=='upload_video_bx'){ echo 'selected'; }} ?> >Upload Video</option>
												<option value="upload_document_bx"  <?php if(!empty($topic_category)){ if($topic_category=='upload_document_bx'){ echo 'selected'; }} ?>>Upload Document</option>
												<option value="choose_quiz_bx" <?php if(!empty($topic_category)){ if($topic_category=='choose_quiz_bx'){ echo 'selected'; }} ?> >Quiz</option>
											</select>
											<?php echo form_error('topic_category'); ?>
                                        </div>
                                    </div>
									
									

									
									
									
									
									
									
									
									
									
									<div class="">								
									<div class="form-group row upload_video_bx hide_box">
                                        <label for="quiz_image" class="col-sm-3 col-form-label form-label">Upload Video:</label>
                                        <div class="col-sm-9 col-md-9">
												<div class="form-group row">
												<?php
												if(!empty($video) && file_exists("assets/topic-files/" .$video)){
												?>
												<div class="col-sm-12 col-md-12">
												<video width="100%" height="500" controls>
												<source src="<?php echo base_url(); ?>/assets/topic-files/<?php echo $video; ?>" type="video/mp4">
												Your browser does not support the video tag.
												</video>
												<a href="<?php echo base_url(); ?>/assets/topic-files/<?php echo $video; ?>" download>Download Video</a>
												</div>


												<?php
												}
												?>
												</div>
                                            <div class="custom-file">
                                                <input type="file" name="upload_video" class="upload_video <?php if(!empty(form_error('upload_video'))){ echo 'is-invalid'; } ?>">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
												  </div>
												  <input type="text" class="form-control" disabled placeholder="Upload Video" aria-label="Upload File" aria-describedby="basic-addon1">
												  <div class="input-group-append">
													<button class="videobrowse input-group-text btn btn-primary" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
												  </div>
												</div>
											<?php echo form_error('upload_video'); ?>
                                            </div>
                                        </div>
                                    </div>
									</div>
									
									<div class="form-group row upload_document_bx hide_box">
                                        <label for="quiz_image" class="col-sm-3 col-form-label form-label">Upload Document:</label>
                                        <div class="col-sm-9 col-md-9">
											<?php
											if(!empty($document) && file_exists("assets/topic-files/" .$document))
											{
											?>
												<div class="col-sm-12 col-md-12">
												<a href="<?php echo base_url(); ?>/assets/topic-files/<?php echo $document; ?>" download>Download Video</a>
												</div>


											<?php
												}
											?>
                                            <div class="custom-file">
                                                <input type="file" name="upload_file" class="upload_file <?php if(!empty(form_error('upload_file'))){ echo 'is-invalid'; } ?>">
												<div class="input-group mb-3">
												  <div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
												  </div>
												  <input type="text" class="form-control" disabled placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1">
												  <div class="input-group-append">
													<button class="filebrowse input-group-text btn btn-primary" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
												  </div>
												</div>
											<?php echo form_error('upload_file'); ?>
                                            </div>
                                        </div>
                                    </div>

									<div class="form-group row you_tube_link_bx hide_box">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Youtube Video Link:</label>
                                        <div class="col-sm-9">
											<input type="text" 
											name="youtube_link"
											id="title"
											value="<?php echo $youtube_link; ?>"
											class="form-control <?php if(!empty(form_error('youtube_link'))){ echo 'is-invalid'; } ?>"
											placeholder="youtube link">
											<?php echo form_error('youtube_link'); ?>
                                        </div>
                                    </div>


									<div class="form-group row choose_quiz_bx hide_box">
									<label for="quiz_title" class="col-sm-3 col-form-label form-label">Choose Quiz:</label>
                                        <div class="col-sm-9">
										<div class="row">
											<div class="col-md-12">
												<select class="form-control" id="quiz_id" name="quiz_id">
													<option>Choose Quiz</option>
													<?php
													if(!empty($quiz_list)){
														foreach($quiz_list as $print){
														?>
														<option <?php if($quiz_id == $print->ID){ echo 'selected'; } ?> value="<?php echo $print->ID; ?>" ><?php echo $print->quiz_title; ?></option>
														<?php
													}
													}
													?>
												</select>
											</div>
										</div>
                                        </div>
                                    </div>
												
									<input type="submit" name="add_topic" class="btn btn-success" value="Submit">												
										<?php echo form_close(); ?> 

									</div>
                                    </div>
                                </div>
                            </div>
							

<script>
$(document).ready(function(){
    $("#topic_category").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".hide_box").not("." + optionValue).hide();
                $("." + optionValue).css('display','flex');
            } else{
                $(".hide_box").hide();
            }
        });
    }).change();
});
</script>