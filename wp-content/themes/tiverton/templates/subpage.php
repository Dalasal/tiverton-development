<?php
/**
 * Template Name: Subpage
 *
 */


get_header(); ?>

    <main class="main-background">
        <?php
        while (have_posts()) :
            the_post();

            the_content();

        endwhile;
        ?>
    </main>

<?php
get_footer();
