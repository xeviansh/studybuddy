<div class="media align-items-center mb-headings">
    <div class="media-body">
        <div class="row">
            <div class="col-md-7">
                <h1 class="h2"><?php echo $title; ?></h1>
            </div>
            <div class="col-md-5">
                <?php if($this->session->flashdata('msg')){?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('msg'); if(isset($_SESSION['msg'])){ unset($_SESSION['msg']);  } ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="<?php echo base_url();?>course-save-update" method="post" id="package_form" autocomplete="off"
            enctype="multipart/form-data" onsubmit="return validateform()"  name="myForm">

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name">Course Name <span id="cname" class="text-danger"></span></label>
                    <?php if(isset($getValue['id']) && $getValue['id']>0){ ?>
                    <!--id for update-->
                    <input type="hidden" name="tid" value="<?php echo $getValue['id'];?>">
                    <?php } ?>
                    <input type="text" id="name" class="form-control" name="name"
                        value="<?php if(!empty($getValue['name'])){ echo $getValue['name']; }else{ set_value('name'); } ?>" autocomplete="off"
                        placeholder="Course Name" >
                    <?php echo form_error('name'); ?>
                </div>
                <div class="col-md-4 form-group">
                    <label for="name">Course Subtitle <span id="sub_tit" class="text-danger"></span></label>
                    <input type="text" id="subtitle" class="form-control" name="subtitle"
                        value="<?php if(!empty($getValue['subtitle'])){ echo $getValue['subtitle']; }else{ set_value('subtitle'); } ?>"
                        autocomplete="off" placeholder="Course Subtitle">
                    <?php echo form_error('subtitle'); ?>
                </div>
                
                <div class="col-md-4 form-group">
                    <label for="name">Course Price <span id="c_price" class="text-danger"></span></label>
                    <input type="text" id="price" class="form-control" name="price"
                        onkeypress="return onlyNumberKey(event)" maxlength="10"
                        value="<?php if(!empty($getValue['price'])){ echo $getValue['price']; }else{ set_value('price'); } ?>" autocomplete="off"
                        placeholder="Course Price">
                    <?php echo form_error('price'); ?>
                </div>
                <div class="col-md-12 form-group">
                    <label for="mobile" class="form-label">Course Information</label>
                    <textarea id="summernote" name="course_info"
                        class="long_description"><?php if(!empty($getValue['course_info'])){  echo $getValue['course_info']; }else{ set_value('course_info'); } ?></textarea>
                </div>
                <div class="col-md-12 form-group">
                    <label for="mobile" class="form-label">Long Description</label>
                    <textarea id="summernote" name="long_description"
                        class="long_description"><?php if(!empty($getValue['long_description'])){  echo $getValue['long_description']; }else{ set_value('long_description'); } ?></textarea>
                </div>
                <div class="col-md-12 form-group">
                    <label for="mobile" class="form-label">Short Description</label>
                    <textarea id="summernote" name="short_description"
                        class="short_description"><?php if(!empty($getValue['short_description'])){  echo $getValue['short_description']; }else{ set_value('short_description'); } ?></textarea>
                </div>
                <div class="col-md-12">
                   <div class="row" id="doc_row">
                        <div class="col-md-3 form-group">
                            <input type="text" name="syllabus_name[]" id="" class="form-control"
                                placeholder="Syllabus name">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" name="document_name[]" id="" class="form-control"
                                placeholder="Document name">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="file" name="doc_file[]" id="" class="form-control">
                        </div>
                        <div class="col-md-3 form-group">
                            <button type="button" class="btn btn-primary" id="add_row"><span class="material-icons">
                            add_circle_outline
                                </span></button>

                            <button type="button" class="btn btn-danger" id="add_row"><span class="material-icons">
                                clear
                                </span></button>    
                            
                        </div>

                    </div>

                   
                </div>
                <div class="col-md-6 form-group">
                <label for="mobile" class="form-label">Assign Instructor</label>
                    <select name="instructor[]" id="" class="form-control" multiple="multiple" required>                    
                        <?php  foreach($instructor as $value){ ?>
                        <option <?php if(!empty($getValue['instructor'])){ if(in_array($value['id'], explode(',',$getValue['instructor']))){ ?> selected <?php }}?> value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                       <?php  }?>
                    </select>
                </div>  
                <div class="col-md-4 form-group">
                    <label for="mobile" class="form-label">Attachments</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-md-12 form-group">
                    <label for="mentor_info" class="form-label">Mentor Information</label>
                    <textarea id="summernote" name="mentor_info"
                        class="long_description"><?php if(!empty($getValue['mentor_info'])){  echo $getValue['mentor_info']; }else{ set_value('mentor_info'); } ?></textarea>
                </div>
                <div class="form-group  col-md-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <?php foreach (status() as $key => $value) : ?>
                        <option <?php if(!empty($getValue['cstatus']) == $key){?> selected <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label for="status">&nbsp;</label>
                    <input type="submit" class="btn btn-primary" style="margin-top: 26px;" name="submit" id="addPackage">
                    <span class="text-primary" id="msg"></span>
                </div>
            </div>
        </form>
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
    var counter = 1;
    $('#add_row').click(function(){
        var row = '<div class="col-md-3 form-group" id="syl_'+counter+'"><input type="text" name="syllabus_name[]" id="" class="form-control" placeholder="Syllabus name"></div>';

        row += '<div class="col-md-3 form-group" id="doc_'+counter+'"><input type="text" name="document_name[]" id="" class="form-control" placeholder="Document name"></div>';

        row += '<div class="col-md-3 form-group" id="docFile_'+counter+'"><input type="file" name="doc_file[]" id="" class="form-control"></div>';

        row += '<div class="col-md-3" id="clearBtn_'+counter+'"></div>';
        counter ++;  
        $('#doc_row').prepend(row);
     
    });

    function clrbtn(elem){
        let btnVal = $(elem).attr('data-id');
        $('#clearBtn_'+btnVal+', #docFile_'+btnVal+', #doc_'+btnVal+', #syl_'+btnVal+'').remove();
       
    }

    function validateform() {
       var name = $('#name').val();

       var subtitle = $('#subtitle').val();

       var price = $('#price').val();

       if(name == ''){
         $('#name').focus();
         $('#cname').html('Course name is required');
         return false;
       }else{
        $('#cname').html('');
       }

       if(subtitle == ''){
         $('#subtitle').focus();
         $('#sub_tit').html('Subtitle is required');
         return false;
       }else{
        $('#sub_tit').html('');
       }

       if(price == ''){
         $('#price').focus();
         $('#c_price').html('Price is required');
         return false;
       }else{
        $('#c_price').html('');
       }

       
    }

    function deleteRow(elem){
        var btnVal = $(elem).attr('data-id');
        $.ajax({
                type: "POST",
                url: "<?php echo base_url()?>rowDel",
                cache:false,
                data: 'id='+btnVal,
                success: function(response) {
                    if(response == 1){
                        $('#clearBtn_'+btnVal+', #docFile_'+btnVal+', #doc_'+btnVal+', #syl_'+btnVal+'').remove(); 

                    }
                } 
            });
    }
    
</script>