<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="page-title-section" style="background-image: url(<?php the_field('contact_page_banner', 'option'); ?>);">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="section-heading mt-15">
                    <h4>Let's Talk about Your Business</h4>
                    <div class="section-heading-line-left"></div>
                </div>
                <div class="contact-form-box mt-30">
                    <?php echo(do_shortcode('[contact-form-7 id="185" title="Contact form 1" html_class="contact-form"]'));?>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact-info-box">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 text-center"><i class="fa fa-phone"></i></div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Call Us</h4>
                                        <p><?php the_field('phone', 'option'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 text-center"><i class="fa fa-envelope-open"></i></div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Message</h4>
                                        <p><?php the_field('email', 'option'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="contact-info-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-4 text-center"><i class="fa fa-globe"></i></div>
                                    <div class="col-md-10 col-sm-10 col-8">
                                        <h4>Our Location</h4>
                                        <p><?php the_field('address', 'option'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php endwhile; ?>
<?php else: ?>
<?php include(TEMPLATEPATH .'/includes/module-nocontent.php'); ?>
<?php endif; ?>
<?php get_footer(); ?>