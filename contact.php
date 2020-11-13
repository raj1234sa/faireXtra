<?php
    require_once 'header.php';
    $CURPAGE = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<div class="row align-items-center justify-content-center page-heading-only">
    <div class="col-auto contact-header page-heading">Contact Us</div>
</div>
</div>
</div>
</header>
<section>
    <div class="container contact-section">
        <div class="custom-card contact-card">
            <div class="row no-gutters">
                <div class="col-12 col-md-8 seperate-left">
                    <form action="#" method="post">
                        <div class="contact-form-desc">Looking for Cars, OOH Services, or drive with us? Drop a word and let us know how we can help you?</div>
                        <div class="form-inputs">
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <textarea rows="6" class="form-control" placeholder="Enter Your Name"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input type="submit" class="form-submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4 seperate-right">
                    <div class="form-header">Contact Info</div>
                    <div class="contact-content mt-4 mt-md-5">
                        <span class="d-block pt-md-3 head">Address</span>
                        <span class="d-block mt-2 mt-md-2 content">
                            336 Udhyog Vihar Pahse IV,<br>Gurugram
                        </span>
                        <span class="d-block mt-4 mt-md-5 head">General Inquiry</span>
                        <span class="d-block mt-2 mt-md-2 content">
                            <a href="mailto:Fx@FaireXtra.com">Fx@FaireXtra.com</a>
                        </span>
                        <span class="d-block mt-4 mt-md-5 head">Customer Support</span>
                        <span class="d-block mt-2 mt-md-2 content">
                            +91 70 30 73 29 91
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once 'footer.php' ?>
<script>
    $(document).ready(function () {
        $('title').text('Contact Support');
    });
</script>