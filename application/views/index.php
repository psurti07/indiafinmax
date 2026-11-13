<?php
$this->load->view('includes/header');
?>

<div class="visual-block visual-theme-5 hero-section text-black pt-0 pt-md-60 pt-xl-40 pb-40 pb-xl-40 pb-md-40">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-6 position-relative mb-lg-0 mb-20">
                <div class="me-25">
                    <div class="visual-textbox pt-0">
                        <div class="section-theme-6 pt-10 pb-0">
                            <div class="counters-block pb-0">
                                <div class="container">
                                    <div class="row align-items-center">
                                         <div class="col-lg-7 col-md-6 col-sm-5 ms-0">
                                            <div
                                                class="row bg-white py-5 border rounded-pill align-items-center mb-15 g-2">
                                                <div class="col-lg-4 col-md-3 col-5">
                                                    <div class="box-agent">
                                                        <ul class="agent-img-list d-flex ps-0 list-unstyled mb-0">
                                                            <li class="agent-img-item">
                                                                <img src="<?php echo base_url('assets/images/Client-1.png'); ?>"
                                                                    alt="image" class="me-10">
                                                            </li>
                                                            <li class="agent-img-item">
                                                                <img src="<?php echo base_url('assets/images/Client-2.png'); ?>"
                                                                    alt="image" class="me-10">
                                                            </li>
                                                            <li class="agent-img-item">
                                                                <img src="<?php echo base_url('assets/images/client-3.png'); ?>"
                                                                    alt="image" class="me-10">
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-lg-8 col-md-9 col-7 p-0">
                                                    <p class="mb-0 fa-xs text-navy fw-bold">10,000+ Clients Supported</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1>Smart Loan Guidance, <br>Made Simple with <br><span class="text-success">IndiaFinMax</span>
                        </h1>
                        <p>Get clear support for documents, application steps and understanding lender terms
                        </p>
                        <a href="<?php echo site_url('onlineprocess/applynow'); ?>" class="btn btn-green btn-sm"><span
                                class="btn-text">Apply Now <img
                                    src="<?php echo base_url('assets/images/icons/arrow-right.png'); ?>"
                                    alt="Video Image"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="<?php echo base_url('assets/images/img/home-img-1.png'); ?>" alt="image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<main class="main">
    <section class="section section-theme-5 pt-0 pt-md-60 pt-xl-40 pb-40 pb-xl-40 pb-md-40 partner-section">
        <div class="container">
            <div class="row">
                    <div class="col-xl-7 col-12 m-auto">
                        <header class="section-header text-center text-lg-center">
                            <h2 class="text-navy">Our partnered <span class="text-success">NBFCs</span></h2>
                        </header>
                    </div>
                </div>
            <div class="row">
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
        </div>
    </section>

    <section
        class="section section-theme-2 featured-joblix-block pt-68 pt-md-80 pt-xl-0 pb-60 pb-xl-80 pb-md-60 about-section"
        id="aboutus">
        <div class="container">
     
                <div class="row">
                    <div class="col-xl-7 col-12 m-auto">
                        <header class="section-header text-center text-lg-center">
                            <div class="text-hold">
                                <div class="tag-list mb-20">
                                    <span class="tag-wrap text-dark text-uppercase d-inline-block">About us</span>
                                </div>
                            </div>
                            <h2 class="text-navy">About <span class="text-success">IndiaFinMax</span></h2>
                            <p class="text-center">Clear guidance and support throughout your loan application journey.</p>
                        </header>
                    </div>
                </div>
                <div class="row mt-10 aboutus-cnt align-items-center justify-content-between">
                    <!-- Left Image -->
                    <div class="col-lg-5 col-md-12 about-image-col">
                        <div class="about-main-image mb-lg-0 mb-15">
                            <img src="<?php echo base_url('assets/images/about-img.png'); ?>"
                                alt="IndiaFinMax Team Meeting" class="w-100">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row column-right g-20">
                            <!-- Vision -->
                            <div class="col-lg-4 col-md-4 col-12 about-card-col">
                                <div class="about-card vision-card h-100">
                                    <div class="about-number">01</div>
                                    <h3>Vision</h3>
                                    <p>To make loan application guidance clear and accessible.</p>
                                </div>
                            </div>

                            <!-- Mission -->
                            <div class="col-lg-4 col-md-4 col-12 about-card-col">
                                <div class="about-card mission-card h-100">
                                    <div class="about-number">02</div>
                                    <h3>Mission</h3>
                                    <p>To provide reliable support throughout the loan application process.</p>
                                </div>
                            </div>

                            <!-- Values -->
                            <div class="col-lg-4 col-md-4 col-12 about-card-col">
                                <div class="about-card values-card h-100">
                                    <div class="about-number">03</div>
                                    <h3>Values</h3>
                                    <p>Transparency, integrity and customer-focused support guide our work.</p>
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
                        <div class="text-hold">
                            <div class="tag-list mb-20">
                                <span class="tag-wrap text-dark text-uppercase d-inline-block">Our Process</span>
                            </div>
                        </div>
                        <h2 class="text-navy">How It <span class="text-success">Works</span></h2>
                        <p class="text-center">Six steps to guide you through the loan application process.</p>
                    </header>
                </div>
            </div>


            <div class="row process-boxes justify-content-center g-20">

                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-1.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Verify Your Details</h6>
                            <p class="text-dark mb-0">Provide the information needed to begin your application.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-2.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Review Application Details</h6>
                            <p class="text-dark mb-0">Review basic eligibility requirements, documents, and next steps. Final eligibility is determined by the lender.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-3.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Choose Application Support</h6>
                            <p class="text-dark mb-0">Select a support plan for document guidance and application assistance. Any service charges are shown before payment.</p>
                        </div>
                    </div>
                </div>
          
 
                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-4.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Submit Documents</h6>
                            <p class="text-dark mb-0">Upload the required documents through the customer portal.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-5.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Lender Review</h6>
                            <p class="text-dark mb-0">The NBFC reviews your application and documents according to its policies.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="p-15 border rounded box-hover h-100 card-main shadow-sm">
                        <div class="text-center text-decoration-none d-flex flex-column">
                            <div class="icon my-20">
                                <img src="<?php echo base_url('assets/images/work-6.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-navy">Receive a Decision</h6>
                            <p class="text-dark mb-0">The lender communicates its decision and any next steps, subject to its criteria and terms.</p>
                        </div>
                    </div>
                </div>

           

        </div>
    </section>


    <section class="section section-theme-12 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-5 txt-col mb-lg-0 mb-20">
                    <div class="text-hold">
                        <div class="tag-list mb-20">
                            <span class="tag-wrap text-dark text-uppercase d-inline-block">Why Choose Us?</span>
                        </div>
                    </div>

                    <h2 class="mb-15 text-navy">Why Choose <span class="text-success">Indiafinmax? <br> </span>
                    </h2>
                    <p>Get clear guidance and support throughout your loan application journey.</p>
                    <ul class="list-unstyled help-list">
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; Associated NBFC Network</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; One-on-One Guidance</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; Online Application Support</li>
                        <li><i class="fa fa-check-circle fs-5 text-blue"></i>&nbsp; Clear Service Information</li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 col-lg-7 img-col">
                    <div class="two-columns column-left">
                        <div class="column">
                            <div class="d-flex align-items-start flex-column">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-bank fs-5"></i>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <h6>Associated NBFC Network</h6>
                                    <p class="mt-10">We work with NBFC partners to support the loan application process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-start flex-column">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-plus fs-5"></i>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <h6>Personalised Guidance</h6>
                                    <p class="mt-10">Get one-on-one support with documents, application steps and lender requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-start flex-column">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-users fs-5"></i>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <h6>Customer-Focused Support</h6>
                                    <p class="mt-10">Our team helps you understand the process and your next steps.</p>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="d-flex align-items-start flex-column">
                                <div class="text-start mb-10">
                                    <div class="icon">
                                        <i class="fa fa-laptop fs-5"></i>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <h6>Digital Application Support</h6>
                                    <p class="mt-10">Receive guidance on submitting documents and completing application steps online, where available.</p>
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
                        <div class="text-hold">
                            <div class="tag-list mb-20">
                                <span class="tag-wrap text-dark text-uppercase bg-light-gray d-inline-block">EMI
                                    CALCULATOR</span>
                            </div>
                        </div>
                        <h2 class="text-white">Plan your monthly <span class="text-success">repayment</span> </h2>
                        <p class="text-center text-white">Use this indicative calculator to understand how amount, rate
                            and tenure
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
            <div class="row mt-lg-20 mt-0">
                <div class="col-xl-5 col-12 m-auto">
                    <div class="text-hold">
                        <div class="tag-list mb-20">
                            <span class="tag-wrap text-dark text-uppercase d-inline-block">Testimonials</span>
                        </div>
                    </div>
                    <h3 class="mb-15 text-navy">Don't Believe Us? Check What <span class="text-success">Our Clients
                            Say</span> </h3>
                    <p>
                        Real stories from business owners
                    </p>
                </div>
                <div class="col-xl-7 col-12 m-auto">
                    <div class="client_testimonials">
                        <div class="client_testimonials_slider">
                            <div>
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-1.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Rohan Bedi</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Ankit Shah</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-1.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Priya Mehta</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Kunal Patel</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-1.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Neha Verma</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                      <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Rahul Joshi</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-1.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Sneha Kapoor</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Harshil Desai</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-1.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Aditi Sharma</p>
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
                                <div class="p-15 border testimonials-card-content text-center position-relative h-100">
                                    <div class="icon my-20">
                                        <img src="<?php echo base_url('assets/images/testimonial/testimonial-2.png'); ?>"
                                            alt="" class="m-auto">
                                    </div>
                                    <p class="card-position mb-0 mt-20">Vivek Agarwal</p>
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


    <section
        class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky faq-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">

                        <div class="text-hold">
                            <div class="tag-list mb-20">
                                <span class="tag-wrap text-dark text-uppercase d-inline-block">Faq</span>
                            </div>
                        </div>
                        <h2 class="text-navy">Frequently Asked <span class="text-success">Questions</span></h2>
                        <p class="text-center">Find answers to common questions about applying for a personal loan through IndiaFinMax.</p>
                    </header>
                </div>
            </div>
            <div class="row process-boxes justify-content-center g-20">
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-user-tie text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Who can apply for a personal loan?</h6>
                        <p class="text-dark">Salaried and self-employed individuals may apply, subject to the lender’s eligibility criteria.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-file-alt text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">What documents are required?</h6>
                        <p class="text-dark">Lenders may request identity and address proof, income documents and bank statements. Requirements vary by lender.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-bolt text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">How long does approval take?</h6>
                        <p class="text-dark">Review timelines vary based on the lender, application details and document verification.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-rupee-sign text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">What loan amount can I apply for?</h6>
                        <p class="text-dark">The available loan amount depends on the lender’s criteria and your eligibility.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-shield-alt text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Is collateral required?</h6>
                        <p class="text-dark">Personal loans are generally unsecured. Requirements depend on the lender and loan product.</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" class="">
                        <div class="categories-image mb-15">
                            <span class="icon">
                                <i class="fas fa-check-circle text-success"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Can I repay my loan early?</h6>
                        <p class="text-dark mb-0">Prepayment or early closure may be available, subject to the lender’s terms and applicable charges.</p>
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
                        <div class="text-hold">
                            <div class="tag-list mb-20">
                                <span class="tag-wrap text-dark text-uppercase d-inline-block">Drop Us a Message</span>
                            </div>
                        </div>
                        <h2 class="text-navy">We'd Love To <span class="text-success"> Help You</span></h2>
                        <p class="text-center">Fill in your details and our team will get back to you shortly.</p>
                    </header>
                </div>
            </div>
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
                                <input class="form-control" type="text" name="fullname" placeholder="Your Name" required
                                    data-validation-regex-regex="^[a-zA-Z ]*$">
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                <input class="form-control" type="text" name="mobile" placeholder="Your Mobile" required
                                    minlength="10" maxlength="10" inputmode="numeric"
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