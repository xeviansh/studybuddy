
<?php  error_reporting(0);?>
<div class="media align-items-center mb-headings">
    <div class="media-body">
     <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm"  href="<?php echo base_url().'manage-student'  ; ?>">Student List</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <?php // print_r($getValue); ?>
            <div class="card-body">
                <?php echo form_open_multipart(); ?>               
                <div class="row">
                    <!-- <div class="col-md-4 form-group">
                        <label for="student_id" class="form-label">Student Id</label>
                        <input type="text" name="student_id"  class="form-control" 
                        value="<?php echo $getValue['student_userId']; ?>" hidden >
                    </div> -->
                   <div class="col-md-4 form-group">
                        <label for="fname" class="form-label"> First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control <?php if(!empty(form_error('name'))){ echo 'is-invalid'; } ?>"
                         value="<?php if(!empty($getValue['fname'])){ echo $getValue['fname']; } ?>" placeholder="Enter  name" required>
                        <?php echo form_error('lname'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="lname" class="form-label"> Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control <?php if(!empty(form_error('name'))){ echo 'is-invalid'; } ?>"
                         value="<?php if(!empty($getValue['lname'])){ echo $getValue['lname']; } ?>" placeholder="Enter  name" required>
                        <?php echo form_error('lname'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="phone" class="form-label">Mobile</label>
                        <input type="text" name="phone" id="phone"  required   onkeypress="return onlyNumberKey(event)" maxlength="10"
                        class="form-control <?php if(!empty(form_error('phone'))){ echo 'is-invalid'; } ?>"                
                        value="<?php if(!empty($getValue['phone'])){ echo $getValue['phone']; }  ?>"
                        >
                        <?php echo form_error('phone'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email"
                         class="form-control <?php if(!empty(form_error('email'))){ echo 'is-invalid'; } ?>"
                         value="<?php if(!empty($getValue['email'])){ echo $getValue['email']; }  ?>"
                         >
                         <span id="email_result"></span>
                        <?php echo form_error('email'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="">                        
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="status" class="form-label">Status</label>
                      <select name="status" id="" class="form-control">                          
                          <?php foreach(status() as $key => $value){?>
                            <option <?php if($getValue['status'] == $key){ echo "selected"; }?> 
                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php }?>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <?php if(empty($getValue['id'])){?>
                        <input type="submit" name="create_course" class="btn btn-success" value="Update" id="update_btn">
                        <?php }else{?>
                            <input type="submit" name="create_course" class="btn btn-success" value="Save">
                        <?php }?>
                    </div>
                  </div>              
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>


</div>
<script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Student/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email,student_id:'<?php echo $student_id;?>'},  
                     success:function(data){

                        if(data == 1){                          
                            $('#email_result').html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Please enter valid email</span></label>');
                            $('#update_btn').prop('disabled', true);
                        }else if(data == 2){                           
                            $('#email_result').html('<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>');
                            $('#update_btn').prop('disabled', true);
                        }else{
                            $('#email_result').html('<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>');
                            $('#update_btn').prop('disabled', false);
                        }
                       
                     }  
                });  
           }  
      });  
 });  
</script>


