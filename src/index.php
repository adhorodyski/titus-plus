<?php get_header();?>

    <main role="main" aria-label="Content">
        <!-- section -->
          <section id="content" role="main">

            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
            ?>

          </section>
        <!-- /section -->
      </main>

<?php get_footer();?>
