<?php get_header(); ?>
<style>
    .woocommerce div.product p.price, .woocommerce div.product span.price {
        color: #0d0d0d;
    font-weight: 700;
    font-size: 18px;
}
</style>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="shop spad">
        <div class="container">
                <?php woocommerce_content(); ?>
        </div>
    <section>

<?php get_footer(); ?>