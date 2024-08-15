<?php
/*Template Name: Commodities
*/
?>
<?php get_header(); ?>

    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp"><?php echo the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->

    <!-- Your one-step shop for crypto trading starts -->
    <section class="one_stepshop bg4-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6 align-items-end justify-content-between mb-10 mb-md-15">
                <div class="col-md-7 col-lg-6">
                    <h2 class="wow fadeInUp">Why Trade Forex ?</h2>
                </div>
            </div>
            <div class="row gy-5 gy-md-6 justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-8 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/radeallassets.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">Volatility</h4>
                        <p class="mb-6 mb-md-8">Known for its volatility, the forex market provides ample opportunities for traders to capitalize on.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-7 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/hedgepoloniex.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">Leverage</h4>
                        <p class="mb-6 mb-md-8">With leverage, forex traders can control much larger positions, magnifying potential profits or potential losses. </p>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="one_stepshop__item br2 rounded-4 py-8 py-md-10 px-6 px-md-8 text-center wow fadeInUp">
                        <img class="mb-4 mb-md-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/crossmargin.png" alt="Icon">
                        <h4 class="mb-4 mb-md-5">24-hour market</h4>
                        <p class="mb-6 mb-md-8">Enjoy the flexibility of forex trading, operating 24 hours a day, 5 days a week, across different time zones. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Your one-step shop for crypto trading ends -->

    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg4-color position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Trade?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Fast execution, precise charting and timely insights are vital to your success as a forex trader. Our award-winning online trading platforms are built with your success in mind.</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10">
                            <a href="#" class="cmn-btn py-3 px-5 px-6 wow fadeInUp">
                                Start Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Exchange Ends -->

<?php get_footer(); ?>