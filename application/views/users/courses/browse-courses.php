<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
        <li class="breadcrumb-item active">Courses</li>
    </ol>
    <div class="media align-items-center mb-headings">
        <div class="media-body">
            <h1 class="h2">Courses </h1>
        </div>        
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <?php
        if(count($courses_list) > 0){
            foreach($courses_list as $course){  
                $checkCourse =  $this->db->query('select count(id) as num from manage_my_course where course_id="'.$course['id'].'" and cby="'.$this->session->userdata('user_id').'"')->row_array();     
        ?>
           <div class=" col-md-4 ">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="card-title mb-0"><a href="<?php echo base_url(); ?>view-course/<?php echo $course['id']; ?>"><?php echo $course['name']; ?></a></h4>                
            </div>
            <a href="<?php echo base_url(); ?>view-course/<?php echo $course['id']; ?>">
                <img src="<?php echo base_url();?>uploads/package_image/<?php echo $course['image']==""?'course_default.png':$course['image'];?>" alt="Card image cap" style="width:100%;" height="300px">
            </a>
            <div class="card-body">
                <!-- <small class="text-muted">ADVANCED</small><br> -->
                <?php echo substr($course['short_description'], 0, 1000).'.....'; ?><br>
                <span class="badge badge-primary ">Price: $<?php echo $course['price']; ?></span>
                <?php if($checkCourse['num']<1){?>
                <button type="button" onclick="buyCourse(this)"  id="buybtn" class="btn btn-success btn-sm text-right" data-id="<?php echo $course['id'];?>">Buy</button>
                <?php }else{ ?>
                    <a href="<?php echo base_url()?>test-schedule/<?php echo $course['id']; ?>" class="btn btn-primary btn-sm text-right" data-id="<?php echo $course['id'];?>">View Test Schedule</a>  
                <?php }?>   
            </div>
        </div>
           </div>
       <?php }} ?> 

    

    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center pagination-sm">
        <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true" class="material-icons">chevron_left</span>
                <span>Prev</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#" aria-label="1">
                <span>1</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="1">
                <span>2</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span>Next</span>
                <span aria-hidden="true" class="material-icons">chevron_right</span>
            </a>
        </li>
    </ul>

</div>

<script>
    function buyCourse(elem){       
        var CourseID = $(elem).attr('data-id');
      
        $.ajax({
            type:"POST",
            url: '<?php echo base_url('Courses/buy_course'); ?>',
            data:'courseID='+ CourseID + '&ptype=package&test_id='+ ' ',  
            success: function(response) {
                if(response ==  1){
                    alert('You are successfully buying this course');
                    window.location.reload();
                }else{
                    alert('Some error occured please try again....');
                }
            }
        });
    }
</script>