<?php
$fieldsHero = get_fields();
?>

<section class="acf-hero">
    <?php if ($fieldsHero["hero_module"]["pagesubpage"]) { ?>
        <div class="main-background__wrapper">
            <img class="background-image__img" src="<?php echo $fieldsHero["hero_module"]["picture_background"]; ?>">
            <div class="container">
                <div class="site-title subtitle-hero">
                    <p><?php echo $fieldsHero["hero_module"]["title"]; ?></p>
                    <p><?php echo $fieldsHero["hero_module"]["subtitle"]; ?></p>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="main-background__wrapper">
            <img class="background-image__img" src="<?php echo $fieldsHero["hero_module"]["picture_background"]; ?>">
            <div class="site-title">
                <p><?php echo $fieldsHero["hero_module"]["title"]; ?></p>
                <p><?php echo $fieldsHero["hero_module"]["subtitle"]; ?></p>
            </div>
        </div>
    <?php } ?>
</section>
<!-- /. acf-block-hero -->
