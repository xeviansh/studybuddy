<div class="media align-items-center mb-headings">
    <div class="media-body">
         <h1 class="h2"><?php echo $title; ?></h1>
    </div>
    <div class="media-right">
        <a class="btn btn-primary btn-sm" href="<?php echo base_url().'add-topic/'.$this->uri->segment(2); ?>">Add Topic</a>
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
                            <th>Topic Name</th>
                            <th>Image</th>
                            <th>Description</th>     
                          
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                            if(count($topicList)>0){
                            $i=1;
                            foreach($topicList as $value){
                        ?>
                        <tr>
                            <th><?php echo $i++; ?></th>
                            <td><?php echo $value['topic_name']; ?></td>                      
                            <td> <a href="<?php echo base_url()?>uploads/topic/<?php echo $value['file']?>" class="badge badge-success" download>Download Image</a></td>   
                            <td><?php echo $value['description']; ?></td>                                  
                            <td>
                                <a href="<?php echo  site_url(); ?>edit-topic/<?php echo $this->uri->segment(2); ?>/<?php echo $value['id']; ?>" class="btn btn-sm btn-info "><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url()?>delete-topic/<?php echo $value['id']; ?>" class="btn btn-sm btn-danger delete-confirm">
                                <i class="fa fa-trash"></i> </a>
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