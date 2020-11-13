<footer>
    <section class="middle">
        <div class="middle-footer">
            <div class="row no-gutters">
                <div class="col-10 main-content">
                    <div class="heading">Ready for a more efficient way to drive value for your brand? Contact sales to get started.</div>
                    <?php
                    if($CURPAGE != 'contact') {
                    ?>
                    <div class="row mt-3">
                        <div class="col">
                            <a href="contact.php">
                                <i class="fas fa-angle-right"></i>
                                Lets Get Started
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="container">
            <div class="row no-gutters align-items-center contact-detail">
                <div class="col">
                    <div class="row">
                        <div class="col-auto">Phone<br><strong>+91 70 30 73 29 91</strong></div>
                        <div class="col-auto mt-md-0 mt-3">Address<br><strong>336 Udhyog Vihar Pahse IV, Gurugram</strong></div>
                    </div>
                </div>
                <div class="col">
                    <div class="float-right">
                        <a href="#"><img src="images/appstore-button.png" class="url img-fluid" width="130"></a>
                        <a href="#"><img src="images/play-button.png" class="url mt-md-0 mt-3 img-fluid" width="130"></a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters links">
                <div class="col-12 col-md-8 left-link">
                    <div class="row no-gutters justify-content-between align-items-center">
                        <div class="col-auto">
                            <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/faire/index.php">
                                <img src="images/logo.png" width="150" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-auto">
                            <ul class="list-unstyled m-0">
                                <li class="head">company</li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="advertisers.php">Brands & Agencies</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="for-drivers.php">For Drivers</a></li>
                            </ul>
                        </div>
                        <div class="col-auto align-self-start">
                            <ul class="list-unstyled m-0">
                                <li class="head">help and advice</li>
                                <li><a href="#">Installers</a></li>
                                <li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 right-link">
                    <div class="row no-gutters justify-content-center align-items-center">
                        <div class="col-8">
                            <span class="heading">get in touch</span>
                            <span class="d-block mt-4">Feel free to get in touch with us via email.</span>
                            <span class="d-block mt-3 email"><a href="mailto:Fx@FaireXtra.com">Fx@FaireXtra.com</a></span>
                            <div class="mt-3 overflow-auto">
                                <ul class="list-unstyled social-links d-inline-flex m-0">
                                    <li><a href="#" title="FaireXtra"><img src="images/header-icon.png"></a></li>
                                    <li><a href="#" title="LinkedIn"><img src="images/linkedin.png"></a></li>
                                    <li><a href="#" title="Facebook"><img src="images/facebook.png"></a></li>
                                    <li><a href="#" title="Twitter"><img src="images/twitter.png"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom row no-gutters align-items-center justify-content-end">
                <div class="col-12 col-md-auto">
                    &copy; 2020@fairXtra. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/cf8867ac93.js" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>

</html>