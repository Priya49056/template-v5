<?php
/*Template Name: Standard
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
    <!-- Odometer Section Starts -->
    <section class="counter_section pb-120 pt-120 bg5-color">
        <div class="container">
            <div class="row">
                <div class="counter_section__area d-flex align-items-center justify-content-center justify-content-sm-between flex-wrap gap-5">
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="fs-one fw_500">$</span>
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="276"></span>
                        </div>
                        <h4 class="text-center">Total Raised</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="123"></span>
                        </div>
                        <h4 class="text-center">Total Participants</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-md-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="170"></span>
                        </div>
                        <h4 class="text-center">Average ROI</h4>
                    </div>
                    <span class="v-line lgx mb-20 pb-6 d-none d-xl-block"></span>
                    <div class="counter_section__item">
                        <div class="hero_area__countdown counters d-flex align-items-center justify-content-center">
                            <span class="odometer hero_area__countdown-number fs-one fw_500"
                                data-odometer-final="12"></span>
                        </div>
                        <h4 class="text-center">Number of Projects</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Odometer Section Ends -->

    <!-- How to Join Starts -->
    <section class="how_join bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="how_join__title d-flex align-items-center justify-content-between gap-4 flex-wrap mb-8 mb-md-12">
                    <h2 class="wow fadeInUp">Why trade with Standard ?</h2>
                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 d-center roboto wow fadeInUp">VIEW MORE <i class="ti ti-chevron-right fs-four"></i></a>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/subscription.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Subscription</h4>
                        <p class="text-center">Please ensure your wallet balance meets the requirements for participation.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapshot.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Snapshot</h4>
                        <p class="text-center">Commit the required tokens for a chance to win the project's token allocation.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/lottery.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Lottery</h4>
                        <p class="text-center">Participate in our exciting lottery games for a chance to win big prizes!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="how_join__item py-7 py-md-10 px-6 px-md-8 rounded-3 br1 position-relative text-center wow fadeInUp">
                        <div class="how_join__item-thumb mb-4 mb-md-5 text-center p-6 bg1-color rounded-item d-inline-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/redemption.png" alt="Icons">
                        </div>
                        <h4 class="mb-4 mb-md-5 text-center">Redemption</h4>
                        <p class="text-center">Complete the process for redemption to access exclusive rewards effortlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How to Join Ends -->

<?php get_footer(); ?>