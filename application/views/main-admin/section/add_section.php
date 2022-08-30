<div class="media align-items-center mb-headings">
    <div class="media-body">
        <div class="row">
            <div class="col-md-7">
                <h1 class="h2"><?php echo $title; ?></h1>
            </div>
            <div class="col-md-5">
                <?php if($this->session->flashdata('msg')){?>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('msg'); if(isset($_SESSION['msg'])){ unset($_SESSION['msg']);  } ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="" method="post" id="package_form" autocomplete="off"
            enctype="multipart/form-data" onsubmit="return validateform()"  name="myForm">

            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="name">Section Name <span id="cname" class="text-danger"></span></label>
                    <?php if(isset($getValue['id']) && $getValue['id']>0){ ?>
                    <!--id for update-->
                    <input type="hidden" name="tid" value="<?php echo $getValue['id'];?>">
                    <?php } ?>
                    <input type="text" id="name" class="form-control" name="name"
                        value="<?php if(!empty($getValue['name'])){ echo $getValue['name']; }else{ set_value('name'); } ?>" autocomplete="off"
                        placeholder="Section Name" >
                    <?php echo form_error('name'); ?>
                </div>             

                <div class="form-group  col-md-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <?php foreach (status() as $key => $value) : if($key != 3): ?>
                        <option <?php if(!empty($getValue['cstatus']) && $getValue['cstatus'] == $key){?> selected <?php }?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php endif; endforeach; ?>
                    </select>
                </div>
                <div class="form-group  col-md-4">
                    <label for="status">&nbsp;</label>
                    <?php if(empty($getValue['cstatus'])){ ?>
                     <input type="submit" class="btn btn-primary" style="margin-top: 26px;" name="submit" id="addPackage">
                    <?php }else{?>
                        <input type="submit" class="btn btn-primary" style="margin-top: 26px;" name="submit" id="addPackage" value="Update">
                    <?php } ?>
                    <span class="text-primary" id="msg"></span>
                </div>
            </div>
        </form>
    </div>
</div>

<script> 
    function validateform() {
       var name = $('#name').val();
       if(name == ''){
         $('#name').focus();
         $('#cname').html('Course name is required');
         return false;
       }else{
        $('#cname').html('');
       }
    }
</script>