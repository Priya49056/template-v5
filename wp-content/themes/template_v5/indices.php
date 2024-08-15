<?php
/*Template Name: Indices
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
    <!-- What's Trending Section starts -->
    <section class="what_trending bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row categories__header mb-4 mb-md-6">
                <div class="col-xl-7 col-lg-8 col-sm-8">
                    <div class="categories__title">
                        <h2 class="mb-3 mb-md-4 wow fadeInUp">What's Trending</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-sm-4 categories_top_btn mt-6 mt-sm-0">
                    <div class="slider-btn d-center justify-content-start justify-content-sm-end gap-4">
                        <button type="button" aria-label="Slide Prev"
                            class="ara-prev d-center cmn-btn px-2 py-1 rounded-5">
                            <i class="ti ti-chevron-left fs-four"></i>
                        </button>
                        <button type="button" aria-label="Slide Next"
                            class="ara-next d-center cmn-btn px-2 py-1 rounded-5">
                            <i class="ti ti-chevron-right fs-four"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper categories_top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon1.png" alt="icon">
                                    <h4 class="mb-1">EUR/USD</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">3.7%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon2.png" alt="icon">
                                    <h4 class="mb-1">USD/JPY</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.0%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon3.png" alt="icon">
                                    <h4 class="mb-1">GBP/USD</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.8%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon4.png" alt="icon">
                                    <h4 class="mb-1">USD/CHF</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">4.5%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon1.png" alt="icon">
                                    <h4 class="mb-1">AUD/USD</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">3.7%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon2.png" alt="icon">
                                    <h4 class="mb-1">USD/CAD</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.0%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="items-wrapper">
                                <div
                                    class="what_trending__item text-center py-8 py-md-10  px-5 px-md-6 bg1-color br2 rounded-3">
                                    <img class="mb-3 mb-md-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/poolsicon3.png" alt="icon">
                                    <h4 class="mb-1">NZD/USD</h4>
                                    <span class="fs-one p1-color fw_500 mb-1 d-block ">5.8%</span>
                                    <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 w-100 ">Invest</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What's Trending Section ends -->
    <!-- Pools section starts -->
    <section class="pools_table pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="pools_table__title mb-5 mb-md-6">
                    <h2 class="mb-5 mb-md-6 wow fadeInUp">Never miss a market move</h2>
                    <p class="roboto wow fadeInUp">Track every market in real time. We offer up-to-the-minute pricing and analysis, making sure you always stay ahead of the latest trends.</p>
                </div>
                <div class="pools_table__part">
                    <div class="singletab">
                        <div class="tabcontents">
                            <div class="tabitem active wow fadeInUp">
                                <div class="pools_table__totalitem overflow-auto">
                                    <table>
                                        <th>Pool Name</th>
                                            <th>
                                                <div class="d-flex align-items-center gap-1">
                                                    <span>Current APY</span>
                                                    <div class="d-flex flex-column gap-0">
                                                        <i class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                        <i class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center gap-1">
                                                    <span>CNetwork</span>
                                                    <div class="d-flex flex-column gap-0">
                                                        <i class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                        <i class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center gap-1">
                                                    <span>TVL</span>
                                                    <div class="d-flex flex-column gap-0">
                                                        <i class="ti ti-caret-up-filled fs-nine cpoint pools_table__totalitem-ticonone"></i>
                                                        <i class="ti ti-caret-down-filled fs-nine cpoint pools_table__totalitem-ticontwo"></i>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon1.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">USDC</span>
                                                        <span class="roboto">LDO</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">26.80%</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon12.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon11.png" alt="Icons">
                                                    <img class="pools_table__totalitem-img"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon12.png" alt="Icons">
                                                </div>
                                            </td>
                                            <td>$181.48 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8 p1-color" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon4.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto">stETH-ng</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.15%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$ 96.88 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon4.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon10.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">cvxeth</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">8.72%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon6.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">ironback</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">10.09%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Ethereum</span>
                                                </div>
                                            </td>
                                            <td>$6.85 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon7.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon5.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">yCRV</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">12.68%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Arbitrum</span>
                                                </div>
                                            </td>
                                            <td>$5.27 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon2.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon8.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">Overnight</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">3.01%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$194.89 K</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div
                                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon5.png" alt="Icons">
                                                        <img class="pools_table__totalitem-img"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon9.png" alt="Icons">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span class="roboto fw-bold">FRAXBP</span>
                                                        <span class="roboto">curve</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p1-color fs-ten">5.52%</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon3.png" alt="Icons">
                                                    <span>Polygon</span>
                                                </div>
                                            </td>
                                            <td>$2.42 M</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <span>Flexi-Term</span>
                                                    <a class="py-1 px-2 bg1-color rounded-1 p1-color"
                                                        href="javascript:void(0)">Withdraw</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="cmn-btn py-2 px-6 px-md-8" href="javascript:void(0)">Stack</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pools section ends -->
    <!-- Staking Process starts -->
    <section class="staking_process bg9-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-10 gy-sm-6">
                <div class="staking_process__title text-center mb-md-15">
                    <h2 class="mb-5 mb-md-6 wow fadeInUp">Why trade Forex with Saxo Bank</h2>
                    <p class="roboto wow fadeInUp">Earn rewards by participating in our straightforward and rewarding bonus.</p>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp position-relative">
                        <img class="mb-6 mb-md-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/process1.png" alt="Icon">
                        <h4 class="mb-4">Ultra-competitive FX spreads</h4>
                        <p>Trade major Forex pairs from 0.6 pips. Competitive entry prices and even lower rates for active traders.</p>
                        <img class="staking_process__item-arrowicon position-absolute d-none d-sm-block"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/processuparrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp position-relative">
                        <img class="mb-6 mb-md-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/process2.png" alt="Icon">
                        <h4 class="mb-4">Best-in-class execution</h4>
                        <p>Tier-1 liquidity gives higher fill-rates, fewer premature stop-outs and significant price improvements.</p>
                        <img class="staking_process__item-arrowicontwo position-absolute d-none d-md-block"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/processdownarrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 position-relative">
                    <div class="staking_process__item text-center wow fadeInUp">
                        <img class="mb-6 mb-md-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/process3.png" alt="Icon">
                        <h4 class="mb-4">Award-winning platform</h4>
                        <p>Benefit from integrated Trade Signals, news feeds and innovative risk-management features.</p>
                        <img class="staking_process__item-arrowicon position-absolute d-none d-sm-block  d-md-none d-xl-block"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/processuparrow.png" alt="arrow icon">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="staking_process__item text-center wow fadeInUp">
                        <img class="mb-6 mb-md-8" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/process4.png" alt="Icon">
                        <h4 class="mb-4">Expert service</h4>
                        <p>With 176+ satisfied customers, Saxo Bank offers world-class service around the clock</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Staking Process ends -->

<?php get_footer(); ?>