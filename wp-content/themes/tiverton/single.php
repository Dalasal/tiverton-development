<?php
global $post;
$title = $post->post_title;
get_header(); ?>

    <main>
        <div class="container">
            <div class="main-content">
                <div class="main-content__single-image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
                <div class="flex-wrapper">
                    <div class="left-side">
                        <div class="main-content__header">
                            <h1><?php echo get_the_title(); ?></h1>
                        </div>
                        <div class="main-content__text"><?php echo get_the_content(); ?></div>
                    </div>
                    <div class="right-side">
                        <div class="popular-posts">
                            <div class="popular-posts__title">All Posts</div>
                            <ul class="popular-posts__list">
                                <?php $query = new WP_Query([
                                    'post_type' => 'post',
                                ]);
                                while ($query->have_posts()) {
                                    $query->the_post();?>
                                    <li class="popular-posts__item">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                                        <a href="<?php echo get_the_permalink();?>"><?php the_title(); ?></a>
                                    </li>
                                <?php }; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();
