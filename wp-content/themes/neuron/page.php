<?php get_header(); ?>


<?php 
    if(have_posts()) :
       while(have_posts()) : the_post();
?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section class="page-title" <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>)"<?php endif; ?>;>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / <a href="">Pages</a> / <?php the_title(); ?></p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

    <!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
    <section class="block section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section><!-- block area end -->
<?php 
     endwhile;
    endif;
?>
<?php get_footer();