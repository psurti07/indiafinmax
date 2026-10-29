<?php
$this->load->view('includes/header');
?>

<div class="visual-block visual-theme-5 hero-section text-black pt-60 pt-md-60 pt-xl-40 pb-40 pb-xl-40 pb-md-40">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 col-xl-7 position-relative">
                <div class="me-25">
                    <div class="visual-textbox pt-0">

                        <h1 class="" style="line-height: 1.5;">Smart Loan Guidance, <br>Made Simple with <br><span
                                class="text-success">IndiaFinMax</span></h1>
                        <p class="">Get clear support for documents, application steps and understanding lender terms
                        </p>
                        <a href="<?php echo site_url('onlineprocess/applynow'); ?>" class="btn btn-green btn-sm"><span
                                class="btn-text">Apply Now <img
                                    src="<?php echo base_url('assets/images/icons/arrow-right.png'); ?>"
                                    alt="Video Image"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-5">
                <img src="<?php echo base_url('assets/images/img/home-img-1.png'); ?>" alt="image" class="img-fluid">
            </div>

        </div>
    </div>

</div>

<main class="main">
    <section class="section section-theme-5 pt-0 pt-md-0 pb-xl-0 pb-0 partner-section">
        <div class="container">
            <div class="trending-categories-slider">
                <?php foreach ($banklist as $row) { ?>
                <div class="wrap text-center">
                    <div class="justify-content-center categories-image">
                        <img src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>"
                            alt="<?= $row->bank_name ?>" class="m-auto img-fluid">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section
        class="section section-theme-2 featured-joblix-block pt-68 pt-md-80 pt-xl-80 pb-60 pb-xl-80 pb-md-60 about-section"
        id="aboutus">
        <div class="container">

            <div class="row align-items-center">

                <div class="row">
                    <div class="col-xl-7 col-12 m-auto">
                        <header class="section-header text-center text-lg-center">
                            <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Who We
                                Are</span>
                            <h2>About <span class="text-success">IndiaFinMax</span></h2>
                            <p class="text-center">Six simple steps between you and the funds you need.</p>
                        </header>
                    </div>
                </div>
                <div class="row mt-10 aboutus-cnt">
                    <!-- Left Image -->
                    <div class="col-lg-3 col-md-12 about-image-col">
                        <div class="about-main-image">
                            <img src="<?php echo base_url('assets/images/image_32.png'); ?>"
                                alt="IndiaFinMax Team Meeting" class="w-100">
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="col-lg-3 col-md-4 col-12 about-card-col">
                        <div class="about-card vision-card">
                            <div class="about-number">01</div>
                            <h3>Vision</h3>
                            <p>To make loan application guidance clear and accessible.</p>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="col-lg-3 col-md-4 col-12 about-card-col">
                        <div class="about-card mission-card">
                            <div class="about-number">02</div>
                            <h3>Mission</h3>
                            <p>To provide reliable support throughout the loan application process.</p>
                        </div>
                    </div>

                    <!-- Values -->
                    <div class="col-lg-3 col-md-4 col-12 about-card-col">
                        <div class="about-card values-card">
                            <div class="about-number">03</div>
                            <h3>Values</h3>
                            <p>Transparency, integrity and customer-focused support guide our work.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Our
                            Process</span>
                        <h2>How It <span class="text-success">Works</span></h2>
                        <p class="text-center">Six simple steps between you and the funds you need.</p>
                    </header>
                </div>
            </div>


            <div class="row process-boxes justify-content-center g-3">

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s1.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Share Basic Details</h6>
                            <p class="text-dark mb-0">Start by sharing the information needed to understand your
                                application requirements.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s2.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Review Application Details</h6>
                            <p class="text-dark mb-0">We help you review basic eligibility factors, documents and next
                                steps. Final eligibility is decided by the lender.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s3.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Choose Application Support</h6>
                            <p class="text-dark mb-0">Select a support plan to access document guidance and application
                                assistance. Service charges, if applicable, are shown clearly before payment.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-20">
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s4.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Upload Documents Securely</h6>
                            <p class="text-dark mb-0">Submit the required documents through the secure customer portal.
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s5.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Lender Review</h6>
                            <p class="text-dark mb-0">The NBFC reviews your documents and profile according to its
                                internal policies and applicable guidelines.</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="p-15 border rounded box-hover">
                        <a href="#" class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/icons/s6.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Receive Lender Decision</h6>
                            <p class="text-dark mb-0">The lender communicates its decision and next steps directly,
                                subject to its eligibility criteria and terms.</p>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="section section-theme-12 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-5 txt-col mb-lg-0 mb-20">

                    <p class="mb-10 mb-lg-15 title-text text-success text-uppercase">Why Choose Us?</p>
                    <h2 class="mb-15">What Makes <span class="text-success">Indiafinmax <br> </span>Emerge as the Best?</h2>
                    <p>At IndiaFinMax, we are defined by our commitment to quality, customer-focused methodology, and the goal of empowering all our diverse financial clients.</p>
                    <ul class="list-unstyled help-list">
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; Effective Collaboration With Top NBFCs</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; Expert
                            Expert Financial Consultation</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; 
                            Easy Application Process</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; 
                            Impeccable Subscription Benefits</li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 col-lg-7 img-col">
                    <div class="two-columns column-left">
                        <div class="column">
                            <div class="d-flex align-items-center">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                       <i class="fa fa-bank fs-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="text-start ms-15">
                                    <h6>Associated NBFC Network</h6>
                                    <p class="mt-10">We work with associated NBFC partners to support a smoother loan
                                        application process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-center">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-plus fs-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="text-start ms-15">
                                    <h6>Personalised Consultation</h6>
                                    <p class="mt-10">Get one-on-one guidance on documents, application steps and lender
                                        requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-center">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-users fs-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="text-start ms-15">
                                    <h6>Customer-Focused Support</h6>
                                    <p class="mt-10">Our team keeps the process clear, responsive and easy to
                                        understand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-center">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-laptop fs-5 text-white"></i>
                                    </div>
                                </div>
                                <div class="text-start ms-15">
                                    <h6>Digital Application Support</h6>
                                    <p class="mt-10">Receive guidance for secure digital document submission and
                                        application steps, where available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60" style="background: linear-gradient(180deg, #00173B 0%, #0B3D8C 100%);
">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">EMI
                            CALCULATOR</span>
                        <h2 class="text-white">Plan your monthly <span class="text-success">repayment</span> </h2>
                        <p class="text-center text-white">Use this indicative calculator to understand how amount, rate and tenure
                            affect EMI.</p>
                    </header>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="row">

                        <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js"
                            type="text/javascript">
                        </script>
                        <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                            <div id="ecww-widget"
                                style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-9 featured_Jobs_Block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60"
        id="testimonial">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-5 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span
                            class="text-success text-uppercase text-outlined text-top mb-0 d-block">Testimonials</span>
                        <h2>Don't Believe Us? Check What <span class="text-success">Our Clients Say</span> </h2>
                        
                    </header>
                </div>
                <div class="col-xl-7 col-12 m-auto">
                    <div class="client_testimonials">
                        
                        <div class="client_testimonials_slider">
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Rohan Bedi</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p class="lh-normal">“The application steps and document requirements were
                                            explained clearly.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Ankit Shah</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I found the guidance on the application process easy to understand.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Priya Mehta</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The team helped me organise the required documents in a clear way.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Kunal Patel</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I appreciated the timely updates and process-related support.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Neha Verma</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The consultation helped me understand the next steps better.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Rahul Joshi</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The team explained NBFC requirements in a simple and professional manner.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Sneha Kapoor</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The document checklist made the application process easier to follow.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Harshil Desai</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“Clear communication helped me understand the process from the beginning.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Aditi Sharma</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The support team responded to my process-related questions promptly.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Vivek Agarwal</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“A helpful experience for understanding loan application requirements.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    
    <section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">FAQ</span>
                        <h2>Frequently Asked <span class="text-success">Questions</span></h2>
                        <p class="text-center">Got questions? We’ve got answers. Here’s everything you need to know about applying for a loan
                        with Indiafinmax.</p>
                    </header>
                </div>
            </div>


            <div class="row process-boxes justify-content-center">
                <div class="col-md-4 col-sm-6 mb-10">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s1.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">Who can apply for a business loan?</h6>
                        <p class="text-dark">Business owners, traders, manufacturers and service providers running a registered or established business can apply.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s2.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">What documents are required?</h6>
                        <p class="text-dark">Basic KYC, business proof, bank statements and income documents. Our team will share the exact list during application.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s3.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">How long does approval take?</h6>
                        <p class="text-dark">Most applications are reviewed within 48 hours after all documents are submitted.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s4.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">What loan amount can I get?</h6>
                        <p class="text-dark">You can apply for ₹1,00,000 up to ₹5,00,000, depending on your business profile and eligibility.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s5.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">Is any collateral required?</h6>
                        <p class="text-dark">Requirements depend on the loan amount and your profile. Our expert will guide you on the best option.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 mb-0">
                    <a href="#" class="">
                        <div class="icon mb-20">
                            <img src="<?php echo base_url('assets/images/icons/s6.png'); ?>" alt="icon">
                        </div>
                        <h6 class="text-dark">Can I prepay or close my loan early?</h6>
                        <p class="text-dark mb-0">Yes, early closure is possible. Applicable terms will be shared clearly before you sign.</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section
        class="section section-contact section-theme-1 pt-60 pt-md-60 py-xl-80 py-xxl-80 pb-60 pb-md-60 contact-section"
        id="contactus">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block">Drop Us a
                            Message</span>
                        <h2>We'd Love To Help You</h2>
                        <p class="text-center">Fill in your details and our team will get back to you shortly.</p>
                    </header>
                </div>
            </div>
            <div class="contact-form">

                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-xl-5 form-right-main">

                        <ul class="contact-support text-light h-100">
                            <div class="mb-20">
                                <h6 class="mb-0">Get in touch</h6>
                                <p class="text-light">Our team responds within 24 hours.</p>
                            </div>
                            <li>
                                <div class="contact-box ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon text-blue">
                                            <i class="fas fa-map-marker-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Location</h3>
                                        <address class="text-light"><?php echo COMPANY_ADDRESS; ?></address>
                                        </address>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-box ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon text-blue">
                                            <i class="fas fa-phone text-white"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Call Us</h3>
                                        <p>
                                            <a href="tel:<?php echo COMPANY_MOBILE; ?>"
                                                class="text-light"><?php echo COMPANY_MOBILE; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-box mb-0 ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon text-blue">
                                            <i class="fas fa-envelope text-white"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-uppercase text-light">Email</h3>
                                        <p>
                                            <a href="mailto:<?php echo COMPANY_EMAIL; ?>"
                                                class="text-light"><?php echo COMPANY_EMAIL; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6 col-xl-7 m-auto form-right-main">
                        <div class="bg-white shadow  p-20 contact-form-right border form-right">
                            <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                            <div class="row">
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="fullname" placeholder="Your Name"
                                        required data-validation-regex-regex="^[a-zA-Z ]*$">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="mobile" placeholder="Your Mobile"
                                        required minlength="10" maxlength="10" inputmode="numeric"
                                        data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="email" name="email" placeholder="Your Email Id"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="subject" placeholder="Your Subject"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-12 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <textarea class="form-control" name="message" cols="30" rows="10"
                                        placeholder="Your Message" required></textarea>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-green btn-sm w-100 text-uppercase"><span
                                            class="btn-text">Submit</span></button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
    <div class="modal fade" id="welcomemsg" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $msg[1]->option_value; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</main>

<?php
$this->load->view('includes/footer');
?>

<script type="text/javascript">
$(function() {
    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        var pageid = $('#getapage').find(":selected").val();

        if (pageid == 1 || pageid == 2) {
            window.location = "onlineprocess/applynow";
        }
    });
});
</script>

<script type="text/javascript">
$(window).on('load', function() {
    $('#welcomemsg').modal('show');
});
</script>