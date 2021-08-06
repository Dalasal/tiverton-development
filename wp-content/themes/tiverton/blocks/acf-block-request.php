<?php
$fields = get_fields();
?>

<section class="acf-request-block">
    <div class="container">
        <div class="flex-container">
            <div class="block-text">
                <div class="block-text__title"><?php echo $fields["request_module"]['title'] ?></div>
                <div class="block-text__description"><?php echo $fields["request_module"]['text'] ?></div>
                <div class="block-text__items">
                    <?php foreach ($fields["request_module"]["items"] as $item):?>
                        <div class="block-text__item"><?php echo $item['menu_item']?></div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="block-request">
                    <?php echo do_shortcode($fields["request_module"]["shortcode"]);?>
            </div>
        </div>
    </div>
</section>
