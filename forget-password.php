<?php include("includes/header.php"); ?>
<!-- forget password page -->
<div class="account-page forget-password-page">
    <!-- page title section -->
    <!-- <section class="page-title-section">
        <div class="container">
            <h1 class="page-title">Log In</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log In</li>
                </ol>
            </nav>
        </div>
    </section> -->

    <!-- content inside the forget password page -->
    <section class="account-page-detail section-bg-color">
        <div class="container">
            <div class="row">
                <!-- image attached with login form -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="account-img-col">
                        <div class="website-logo">
                            <figure>
                                <img src="./images/logo.svg" alt="">
                            </figure>
                        </div>
                        <div class="account-page-sub-heading">Forgot Your Parewa SMS Password? No Worries!</div>
                        <p>It happens to the best of us. If you've forgotten your Parewa SMS password, don't worry.
                            We'll help you reset it. Please enter your email address below, and we'll guide you through
                            the process.</p>
                        <a href="https://www.youtube.com/watch?v=K6junDaEiXI"
                            class="account-page-youtube-link youtube-tutorial"><i class="fa-brands fa-youtube"></i>Watch
                            Demo</a>
                    </div>
                </div>

                <!-- login form -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="login-form-col">
                        <!-- form for login -->
                        <form class="account-form row needs-validation" novalidate>
                            <h1 class="account-page-heading text-center">Forget Password</h1>
                            <div class="col-12">
                                <label for="recovery" class="form-label">Recovery Email Address or Phone Number</label>
                                <input type="text" class="form-control" id="recovery"
                                    placeholder="Enter Your Email or Phone no " required>
                                <div class="invalid-feedback">
                                    Provide valid email or phone no !
                                </div>
                                <div class="valid-feedback">
                                    Looks good.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="important-note">
                                    <p>Important Note:</p>
                                    <p>You'll receive an email with instructions to reset your password. Make sure to
                                        check
                                        your inbox, including your spam folder, if you don't see the email right away.
                                    </p>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="primary-btn" type="submit">Continue</button>
                            </div>

                            <div class="col-12">
                                <div class="login-option">
                                    Or Log In with
                                </div>
                            </div>

                            <div class="col-12 text-center"><a
                                    href="https://support.google.com/mail/answer/56256?hl=en">
                                    <figure>
                                        <img src="./images/google-logo.svg" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="col-12 text-center">
                                <p>Remember your password? <span><a href="login.php">Log In</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("includes/footer.php"); ?>