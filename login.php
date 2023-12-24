<?php include("includes/header.php"); ?>
<!-- login page -->
<div class="account-page login-page">
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

    <!-- content inside the login page -->
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
                        <div class="account-page-sub-heading">Log In to Your Parewa SMS Account</div>
                        <p>Welcome back to Parewa SMS! Please log in to access your account and start sending SMS
                            messages.</p>
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
                            <h1 class="account-page-heading text-center">Log In</h1>
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
                                <div class="checkbox-row">
                                    <div class="checkbox-container">
                                        <input type="checkbox" name="" id="check">
                                        <label for="check">Remember Me</label>
                                    </div>
                                    <a href="forget-password.php">Forget Password ?</a>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="primary-btn" type="submit">Log In</button>
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
                                <p>Don’t have an account? <span><a href="sign-up.php">Sign Up</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include("includes/footer.php"); ?>