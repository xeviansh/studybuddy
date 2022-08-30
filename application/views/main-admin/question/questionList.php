<div class="media align-items-center mb-headings">
    <div class="media-body">
    <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="col-md-5 text-right">
    <?php if(empty($testId)):?>  <a class="custom_bk_bt btn btn-primary btn-sm" href="<?php echo base_url() . 'add-question-hub'?>">Add Question</a><?php endif; ?>
            </div>
</div>
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <?php 
            if($this->session->flashdata('msg')){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <?php echo $this->session->flashdata('msg') ; if(isset($_SESSION['msg'])){ unset($_SESSION['msg']); } ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php }?>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th> <?php if(!empty($testId)):?><input type="checkbox" class="form-check-input ml-1" id="checkAll"> <?php endif; ?> Sr No</th>                         
                            <th>Course Name</th>
                            <th>Question</th>
                            <th>Section</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action="<?php echo base_url()?>Question_bank/addSelectedQuestion" method="post">
                        <?php                           
                            if(count($question_list) > 0){
                             $i=1;   
                            foreach($question_list as $value){                      
                                $coursename = $this->db->query('select id,name from mange_package where id="'.$value['course_id'].'"')->row_array();      

                                $checkQuestion = $this->db->query('select * from question_bank where course_id="'.$value['course_id'].'" and question="'.$value['question'].'" and 
                                test_id="'.$this->uri->segment(2).'"');                                  

                                if($checkQuestion->num_rows() > 0){
                                    $check = 'checked';
                                }else{
                                    $check = ' '; 
                                }

                                $section = $this->db->query('select id,name from manage_section where id="'.$value['section_id'].'"')->row_array();      

                        ?>
                         
                       <tr> 
                       <?php if(!empty($testdetails['each_question_mark'])){?>
                        <input type="hidden" name="each_question_mark" value="<?php echo $testdetails['each_question_mark']; ?>">      
                        <input type="hidden" name="negative_mark" value="<?php echo $testdetails['negative_mark']; ?>">  
                        <?php }?>    
                        <input type="hidden" name="courseId" value="<?php echo $value['course_id']; ?>" />
                        <input type="hidden" name="testid" value="<?php echo !empty($testId) ? $testId : ''; ?>" />
                           <td>
                             <?php if(!empty($testId)):?>
                               <input type="checkbox" class="form-check-input ml-1 chk" name="question_id[]" value="<?php echo $value['id'] ?>" <?php echo $check; ?> > 
                               <?php endif; ?>  
                            <?php echo $i++; ?></td>                      
                           <td><?php echo $coursename['name']; ?></td>
                           <td><?php echo $value['question']; ?></td>
                           <td><?php echo isset($section['name'])?$section['name']!=''?$section['name']:'':''; ?></td>
                           <td><?php echo $value['correct_answer']; ?></td>
                           <td><?php echo get_array_value(status(),$value['cstatus']); ?></td>
                           <td>
                                <a href="<?php echo base_url()?>edit-question-hub/<?php echo $value['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>Question_bank/que_delete/<?php echo $value['id']; ?>"  class="btn btn-sm btn-danger delete-confirm " >
                                <i class="fa fa-trash "></i></a>                             
                           </td>
                       </tr>                      
                    
                       <?php }}else{?>
                            <tr>
                                <td colspan="7" align="center">No record found...</td>
                            </tr>
                        <?php }?>
                        <?php if(!empty($testId)):?>
                        <tr>
                            <td colspan="7" align="center"> <button class="btn btn-primary" type="submit" name="submit">Submit</button> </td>
                        </tr>  
                        <?php endif; ?>
                        </form>                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
      });

      $('.chk').on('click', function () {
        if ($('.chk:checked').length == $('.chk').length) {
          $('#checkAll').prop('checked', true);
        } else {
          $('#checkAll').prop('checked', false);
        }
      });  
</script>