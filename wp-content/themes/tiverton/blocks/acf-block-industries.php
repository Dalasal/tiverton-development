<?php
$fields = get_fields();
?>

<section class="acf-industry-block">
    <div class="container">
        <div class="acf-industry-block__title"><?php echo $fields["title"]; ?></div>
        <div class="block-post">
            <?php foreach ($fields["choose_posts"] as $id): ?>
            <?php $excerpt = get_the_excerpt($id);
                  $result = substr($excerpt, 0, strrpos($excerpt, ' '));?>
                <div class="block-post__item">
                    <div class="block-post__image"><img src="<?php echo get_the_post_thumbnail_url($id);?>"></div>
                    <div class="block-post__title"><?php echo get_the_title($id);?></div>
                    <div class="block-post__text"><?php echo $result;?></div>
                    <div class="block-post__btn">
                        <a href="<?php echo get_post_permalink($id);?>">Learn More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
