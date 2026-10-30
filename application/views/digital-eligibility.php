<?php
$this->load->view('includes/header-apply.php');
?>

<section
    class="visual-block visual-theme-5 hero-section text-black pt-60 pt-md-60 pt-xl-40 pb-70 pb-xl-80 pb-md-80 eligible-section">
    <div class="container">
        <div class="card-right-main">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 p-md-0 order-lg-1 order-2">
                    <div class="card shadow border-0 p-25 bg-navy h-100 card-left-wrapper">
                        <h6 class="text-uppercase sub-title mb-1 d-block pb-10 text-white">Desired Loan Amount</h6>

                        <h4 class=" mb-0 font-weight-bold text-white pb-10">₹
                            <?php echo formatePriceIndia($userdetails['loanamount']); ?> </h4>
                        <div class="d-flex justify-content-start">
                            <p class="mb-3 text-white border px-5 py-5 rounded-pill d-inline-block fa-xs lh-lg me-10">
                                Tenure: up to 60 months
                            </p>

                            <div class="text-hold">
                                <div class="tag-list mb-20">
                                    <span
                                        class="tag-wrap text-dark text-uppercase title-badge d-inline-block fa-xs lh-lg">ROI
                                        from 11%*</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-10">

                            <h6 class="text-uppercase fw-bold text-white d-block">Customer details</h6>
                        </div>

                        <div class="user-details-table mb-0 pb-10">
                            <div class="d-flex mb-10">
                                <div class="icon-col">
                                    <div class="m-auto">
                                        <div
                                            class="d-flex align-items-center justify-content-center bg-white image-wrap">
                                            <i class="fa-regular fa-user text-navy"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-10">
                                    <h6 class="text-uppercase text-white d-block s-12">Name</h6>
                                    <p class="h6 text-white"><?php echo $userdetails['fullname']; ?></p>
                                </div>
                            </div>
                            <div class="d-flex mb-10">
                                <div class="icon-col">
                                    <div class="m-auto">
                                        <div
                                            class="d-flex align-items-center justify-content-center bg-white image-wrap">
                                            <i class="fa-solid fa-phone text-navy"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-10">
                                    <h6 class="text-uppercase d-block s-12 text-white">Mobile :</h6>
                                    <p class="h6 text-white"><?php echo $userdetails['mobile']; ?></p>
                                </div>
                            </div>
                            <!-- <div class="d-flex mb-10">
                                <div class="icon-col">
                                    <div class="m-auto">
                                        <div
                                            class="d-flex align-items-center justify-content-center bg-white image-wrap">
                                            <span class="flaticon-user lh-1 text-purple"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-10">
                                    <small class="text-uppercase d-block s-12">Loan Amount :</small>
                                    <p class="h6"><?php echo formatePriceIndia($userdetails['loanamount']); ?></p>
                                </div>
                            </div> -->
                            <div class="d-flex mb-10">
                                <div class="icon-col">
                                    <div class="m-auto">
                                        <div
                                            class="d-flex align-items-center justify-content-center bg-white image-wrap">
                                            <i class="fa-regular fa-envelope text-navy"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-10">
                                    <h6 class="text-uppercase d-block s-12 text-white">Email</h6>
                                    <p class="h6 text-white"><?php echo $userdetails['email']; ?></p>
                                </div>
                            </div>
                            <div class="d-flex mb-10">
                                <div class="icon-col">
                                    <div class="fbox-ico ico-16 m-auto">
                                        <div
                                            class="d-flex align-items-center justify-content-center bg-white image-wrap">
                                            <i class="fa-regular fa-file text-navy"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-10">
                                    <h6 class="text-uppercase d-block s-12 text-white">Loan Type</h6>
                                    <p class="h6 text-white">Personal Loan</p>
                                </div>
                            </div>

                        </div>
                        <div class="otp-velidation-text-wrap border bg-light-gray p-10">

                            <div class="d-flex align-items-start">

                                <div>
                                    <i class="fa-solid fa-shield text-success"></i>
                                </div>
                                <p class="mb-0 ms-10 mt-0 h6 fw-normal">Your data is
                                    256-bit encrypted and never
                                    shared
                                    without your consent.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 p-md-0 order-lg-2 order-1">
                    <div class="block-holder form-condidates bg-white shadow rounded-0 column-right-wrapper">


                        <div class="subhead ms-15 text-center">
                            <h4 class="mb-5 text-navy"><?php echo $userdetails['loanname']; ?></h4>
                            <p class="mb-0">Get pre-approved offers instantly — just fill in your details.</p>
                        </div>

                        <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                class="form-control" required>

                            <div class="form-group col-12 col-lg-12 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">CIBIL Score</label>
                                <select class="form-select" id="cibilscore" name="cibilscore" required>
                                    <option value="">CIBIL Score *</option>
                                    <option value="Below 650">Below 650</option>
                                    <option value="650 - 700">650 - 700</option>
                                    <option value="700 - 750">700 - 750</option>
                                    <option value="750 - 800">750 - 800</option>
                                    <option value="800 - 850">800 - 850</option>
                                    <option value="850 - 900">850 - 900</option>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Monthly Income (₹)</label>
                                <input class="form-control" type="text" id="monincome" name="monincome"
                                    placeholder="Monthly Income *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Current Monthly EMI (₹)</label>
                                <input class="form-control" type="text" id="monemi" name="monemi"
                                    placeholder="Current Monthly EMI *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Loan Purpose</label>
                                <select class="form-select" id="loanpurpose" name="loanpurpose" required>
                                    <option value="">Select Loan Purpose *</option>
                                    <?php if ($userdetails['loantype'] == 12) { ?>
                                    <option value="Business Expansion">Business Expansion</option>
                                    <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                    <option value="Supplier Payments">Supplier Payments</option>
                                    <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                    <option value="Hiring Budget">Hiring Budget</option>
                                    <option value="Other">Other</option>
                                    <?php } else { ?>
                                    <option value="Personal Use">Personal Use</option>
                                    <option value="Property Renovation">Property Renovation</option>
                                    <option value="Marriage Purpose">Marriage Purpose</option>
                                    <option value="Education Purpose">Education Purpose</option>
                                    <option value="Medical Emergency">Medical Emergency</option>
                                    <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Pincode</label>
                                <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                    inputmode="numeric" class="form-control mb-2" placeholder="Pincode*" required>
                                <div class="help-block font-small-3"></div>
                                <span class="pincode error text-danger text-start"></span>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">City</label>
                                <input type="text" name="city" id="city" class="form-control mb-2" placeholder="City*"
                                    required>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">State</label>
                                <input type="text" name="state" id="state" class="form-control mb-2"
                                    placeholder="State*" required>
                                <div class="help-block font-small-3"></div>
                            </div>


                            <div class="col-lg-12">
                                <div class="otp-velidation-text border px-25 py-15 bg-light-gray">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex align-items-center mb-lg-0 mb-5">
                                                    <i class="fa-solid fa-bullseye text-success"></i>
                                                    <div>
                                                        <p class="mb-0 fw-light ms-10 h6">Soft check only — won't impact
                                                            your credit
                                                            score. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-end">
                                                <button type="submit" class="btn btn-green btn-sm w-100"
                                                    id="formsubmit1"><span class="btn-text">Check Your Eligibility <i
                                                            class="fa-solid fa-arrow-right"></i></span></button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
</section>


<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm1').on('submit', function(e) {
        $('#formsubmit1').attr('disabled', true);
        $('#formsubmit1').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>

<script>
$('#pincode').on('input', function() {

    var pincode = $(this).val();

    if (pincode.length === 6) {

        $.ajax({
            url: "<?= base_url('onlineprocess/geoLocation') ?>",
            type: "POST",
            data: {
                pincode: pincode
            },
            dataType: "json",

            success: function(response) {

                if (response.status === 'success') {
                    $('#city').val(response.city);
                    $('#state').val(response.state);
                    $('.pincode').text('');
                } else {
                    $('#city').val('');
                    $('#state').val('');
                    $('.pincode').text('Enter valid pincode.');
                }
            },

            error: function() {
                $('.pincode').text('Enter valid pincode.');
            }
        });

    } else {
        $('#city').val('');
        $('#state').val('');
    }
});
</script>

<?php
$this->load->view('includes/footer-apply');
?>