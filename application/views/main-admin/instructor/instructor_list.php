<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url().'add-instructor'  ; ?>">Add Instructor</a>
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
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>email</th>            
                            <th>image</th>                                                     
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                            if(count($instrctor_list)>0){
                            $i=1;
                            foreach($instrctor_list as $value){
                        ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['mobile']; ?></td>
                            <td><?php echo $value['email']; ?></td>              
                            <td> <a href="<?php echo base_url()?>uploads/instructor_image/<?php echo $value['image']?>" class="badge badge-success" download>Download Image</a></td>                         
                            <td><?php echo get_array_value(status(),$value['cstatus']); ?></td>
                            <td>
                                <a href="<?php echo  site_url(); ?>edit-instructor/<?php echo $value['id']; ?>" class="btn btn-sm btn-info "><i class="fa fa-edit"></i>  Edit</a>
                                <a href="<?php echo base_url()?>instructor/delete/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger delete-confirm">
                                <i class="fa fa-trash"></i> Delete</a>

                                <a href="#" onclick="return alert('On Development Mode');" class="btn btn-sm btn-warning">
                                <i class="fa fa-info"> </i> Details</a>
                            </td>
                        </tr> 
                        <?php }}else{?>
                            <tr>
                                <td align="center"  colspan="6">No Record Found....</td>                            
                            </tr> 
                         <?php }?>   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>