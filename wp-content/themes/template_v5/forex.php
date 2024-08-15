<?php
/*Template Name: Forex
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
    <!-- Count Down Starts-->
    <section class="countdwon_event pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5">
                    <div class="countdwon_event__title">
                        <h3 class="p4-color mb-5 mb-md-6 wow fadeInUp">Create your account in minutes and unlock your potential in the global markets.</h3>
                        <a class="cmn-btn fifth-alt fw-bold py-3 px-5 px-md-6 d-inline-flex align-items-center gap-2 wow fadeInUp"
                            href="#">Start Trading Now<i class="ti ti-arrow-right fs-five"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Count Down Ends-->
    <!-- Markets Section Starts -->
    <section class="markets_section pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row gy-6">
                <div class="markets_section__title mb-6 mb-md-9">
                    <h2 class="wow fadeInUp">Markets</h2>
                </div>
                <div class="col-xxl-8">
                    <div class="row gy-6">
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/bticoin505.png" alt="icon">
                                    <h4>EUR/USD</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four p1-color">19251.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.35%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cryptocurrency.png" alt="icon">
                                    <h4>USD/JPY</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four p1-color">5600.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.40%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/litecoin_ltc.png" alt="icon">
                                    <h4>GBP/USD</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four p1-color">4922.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.31%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 col-xxl-6">
                            <div class="markets_section__card bg1-color rounded-20 br2 p-5 p-md-6 wow fadeInUp">
                                <div class="markets_section__card-head d-flex align-items-center gap-2 mb-4 mb-md-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tether.png" alt="icon">
                                    <h4>USD/CHF</h4>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-four p1-color">19251.11</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="p1-color">0.29%</span>
                                        <i class="ti ti-caret-up-filled p1-color fs-four"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Markets Section Ends -->
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

<?php get_footer(); ?>