<?php error_reporting(0);
$packagename = $this->db->query('select id,name from mange_package where id="' . $getTestId['course_id'] . '"')->row_array();

?>
<div class="media align-items-center mb-headings">
    <div class="media-body">
        <div class="row">
            <div class="col-md-4">
                <h3>Course Name: <span style="color:red"> <?php echo isset($course_name) ? $course_name : $packagename['name']; ?></span></h3>
            </div>
            <div class="col-md-4">
                <h3>Test Name: <span style="color:red"> <?php echo isset($test_name) ? $test_name : $getTestId['test_name']; ?></span></h3>
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
        <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'question-list/'.$this->uri->segment(2); ?>">Question List</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form role="form" method="post" enctype="multipart/form-data" id="register-form" >

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="passage" class="form-label">Passage</label>
                            <input type="hidden" name="course_id" value="<?php echo isset($courseInfo[0]['id']) ? $courseInfo[0]['id'] : ''; ?> ">
                            <input type="hidden" name="test_id" value="<?php echo isset($testInfo[0]['id']) ? $testInfo[0]['id'] : ''; ?>">
                            <textarea name="passage"   id="passage" class="form-control" > <?php echo $question_list['0']['passage']; ?></textarea>
                            <?php echo form_error('passage'); ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="passage_image" class="form-label">Passage Image</label>
                            <input type="file" name="passage_image" id="passage_image" class="form-control">
                            <img class="image" src="<?php echo base_url() . $question_list['0']['passage_image']; ?>" height="100px" width="100px" style="display: none;">
                        </div>  
                        <div class="col-md-12 form-group">
                            <label for="question" class="form-label">Question</label>
                            <textarea name="question" class="form-control" id="question"><?php echo $question_list['0']['question']; ?></textarea>
                            <?php echo form_error('question'); ?>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="question_image" class="form-label">Question Image</label>
                            <input type="file" name="question_image" id="question_image" class="form-control">
                            <img class="image1" src="<?php echo base_url() . $question_list['0']['question_image']; ?>" height="100px" width="100px" style="display: none;">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option1" id="option1" placeholder="option 1"  class="form-control"  value="<?php echo $question_list['0']['option1']; ?>" 
                        > <?php echo form_error('option1'); ?>

                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option2" id="option2" class="form-control" placeholder="option 2" value="<?php echo $question_list['0']['option2']; ?>"
                      >

                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option3" id="option3"   class="form-control" placeholder="option 3"  value="<?php echo $question_list['0']['option3']; ?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="option4" id="option4" placeholder="option 4"  value="<?php echo $question_list['0']['option4']; ?>"  class="form-control">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name" class="form-label">Correct Answer</label>
                            <input type="text" name="correct_answer" id="correct_answer" placeholder="Correct Answer" value="<?php echo $question_list['0']['correct_answer']; ?>" class="form-control ">
                        
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="explanation" class="form-label">Explanation</label>
                            <textarea  name="explanation" id="explanation" class="form-control"><?php echo $question_list['0']['explanation']; ?>  </textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="expla_video" class="form-label">Explanation  Link</label>
                            <textarea  name="expla_video" id="expla_video" class="form-control"><?php echo !empty($details['expla_video']) ? $details['expla_video'] : ''; ?>  </textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="name" class="form-label">Explanation File</label>
                            <input type="file" name="explanation_file" id="explanation_file" class="form-control">
                            <img class="image2" src="<?php echo base_url() . $question_list['0']['explanation_file']; ?>" height="100px" width="100px" style="display: none;" >
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="form-label">Reference</label>
                            <input type="text" name="reference" id="reference" class="form-control" placeholder="Reference" value="<?php echo $question_list['0']['reference']; ?>" >
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="name" class="form-label">Status</label>
                            <select name="cstatus" id="" class="form-control">
                                <?php foreach (status() as $key => $value) { ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
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
            passage: "required",
            correct_answer: "required",                    
            explanation: "required",
            reference: "required",
            option1:"required",
            option2:"required",
            option3:"required",
             option4:"required",
        },
        messages: {
            passage: "Please enter your passage ",             
            option2: "Please enter your option ",
            option1: "Please enter your option ",
            option3: "Please enter your option",
            option4: "Please enter your option",
            correct_answer: "Please enter your passage",
            explanation: "Please enter explanation",
            reference: "Please enter reference"
        }
        
        // submitHandler: function(form) {
        //     form.submit();
        // }
        
    });
});
</script>

