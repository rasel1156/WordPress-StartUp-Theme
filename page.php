<?php 
/*
Common Page Template
*/
get_header();
get_template_part('templates/banner');
?>

<!-- services area start -->
<section id="services" class="services-area clearfix common">

    <?php
        $page_id = get_queried_object_id();
        $custompage = new WP_Query(array(
        'post_type' => 'page',
        'page_id' => $page_id
        ));
    ?>
    <?php while($custompage->have_posts()) : $custompage->the_post(); ?>
        <div class="sec-title">
        <h2><?php the_title(); ?></h2>
        </div>
    <?php endwhile; ?>


        <div class="services-are">
        <div class="full-width">

            <?php 
                $blog = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1
                ));
            ?>
            <?php while($blog->have_posts()) : $blog->the_post();  ?>
            <div class="single-home-program myblogpost">
                <a href="<?php the_permalink(); ?>">
                    <div class="home-program-img">
                        <?php the_post_thumbnail('blogpost'); ?>
                    </div>
                    <div class="home-program-conten">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?><span><a href="<?php the_permalink(); ?>" >Read More</a></span></p>
                    </div>
                </a>
            </div>
            <?php endwhile;  ?>

        </div>
    </div>
</section>
<!-- services area end -->

<?php get_footer(); ?>


