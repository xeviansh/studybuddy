<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="custom_bk_bt" href="<?php echo base_url().'question_bank/add'; ?>">Add Question</a>
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
                            <th>Sr No</th>
                            <th>Test ID</th>
                            <th>Course ID</th>
                            <th>Question</th>
                            <th>Correct Answer</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(count($question_list) > 0){
                             $i=1;   
                            foreach($question_list as $value){ 
                                $unic_id = $this->db->query('select id,unic_id from manage_testdetails where id="'.$value['test_id'].'"')->row_array(); 
                                $course_id = $this->db->query('select id,name from mange_package where id="'.$value['course_id'].'"')->row_array();                         
                        ?>
                       <tr>
                           <td><?php echo $i++; ?></td>
                           <!-- <td><?php echo $unic_id['unic_id']; ?></td> -->
                           <td><?php echo $course_id['name']; ?></td>
                           <td><?php echo $value['question']; ?></td>
                           <td><?php echo $value['correct_answer']; ?></td>
                           <td><?php echo get_array_value(status(),$value['cstatus']); ?></td>
                           <td>
                                <a href="<?php echo base_url()?>Question_bank/edit/<?php echo $value['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>Question_bank/delete/<?php echo $value['id']; ?>" onclick="return confirm('Are you sure ! You want to delete this record');" class="btn btn-sm btn-danger ">
                                <i class="fa fa-trash"></i> </a>

                                <a href="#" onclick="return alert('On Development Mode');" class="btn btn-sm btn-warning">
                                <i class="fa fa-info"> </i></a>
                           </td>
                       </tr>
                       <?php }}else{?>
                            <tr>
                                <td colspan="7" align="center">No record found...</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>