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


                                            <div class="form-group">
                                                <label class="form-label"
                                                       for="title">Title</label>
                                                <input type="text"
													name="lesson_title"
                                                       id="title"
                                                       class="form-control <?php if(!empty(form_error('lesson_title'))){ echo 'is-invalid'; } ?>"
                                                       placeholder="Write a title"
                                                       value="<?php echo set_value('lesson_title'); ?>">
													   <?php echo form_error('lesson_title'); ?>
                                            </div>
											

                                            <div class="form-group mb-0">
                                                <label class="form-label">Description</label>
												    <textarea id="summernote" class=" <?php if(!empty(form_error('lesson_description'))){ echo 'is-invalid'; } ?>" name="lesson_description"><?php echo set_value('lesson_description'); ?></textarea>
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
                                                       value="<?php echo set_value('lesson_duration'); ?>">
													   <?php echo form_error('lesson_duration'); ?>
                                            </div>
											 <input type="submit" name="create_lesson" class="btn btn-success" value="Save">
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
