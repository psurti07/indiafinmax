<?php
$this->load->view('includes/header-apply.php');
?>

<section class="visual-block visual-theme-5 hero-section text-black pt-60 pt-md-60 pt-xl-40 pb-80 pb-xl-80 pb-md-80">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-md-4 col-lg-4 col-xl-5 order-2">
                <div class="me-25">
                    <div class="visual-textbox pt-0">
                        <h1 class="" style="line-height: 1.3;">Automated wealth allocation at <span
                                class="text-success">IndiaFinMax</span> <br></h1>
                        <p class="">Unlock smart tools and insights to manage your money, grow your savings and spend
                            with confidence.
                        </p>
                        <ul class="d-flex list-unstyled d-flex align-items-center mb-7 align-middle flex-sm-nowrap flex-wrap justify-content-between">
                        <li class="text-success" style="font-size: 16px;"><i class="fa fa-check-circle"></i>&nbsp;No credit card required</li>
                        <li class="text-success" style="font-size: 16px;"><i class="fa fa-check-circle"></i>&nbsp;7-days free trial</li>
                        <li class="text-success" style="font-size: 16px;"><i class="fa fa-check-circle"></i>&nbsp;Instant setup</li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-7 order-md-2 order-1">
                <div class="row">
                    <div class="col-md-6" style="background:rgba(0, 23, 59, 1); border-radius:10px 0 0 10px">
                        <div class="section-header justify-content-between mb-0 d-flex h-100 align-items-center">
                            <h5 class="text-white fs-3" style="line-height: 1.3;">Get Instant Credit up to  <span class="text-success">₹10 Lakhs</span> in minutes </h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="account-box mb-0">
                            <?php if ($processstep == 'step1') { ?>
                            <div class="text-dark text-dark ps-10 pe-10">
                                
                                <?php echo form_open('onlineprocess/sendotpCode', array('id' => 'submitForm1', 'class' => 'contac-form mb-0', 'novalidate' => 'novalidate')); ?>
                                <div class="row">
                                    <div class="col-12 mb-15">
                                        <div class="form-group">
                                            <div class="range">
                                                <div class="range__value text-center pt-0 mt-10">
                                                    <span class="fs-3"></span>
                                                </div>
                                                <div class="d-flex justify-content-between required-amount mt-10">
                                                    <h6 class="text-uppercase mb-0">Enter Required Amount</h6>
                                                    <h6 class="text-uppercase mb-0">₹10k – ₹10L</h6>
                                                </div>
                                                <div class="range__slider">
                                                    <input type="range" name="loanamount" step="10000">
                                                </div>
                                                <div class="d-flex justify-content-between required-price mb-10">
                                                    <h6 class="text-uppercase mb-0">₹10,000</h6>
                                                    <h6 class="text-uppercase mb-0">₹10,00,000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group error">
                                            <label class="text-uppercase h6 mb-10 text-gray-alt">Mobile number</label>
                                            <div class="input-group mb-15">
                                                <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-15"
                                                    id="basic-addon1">+91</span>
                                                <input class="form-control" type="text"
                                                    placeholder="Bank-registered number" id="mobile" name="mobile"
                                                    required minlength="10" maxlength="10" inputmode="numeric"
                                                    data-validation-regex-regex="^[6789]\d{9}$"
                                                    data-validation-regex-message="Enter valid mobile number">
                                            </div>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                    <div class="form-group mb-10 ps-0">
                                        <div class="d-flex align-items-start "> <input type="checkbox" name="tandc"
                                                id="tandc" class="custom-control-input mb-0 mt-5" value="1" checked
                                                required>
                                            <label class="custom-control-label" for="tandc"><small
                                                    class="ms-10 d-block h6 fw-normal">By proceeding, I agree to
                                                    Indiafinmax’s <a href="<?= base_url('terms-conditions') ?>"
                                                        target="_blank" style="text-decoration: none;"
                                                        class="text-dark">Terms of
                                                        Use</a>
                                                    and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                        style="text-decoration: none;" class="text-dark">Privacy
                                                        Policy</a></small></label>

                                        </div>
                                        <div class="help-block ms-0 ps-0 mb-2"></div>
                                    </div>
                                </div>
                                
                                <div class="col-12 mb-2">
                                    <div class="form-group mb-0 ps-0 pb-15">
                                        <div class="d-flex align-items-start ">
                                            <input type="checkbox" name="promotion" id="promotion"
                                                class="custom-control-input mb-0 mt-5" value="1" checked required>
                                            <label class="custom-control-label" for="promotion"><small
                                                    class="ms-10 d-block h6 fw-normal">
                                                    I would like to receive updates from Indiafinmax by email, call or
                                                    SMS.
                                                    I can opt out anytime.
                                                </small></label>
                                        </div>
                                        <div class="help-block ms-0 ps-0 mb-2"></div>
                                    </div>
                                </div>
                                    <div class="text-danger mt-3 mb-3" id="mobilenoError1"></div>
                                        <div class="col-12 mb-15">
                                            <button type="submit" id="formsubmit1"
                                                class="btn btn-green btn-sm text-uppercase"><span class="btn-text">Start
                                                    Process <i class="fa-solid fa-arrow-right"></i></span></button>
                                        </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <?php } else if ($processstep == 'step2') { ?>
                    <div class="account-box-frame text-dark bg-white card shadow-sm border">
                        <div class="">
                            <h5 class="mb-10 text-start fw-bold">Enter Your Verification Code</h5>
                            <h6 class="fw-normal">We've sent a 4-digit OTP to
                                <strong><?php echo $userdetails['mobile']; ?></strong>
                            </h6>

                        </div>
                        <?php echo form_open('onlineprocess/checkotpCode', array('id' => 'submitForm2', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <input type="hidden" name="otpmobile" id="otpmobile"
                                value="<?php echo $userdetails['mobile']; ?>">
                            <input type="hidden" name="loanamount" id="loanamount"
                                value="<?php echo $userdetails['loanamount']; ?>">
                            <div class="col-12 mb-15 mb-md-20">
                                <div class="form-group error">
                                    <label class="text-uppercase h6 mb-10 text-gray-alt">Enter OTP</label>
                                    <div class="wpcf7-form-control-wrap" data-name="tel-922">
                                        <input type="text" name="otpcode" id="otpcode"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required optnumber w-100"
                                            required inputmode="numeric" placeholder="Enter OTP Code" maxlength="4"
                                            data-validation-regex-regex="[0-9]+"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                    </div>
                                    <!-- <div class="input-field text-start">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        </div> -->
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-center mb-20">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="p-countdown" data-delay="30">
                                            <div class="p-countdown-count" id="counttime">
                                                <code>New OTP in <span id="timer">30</span> Sec</code>
                                            </div>
                                            <div id="resendBtn" class="d-none">
                                                <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                            </div>
                                            <code id="resend-message"></code>
                                            <div class="custom-error" id="otpcodeError"></div>
                                        </div>
                                        <div class="custom-error" id="otpcodeError"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="title-text d-flex justify-content-md-end justify-content-start">

                                        <h6 class="fw-light mb-0 ms-5"><i
                                                class="fa-solid fa-lock me-10 text-success"></i>Encrypted</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="formsubmit2" class="btn btn-green btn-sm"><span
                                        class="btn-text">Verify
                                        OTP <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>


                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <?php } else if ($processstep == 'step3') { ?>
                    <div class="account-box-frame text-dark card shadow bg-white">
                        <div class="text-start section-header">
                            <div class="salaried-img-wrap mb-10 m-auto">
                                <i class="fas fa-briefcase text-success"></i>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-10 text-center fw-bold text-dark">Employment details</h5>
                                <p>Choose how you earn — then complete the next steps</p>
                            </div>
                            <!-- <p class="mb-0" style="font-size:14px"> <strong>Loan Amount. :
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></p>
                                <p style="font-size:14px"> <strong> Mobile No. :
                                        <?php echo $userdetails['mobile']; ?></strong></p> -->
                        </div>
                        <?php echo form_open('onlineprocess/registeredUser', array('id' => 'submitForm3', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                        <div class="row gx-10 mb-15 justify-content-center">
                            <input type="hidden" id="loanamount" name="loanamount"
                                value="<?php echo $userdetails['loanamount']; ?>">
                            <input type="hidden" id="referralcode" name="referralcode"
                                value="<?php echo $userdetails['referralcode']; ?>">
                            <input type="hidden" id="usermobile" name="usermobile"
                                value="<?php echo $userdetails['mobile']; ?>">

                            <!-- <div class="size-details">
                                    <ul class="nav form-tabs mb-15 mb-md-20" id="mylist">
                                        <li data-value="1">
                                            <button class="nav-link active-size active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Salaried</button>
                                        </li>
                                        <li data-value="2">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Self-Employed</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" id="usertype" name="usertype" value="1">
                                </div>   -->

                            <label class="h6 mb-10 text-dark">I am currently</label>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-12 mb-md-0 mb-10">
                                <fieldset class="picker1">
                                    <label for="personalloan" class="w-100">
                                        <input type="radio" name="usertype" id="personalloan" value="1" class="radio"
                                            checked>
                                        <span class="plan-details p-15 bg-light h-100">
                                            <div class="d-flex mb-0 align-items-center flex-column">
                                                <div>
                                                    <div class="salaried-img mb-10">
                                                        <img src="<?php echo base_url('assets/images/icons/Salarised.png'); ?>"
                                                            alt="image" class="">
                                                    </div>
                                                </div>
                                                <div class="ms-10 employment-content">
                                                    <h6 class="employment-title mb-0">Salaried</h6>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6 col-12 ">
                                <fieldset class="picker1">
                                    <label for="businessloan" class="w-100">
                                        <input type="radio" name="usertype" id="businessloan" value="2" class="radio">
                                        <span class="plan-details p-15 bg-light h-100">
                                            <div class="d-flex mb-0 align-items-center flex-column">
                                                <div>
                                                    <div class="salaried-img bg-dark mb-10">
                                                        <img src="<?php echo base_url('assets/images/icons/self-employed.png'); ?>"
                                                            alt="image" class="">
                                                    </div>
                                                </div>
                                                <div class="ms-10 employment-content">
                                                    <h6 class="employment-title mb-0">Self-Employed
                                                    </h6>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-12 mb-15 mb-md-20 mt-20">
                                <div class="form-group">
                                    <label class="text-uppercase h6 mb-10 text-gray-alt">Full name</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-20"
                                            id="basic-addon1">
                                            <i class="fa-regular fa-user"></i></span>
                                        <input class="form-control" type="text" id="username" name="username"
                                            placeholder="Bank Registered Name" required
                                            data-validation-regex-regex="^[a-zA-Z ]*$">
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-15 mb-md-20">
                                <div class="form-group">
                                    <label class="text-uppercase h6 mb-10 text-gray-alt">Email address</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-20"
                                            id="basic-addon1">
                                            <i class="fa-regular fa-envelope"></i></span>
                                        <input class="form-control" type="email" id="useremail" name="useremail"
                                            placeholder="Email Id" required>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="formsubmit3" class="btn btn-green btn-sm"><span
                                        class="btn-text">Process <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <?php } ?>
                    
                </div>

            </div>
        </div>
    </div>

</section>

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


<section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
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
<section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-12 m-auto">
                <header class="section-header text-center text-lg-center">
                    <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">FAQ</span>
                    <h2>Frequently Asked <span class="text-success">Questions</span></h2>
                    <p class="text-center">Got questions? We’ve got answers. Here’s everything you need to know about
                        applying for a loan
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
                    <p class="text-dark">Business owners, traders, manufacturers and service providers running a
                        registered or established business can apply.</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <a href="#" class="">
                    <div class="icon mb-20">
                        <img src="<?php echo base_url('assets/images/icons/s2.png'); ?>" alt="icon">
                    </div>
                    <h6 class="text-dark">What documents are required?</h6>
                    <p class="text-dark">Basic KYC, business proof, bank statements and income documents. Our team will
                        share the exact list during application.</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <a href="#" class="">
                    <div class="icon mb-20">
                        <img src="<?php echo base_url('assets/images/icons/s3.png'); ?>" alt="icon">
                    </div>
                    <h6 class="text-dark">How long does approval take?</h6>
                    <p class="text-dark">Most applications are reviewed within 48 hours after all documents are
                        submitted.</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <a href="#" class="">
                    <div class="icon mb-20">
                        <img src="<?php echo base_url('assets/images/icons/s4.png'); ?>" alt="icon">
                    </div>
                    <h6 class="text-dark">What loan amount can I get?</h6>
                    <p class="text-dark">You can apply for ₹1,00,000 up to ₹5,00,000, depending on your business profile
                        and eligibility.</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-10">
                <a href="#" class="">
                    <div class="icon mb-20">
                        <img src="<?php echo base_url('assets/images/icons/s5.png'); ?>" alt="icon">
                    </div>
                    <h6 class="text-dark">Is any collateral required?</h6>
                    <p class="text-dark">Requirements depend on the loan amount and your profile. Our expert will guide
                        you on the best option.</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-0">
                <a href="#" class="">
                    <div class="icon mb-20">
                        <img src="<?php echo base_url('assets/images/icons/s6.png'); ?>" alt="icon">
                    </div>
                    <h6 class="text-dark">Can I prepay or close my loan early?</h6>
                    <p class="text-dark mb-0">Yes, early closure is possible. Applicable terms will be shared clearly
                        before you sign.</p>
                </a>
            </div>
        </div>

    </div>
</section>

<section class="section section-contact section-theme-1 bg-light-gray">
    <div class="container">
        <p class="mb-0"><small><strong>Disclaimer: </strong><?php echo COMPANY_NAME ?> is not a lender or financial
                institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees,
                and
                disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or
                specific loan terms. The amount paid is only for the service charge. We are not lenders and do not
                guarantee
                any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</small>
        </p>

        <p class="mb-0"><small><strong>Important Note: </strong>We ask our customers to make payments ONLY on our
                website <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">Indiafinmax.com</a> and NOT through any
                other
                source, directly or indirectly.</small></p>

        <p class="mb-0"><small><strong>Pre-application NOTE: </strong>Users are advised to read our terms and conditions
                and
                policies before proceeding/applying/registration.</small>
        </p>
        <p class="mb-0"><small><strong>Disclosure:</strong> Loan tenure minimum 6 months & maximum 60 months; Maximum
                APR: 34%
                p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000
                processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR
                14.41%.</small></p>

        <p class="mb-0"><small><strong>Registered Office Address : </strong><?php echo COMPANY_ADDRESS; ?></small></p>

        <p class="mb-0"><small><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                </strong><?php echo COMPANY_EMAIL; ?></small></p>

    </div>
</section>

<?php $this->load->view('includes/footer-apply'); ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
$('#mylist li').click(function() {
    $('#usertype').val($(this).data('value'));
});

function resendotp() {
    loanamount = document.getElementById('loanamount').value;
    mobile = document.getElementById('otpmobile').value;

    $.ajax({
        url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
        type: "POST",
        data: 'mobile=' + mobile + '&loanamount=' + loanamount,
        dataType: "JSON",
        cache: false,
        processData: false,
        success: function(response) {
            if (response['success'] == true) {
                $('#resend-message2').html(response['message']);
                toastr.success(response['message']);
            } else {
                toastr.error(response['message']);
            }
        },
        error: function(jXHR, textStatus, errorThrown) {
            toastr.error(errorThrown, 'ERROR');
        }
    });
}

$(function() {
    $('#submitForm1').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit1').html(
                    'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit1').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    if (response['redirect_url'] != "") {
                        window.location.href = response['redirect_url'];
                    } else {
                        window.location = "./applynow/s2/" + response['mobile'];
                    }
                } else {
                    $('#mobilenoError1').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            }
        });
    });

    $('#submitForm2').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit2').html(
                    'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit2').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location = "../../applynow/s3/" + response['mobile'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            }
        });
    });


    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit3').html(
                    'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit3').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location.href = response['redirect_url'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            }
        });
    });
});
const color = $(".size-details li");

color.on("click", function() {
    $(".size-details ul li").removeClass("active-size");
    $(this).addClass("active-size");
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {

    let resendBtn = document.getElementById('resendBtn');
    let counttime = document.getElementById('counttime');
    let timerDisplay = document.getElementById('timer');
    let countdown = 30;

    let interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(interval);
            resendBtn.classList.remove('d-none');
            counttime.classList.add('d-none');
            timerDisplay.textContent = '';
        }
    }, 1000);

    resendBtn.addEventListener('click', function() {
        resendBtn.classList.add('d-none');
        counttime.classList.remove('d-none');
        countdown = 30;
        timerDisplay.textContent = countdown;

        interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);
    });
});

$('.otp-input').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length === 1) {
        $(this).next('.otp-input').focus();
    }
});
$('.otp-input').on('keydown', function(e) {
    if (e.key === "Backspace" && this.value === '') {
        $(this).prev('.otp-input').focus();
    }
});
</script>