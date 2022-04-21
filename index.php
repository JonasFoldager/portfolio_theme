
 <?php get_header() ?>
 <?php get_template_part("template-parts/top") ?>

<body <?php body_class(); ?>>
<?php do_action('after_body_open_tag'); ?>
   



    <div class="container">
                <div class="row">
                    <div class="col-9 mb-5">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post() ?>
                                <?php the_content() ?>
                            <?php endwhile; ?>
                        <?php else: ?>

                        <?php endif; ?>

        

    <?php wp_nav_menu(array("theme_location" => "main-menu")) ?>
<body>

<?php get_footer() ?>
