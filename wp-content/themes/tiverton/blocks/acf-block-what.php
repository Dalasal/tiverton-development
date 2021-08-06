<?php
$fieldsHero = get_fields();
$i = 0;
?>

<section class="acf-block-what custom-background">
    <div class="container">
        <div class="flex-container">
            <div class="block-text">
                <div class="block-text__about"><?php echo $fieldsHero['what_we_do']['about'] ?></div>
                <div class="block-text__title"><?php echo $fieldsHero['what_we_do']['title'] ?></div>
                <div class="block-text__description"><?php echo $fieldsHero['what_we_do']['text'] ?></div>
                <div class="block-text__btn">
                    <a href="<?php echo $fieldsHero['what_we_do']['button_link'] ?>"><?php echo $fieldsHero['what_we_do']['button_text'] ?></a>
                </div>
            </div>
            <div class="block-image">
                <img src="<?php echo $fieldsHero['what_we_do']['add_picture']; ?>">
            </div>
        </div>
        <div class="service-block">
            <div class="service-block__wrapper">
                <?php if (isset($fieldsHero['what_we_do']['choose_services']) && $fieldsHero['what_we_do']['choose_services']) : ?>
                    <?php foreach ($fieldsHero['what_we_do']['choose_services'] as $block): ?>
                        <?php ?>
                        <?php if ($i == 2) { ?>
                            <div class="service-block__item-text">
                                <div class="service-block__label"><?php echo $fieldsHero['what_we_do']['label']; ?></div>
                                <div class="service-block__description"><?php echo $fieldsHero['what_we_do']['title']; ?></div>
                            </div>
                            <div class="service-block__item">
                                <img src="<?php echo get_the_post_thumbnail_url($block);; ?>">
                            </div>
                        <?php } else { ?>
                            <div class="service-block__item">
                                <img src="<?php echo get_the_post_thumbnail_url($block);; ?>">
                            </div>
                        <?php } ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <div class="service-block__item-quote">
                        <div>Get a Quote</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- /. acf-block-hero -->
