<div class="media align-items-center mb-headings">
    <div class="media-body">
         <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url().'topic-list/'.$this->uri->segment(2); ?>">Topic List</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?php echo form_open_multipart(); ?>               
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name" class="form-label">Name <span id="eerr" class="text-danger"></span></label>
                        <input type="text" name="topic_name" id="topic_name" class="form-control" value="<?php if(!empty($getValue['topic_name'])){ echo $getValue['topic_name']; } ?>" placeholder="Write a topic name" autocomplete="off">
                    </div>

					<div class="col-md-6 form-group">
                        <label for="mobile" class="form-label">Image</label>
                        <?php if(!empty($getValue['file'])){?>
                            <a href="<?php echo base_url()?>uploads/topic/<?php echo $getValue['file']; ?>" download><span class="badge badge-primary">Show Image</span></a>
                            
                         <?php }?>   
                        <input type="file" name="image" id="image" class="form-control" value="">                       
                    </div>
                    
					<div class="col-md-12 form-group">
                        <label for="mobile" class="form-label">Description</label>
                        <textarea id="summernote" name="description"><?php if(!empty($getValue['description'])){  echo $getValue['description']; } ?></textarea>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="mobile" class="form-label"> &nbsp;</label>
                        <?php if(empty($getValue['id'])){?>
                        <input type="submit" name="add_topic" id="add_topicBtn" class="btn btn-success" value="Save">
                        <?php }else{?>
                            <input type="submit" name="add_topic" class="btn btn-success" value="Update">
                        <?php }?>
                    </div>
                </div>              
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('#add_topicBtn').click(function(){
        var topicName = $('#topic_name').val();
        if(topicName == ''){
            $('#topic_name').focus();
            $('#eerr').html('Topic name is required');

            setTimeout(function() {
                $('#eerr').fadeOut();
                },3000);
           
            return false;
        }
    })
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>


    <script>
      $('textarea#summernote, textarea#achievements').summernote({
        placeholder: 'Write some text',
        tabsize: 2,      
        height: 300,                 // set editor height
        width: "90%",                 // set editor height
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

