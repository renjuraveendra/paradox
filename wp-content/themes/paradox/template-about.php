<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="page-title-section" style="background-image: url(<?php the_field('about_page_banner', 'option'); ?>);">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="about">
   <div class="container">
       <div class="row">
            <div class="col-lg-6 col-12">
                <div class="image">
                    <?php 
                        if ( has_post_thumbnail() )
                        {
                            the_post_thumbnail();
                        }
                    ?>
                    
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center">
                <div class="content">
                    <?php the_content();?>
                </div>
            </div>
        </div>
   </div> 
</div>
<?php
if(have_rows('testimonial'))
{
?>
<div class="section-block-bg" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/bg6.jpg);">
    <div class="container">
        <div class="section-heading text-center"> <span>Testmonials</span>
            <h3>What People Say</h3>
            <div class="section-heading-line"></div>
        </div>
        <div class="testimonial-carousel" id="testmonials-carousel">
            <?php
            while(have_rows('testimonial'))
            {
                the_row();
            ?>
            <div class="testmonial-single">
                <?php the_sub_field('testimonial_text'); ?>
                <h4><?php the_sub_field('testimonial_author'); ?></h4>
                <h6><?php the_sub_field('testimonial_designation'); ?></h6>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
}
?> 
<?php endwhile; ?>
<?php else: ?>
<?php include(TEMPLATEPATH .'/includes/module-nocontent.php'); ?>
<?php endif; ?>
<?php get_footer(); ?>