	<!--=====footer-start=======-->
	<footer class="footer footer-theme-1">
	    <div class="pri-footer text-gray pt-35 pt-lg-50 pt-xxl-80 pb-20 pb-md-0">
	        <div class="container">
	            <div class="row">
	                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-35 mb-md-45 mb-lg-0">
	                    <div class="finder-theme-1">
	                        <img src="<?php echo base_url('assets/images/logo/logo-light.png'); ?>" alt="indiafinmax"
	                            class="mb-20 img-fluid" width="195">

	                        <div class="footer-info">
	                            <div class="form-subscribe mb-20">
	                                <p class="text-white">At Indiafinmax, we make loan application support easier to understand. Our team provides clear guidance on documents, process steps and lender requirements, helping customers make informed decisions with confidence.</p>
	                            </div>

	                            <ul class="social-networks no-bg d-flex flex-wrap">
	                                <?php if (SM_FACEBOOK != '#') { ?>
	                                <li><a href="<?php echo SM_FACEBOOK; ?>"> <img
	                                            src="<?php echo base_url('assets/images/icons/facebook.png'); ?>"
	                                            alt="Indiafinmax" class="img-fluid"></a></li>
	                                <?php } ?>
	                                <?php if (SM_INSTAGRAM != '#') { ?>
	                                <li><a href="<?php echo SM_INSTAGRAM; ?>"> <img
	                                            src="<?php echo base_url('assets/images/icons/instagram.png'); ?>"
	                                            alt="Indiafinmax" class="img-fluid"></a></li>
	                                <?php } ?>
	                                <?php if (SM_TWITTER != '#') { ?>
	                                <li><a href="<?php echo SM_TWITTER; ?>"> <img
	                                            src="<?php echo base_url('assets/images/icons/twitter.png'); ?>"
	                                            alt="Indiafinmax" class="img-fluid"></a></li>
	                                <?php } ?>
	                                <?php if (SM_LINKEDIN != '#') { ?>
	                                <li><a href="<?php echo SM_LINKEDIN; ?>"> <img
	                                            src="<?php echo base_url('assets/images/icons/linkdin.png'); ?>"
	                                            alt="Indiafinmax" class="img-fluid"></a></li>
	                                <?php } ?>
	                                <?php if (SM_YOUTUBE != '#') { ?>
	                                <li><a href="<?php echo SM_YOUTUBE; ?>"> <img
	                                            src="<?php echo base_url('assets/images/icons/youtube.png'); ?>"
	                                            alt="Indiafinmax" class="img-fluid"></a></li>
	                                <?php } ?>

	                            </ul>
	                        </div>
	                    </div>
	                </div>


	                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-15 mb-md-0">
	                    <h5 class="text-white">Useful Links</h5>
	                    <ul class="footer-links">
	                        <li><a class="text-white" href="<?php echo site_url(); ?>">Home</a></li>
	                        <li><a class="text-white" href="javascript:;" onclick="goToMenu('aboutus')">About Us</a></li>
	                        <li><a class="text-white" href="<?php echo site_url('contact'); ?>">Contact</a></li>
	                        <li><a class="text-white" href="<?php echo site_url('faqs'); ?>">FAQs</a></li>
	                    </ul>
	                </div>
	                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-15 mb-md-0">
	                    <h5 class="text-white">Useful Links</h5>
	                    <ul class="footer-links">
	                        <li><a class="text-white" href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy</a></li>
							<li><a class="text-white" href="<?php echo site_url('terms-conditions'); ?>">Terms &amp; Conditions</a></li>
							<li><a class="text-white" href="#">Refund Policy</a></li>
							<li><a class="text-white" href="<?php echo site_url('disclaimer'); ?>">Disclaimer</a></li>
	                        </li>
	                      
	                    </ul>
	                </div>
	                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-15 mb-md-0">
	                    <h5 class="text-white">Contact Us</h5>
	                    <ul class="contact-list">
	                       
	                        <li>
	                            <img src="<?php echo base_url('assets/images/icons/map.png'); ?>" alt="Indiafinmax"
	                            class="mb-20 img-fluid">

	                            <span class="text ms-10 text-white"><?php echo COMPANY_ADDRESS; ?></span>
	                        </li>
	                        <li>
	                             <img src="<?php echo base_url('assets/images/icons/call.png'); ?>" alt="indiafinmax"
	                            class="mb-20 img-fluid">

	                            <span class="text ms-10"><a class="text-white"
	                                    href="tel:<?php echo COMPANY_MOBILE; ?>"><?php echo COMPANY_MOBILE; ?></a></span>
	                        </li>
	                        <li>
	                               <img src="<?php echo base_url('assets/images/icons/envelope.png'); ?>" alt="indiafinmax"
	                            class="mb-20 img-fluid">

	                            <span class="text ms-10"><a
	                                    href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-white"><?php echo COMPANY_EMAIL; ?></a></span>
	                        </li>
	                    </ul>
	                </div>


	            </div>
	        </div>
	    </div>
		<hr class="text-white">
	    <div class="sec-footer pt-0 pb-25 py-md-20 py-lg-35">
	        <div class="container">
	            <div class="row align-items-center">
	                <div class="col-12 col-md-6 text-sm-start text-center">
	                    <p class="small text-white"><?php echo date('Y') . ' &copy; ' . COMPANY_NAME; ?>. All rights reserved.</p>
	                </div>
					<div class="col-12 col-md-6 text-sm-end text-center">
	                    <p class="small text-white"> Crafted with care in Surat, India.</p>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<!--=====footer-end=======-->
	</div>

	<!--=====JS=======-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url('assets/js/jquery-3.6.4.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/vendor.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/jquery.main.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/custom.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/jqBootstrapValidation.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/form-validation.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/toastr.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/fontawesome.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript">
$(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#submit-btn').html(
                    "SUBMITTING... <span class='spinner-border spinner-border-sm ms-1' role='status' aria-hidden='true'></span>"
                    );
                $('#submit-btn').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    document.getElementById("contactForm").reset();
                    toastr.success(response['message']);
                } else {
                    toastr.error(response['message']);
                }

                $('#submit-btn').html('Send Message');
                $('#submit-btn').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#submit-btn').html('Send Message');
                $('#submit-btn').attr('disabled', false);
            }
        });
    });
});
	</script>
	</body>

	</html>