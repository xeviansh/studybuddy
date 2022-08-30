<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="col-md-5 text-right">
        <a class="custom_bk_bt btn btn-primary btn-sm" href="<?php echo base_url() . 'test-Add'; ?>">Add Test</a>
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
        <div class="row">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Test Type</th>
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
                        if (count($testlist) > 0) {
                            $i = 1;
                            foreach ($testlist as $value) {
                                $packageName = $this->db->query('select id, name from 
                                            mange_package where id="' . $value['course_id'] . '"')->row_array();
                             
                        ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= get_array_value(testType(),$value['test_type']) ?></td>
                                    <td><?= $value['test_name']; ?></td>
                                    <td><?= $packageName['name']; ?></td>
                                    <td><span class='badge badge-info'><?= get_array_value(questionType(), $value['question_type']); ?></span></td>
                                    <td><?= $value['start_date']; ?></td>
                                    <td><?= $value['end_date']; ?></td>
                                    <td><?= $value['total_question']; ?></td>
                                    <td><?= get_array_value(status(), $value['cstatus']); ?></td>
                                    <td>
                                        <a href="<?php echo  site_url(); ?>edit-test-details/<?php echo $value['id']; ?>" class="btn btn-sm btn-info "><i class="fa fa-edit"></i> </a>
                                        <a href="<?php echo base_url() ?>test_information/delete/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger delete-confirm">
                                            <i class="fa fa-trash"></i> </a>
                                     
                                        <a href="<?php echo  site_url(); ?>question-list/<?php echo $value['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-list"></i></a>
                                        <a href="<?php echo  site_url(); ?>assign-question/<?php echo $value['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>  Assign Question</a>
                                    </td>
                                </tr>
                            <?php }
                        } else {  ?>
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