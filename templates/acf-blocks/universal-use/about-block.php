<?php
$title = get_field('title');
$content = get_field('content');
$image = get_field('image');
?>
<section class="about-us container">
    <div class="px-4 text-center">
        <?php if ($image) :
            // Image variables.
            $url = $image['url'];
            $image_title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];
        ?>
            <img class="d-block mx-auto" src="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($image_title); ?>" alt="<?php echo esc_attr($alt); ?>" width="125" height="125"><? endif; ?>
        <h2 class="pt-4 pb-4"><?= $title ?></h2>
        <div>
            <?= $content ?>
        </div>
    </div>
</section>