<?php
if (have_rows('ctas')) : ?>
    <?php while (have_rows('ctas')) : the_row();
        $cta_id = get_sub_field('cta_id');
        $content = get_sub_field('content');
        if (empty($content)) {
            continue;
        }
        $cta_headline = get_sub_field('cta_headline');
        $cta_blurb = get_sub_field('cta_blurb');
        $cta_bg_color = get_sub_field('cta_background_color'); //Created some options to bg color: cyan, white, light-blue, grey.
        $cta_centered = get_sub_field('cta_centered');
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        $sec_class = $cta_bg_color;
        if ($cta_centered) {
            $sec_class .= " text-center";
        }
        $single_column = get_sub_field('single_column');
        if (isset($single_column) && $single_column == 1) {
            $column_display_style = 'col-12';
        } else {
            $column_display_style = 'col-lg-6 col-sm-12 align-self-center';
        } ?>
        <section class="optional-spotlights-block <?= $sec_class ?>">
            <div class="container">
                <?php if (!empty($cta_headline)) : ?>
                    <h2><?= $cta_headline; ?></h2>
                <?php endif; ?>
                <?php if (!empty($cta_blurb)) : ?>
                    <p class="blurb"><?= $cta_blurb; ?></p>
                <?php endif; ?>
                <div class="spotlight">
                    <div class="row gx-5 pt-5">
                        <div class="<?= $column_display_style; ?> align-self-center">
                            <?php if (!empty($content)) : ?>
                                <div><?= $content; ?></div>
                            <?php endif; ?>
                            <div class="d-grid gap-4 d-sm-flex">
                                <?php
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    $cta_button_color = get_sub_field('cta_button_color'); //Created some options to button color.
                                ?>
                                    <a class="<?php echo $cta_button_color; ?>" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" rel="noopener noreferrer"><?= esc_html($link_title); ?></a>
                                <?php endif; ?>
                                <?php
                                // Check rows exists.
                                if (have_rows('pop_up_button')) :
                                    // Loop through rows.
                                    while (have_rows('pop_up_button')) : the_row();
                                        // Load sub field value.
                                        $number_identifier = get_sub_field('number_identifier');
                                        $button_color_scheme = get_sub_field('button_color_scheme');
                                        $button_cta = get_sub_field('button_cta');
                                        $popup_title = get_sub_field('popup_title');
                                        $popup_youtube_or_vimeo_url = get_sub_field('popup_youtube_or_vimeo_url');
                                        $popup_content = get_sub_field('popup_content');
                                        // Do something...
                                        if (!empty($button_cta)) : ?>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="<?php echo $button_color_scheme; ?>" data-bs-toggle="modal" data-bs-target="#<?php echo $cta_id; ?><?php echo $cta_id; ?><?php echo $number_identifier; ?>modal">
                                                <?php echo $button_cta; ?>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="<?php echo $cta_id; ?><?php echo $cta_id; ?><?php echo $number_identifier; ?>modal" tabindex="-1" aria-labelledby="<?php echo $cta_id; ?><?php echo $cta_id; ?><?php echo $number_identifier; ?>modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                                    <div class="modal-content text-center">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="<?php echo $cta_id; ?><?php echo $cta_id; ?><?php echo $number_identifier; ?>modalLabel">
                                                                <?php if (!empty($popup_title)) echo $popup_title; ?>
                                                            </h5>
                                                            <a href="#" type="button" class="close-lg mx-4" data-bs-dismiss="modal" aria-label="Close">Close</a>
                                                        </div>
                                                        <div class="modal-body p-5 text-center">
                                                            <?php if (!empty($popup_youtube_or_vimeo_url)) : ?>
                                                                <iframe width="1050" height="580" src="<?php if (!empty($popup_youtube_or_vimeo_url)) echo esc_url($popup_youtube_or_vimeo_url); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            <?php endif; ?>
                                                            <div class="container mt-5"><?php if (!empty($popup_content)) echo $popup_content; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 align-self-center <?= (get_sub_field("swap_order") ? 'order-lg-first' : '') ?>">
                            <?php if (!empty($image)) : ?>
                                <img class="spotlight-image" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>