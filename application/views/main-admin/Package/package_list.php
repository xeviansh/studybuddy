<div class="media align-items-center mb-headings">
    <div class="media-body">
        <div class="row">
            <div class="col-md-7">
                <h1 class="h2"><?php echo $title; ?></h1>
            </div>
            <div class="col-md-5 text-right">
                <a class="custom_bk_bt btn btn-primary btn-sm" href="<?php echo base_url() . 'new-course'; ?>">Add Package</a>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8"></div>
    <div class="col-md-4">
        <?php
        if ($this->session->flashdata('success')) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('success');
                if (isset($_SESSION['success'])) {
                    unset($_SESSION['success']);
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
                    <th>Course Name</th>
                    <th>Subtitle Name</th>
                    <th>Package Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($package_list) > 0) {
                    $i = 1;
                    foreach ($package_list as $value) {
                ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['subtitle']; ?></td>
                            <td><?php echo $value['price']; ?></td>

                            <td><?php echo get_array_value(status(), $value['cstatus']); ?></td>
                            <td>
                                <a href="<?php echo  site_url(); ?>package-update/<?php echo $value['id']; ?>" class="btn btn-sm btn-info "><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url() ?>package/delete/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger delete-confirm">
                                    <i class="fa fa-trash"></i> </a>
                                <!-- <a href="<?php echo base_url() ?>add-topic/<?php echo $value['id']; ?>" class="btn btn-sm btn-primary"> Add Topic </a>  -->
                                <a href="<?php echo base_url() ?>topic-list/<?php echo $value['id']; ?>" class="btn btn-sm btn-info">Topic List </a>    
                            </td>

                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td align="center" colspan="7">No Record Found....</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>