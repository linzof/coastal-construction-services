</div><!-- #content -->
<div>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #0077C0">
        <!-- Section: Social media -->
        <div style="background-color: #1c2331">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                    <!-- Left -->
                    <div class="me-5">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="#!" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#!" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#!" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#!" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </div>
            </div>
        </div>
        <!-- Section: Social media -->
        <!-- Section: Links  -->
        <div class="py-5">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-3 justify-content-center mb-5">
                        <!-- Content -->
                        <?php
                        $company_description = get_field('company_description', 'option');
                        $company_tagline = get_field('company_tagline', 'option');
                        $navlogo = get_field('coastal_construction_services_nav_logo', 'option');
                        $navlogourlalt = $navlogo['alt'];
                        $navlogotitle = $navlogo['title'];
                        $navlogourl = $navlogo['url']; ?>
                        <a href="<?= esc_url(home_url()); ?>" target="_self"><img class="logo img-fluid" src="<?php if ($navlogourl) echo esc_url($navlogourl) ?: 'CCS'; ?>" height="75" width="185" alt="<?php if ($navlogourlalt) echo esc_attr($navlogourlalt) ?: 'Coastal Construction Services Typography Logo'; ?>" /></a>
                        <br>
                        <p class="pt-5"><?php echo $company_tagline ?: 'Minimal Design. Maximum Impact.'; ?></p>
                        <p class="pt-2"><?php echo $company_description ?: 'Serving Orange County, California & Surrounding Areas For Over 21 Years'; ?></p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-5">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Services</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="/services/remodeling/" target="_self" class="text-white">Remodeling</a>
                        </p>
                        <p>
                            <a href="/services/solar/" target="_self" class="text-white">Solar</a>
                        </p>
                        <p>
                            <a href="/services/heating-air-conditioning/" target="_self" class="text-white">Heating & Air Conditioning</a>
                        </p>
                        <p>
                            <a href="/services/damage-restoration/" target="_self" class="text-white">Damage Restoration</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <!-- <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-5">

                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" target="_self" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#!" target="_self" class="text-white">Become an Affiliate</a>
                        </p>
                        <p>
                            <a href="#!" target="_self" class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!" target="_self" class="text-white">Help</a>
                        </p>
                    </div> -->
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-5">
                        <!-- Links -->
                        <?php
                        $officenumber = get_field('office_number', 'option');
                        $faxnumber = get_field('fax_number', 'option');
                        //Strip Out Everything Except Numbers
                        $formatted_officenumber = preg_replace('/[^\dxX]/', '', $officenumber);
                        $formatted_faxnumber = preg_replace('/[^\dxX]/', '', $faxnumber);
                        ?>
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i><a class="text-white" href="https://www.google.com/maps/place/Coastal+Construction+Services/@33.640814,-117.7803964,10z/data=!3m1!4b1!4m6!3m5!1s0xa803e6b56e7c7b61:0x4c11c84ecf974b6c!8m2!3d33.640814!4d-117.7803964!16s%2Fg%2F11ssf4ym_f?entry=ttu" target="_blank">&nbsp;&nbsp;299 Nieto Ave, Long Beach, CA </a></p>
                        <p><i class="fas fa-envelope mr-2"></i> <a class="text-white" href="mailto:info@socalccs.com?subject=Inquiry from socalccs.com">&nbsp;&nbsp;info@socalccs.com </a></p>
                        <p><i class="fas fa-phone mr-2"></i> <a class="text-white" href="tel:+1<?php if ($officenumber) echo $formatted_officenumber ?: '8888226653'; ?>">&nbsp;&nbsp;(888) 822-6653 </a></p>
                        <p><i class="fas fa-print mr-2"></i> <a class="text-white" href="tel:+1<?php if ($faxnumber) echo $formatted_faxnumber ?: '9495865391'; ?>">&nbsp;&nbsp;(949) 586-5391 </a></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </div>
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #1c2331">
            © 2023 Copyright:
            <a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->
<!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>