                            <div class="media align-items-center mb-headings">
                                <div class="media-body">
                                    <h1 class="h2">Add Chapter</h1>
                                </div>
                                <div class="media-right">
                                    <a class="custom_bk_bt" href="<?php echo base_url().'lesson/list'  ; ?>">Back</a>
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

							<?php 
							if(!empty($single_lesson)){
							$single_lesson = $single_lesson[0];
						

							?>
                                            <div class="form-group">
                                                <label class="form-label"
                                                       for="title">Title</label>
                                                <input type="text"
													name="lesson_title"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('lesson_title'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Write a title"
                                                       value="<?php echo $single_lesson->lesson_title; ?>">
													   <?php echo form_error('lesson_title'); ?>
                                            </div>
											

                                            <div class="form-group mb-0">
                                                <label class="form-label">Description</label>
												    <textarea id="summernote" class=" <?php if(!empty(form_error('lesson_description'))){ echo 'is-invalid'; } ?>" name="lesson_description"><?php echo $single_lesson->lesson_description; ?></textarea>
													<?php echo form_error('lesson_description'); ?>
                                            </div>
											
											<div class="form-group">
                                                <label class="form-label"
                                                       for="title">Duration</label>
                                                <input type="number"
												name="lesson_duration"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('lesson_duration'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Enter Duration"
                                                       value="<?php echo $single_lesson->lesson_duration; ?>">
													   <?php echo form_error('lesson_duration'); ?>
                                            </div>
											 <input type="submit" name="create_lesson" class="btn btn-success" value="Save">
										<?php 
										}
										echo form_close();
										?> 
                                        </div>
                                    </div>
									
									
							<div class="card">
                                <div class="card-header">
							
                                    <h4 class="card-title">Topics</h4>
                                </div>
                                <div class="card-header">
                                    <a href="<?php echo base_url().'lesson/topic/add/'. $single_lesson->ID; ?>" class="btn btn-outline-secondary">Add Topic <i class="material-icons">add</i></a>
                                </div>
                                <div class="nestable" id="nestable">
                                    <ul class="list-group list-group-fit nestable-list-plain mb-0">
									<form action="" method="post">
									<?php 
									if(!empty($lesson_topics)){ 

											foreach($lesson_topics as $topics){
									?>
									
                                        <li class="list-group-item nestable-item">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                                </div>
                                                <div class="media-body">
                                                    <?php echo $topics->topic_title; ?>
													<input type="hidden" name="topic_id[]" value="<?php echo $topics->ID; ?>">
                                                </div>
                                                <div class="media-right text-right">
                                                    <div style="width:100px">
                                                        <a href="<?php echo base_url() . 'lesson/topic/edit/' . $topics->ID; ?>"  class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
														<a href="<?php echo base_url() . 'lesson/topic/delete/' . $topics->ID . '/' . $quiz_id; ?>"  class="btn btn-primary btn-sm btn-danger"><i class="material-icons">close</i></a>

                                                    </div> 
                                                </div>
                                            </div>
                                        </li>
									<?php
											}
											echo '<input type="submit" class="btn btn-success" name="set_topics" value="Submit">';
											}
											else{
												echo '<div class="nofound">No Found</div>';
											}
									?>	
								</form>									
                                    </ul>
                                </div>
                            </div>
                                </div>


                            </div>
							



	
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>


    <script>
      $('textarea#summernote').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 100,
  toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        //['fontname', ['fontname']],
       // ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        //['view', ['fullscreen', 'codeview']],
        ['help', ['help']]
      ],
      });
    </script>
