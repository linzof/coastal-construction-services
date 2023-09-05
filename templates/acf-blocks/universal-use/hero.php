<?php
$id = get_the_ID();
$ptype = get_post_type();
$jumbotron = get_field('jumbotron');
$lorem_ipsum = 'I am sample text to help describe what the content would look like if you were to add this text. Please note - it is mandatory to add your own text';
if ($jumbotron) :  ?>
    <div class="jumbotron jumbotron-fluid vertical-center" style="background-image: linear-gradient(to left, rgba(0,0,0,0.2) 5%,rgba(0,0,0,.9) 80%), url(<?php echo esc_url($jumbotron['jumbotron_background_image']['url']); ?>)">
        <div class="container h-100 my-5 py-5">
            <div class="row align-items-center my-5 py-5">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <h5 class="text-white font-weight-bold text-uppercase"><?php echo $jumbotron['jumbotron_top_title'] ?: 'Top Title'; ?></h5>
                    <h1 class="text-white"><?php echo $jumbotron['jumbotron_main_title'] ?:  the_title(); ?></h1>
                    <div class="col pt-1 text-white"><?= $jumbotron['jumbotron_content'] ?: $lorem_ipsum; ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endif;  ?>