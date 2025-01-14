<!-- START FOOTER -->
<div class="footer section-padding" style="background-color: #00283C; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4 style="color: #08B65E;">ART VALLEY</h4>
                    <p>Marketing agencies run paid advertising campaigns for themselves.</p>
                    <div class="info">
                        <div>
                            <h6 style="color: #08B65E;">SEND MESSAGE @</h6>
                            <span>sales@artvalleycreation.com</span>
                        </div>
                        <div>
                            <h6 style="color: #08B65E;">CALL US @</h6>
                            <ul>
                                <li>+91 8369137501</li>
                                <li>+91 7506188445</li>
                            </ul>
                        </div>
                        <div>
                            <h6 style="color: #08B65E;">Timing</h6>
                            <span>Mon - Fri 10:00 - 18:00</span>
                        </div>
                        <div>
                            <h6 style="color: #08B65E;">Address</h6>
                            <address>33 Farren Ave A5, New Haven CT 06513</address>
                        </div>
                    </div>
                </div>
            </div><!--- END COL -->

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4 style="color: #08B65E;">Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo base_url() ?>" style="color: white;">Home</a></li>
                        <li><a href="<?php echo base_url() ?>About" style="color: white;">About</a></li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Services</a></li>
                        <li><a href="<?php echo base_url() ?>Project" style="color: white;">Projects</a></li>
                        <li><a href="<?php echo base_url() ?>Blog" style="color: white;">Blog</a></li>
                        <li><a href="<?php echo base_url() ?>Contact" style="color: white;">Contact us</a></li>
                    </ul>
                </div>
            </div><!--- END COL -->

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="single_footer">
                    <h4 style="color: #08B65E;">Services</h4>
                    <ul>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Graphic Design</a></li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Executive Assistant</a></li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Order Management</a></li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Call Center Specialist</a>
                        </li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Website Design</a></li>
                        <li><a href="<?php echo base_url() ?>Service" style="color: white;">Account Executive</a></li>
                    </ul>
                </div>
            </div><!--- END COL -->

            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="newsletter-form">
                    <h4 style="color: #08B65E;">Follow Us</h4>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/artvalley-558823212" target="_blank"
                        style="margin-right: 10px;">

                        <i class="fa-brands fa-linkedin"  style="font-size: 30px; color: white;"></i>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/1234567890" target="_blank">
                        <i class="fa-brands fa-whatsapp"  style="font-size: 30px; color: #08B65E;"></i>
                    </a>
                </div>
            </div><!--- END COL -->


        </div><!--- END ROW -->

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_copyright">
                    <p>&copy; Copyright <?php echo date('Y') ?> All Rights Reserved by Art Valley</p>
                </div>
            </div>
        </div>
    </div><!--- END CONTAINER -->
</div>
<!-- END FOOTER -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- SlickNav JS -->
<script src="<?php echo base_url() ?>assets/js/jquery.slicknav.js"></script>

<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Mixitup JS -->
<script src="<?php echo base_url() ?>assets/js/jquery.mixitup.min.js"></script>

<!-- WOW JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.2.2/wow.min.js"></script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<!-- Main Scripts JS -->
<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>

<script>
    $(document).ready(function () {
        $('#testimonial-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            items: 1,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>

<script>
    AOS.init({
        duration: 1200,
        offset: 200,
        easing: 'ease-in-out',
        once: true
    });
</script>


</body>

</html>