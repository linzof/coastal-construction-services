<?php
$product_logo_grid = get_field('logo_grid');
$product_title = get_field('logo_grid_title');
$product_blurb = get_field('logo_grid_blurb');
$product_logo = get_field('logo_grid_logo');
?>
<section class="logo-list">
    <div class="container">
        <h2 class='text-center'>
            <?php if ($product_title) echo $product_title; ?>
        </h2>
        <div class="row m-2 d-flex flex-row justify-content-around px-auto g-4">
            <div class="col-sm-12 col-md-10 col-xxl-9">
                <div class='blurb'>
                    <?php if (!empty($product_blurb)) echo $product_blurb; ?>
                </div>
            </div>
            <div class="row m-2 d-flex flex-row align-items-center justify-contents-center justify-content-around px-auto g-4">
                <?php if (have_rows('logo_grid_logos')) : ?>
                    <?php while (have_rows('logo_grid_logos')) : the_row();
                        $logo_grid_logo_img = get_sub_field('logo_grid_logo');
                    ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="mx-auto h-75 w-75 d-block img-responsive" src="<?= esc_url($logo_grid_logo_img['url']); ?>" alt="<?= esc_attr($logo_grid_logo_img['alt']); ?>" />
                        </div>
                    <?php endwhile; ?>
            </div>
        <?php endif; ?>
        </div>
</section>