<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Result</li>
    </ol>

    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2">Result </h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="card">
        <div class="row">

            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                        class="img-thumbnail img-thumbnail1 mt-5"
                        src="<?php echo base_url();?>assets/images/profile_imgs/<?php  echo $this->session->userdata('full_user_detail')[0]->user_img; ?>">
                    </span></div>
            </div>
           
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between  input-style h4-text-right"><span
                            class="span-text-color">Student Details</span></div><br>

                    <div class="row mt-2">
                        <div class="col-md-4"><label class="labels item-text">Name</label>
                            <div><?php  echo $this->session->userdata('full_user_detail')[0]->fname; ?></div>
                        </div>
                        <div class="col-md-4"><label class="labels item-text">Surname</label>
                            <div><?php echo  $this->session->userdata('full_user_detail')[0]->lname; ?></div>
                        </div>
                        <div class="col-md-4"><label class="labels item-text">PhoneNumber</label>
                            <div><?php echo $this->session->userdata('full_user_detail')[0]->phone; ?></div>
                        </div>
                    </div>

                    <div class="row mt-3">                       
                        <div class="col-md-4"><label class="labels item-text">Email ID</label>
                            <div><?php echo $this->session->userdata('full_user_detail')[0]->email; ?></div>
                        </div>

                        <div class="col-md-4"><label class="labels item-text ">Course Name</label>
                            <div>Web Development</div>
                        </div>
                        <div class="col-md-4"><label class="labels item-text">Test Name</label>
                            <div><?php echo $test_data['test_name']; ?></div>
                        </div>
                    </div>                              

                    <div class="row mt-4">
                        <div class="col-md-3"><label class="labels item-text ">Total Question</label>
                            <div><?php echo $test_data['total_question']; ?></div>
                        </div>
                        <div class="col-md-3"><label class="labels item-text">Total Attempt</label>
                            <div><?php if(!empty($ans_details['submit'])){ echo $ans_details['submit']; }else{ echo 0; } ?></div>
                        </div>
                        <div class="col-md-3"><label class="labels item-text ">Review</label>
                            <div><?php if(!empty($ans_details['review'])){ echo $ans_details['review']; }else{ echo 0; }  ?></div>
                        </div>

                        <div class="col-md-3"><label class="labels item-text ">Not Attempt</label>
                        <?php 
                            $notAttempt = '';
                            if(!empty($ans_details['submit']) && !empty($ans_details['review'])){
                                $notAttempt = $test_data['total_question'] - ($ans_details['submit'] + $ans_details['review']);
                            }else{
                                $notAttempt = 0;
                            }
                        ?>
                            <div><?php echo $notAttempt; ?></div>
                        </div>

                       
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience input-style h4-text-right">
                        <span class="span-text-color">User Result</span></div><br>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels item-text">Correct Answar</label>
                            <div><?php echo $correctAnswer; ?></div>
                        </div>

                        <div class="col-md-6"><label class="labels item-text">Marks</label>
                            <div><?php echo $totalMark[0]['totalMark']; ?></div>
                        </div>                      
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels item-text ">Wrong Answer</label>
                            <div><?php echo $totalwrongAns; ?></div>
                        </div>
                        <div class="col-md-6"><label class="labels item-text">Negatve Marks</label>
                            <div><?php echo $totalNegativeMark[0]['totalnegativeMark']; ?></div>
                        </div>  

                        <div class="col-md-6"><label class="labels item-text ">Obtaining Marks</label>
                            <div>
                                <?php $omarks= $totalMark[0]['totalMark'] - $totalNegativeMark[0]['totalnegativeMark']; 
                                echo $omarks;
                                ?>
                                    
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                         <div class="col-md-6"><label class="labels item-text">Total Percentage %</label>
                            <div><?php echo  round(100*($omarks/$test_data['total_mark']),2); ?></div>
                         </div>

                         <div class="col-md-6"><label class="labels item-text">&nbsp;</label>
                           <a href="<?php echo base_url(); ?>preview/<?php echo  $test_data['id']; ?>" class="btn btn-primary btn-sm">Exam Preview</a>
                         </div>
                    </div>
                    
                    <?php 
                        // echo "<pre>";
                        // print_r($test_data);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    localStorage.clear();
</script>