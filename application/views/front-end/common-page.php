<?php  //print_r($package_details)?>
<div class="main-content">
 <!-- Section: inner-header -->
 <section class="inner-header divider layer-overlay overlay-theme-colored-7 pt-100" data-bg-img="<?php echo base_url(); ?>assets/images/course-single-bg.jpg">
    <div class="container pt-200 pb-70">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row"> 
          <div class="col-md-6">
            <h2 class="text-white font-36"><?php echo $package_details['name']?> (<?php echo $package_details['subtitle']; ?>)</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-pull-right">
          <div class="single-service">
            <img src="<?php echo base_url(); ?>uploads/package_image/<?php echo $package_details['image']; ?>" alt="">
            <h3 class="text-theme-colored line-bottom text-theme-colored"><?php echo $package_details['name']?> (<?php echo $package_details['subtitle']; ?>)</h3>
            <ul class="list-inline mb-15">
              <!--<li>
                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                <div class="pull-right ml-5">
                  <span>Teacher</span>
                  <h5 class="mt-0">John Deo</h5>
                </div>
              </li>-->

              <li>
                <i class="pe-7s-cash text-theme-colored2 font-48"></i>
                <div class="pull-right ml-10">
                  <span>Register for</span>
                  <h5 class="mt-0">$<?php echo $package_details['price'];?> USD</h5>
                </div>
              </li>
              <li>
                <i class="pe-7s-ribbon text-theme-colored2 font-48"></i>
                <div class="pull-right ml-5">
                  <span>Enrollment</span>
                  <h5 class="mt-0"><a href="#">Click Here</a></h5>
                </div>
              </li>
            </ul>
            <p><?php echo $package_details['long_description']; ?></p>            
            <ul id="myTab" class="nav nav-tabs mt-30">
              <li class="active"><a href="#tab1" data-toggle="tab"><b>Description</b></a></li>
              <li><a href="#tab2" data-toggle="tab"><b>Course Info</b></a></li>
              <li><a href="#tab3" data-toggle="tab"><b>FAQ's</b></a></li>
              <li><a href="#tab4" data-toggle="tab"><b>Instructors</b></a></li>
              <li><a href="#tab5" data-toggle="tab"><b>Mentorship Program</b></a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                <!-- <h4 class="line-bottom-theme-colored-2 mb-15">Course Details</h4>
                <h5 class="line-bottom-theme-colored-2 mb-15"></h5>
                <h4 class="line-bottom-theme-colored-2 mt-20 mb-10">We are offering 2 packages for PCE at this time:</h4>
                <ul class="list theme-colored2 paper">
                  <li><h6>MCON-</h6> Includes musculoskeletal, cardiopulmonary, multi- systems, and non-systems. This package is available for $449, which will give you access for 1 year. It will include a total of 55+ regular lectures and strategy classes. Each class is of 2.5 hours. It will also include practice exams from Study Buddy.</li>
                  <li><h6>NEUROLOGY PACKAGE -</h6>This package includes neurology for a total of $149. This will give you access to neurology classes for 1 year. This package does not include access to strategy classes and Study Buddy practice exams. Please email us at <a href="mailto:pcestudybuddy@gmail.com">pcestudybuddy@gmail.com</a> and brainsmithphysioguru@gmail.com for payment details.</li>
                  
                </ul> -->
                <?php echo $package_details['short_description']; ?>
              </div>
              <div class="tab-pane fade" id="tab2">
                <h4 class="line-bottom-theme-colored-2 mb-15">Course Information</h4>
                <ul class="list theme-colored2 paper">
                <?php echo $package_details['course_info'];?>
                  <!-- <li><h6>Webinars-</h6>We conduct over 65+ lectures which are over 150+ hours of quality coaching for PCE in Musculoskeletal, Cardiopulmonary, Neurology, Non-systems and Multi-systems by our dedicated and qualified professionals in their fields. They are extremely cost effective and suits one’s pockets. Our webinars are interactive, goal oriented and simplified for better understanding and grasping of the knowledge of the students. The duration of our one batch is for approximately 2.5 months. During this tenure you will receive an invitation everyday via email to access the live lecture as per the schedule. You can type in the chat box if you have any doubts or questions related to the topic that will be taught during the live session. So, it will be a group class and not one on one. <br>
                  <b>(Note: You need internet connection to attend the lectures and watch the recordings)</b></li>
                  <li><h6>Timings -</h6>Classes are usually scheduled in the evenings between 7:00 or 8:00 pm EST (New York time/Toronto time) during the weekdays and few in the mornings as well on weekends for 1-1.5 hours depending upon the topics. We make a new schedule with every session, so it will be available only 2 days before the commencement of the program.</li>
                  <li><h6>Strategy Class -</h6>We conduct strategy classes during our tenure of 2.5 months of a batch. This guides the students on the question solving with rationales, test taking strategies, and time management. These classes give the students a right perspective towards the test.</li>
                  <li><h6>Syllabus -</h6>We cover all the detailed syllabus of musculoskeletal, cardiopulmonary, neurology, non-systems and multi-systems as per the requirement and blueprints of Canadian Alliance of Physiotherapy Regulators (CAPR).</li>-->
                  <!-- <li><h6>Mentorship -</h6>We also offer one on one mentoring programs if you find it difficult to follow our general study plans. We have 3-4 trained instructors excelling in their fields, which give individual attention and guidance, strategic problem solving, brainstorming questions and discussions of the rationales and the test results. They help in chalking out a more personalized study plan designed to serve as per individual needs.</li>
                  <li><h6>Mock tests -</h6> This course provides 2 full timely mock tests with rationale and feedback – one standalone and one vignette style test. Vignette style is an exact replica of the PCE test conducted by CAPR. Apart from full 200 questions test we also provide topic wise weekly tests. This gives the students a better knowledge of their preparation and area of weakness.</li>
                  <li><h6>Validity -</h6>We have four rotational batches throughout the year. You are welcome to join in the course anytime in between as we do not limit the number of time or lectures that you can attend. Our course validity is for one year or till you pass the test, whichever happens first. There is no midway policy change. Isn’t that a great to deal to grab on!!</li>
                  <li><h6>Course for the PCE written component -</h6>PCE Study Buddy offers a course which encircles the syllabus that is provided by the Canadian Alliance of Physiotherapy Regulators (CAPR). This test is divided into 2 components - written and the clinical component. We cover all the major subjects which build in the base of the test such as:</li>
                    <ul class="list theme-colored2 angle-double-right">
                      <li><a href="<?php echo base_url(); ?>assets/pdf/MSK-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Musculoskeletal</a></li>
                      <li><a href="<?php echo base_url(); ?>assets/pdf/Cardio-Pulmonary-and-Nonsystems-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Cardio-pulmonary and vascular</a></li>
                      <li>Non-systems</li>
                      <li><a href="<?php echo base_url(); ?>assets/pdf/PCE-Multisystems-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Multi-systems</a></li>
                      <li><a href="<?php echo base_url(); ?>assets/pdf/Neuro-and-Peds-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Neurology</a></li>
                    </ul>
                    <li><h6>Each subject is further dissected under the following sub-topics</li>
                    <ul class="list theme-colored2 angle-double-right">
                      <li>Anatomy/Physiology</li>
                      <li>Signs/Symptoms</li>
                      <li>Treatments</li>
                      <li>Indications/Contraindications</li>
                      <li>System interaction</li>
                      <li>Situational analysis</li>
                    </ul> -->
                 <!-- <li><h6>Social Media -</h6>We use Facebook as a mode of connectivity with the students where the recorded lectures are uploaded in specific groups as per the subjects. This helps the students to review their topics and revise them time and again.<br>
                  Similarly, we have another platform - a login portal specially designed for students who are refrained from Facebook. This portal has PDFs of reference books, notes and PPTs, topic wise weekly tests, recorded videos of live lectures.<br>
                  We also have a WhatsApp discussion group, which lets the students have a discussion on varied topics as per their ease.<br>
                  Our Instagram page posts new brainstorming questions, facts and logical reasoning and case related questions on daily basis. This helps to keep up the spirits and motivation of the students and keep them thinking all the time.</li>
                </ul> -->
                
              </div>
              <div class="tab-pane fade" id="tab3">
                <h4 class="line-bottom-theme-colored-2 mb-15">Frequently Asked Questions</h4>
                <ul class="list theme-colored2 paper">
                    <li><h6>What is the validity of the course? </h6></li>
                    <p class="ml-20">The validity of the course is for one year or till you pass, whichever comes first.</p>
                    <li><h6>How to register for written exam? </h6></li>
                    <p class="ml-20">Please refer our website to enroll for the course or email us at <a href="mailto:pcestudybuddy@gmail.com">pcestudybuddy@gmail.com</a></p>
                    <li><h6>How can I extend my subscription for some more time? </h6></li>
                    <p class="ml-20">You can extend the subscription for another one year by paying $200/- Payment can be made by PayPal, Zelle or direct bank transfer.</p>
                    <li><h6>How can I watch the lectures again if miss the live lectures? </h6></li>
                    <p class="ml-20">You can watch the recorded lectures on Facebook groups or website login.</p>
                    <li><h6>What is the success rate after joining the course?</h6></li>
                    <p class="ml-20">Our success rate for the course is 94% We strive hard to help our students achieve their goals.</p>
                    <li><h6>Is personal mentor-ship a paid program? </h6></li>
                    <p class="ml-20">Yes, the mentor-ship program is a paid facility.</p>
                </ul>
              </div>
              <div class="tab-pane fade" id="tab4">
                  <ul class="list theme-colored2 paper">
                <!--<h4 class="line-bottom-theme-colored-2 mb-20">Course Teachers</h4>-->
                <div class="row">
                    <div class="row mtli-row-clearfix">
                        <!-- <div class="owl-carousel-1col" autoplay="false" data-dots="true"> -->
                        
                          <?php 
                          if(isset($instructor))
                          {
                          foreach($instructor as $value){ ?>
                            <div class="item">
                                  <div class="col-md-3">
                                      <img src="<?php echo base_url(); ?>uploads/instructor_image/<?php echo $value['image'];?>" alt="" class="img-fullwidth">
                                  </div>
                                  <div class="col-md-9">
                                      <h2 class="mb-0"><?php echo $value['name'];?></h2>
                                      <p><?php echo $value['experience'];?></p>                                     
                                  </div>
                            </div>
                          <?php 
                          }}else{ echo "<p style='padding-left:20px;'>Instructor not available</p>"; }
                          ?>  
                        <!-- </div> -->
                    </div>
                </div>
                </ul>
              </div>
             <div class="tab-pane fade" id="tab5">
            
                <h4 class="line-bottom-theme-colored-2 mb-15">Mentorship Program</h4>
                <ul class="list theme-colored2 paper">
                    <p>  <?php echo $package_details['mentor_info']; ?></p>
                    <!-- <h5>Our mentorship program includes:</h5>
                      <li>Individual guidance, strategic problem solving on difficult topics.</li>
                      <li>Interactive discussion on each subject, brainstorming questions.  </li>
                      <li>Discussion of the exam rationales (TED, NPTE/PCE tests, etc)</li>
                      <li>2 classes minimum per week.</li>
                      <li>Time is decided as per the availability of the individual mentor.</li>
                      <li>Fees for this program is $300/- for 3 months. Payment details will be given directly by your mentor.</li>
                      <li>Prerequisite for this program is that you need to be an existing student of the Study Buddy team.  </li> -->
                </ul>
                <?php if(isset($instructor))
                          {
                          foreach($instructor as $value){ ?>
                <!-- <p>You can directly get in touch with any one of them to know more about the mentorship program and their availability.</p> -->
                <ul class="list theme-colored2 paper">
                    <div class="mentor-img">
                    <img src="<?php echo base_url(); ?>uploads/instructor_image/<?php echo $value['image'];?>" alt=""  style="height:200px;width:300px">
                    </div>
                    <div class="mentor-des">
                      <h3><?php echo $value['name'];?></h3>
                      <p><?php echo $value['mobile'];?></p>
                      
                      <li><?php echo $value['experience'];?></li>
                      
                    </div>
                   
                   
                   
                </ul>    <?php 
                          }}else{ echo "<p style='padding-left:20px;'>Instructor not available</p>"; }
                          ?>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="sidebar sidebar-left mt-sm-30 ml-40">              

            <div class="widget">
              <h4 class="widget-title line-bottom mt-30"><i class="fa fa-download mr-10 text-theme-colored"></i>Download <span class="text-theme-colored2">PCE Syllabus</span></h4>
              <hr class="mt-0">
              <ul class="nav nav-pills nav-stacked nav-sidebar">
                <li><a href="<?php echo base_url(); ?>assets/pdf/PCE_STUDY_BUDDY_SYLLABUS-final.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> PCE Study Syllabus</a></li>
              </ul>
              <h4 class="widget-title mt-30">MCON Syllabus</h4>
              <hr class="mt-0">
              <ul class="nav nav-pills nav-stacked nav-sidebar">
                <li><a href="<?php echo base_url(); ?>assets/pdf/MSK-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> MSK Syllabus</a></li>
                <li><a href="<?php echo base_url(); ?>assets/pdf/Cardio-Pulmonary-and-Nonsystems-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Cardio Pulmonary and Nonsystems Syllabus</a></li>
                <li><a href="<?php echo base_url(); ?>assets/pdf/PCE-Multisystems-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Multisystems Syllabus</a></li>
              </ul>
              <h4 class="widget-title mt-30">NEUROLOGY Syllabus</h4>
              <hr class="mt-0">
              <ul class="nav nav-pills nav-stacked nav-sidebar">
                <li><a href="<?php echo base_url(); ?>assets/pdf/Neuro-and-Peds-Syllabus.pdf" target="_blank"><i class="fa fa-file-pdf-o text-theme-colored2"></i> Neuro and Peds Syllabus</a></li>
            </ul>
            </div>
            <div class="widget">
              <h4 class="widget-title line-bottom mt-20">Quick <span class="text-theme-colored2">Contact</span></h4>
              <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="#" method="post">
                <input type="hidden" name="courseID" id="courseID" value="<?php echo $package_details['id'];?>" >
                <div class="form-group">
                  <input name="form_email" id="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <textarea name="form_message" id="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                </div>
                <div class="form-group">
               
                  <button type="button" id="sendMsg" class="btn btn-theme-colored btn-flat btn-xs btn-quick-contact text-white pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                </div>
              </form>
            </div>
            <div class="widget mt-150">
                <img src="<?php echo base_url(); ?>assets/images/sidebar-img1.jpg" alt="" class="img-fullwidth">
            </div>
            <div class="widget mt-50">
                <img src="<?php echo base_url(); ?>assets/images/sidebar-img2.jpg" alt="" class="img-fullwidth">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
 
  $('#sendMsg').click(function(){
    var courseID = $('#courseID').val();
    var form_email = $('#form_email').val();
    var form_message = $('#form_message').val();
  
      $.ajax({
          method:"POST",
          url: "<?php echo base_url()?>commonMail",
          data:'courseID=' + courseID +'&email=' + form_email +'&message='+form_message,
          success: function(data){
            
          }
      });
  })
</script>