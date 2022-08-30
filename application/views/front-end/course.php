<section class="inner-header divider layer-overlay overlay-theme-colored-7 pt-100"
    data-bg-img="<?php echo base_url(); ?>/assets/front-end/images/course-main-bg.jpg">
    <div class="container pt-200 pb-70">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-white font-56">Courses</h1>
                    <p class="text-white">Pass Your Exams with Ease!
                        Study Buddy is your trusted provider of high-quality and board-approved courses for the
                        following:</p>
                    <!--<ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About</li>
              </ol>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Courses -->
<section id="courses" class="bg-silver-light">
    <div class="container pb-40">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-12">
                    <!--<h2 class="text-uppercase line-bottom-double-line-centered mt-0">Popular <span
                            class="text-theme-colored2">Courses</span></h2>
                    <p>Our mission is to provide an exemplary educational guidance to all aspirants. With our integral
                        teamwork, we endeavor to bring the best out of our students. Our high-quality and affordable
                        online tutoring is provided by proficient tutors in their areas of expertise.</p>-->
                </div>
            </div>
        </div>
        <div class="row mtli-row-clearfix">
            <div class="owl-carousel-3col">
                <?php 
                $i = 1;
                // echo "<pre>";
                // print_r($package_list);
               if(!empty($package_list)){
              
                foreach($package_list as $package){
                 
                  $packageimg = $package->image;
		              $packageimg_path = base_url().'uploads/package_image/'.$package->image;
                  if(!file_exists($packageimg_path) && empty($packageimg)){
                    $packageimg_path = base_url() . 'assets/images/general-imgs/noimagefound.jpg';
                  }
                  $i++;   
                  ?>
                 <div class="item">
                    <a href="<?php echo base_url();?>page/<?php echo $package->id; ?>">
                        <div class="course-single-item style2 text-center mb-40">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="<?php echo $packageimg_path; ?>" 
                                    >
                                <div class="price-tag">$<?php echo $package->price; ?></div>
                            </div>
                            <div class="course-details bg-white border-1px clearfix p-15 pt-15" style="height:200px;">
                                <div class="course-top-part">
                                    <a href="<?php echo base_url();?>page/<?php echo $package->id; ?>">
                                        <h4 class="line-bottom-centered mt-20">
                                            <?php echo $package->name; ?> <br>
                                            <p style="font-size:14px;">(<?php echo $package->subtitle; ?>)</p>
                                        </h4>
                                       
                                    </a>
                                </div>
                                <div class="author-thumb">
                                    <img src="<?php echo base_url(); ?>/assets/front-end/images/course/xs1.jpg" alt=""
                                        class="img-circle img-thumbnail">
                                </div>
                                <p class="course-description mt-5"><?php echo substr($package->long_description, 0,200); ?></p>
                            </div>
                            <!--<div class="course-meta bg-theme-colored">
                                <ul class="list-inline text-white">
                                    <li><i
                                            class="fa fa-calendar text-theme-colored2 mr-5"></i>
                                            <!-- <?php echo  $package->course_duration; ?> -->
                                        <!--Hours</li>
                                    <li><i
                                            class="fa fa-book text-theme-colored2 mr-5"></i>
                                            <!-- <?php echo $course->total_lecture; ?> -->
                                        <!--Lectures</li>

                                </ul>
                            </div>-->
                        </div>
                    </a>
                </div>
                <?php }}?>
            </div>
    </div>
</section>



<!-- Divider: Funfact -->
<section class="divider parallax layer-overlay overlay-theme-colored-2"
    data-bg-img="<?php echo base_url();?>assets/images/course-bg2a.jpg" data-bg-repeat="no-repeat"
    data-parallax-ratio="0.7"
    style="background-image: url(&quot;<?php echo base_url(); ?>/assets/images/course-bg2.jpg&quot;); background-position: 50% 35px;">
    <div class="container">
        <div class="section-content text-center">
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-0 mb-50 font-20 text-white">Study Buddy’ s NPTE course offers a syllabus provided and
                        approved by the Federation of State Boards of Physical Therapy (FSBPT), Canadian Alliance of
                        Physiotherapy Regulators (CAPR) which will also cover the following subject areas:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <!--<i class="pe-7s-smile mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>-->
                    <div class="author-thumb">
                        <img src="<?php echo base_url();?>assets/images/skeleton.gif" alt=""
                            class="img-circle img-thumbnail">
                    </div>
                    <h5 class="text-white text-uppercase mb-0">Musculoskeletal</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <!--<i class="pe-7s-note2 mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>-->
                    <div class="author-thumb">
                        <img src="<?php echo base_url(); ?>/assets/images/non-system.gif" alt=""
                            class="img-circle img-thumbnail">
                    </div>
                    <h5 class="text-white text-uppercase mb-0">Non-systems</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                <div class="funfact text-center">
                    <!--<i class="pe-7s-users mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>-->
                    <div class="author-thumb">
                        <img src="<?php echo base_url(); ?>/assets/images/cardio.gif" alt=""
                            class="img-circle img-thumbnail">
                    </div>
                    <h5 class="text-white text-uppercase mb-0">Cardio-pulmonary and vascular</h5>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                <div class="funfact text-center">
                    <!--<i class="pe-7s-cup mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>-->
                    <div class="author-thumb">
                        <img src="<?php echo base_url(); ?>/assets/images/other-system.gif" alt=""
                            class="img-circle img-thumbnail">
                    </div>
                    <h5 class="text-white text-uppercase mb-0">Other-systems</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-12">
            <p class="mt-0 mb-50 font-20 text-white">The content of these systems are fully explained in the following topics:</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <!--<i class="pe-7s-smile mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>-->
    <!--<h5 class="text-white text-uppercase mb-0">Anatomy/Physiology</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <!--<i class="pe-7s-note2 mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>-->
    <!--<h5 class="text-white text-uppercase mb-0">Indications/Contraindications</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
          <div class="funfact text-center">
            <!--<i class="pe-7s-users mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>-->
    <!--<h5 class="text-white text-uppercase mb-0">Signs/Symptoms</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
          <div class="  fact text-center">
            <!--<i class="pe-7s-cup mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>-->
    <!-- <h5 class="text-white text-uppercase mb-0">Interaction of each system with all the other systems</h5>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 ">
          <div class="funfact text-center">
            
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
          <div class="funfact text-center">
            <!--<i class="pe-7s-cup mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>-->
    <!--<h5 class="text-white text-uppercase mb-0">Treatment Theories and Strategies</h5>
          </div>
        </div>
       <!-- <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
          <div class="funfact text-center">
            <!--<i class="pe-7s-cup mt-5 text-theme-colored2"></i>
              <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>-->
    <!--<h5 class="text-white text-uppercase mb-0">Situational Analysis</h5>
          </div>
        </div>
      </div>
    </div>-->
</section>

<!-- Section: team -->
<section id="team">
    <div class="container">
        <div class="section-title text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <p>Study Buddy guarantees that at the end of each course, our students will be able to distinguish
                        helpful tips on remembering crucial information. Aside from that, what makes our courses so
                        unique is that once the student avails his or her chosen course, he or she can keep using it
                        until they clear the board exam. This will help them save money, as well as gain more
                        information that will help them achieve their healthcare career goals.</p>
                </div>
            </div>
        </div>
        <div class="section-title">
            <div class="row">
                <h2 class="text-uppercase text-center line-bottom-double-line-centered mt-0">Before <span
                        class="text-theme-colored2">enrolling in our courses</span></h2>
                <p class="text-center">Kindly read the following information</p>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
                    <div class="funfact text-center" id="border-custom-style">
                        <p>Courses mentioned above are covered within two (2.5) months’ time. However, you may continue
                            to take it until you pass the Exam with the validity of 365 days, which so ever happens
                            first. That, too, is completely free of charge!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
                    <div class="funfact text-center" id="border-custom-style">
                        <p>Subject completion will take a maximum of up to 15 days with daily lectures of up to 1 ½
                            hours – 2 hours per day for 6 days a week. After completing the subject, you may then take
                            the entire therapy education and score builder exam and discuss all questions with difficult
                            rationales with us.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
                    <div class="funfact text-center" id="border-custom-style">
                        <p></p>
                        <p>Sessions end when queries have been solicited. Our team is here to help you every step of the
                            way until you’ve successfully cleared the board exam.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0 pt-50">
                    <div class="funfact text-center" id="border-custom-style">
                        <p>You can be assured that every topic is live in the webinar format. There will no hidden
                            clause of self-study whatsoever.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>