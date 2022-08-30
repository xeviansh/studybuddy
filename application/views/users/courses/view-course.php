<?php  //print_r($package_details);?>
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Topics</li>
    </ol>
    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2"><?php echo $package_details['name']; ?></h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Topic Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(count($topic_list) > 0){
                                $i = 1;
                                foreach($topic_list as $topic){    
                            ?>
                            <tr>
                                <th><?= $i++; ?></th>
                                <td><?= $topic['topic_name']; ?></td>
                                <td><?= substr($topic['description'], 0, 250).'...'; ?></td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Details</a>
                                </td>
                            </tr> 
                            <?php }}else{?> 
                                <tr>
                                    <td colspan="4" align="center">No Record Found....</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>