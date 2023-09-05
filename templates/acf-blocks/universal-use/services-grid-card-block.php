<?php
$section_class = get_field('data_grid_card_background_color');
$data_grid_card_section_title = get_field('data_grid_card_section_title');
$data_grid_card_section_blurb = get_field('data_grid_card_section_blurb');

// args
$args = array(
    'numberposts'       => -1,
    'post_type'         => 'services',

);

// query
$the_query = new WP_Query($args);
?>
<section class="grid-card py-5">
    <div class="container-fluid container py-5">
        <div class="">
            <h2 class=""><?php if ($data_grid_card_section_title) echo $data_grid_card_section_title; ?></h2>
            <div class="pt-2">
                <?php if ($data_grid_card_section_blurb) echo $data_grid_card_section_blurb; ?>
            </div>
        </div>
        <div class="row g-3 pt-5 justify-content-center">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php $id = get_the_ID();
                    $icon = get_field('icon', $id); ?>
                    <div class="col-xs-12 col-lg-6 ">
                        <div class="row h-100" style="padding: 10px;">
                            <div class="col-xl-12">
                                <div id="grid-card" class="card h-100 cssanimation fadeInBottom">
                                    <div class="card-content m-4">
                                        <div class="row" id="blockitems">
                                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1" id="icons_section">
                                                <i class="<?php echo $icon; ?>" style="font-size: 40px" aria-hidden="true">
                                                </i>
                                            </div>
                                            <div class="col-sm-7 col-md-8 col-lg-10 col-xl-10" id="heading_section">
                                                <div style="transform: rotate(0);">
                                                    <h5 class="">Residential & Commercial</h5>
                                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                                    <a class="stretched-link" href="<?php the_permalink(); ?>">Learn More About <?php the_title(); ?> Service ></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query();   // Restore global post data stomped by the_post(). 
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>