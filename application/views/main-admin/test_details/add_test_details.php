<?php  error_reporting(0);?>
<div class="media align-items-center mb-headings">
    <div class="media-body">
         <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url().'test-details'; ?>">Test List</a>
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
                        <label for="name" class="form-label">Test type</label>
                       <select name="test_type"  id="test_type" class="form-control <?php if(!empty(form_error('test_type'))){ echo 'is-invalid'; } ?>"required>
                           <option value="0">Select Type</option>
                           <?php foreach($testType as $key => $value){?>
                            <option <?php if($getValue['test_type'] == $key){ echo "selected"; }?>  value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php }?>
                       </select>    
                       <?php echo form_error('test_type'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Course Name</label>
                       <select name="course_id"  id="course_id" class="form-control <?php if(!empty(form_error('course_id'))){ echo 'is-invalid'; } ?>"required>
                           <option value="">Select Course</option>
                           <?php foreach($package as $value){?>
                            <option <?php if($getValue['course_id'] == $value['id']){ echo "selected"; }?> value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
                            <?php }?>
                       </select>    
                       <?php echo form_error('course_id'); ?>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Test Name</label>
                        <input type="text" name="test_name" id="test_name" class="form-control <?php if(!empty(form_error('test_name'))){ echo 'is-invalid'; } ?>"
                         value="<?php if(!empty($getValue['test_name'])){ echo $getValue['test_name']; } ?>" placeholder="Write a test name" required>
                        <?php echo form_error('test_name'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Question Type</label>
                       <select name="question_type" id="question_type" class="form-control <?php if(!empty(form_error('question_type'))){ echo 'is-invalid'; } ?>"required>
                           <option value="">Select Question Type</option>
                           <?php foreach($question as $key => $value){?>
                            <option <?php if($getValue['question_type'] == $key){ echo "selected"; }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php }?>
                       </select>
                       <?php echo form_error('question_type'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Start Date</label>
                        <input type="date" name="start_date" id="start_date"  
                        class="form-control <?php if(!empty(form_error('start_date'))){ echo 'is-invalid'; } ?>"                
                        value="<?php if(!empty($getValue['start_date'])){ echo $getValue['start_date']; }  ?>" required
                        >
                        <?php echo form_error('start_date'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Expiry Date</label>
                        <input type="date" name="end_date" id="end_date"
                         class="form-control <?php if(!empty(form_error('end_date'))){ echo 'is-invalid'; } ?>"
                         value="<?php if(!empty($getValue['end_date'])){ echo $getValue['end_date']; }  ?>"
                         required >
                        <?php echo form_error('end_date'); ?>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Total Question</label>
                        <input type="text" name="total_question" id="total_question" class="form-control 
                        <?php if(!empty(form_error('total_question'))){ echo 'is-invalid'; } ?>"
                        value="<?php if(!empty($getValue['total_question'])){ echo $getValue['total_question']; }  ?>"  onkeypress="return onlyNumberKey(event)" placeholder="Total Question" maxlength="10"
                        required >
                        <?php echo form_error('total_question'); ?>
                    </div>     
                    
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Total Mark</label>
                        <input type="text" name="total_mark" id="total_mark" class="form-control 
                        <?php if(!empty(form_error('total_mark'))){ echo 'is-invalid'; } ?>"
                        value="<?php if(!empty($getValue['total_mark'])){ echo $getValue['total_mark']; }  ?>" placeholder="Total Mark" onkeypress="return onlyNumberKey(event)" maxlength="10"
                        required >
                        <?php echo form_error('total_mark'); ?>
                    </div>     

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Each Question Mark</label>
                        <input type="text" name="each_question_mark" id="each_question_mark" class="form-control 
                        <?php if(!empty(form_error('each_question_mark'))){ echo 'is-invalid'; } ?> "  onkeypress="return onlyNumberKey(event)" maxlength="10"
                        value="<?php if(!empty($getValue['each_question_mark'])){ echo $getValue['each_question_mark']; }  ?>" placeholder="Each Question Mark"
                        required>
                        <?php echo form_error('each_question_mark'); ?>
                    </div>    
                    
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Negative Mark</label>
                        <input type="text" name="negative_mark" id="negative_mark" class="form-control 
                        <?php if(!empty(form_error('negative_mark'))){ echo 'is-invalid'; } ?>"
                        value="<?php if(!empty($getValue['negative_mark'])){ echo $getValue['negative_mark']; }  ?>" placeholder="Negative Mark"
                        >
                        <?php echo form_error('negative_mark'); ?>
                    </div>   

                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Timer (In Minute)</label>
                        <input type="text" name="timer" id="timer" class="form-control"
                        value="<?php if(!empty($getValue['timer'])){ echo $getValue['timer']; }  ?>" onkeypress="return onlyNumberKey(event)" placeholder="Timer" maxlength="10" required
                        >                       
                    </div>   
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Interval to the break (In Minute)</label>
                        <input type="text" name="interval_of_break" id="interval_of_break" class="form-control"
                        value="<?php if(!empty($getValue['interval_of_break'])){ echo $getValue['interval_of_break']; }  ?>" placeholder="Interval Time"  onkeypress="return onlyNumberKey(event)" maxlength="10" required
                        >                       
                    </div>   
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Time to break (In Minute)</label>
                        <input type="text" name="time_of_break" id="time_of_break" class="form-control"
                        value="<?php if(!empty($getValue['time_of_break'])){ echo $getValue['time_of_break']; }  ?>" placeholder="Time to break" onkeypress="return onlyNumberKey(event)" maxlength="10" required
                        >                       
                    </div>   
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Test Attempt Price</label>
                        <input type="text" name="amount" id="timer" class="form-control"
                        value="<?php if(!empty($getValue['amount'])){ echo $getValue['amount']; }  ?>"  maxlength="10" placeholder="Test price" >                       
                    </div>  
                    
                    <div class="col-md-4 form-group">
                        <label for="name" class="form-label">Status</label>
                      <select name="cstatus" id="" class="form-control">                          
                          <?php foreach(status() as $key => $value){?>
                            <option <?php if($getValue['cstatus'] == $key){ echo "selected"; }?> 
                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php }?>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="mobile" class="form-label"> &nbsp;</label>
                        <?php if(empty($getValue['id'])){?>
                        <input type="submit" name="create_course" class="btn btn-success" value="Save" style="margin-top: 25px;">
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


