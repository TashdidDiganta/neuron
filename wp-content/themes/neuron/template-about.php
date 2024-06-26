<?php

 /* Template Name: About Template */ 

?>
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
        <section class="block about-us-block section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<!-- block text -->
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<!-- block image -->
						<div class="block-img">
							<img src="assets/img/about-us-block.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->

    <!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<?php get_template_part('common/template-prat') ?>
<?php 
    endwhile;
    endif;
?>
