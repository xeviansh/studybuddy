<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7 pt-100"
        data-bg-img="<?php echo base_url(); ?>/assets/front-end/images/contact-bg.jpg">
        <div class="container pt-200 pb-70">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-white font-36">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider" id="contact_us_form">
        <div class="container pt-50 pb-70">
            <div class="row pt-10">
                <div class="col-md-5">
                    <h4 class="mt-0 mb-30 line-bottom">Find Our Location</h4>
                    <!-- Google Map HTML Codes -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26360909.888257876!2d-113.74875964478716!3d36.242299409623534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1621330225572!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <!--<div 
              data-address="USA"
              data-popupstring-id="#popupstring1"
              class="map-canvas autoload-map"
              data-mapstyle="style1"
              data-height="400"
              data-latlng="36.2422994,-113.7487596"
              data-title="sample title"
              data-zoom="12"
              data-marker="images/map-icon-blue.html">
            </div>-->
                    <div class="map-popupstring hidden" id="popupstring1">
                        <div class="text-center">
                            <h3>Study Buddy Center</h3>
                            <p>123 Lorem Ipsum Street, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h4 class="mt-0 mb-30 line-bottom">Get in touch with our team today!</h4>
                    <p>You’re welcome to get in touch with us anytime. Feel free to call us at +1-662-549-7037 or send
                        an email to nptestudybuddy@gmail.comfor questions and inquiries. We’d be more than happy to
                        offer you, our assistance.</p>
                    <p>You may also fill out our online contact form below with the required information.</p>


                    <?php if($this->session->flashdata('success')): ?>
                    <?php  echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>'; ?>
                    <?php endif; ?>


                    <?php if($this->session->flashdata('danger')): ?>
                    <?php  echo '<p class="alert alert-danger">'.$this->session->flashdata('danger').'</p>'; ?>
                    <?php endif; ?>


                    <!-- Contact Form -->
                    <form id="" name="" class="" action="#contact_us_form" method="post" novalidate="novalidate">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-30">


                                    <input name="name" type="text" value="" required
                                        aria-required="true" placeholder="Your Name"
                                        class="form-control  <?php if(!empty(form_error('name'))){ echo 'is-invalid'; }else{  } ?>">
                                    <?php echo form_error('name'); ?>


                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input name="email" type="email" value=""
                                        placeholder="Your Email" required
                                        class="form-control <?php if(!empty(form_error('email'))){ echo 'is-invalid'; }else{  } ?>">
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-30">
                                    <input name="phone" type="number" pattern="/^-?\d+\.?\d*$/"
                                        onKeyPress="if(this.value.length==10) return false;"
                                        value="" placeholder="Your Phone" required
                                        class="form-control <?php if(!empty(form_error('phone'))){ echo 'is-invalid'; }else{  } ?>">
                                    <?php echo form_error('phone'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-30">
                            <textarea name="message" rows="7"
                                class="form-control <?php if(!empty(form_error('message'))){ echo 'is-invalid'; }else{  } ?>"
                                placeholder="Enter Question/Comment"required></textarea>
                            <?php echo form_error('message'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="contactus"
                                class="btn btn-flat btn-default btn-theme-colored mr-5"
                                data-loading-text="Please wait..." required>Send your message</button>
                            <button type="reset" class="btn btn-flat btn-theme-colored2 text-white">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-80" id="custom-contact">
            <div class="contact-section">
                <div class="col-sm-12 col-md-3">
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-90">
                        <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                        <h4>Call Us</h4>
                        <h6 class="text-gray">Phone: +1 (662) 549-7037</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                        <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                        <h4>Email</h4>
                        <h6 class="text-gray">nptestudybuddy@gmail.com</h6>
                        <h6 class="text-gray">pcestudybuddy@gmail.com</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                </div>
            </div>


        </div>
    </section>
</div>

<!-- end main-content -->