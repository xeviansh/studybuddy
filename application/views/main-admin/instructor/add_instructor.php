
<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url().'manage-instructor'; ?>">Instructor List</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <?php // print_r($getValue); ?>
            <div class="card-body">
                <?php echo form_open_multipart(); ?>               
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control <?php if(!empty(form_error('name'))){ echo 'is-invalid'; } ?>" value="<?php if(!empty($getValue['name'])){ echo $getValue['name']; } ?>" placeholder="Write a name">
                        <?php echo form_error('name'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" maxlength="10" onkeypress="return onlyNumberKey(event)" name="mobile" id="mobile" class="form-control <?php if(!empty(form_error('mobile'))){ echo 'is-invalid'; } ?>" value="<?php if(!empty($getValue['mobile'])){ echo $getValue['mobile']; }?>" placeholder="Write a Mobile number">
                        <?php echo form_error('mobile'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="mobile" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control <?php if(!empty(form_error('email'))){ echo 'is-invalid'; } ?>" value="<?php if(!empty($getValue['mobile'])){ echo $getValue['email']; }?>" placeholder="Write a Email number">
                        <?php echo form_error('email'); ?>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="mobile" class="form-label">Qualification</label>
                        <input type="text" name="qualification" id="qualification" class="form-control" value="<?php  if(!empty($getValue['qualification'])){ echo $getValue['qualification']; }?>" placeholder="Write a qualification">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="mobile" class="form-label">Image</label>
                        <?php if(!empty($getValue['image'])){?>
                            <a href="<?php echo base_url()?>uploads/instructor_image/<?php echo $getValue['image']; ?>" target="_blank"><span class="badge badge-primary">Show Image</span></a>
                            
                         <?php }?>   
                        <input type="file" name="image" id="image" class="form-control" value="">
                       
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="mobile" class="form-label">Experience</label>
                        <textarea id="summernote" name="experience"><?php if(!empty($getValue['experience'])){  echo $getValue['experience']; } ?></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="mobile" class="form-label">Instructor Achievements</label>
                        <textarea id="achievements" name="achievements"><?php if(!empty($getValue['achievements'])){  echo $getValue['achievements']; } ?></textarea>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="mobile" class="form-label"> &nbsp;</label>
                        <?php if(empty($getValue['id'])){?>
                        <input type="submit" name="create_course" class="btn btn-success" value="Save">
                        <?php }else{?>
                            <input type="submit" name="create_course" class="btn btn-success" value="Update">
                        <?php }?>
                    </div>


                </div>              
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>


</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>


    <script>
      $('textarea#summernote, textarea#achievements').summernote({
        placeholder: 'Write some text',
        tabsize: 2,      
        height: 300,                 // set editor height
        width: "100%",                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
       dialogsInBody: true,
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
