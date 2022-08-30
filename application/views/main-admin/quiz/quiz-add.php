                            <div class="media align-items-center mb-headings">
                                <div class="media-body">
                                    <h1 class="h2">Add Quiz</h1>
                                </div>
                                <div class="media-right">
                                   <a class="custom_bk_bt"  href="<?php echo base_url().'quiz/list'; ?>">Back</a>
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
         <!---                                   <div class="form-group">
											<img src="<?php echo base_url(); ?>/assets/images/vuejs.png" alt="Card image cap" class="avatar-img rounded">
											</div> --->
                                            <div class="form-group">
                                                <label class="form-label"
                                                       for="title">Quiz Img</label>

											<input type="file" name="quizfile" class="quizfile <?php if(!empty(form_error('quizfile'))){ echo 'is-invalid'; } ?>">
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fas fa-paperclip"></i></span>
											  </div>
											  <input type="text" class="form-control" disabled placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1">
											  <div class="input-group-append">
												<button class="quizbrowse input-group-text btn btn-success" id="basic-addon2"><i class="fas fa-search"></i>  Browse</button>
											  </div>
											</div>
											<?php echo form_error('quizfile'); ?>
                                            </div>


                                            <div class="form-group">
                                                <label class="form-label"
                                                       for="title">Title</label>
                                                <input type="text"
													name="quiz_title"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('quiz_title'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Write a title"
                                                       value="<?php echo set_value('quiz_title'); ?>">
													   <?php echo form_error('quiz_title'); ?>
                                            </div>
											

                                            <div class="form-group mb-0">
                                                <label class="form-label">Description</label>
												    <textarea id="summernote" class=" <?php if(!empty(form_error('quiz_desc'))){ echo 'is-invalid'; } ?>" name="quiz_desc"><?php echo set_value('quiz_desc'); ?></textarea>
													<?php echo form_error('quiz_desc'); ?>
                                            </div>
											
											<div class="form-group">
                                                <label class="form-label"
                                                       for="title">Duration</label>
                                                <input type="number"
												name="quiz_duration"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('quiz_duration'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Enter Duration"
                                                       value="<?php echo set_value('quiz_duration'); ?>">
													   <?php echo form_error('quiz_duration'); ?>
                                            </div>
											
											
											
											
											 <input type="submit" name="create_quiz" class="btn btn-success" value="Save">
										<?php echo form_close(); ?> 
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
