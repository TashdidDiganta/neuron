

<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
<section class="section-padding darker-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="intro-title text-center">
                    <h2>Welcome to the Neuron Finance</h2>
                    <div class="hidden-xs">
                        <p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php 
        $features = new WP_Query( array(
            'post_type' => 'feature',
            'post_per_post' => -1,
            'post_status'   => 'publish',
            'order'         => 'DSC'
        ));
            if($features->have_posts()):
            while($features->have_posts()): $features->the_post();
        ?>
            <!-- single intro -->
            <div class="col-md-4">
                <div class="single-intro">
                    <div style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);" class="intro-img">
                        
                    </div>
                    <div class="intro-details text-center">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <!-- single intro -->
            <?php  endwhile; wp_reset_query(); endif;?>
        </div>
    </div>
</section><!-- intro area end -->