<?php
$fields = get_fields();
//dd($fields['subpage']);
?>

<section class="acf-block-subpage">
    <?php foreach ($fields["subpage"] as $field): ?>
        <?php if (isset($field["image_location"]) && $field["image_location"]) { ?>
            <div class="subpage-wrapper" style="background-color: <?php echo $field["section_background_color"]; ?>">
                <div class="image-wrapper block-right">
                    <img src="<?php echo $field["add_image"]; ?>">
                </div>
                <div class="subpage-description-right">
                    <div class="subpage-description__title"><?php echo $field["title"]; ?></div>
                    <div class="subpage-description__text"><?php echo $field["text"]; ?></div>
                    <div class="subpage-description__btn">Learn More</div>
                </div>
            </div>
        <?php } else { ?>
            <div class="subpage-wrapper" style="background-color: <?php echo $field["section_background_color"]; ?>">
                <div class="subpage-description">
                    <div class="subpage-description__title"><?php echo $field["title"]; ?></div>
                    <div class="subpage-description__text"><?php echo $field["text"]; ?></div>
                    <div class="subpage-description__btn">Learn More</div>
                </div>
                <div class="image-wrapper">
                    <img src="<?php echo $field["add_image"]; ?>">
                </div>
            </div>
        <?php } ?>
    <?php endforeach; ?>
</section>
