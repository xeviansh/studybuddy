<?php 
// echo "<pre>";
// print_r($details);
?>
<div class="media align-items-center mb-headings">
            <div class="media-body">
                <div class="row">
                <div class="media-body">
                <h1 class="h2"><?php echo $title; ?></h1>
            </div>
           
            <div class="col-md-4">
                <?php
                if ($this->session->flashdata('msg')) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('msg');
                        if (isset($_SESSION['msg'])) {
                            unset($_SESSION['msg']);
                        } ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'question-hub'; ?>">Question List</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form role="form" method="post" enctype="multipart/form-data" id="register-form" >

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name" class="form-label">Course</label>
                            <select name="course_id" id="course_id" class="form-control">
                                <option value="0">Select Course</option>
                                <?php foreach($getCourseName as $value){ ?>
                                <option <?php if($value['id'] ==  !empty($details['course_id'])){ ?> selected <?php }?> value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="name" class="form-label">Section</label>
                            <select name="section_id" id="section_id" class="form-control">
                                <option value="0">Select Section</option>
                                <?php foreach($getSectionName as $value){ ?>
                                <option <?php if($value['id'] ==  !empty($details['section_id'])){ ?> selected <?php }?> value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="passage" class="form-label">Passage</label>                          
                            <textarea name="passage" id="passage" class="form-control" > <?php echo !empty($details['passage']) ?  $details['passage'] : '';  ?></textarea>
                            <?php echo form_error('passage'); ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="passage_image" class="form-label">Passage Image</label>
                            <input type="file" name="passage_image" id="passage_image" class="form-control">
                            <?php if (!empty($details['passage_image'])): ?>
                            <img class="image" src="<?php echo base_url().'uploads/question_bank/'. $details['passage_image']; ?>" height="100px" width="100px">
                            <?php endif; ?>
                        </div>  
                        <div class="col-md-12 form-group">
                            <label for="question" class="form-label">Question</label>
                            <textarea name="question" class="form-control" id="question"><?php echo !empty($details['question']) ? $details['question'] : '' ; ?></textarea>
                            <?php echo form_error('question'); ?>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="question_image" class="form-label">Question Image</label>
                            <input type="file" name="question_image" id="question_image" class="form-control">
                            <?php if (!empty($details['question_image'])): ?>
                            <img class="image1" src="<?php echo base_url().'uploads/question_bank/'. $details['question_image']; ?>" height="100px" width="100px" >
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option1" id="option1" placeholder="option 1"  class="form-control"  value="<?php echo !empty($details['option1']) ? $details['option1'] :''; ?>" 
                        > <?php echo form_error('option1'); ?>

                        </div>
                        <div class="col-md-6 form-group">
                        <input type="text" name="option2" id="option2" class="form-control" placeholder="option 2" value="<?php echo !empty($details['option2']) ? $details['option2'] : ''; ?>"
                      >

                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option3" id="option3"   class="form-control" placeholder="option 3"  value="<?php echo !empty($details['option3']) ? $details['option3'] : ''; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option4" id="option4" placeholder="option 4"  value="<?php echo !empty($details['option4']) ? $details['option4'] : ''; ?>"  class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name" class="form-label">Correct Answer</label>
                            <input type="text" name="correct_answer" id="correct_answer" placeholder="Correct Answer" value="<?php echo !empty($details['correct_answer']) ? $details['correct_answer'] : ''; ?>" class="form-control ">
                        
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="explanation" class="form-label">Explanation</label>
                            <textarea  name="explanation" id="explanation" class="form-control"><?php echo !empty($details['explanation']) ? $details['explanation'] : ''; ?>  </textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="expla_video" class="form-label">Explanation Link</label>
                            <input type="text"  name="expla_video" id="expla_video" class="form-control" value="<?php echo !empty($details['expla_video']) ? $details['expla_video'] : ''; ?> ">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="name" class="form-label">Explanation File</label>
                            <input type="file" name="explanation_file" id="explanation_file" class="form-control">
                            <?php if (!empty($details['explanation_file'])): ?>
                            <img class="image2" src="<?php echo base_url().'uploads/question_bank/'. $details['explanation_file']; ?>" height="100px" width="100px" >
                            <?php endif; ?>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="form-label">Reference</label>
                            <input type="text" name="reference" id="reference" class="form-control" placeholder="Reference" value="<?php echo !empty($details['reference']) ? $details['reference'] : ''; ?>" >
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="form-label">Status </label>
                            <select name="cstatus" id="" class="form-control">
                                <?php foreach (status() as $key => $value) { if($key != 3):?>
                                    <option <?php if(!empty($details['cstatus']) && $details['cstatus']==$key ){?> selected <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php endif; } ?>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="form-label">&nbsp;</label>
                            <button type="submit" class="btn btn-primary" name="submit" style="margin-top:23px">Save</button>
                        </div>
                    </div>
                </form>
                <!-- <?php echo form_close(); ?> -->
            </div>
        </div>
    </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>


<script>
    $('textarea#summernote, textarea#achievements').summernote({
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
<script>
    $('#question_image').change(function() {
        var curElement = $('.image1');
        curElement.css('display', 'block');
        console.log(curElement);
        var reader = new FileReader();

        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            curElement.attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>
<script>
    $('#passage_image').change(function() {
        var curElement = $('.image');
        curElement.css('display', 'block');
        console.log(curElement);
        var reader = new FileReader();

        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            curElement.attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>
<script>
    $('#explanation_file').change(function() {
        var curElement = $('.image2');
        curElement.css('display', 'block');
        console.log(curElement);
        var reader = new FileReader();

        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            curElement.attr('src', e.target.result);
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>


$(document).ready(function($) {
        
        $("#register-form").validate({
        rules: {
        
            correct_answer: "required",                    
            explanation: "required",
        
            option1:"required",
            option2:"required",
            option3:"required",
             option4:"required",
        },
        messages: {
                 
            option2: "Please enter your option ",
            option1: "Please enter your option ",
            option3: "Please enter your option",
            option4: "Please enter your option",
            correct_answer: "Please enter your passage",
          
          
        }
        
        // submitHandler: function(form) {
        //     form.submit();
        // }
        
    });
});
</script>

