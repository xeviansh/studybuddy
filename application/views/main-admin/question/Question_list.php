<div class="media align-items-center mb-headings">
    <div class="media-body">
        <?php 
             $tstName = $this->db->query('select id,test_name from manage_testdetails where id='.$id.'')->row_array();  
        ?>
        <h1 class="h2">Question List Of : <span class="text-success"><?php echo $tstName['test_name']; ?></span></h1>
    </div>
   
    <!--<div class="col-md-5 text-right">
                <a class="custom_bk_bt btn btn-primary btn-sm" href="<?php echo base_url() . 'question-Add/'.$id; ?>">Add Question</a>
            </div>-->
</div>
<div class="row">
    <div class="col-md-8"></div>
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
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>                       
                            <!-- <th>Course ID</th> -->
                            <th>Passage</th>
                            <th>Question</th>
                            <th>Options</th>
                            <th>Correct Answer</th>
                           <th>Explanation</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php
                     
                        if (count($question_list) > 0) {
                            $i = 1;
                            foreach ($question_list as $value) {                                
                        ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>                                   
                                    <td>
                                        <?php echo $value['passage']; ?><br>                                    
                                     
                                        <?php if(!empty($value['passage_image'])){?>
                                         <a href="<?php echo base_url().'uploads/question_bank/'. $value['passage_image']; ?>" class="badge bg-success" download >Download Passage Image</a>
                                        <?php } ?>
                                     
                                    </td>
                                    <td><?php echo $value['question']; ?><br>                                    
                                        <?php if(!empty($value['question_image'])){ ?>
                                                <a href="<?php echo base_url().'uploads/question_bank/'.$value['question_image']; ?>" class="badge bg-success" download >Download Question Image</a>
                                        <?php } ?>
                                        
                                    <td><?php echo htmlentities($value['option1']); ?><br><br>
                                        <?php echo htmlentities($value['option2']); ?><br><br>
                                        <?php echo htmlentities($value['option3']); ?><br><br>
                                        <?php echo htmlentities($value['option4']); ?></td>
                                    <td><?php echo $value['correct_answer']!=""?htmlentities($value['correct_answer']):''; ?></td>
                                     <td><?php echo htmlentities($value['explanation']); ?><br>

                                        <?php if(!empty($value['explanation_file'])){ ?>                                        
                                            <a href="<?php echo base_url().'uploads/question_bank/'.$value['explanation_file']; ?>" class="badge bg-success" download >Download Explanation Image</a>                                 
                                        
                                        <?php } ?>
                                    </td>
                                    </td>
                                    <td><?php echo get_array_value(status(), $value['cstatus']); ?></td>
                                    <td>
                                        <a href="<?php echo base_url()?>edit-question/<?php echo $value['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                                    <a href="<?php echo base_url()?>test_information/delete_question/<?php echo $value['id'] ?>"  class="btn btn-sm btn-danger delete-confirm ">
                                                    <i class="fa fa-trash"></i></a>  
                                        </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="9" align="center">No record found...</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<script>
new Cuttr('.example-before-after', {
  //options here
  truncate: 'characters',
  length: 250,
  readMore: false,
  
  
  readMoreBtnPosition: 'after',
  readMoreBtnAdditionalClasses: 'btn-large btn-flat waves-effect waves-light orange darken-1 white-text margin-top'
  
});
</script>