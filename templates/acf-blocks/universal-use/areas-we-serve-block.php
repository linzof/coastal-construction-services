<?php
$headline = get_field('headline');
$blurb = get_field('blurb');
?>
<section>
    <div class="container">
        <div>
            <?php if (!empty($headline)) : ?>
                <h2 class="pt-4 pb-4"><?= $headline; ?></h2>
            <?php endif; ?>
            <?php if (!empty($blurb)) : ?>
                <p class="blurb"><?= $blurb; ?></p>
            <?php endif; ?>
        </div>

        <?php if (have_rows('areas')) : ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <?php
                // Loop through rows.
                while (have_rows('areas')) : the_row();
                    $city = get_sub_field('city');
                ?>
                    <div class="col d-flex align-items-start">
                        <div>

                            <p class=""><i class="fa-solid fa-location-dot fa-xs"></i>&nbsp; <?= $city ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div>
    </div>
</section>