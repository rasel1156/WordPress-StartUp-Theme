<?php 
/*
Single Post
*/

get_header();
get_template_part('templates/singlebanner');
?>


<!-- single services area start -->
<section id="singleservice" class="single-servce-area clearfix common">
<?php while(have_posts()) : the_post(); ?>
    <div class="single-services-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sec-title">
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-services-banner">
        <div class="banner">
            <?php 
            $kma_image = get_post_meta(get_queried_object_id(), 'blog_single_page_banner', true);
            $kma_image_details = wp_get_attachment_image_src($kma_image, "blog-banner" );
            echo "<img src='". esc_url($kma_image_details[0])."'/>";
            ?>
        </div>
    </div>
<?php endwhile; ?>
</section>
<!-- single services area start -->



<?php get_footer(); ?>
