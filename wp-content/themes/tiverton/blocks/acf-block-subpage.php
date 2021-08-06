<?php
$fields = get_fields();
//dd($fields);
?>

<section class="acf-block-subpage">
    <?php foreach ($fields["subpage"] as $field): ?>
        <div class="subpage-wrapper">
            <div class="subpage-description">
                <div class="subpage-description__title">111</div>
                <div class="subpage-description__text">111222</div>
                <div class="subpage-description__btn">btn</div>
            </div>
            <div class="image-wrapper">
                <img src="<?php echo $field["add_image"]; ?>">
            </div>
        </div>
    <?php endforeach; ?>
</section>
