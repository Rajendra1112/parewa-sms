<?php include("includes/header.php"); ?>
<!-- sign up page -->
<div class="account-page sign-up-page">
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

    <!-- content inside the sign up page -->
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
                        <div class="account-page-sub-heading">Create Your Parewa SMS Account</div>
                        <p>Welcome to Parewa SMS! To get started with our powerful SMS platform, please fill out the
                            registration form to create your account.</p>
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
                            <h1 class="account-page-heading text-center">Sign Up</h1>

                            <div class="col-12">
                                <label for="full-name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="full-name"
                                    placeholder="Enter Your Full Name " required>
                                <div class="invalid-feedback">
                                    Provide your full name !
                                </div>
                                <div class="valid-feedback">
                                    Looks good.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter Your Email Address" required>
                                <div class="invalid-feedback">
                                    Provide a valid email !
                                </div>
                                <div class="valid-feedback">
                                    Looks good.
                                </div>
                            </div>


                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <div class="password-container">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter Your Password" required>
                                    <i class="fa-regular fa-eye" id="show-password"></i>
                                </div>
                                <div class="valid-feedback">
                                    Good.
                                </div>
                                <div class="invalid-feedback">
                                    Incorrect Password !
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="phone-no" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone-no"
                                    placeholder="Enter Your Phone Number" required>
                                <div class="invalid-feedback">
                                    Provide a valid phone number !
                                </div>
                                <div class="valid-feedback">
                                    Looks good.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="checkbox-row">
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="" id="accept">
                                        <label for="accept">
                                            <p>I agree to the <a href="term-condition.php"> Terms </a> and <a
                                                    href="privacy.php">Privacy Policy</a></p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="primary-btn" type="submit">Sign Up</button>
                            </div>

                            <div class="col-12">
                                <div class="login-option">
                                    Or Sign Up with
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
                                <p>Already have an account? <span><a href="login.php">Log In</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("includes/footer.php"); ?>