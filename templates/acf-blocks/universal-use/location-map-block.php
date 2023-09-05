<?php
$county_and_state = get_field('county_and_state', 'option');
$address = get_field('address', 'option');
$business_hours = get_field('business_hours', 'option');
$google_maps_url = get_field('google_maps_url', 'option');
?>
<section class="location-map-block">
    <div class="px-4 text-center">
        <h2 class="pt-2 pb-4">Where to Find Us</h2>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center mx-auto g-5 py-5">
            <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="py-5">
                    <h3 class="text-body-emphasis"><?php if ($county_and_state) echo $county_and_state ?: 'Orange County, California'; ?></h3>
                    <br />
                    <div class="">
                        <!-- Links -->
                        <?php
                        $officenumber = get_field('office_number', 'option');
                        $faxnumber = get_field('fax_number', 'option');
                        //Strip Out Everything Except Numbers
                        $formatted_officenumber = preg_replace('/[^\dxX]/', '', $officenumber);
                        $formatted_faxnumber = preg_replace('/[^\dxX]/', '', $faxnumber);
                        ?>

                        <p><i class="fas fa-home mr-3"></i><a class="" href="https://www.google.com/maps/place/Coastal+Construction+Services/@33.640814,-117.7803964,10z/data=!3m1!4b1!4m6!3m5!1s0xa803e6b56e7c7b61:0x4c11c84ecf974b6c!8m2!3d33.640814!4d-117.7803964!16s%2Fg%2F11ssf4ym_f?entry=ttu" target="_blank">&nbsp;&nbsp;299 Nieto Ave, Long Beach, CA </a></p>
                        <p><i class="fas fa-envelope mr-2"></i> <a class="" href="mailto:info@socalccs.com?subject=Inquiry from socalccs.com">&nbsp;&nbsp;info@socalccs.com </a></p>
                        <p><i class="fas fa-phone mr-2"></i> <a class="" href="tel:+1<?php if ($officenumber) echo $formatted_officenumber ?: '8888226653'; ?>">&nbsp;&nbsp;(888) 822-6653 </a></p>
                        <p><i class="fas fa-print mr-2"></i> <a class="" href="tel:+1<?php if ($faxnumber) echo $formatted_faxnumber ?: '9495865391'; ?>">&nbsp;&nbsp;(949) 586-5391 </a></p>
                    </div>
                </div>
                <div class="py-3">
                    <h3>Business Hours</h3>
                    <div><?php if ($business_hours) echo $business_hours ?: 'Monday - Sunday : 7 am - 7 pm'; ?></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425173.6502538695!2d-118.40420945160822!3d33.639819735870574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa803e6b56e7c7b61%3A0x4c11c84ecf974b6c!2sCoastal%20Construction%20Services!5e0!3m2!1sen!2sus!4v1691692760071!5m2!1sen!2sus" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>