<div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                                <div class="flex mb-2 mb-sm-0">
                                    <h1 class="h2">Chapter List</h1>
                                </div>
                                <a href="<?php echo base_url().'lesson/add'; ?>" class="btn btn-success">Add Chapter</a>
                            </div>
							
							<div class="row">
<?php 
//print_r($courses_list);
if(!empty($lesson_list)){
foreach($lesson_list as $print){
	?>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="d-flex flex-column flex-sm-row">
                                                <a href="instructor-course-edit.html" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                    <i class="fas fa-book-reader" style="font-size:25px"></i>
                                                </a>
                                                <div class="flex" style="min-width: 200px;">
                                                    <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                                                    <h4 class="card-title mb-1"><a href="<?php echo base_url().'lesson/edit/'.$print->ID; ?>"><?php echo $print->lesson_title; ?></a></h4>
                                                  <!---  <p class="text-black-70">Let’s start with a quick tour of Vue’s data binding features.</p>--->
                                                    <div class="d-flex align-items-end">
													<!---
                                                        <div class="d-flex flex flex-column mr-3">
                                                            <div class="d-flex align-items-center py-1 border-bottom">
                                                                <small class="text-black-70 mr-2">$1,230/mo</small>
                                                                <small class="text-black-50">34 SALES</small>
                                                            </div>
                                                            <div class="d-flex align-items-center py-1">
                                                                <small class="text-muted mr-2">GULP</small>
                                                                <small class="text-muted">INTERMEDIATE</small>
                                                            </div>
                                                        </div>
														--->
                                                        <div class="text-center">
                                                            <a href="<?php echo base_url().'lesson/edit/'.$print->ID; ?>" class="btn btn-sm btn-white">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card__options dropdown right-0 pr-2">
                                            <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                <i class="material-icons">more_vert</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="<?php echo base_url().'lesson/edit/'.$print->ID; ?>">Edit Chapter</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="<?php echo base_url().'lesson/delete/'.$print->ID; ?>" class="dropdown-item text-danger" href="#">Delete Chapter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php
}
}
else{
	echo '<div class="nofound">No Found</div>';
}
?>
                            </div>