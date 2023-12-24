<?php include("includes/header.php"); ?>
<div class="contact-page">
    <!-- page title section -->
    <section class="page-title-section">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--  content inside the contact page -->
    <section class="contact-page-detail section-bg-color">
        <div class="container">
            <div class="contact-detail-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="contact-links">
                            <h2 class="section-heading">Contact Us</h2>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+977-9812345678">+977-9812345678</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="mailto:infoparewa@gmail.com">infoparewa@gmail.com</a>
                                </li>
                            </ul>
                            <figure>
                                <img src="./images/contact-page-img.png" alt="">
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="contact-form">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-6">
                                    <label for="first-name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first-name" required>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                    <div class="invalid-feedback">
                                        Provide your first name !
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="last-name" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="last-name" required>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                    <div class="invalid-feedback">
                                        Provide your last name !
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback">
                                        Provide a valid email !
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                    <div class="invalid-feedback">
                                        Provide a valid phone no !
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" required>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                    <div class="invalid-feedback">
                                        Provide a valid subject !
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="message" required></textarea>
                                    <div class="valid-feedback">
                                        Looks good.
                                    </div>
                                    <div class="invalid-feedback">
                                        Provide an appropriate message !
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <button class="primary-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.4631805444787!2d85.33263137414623!3d27.70298192568641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199f75f08da5%3A0x641a4463533be28c!2sUltrabyte%20International%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1698646953932!5m2!1sen!2snp"
                width="100%" height="479" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <?php include("includes/footer.php"); ?>