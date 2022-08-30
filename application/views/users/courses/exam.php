<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Exam Test Schedule</li>
    </ol>
    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2">Exam Test Schedule </h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class=" col-md-12 ">
            <div class="card">                
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <!-- <th>Test ID</th> -->
                            <th>Test Name</th>
                            <th>Course Name</th>   
                            <th>Question Type</th> 
                            <th>Start Date</th>      
                            <th>End Date</th>      
                            <th>Total Question</th>                                                     
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(count($testlist) > 0){
                            $i = 1;                            
                            foreach($testlist as $value){
                            $packageName = $this->db->query('select id, name from 
                                            mange_package where id="'.$value['course_id'].'"')->row_array(); 
       
                        ?>
                       <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $value['test_name']; ?></td>
                            <td><?= $packageName['name']; ?></td>
                            <td><span class='badge badge-info'><?= get_array_value(questionType(),$value['question_type']); ?></span></td>
                            <td><?= $value['start_date']; ?></td>
                            <td><?= $value['end_date']; ?></td>
                            <td><?= $value['total_question']; ?></td>
                            <td><?= get_array_value(status(), $value['cstatus']); ?></td>
                            <td>
                              <?php 
                                   $package_query =  $this->db->query('select * from manage_my_course where course_id="'.$value['course_id'].'" and purchase_type="package" OR purchase_type="test" and test_id="'.$value['id'].'" and cby="'. $this->session->userdata('user_id').'"')->row_array();
                                
                            


                                 $checkExam =  $this->db->query('select * from manage_answer_sheet where test_id="'.$value['id'].'" and 
                                                cby="'. $this->session->userdata('user_id').'"');

                                if($checkExam->num_rows() > 0){  ?>
                                      <a href="<?php echo base_url();?>final-result/<?php echo $value['id']?>" class="btn btn-sm btn-danger ">Your Progress Report</a>

                               <?php  }else if(isset($package_query['purchase_type'])){  ?> 
                                 <a href="<?php echo base_url();?>instruction/<?php echo $value['id']?>" class="btn btn-sm btn-success "><i class="fa fa-check"></i>  Start Test</a>
                              <?php }else if($value['end_date'] < date("Y-m-d")){ ?>
                                <button class="btn btn-sm btn-warning" disabled>Expired</button>
                             <?php } else{ ?>                              
                                <button class="btn btn-sm btn-primary" data-course="<?php echo $value['course_id']; ?>"  data-id="<?php echo $value['id']?>" onclick="buyCourse(this)">Buy Now</button>
                                <?php }?>
                            </td>
                       </tr>
                       <?php }}else{  ?>
                            <tr>
                                <td colspan="10" align="center">No Record Found....</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function buyCourse(elem){       
        var testid = $(elem).attr('data-id');
        var courseID = $(elem).attr('data-course');
      
        $.ajax({
            type:"POST",
            url: '<?php echo base_url('Courses/buy_course'); ?>',
            data:'testid='+ testid + '&ptype=test&courseID='+courseID,  
            success: function(response) {
                if(response ==  1){
                    alert('You are successfully buying this test');
                    window.location.reload();
                }else{
                    alert('Some error occured please try again....');
                }
            }
        });
    }
</script>