<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2"><?php echo $title; ?></h1>
    </div>
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
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <!-- <th>Student ID</th> -->
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>email</th>
                    <th>Status</th>
                    <th>Package</th>
                </tr>
            </thead>
            <tbody>
                <?php                        
                    if(count($student_list)>0){
                    $i=1;
                    foreach($student_list as $value){
                ?>
                <tr>
                    <th><?php echo $i++; ?></th>
                    <!-- <td><?php echo $value['student_userId']; ?></td> -->
                    <td><?php echo $value['fname'].''.$value['lname']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?= get_array_value(status(), $value['cstatus']); ?></td>
                    <td>
                    <a href="<?php echo base_url()?>student-update/<?php echo $value['ID']; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                <a href="<?php echo base_url()?>Student/delete/<?php echo $value['ID']; ?>"  class="btn btn-sm btn-danger delete-confirm">
                                <i class="fa fa-trash"></i></a>  
                    </td>
                </tr>
                <?php }}else{?>
                <tr>
                    <td align="center" colspan="7">No Record Found....</td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>