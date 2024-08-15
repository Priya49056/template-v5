<?php
/*Template Name: Metatrader 4
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
    <!-- stETH-NG section starts -->
    <section class="staking_details markets_section pb-120 pt-120 bg9-color">
        <div class="container pt-6 pt-sm-10 pt-lg-0">
            <div class="row">
                <div class="col-xl-8 mb-10 mb-xl-0">
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="staking_details__head d-flex align-items-center justify-content-between mb-8 mb-md-10 wow fadeInUp">
                                <div
                                    class="pools_table__totalitem-ftd d-flex align-items-center gap-3 gap-md-4 ms-3 ms-md-6 flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/steth-ngicon.png" alt="Icons">
                                        <img class="pools_table__totalitem-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon1.png"
                                            alt="Icons">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="javascript:void(0)" class="roboto fs-four">Tailor your trading environment</a>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="staking_details__chartsitem bg7-color rounded-20 mb-8 mb-md-10 wow fadeInUp">
                                    <div id="chart-timelinetwo">
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="row mb-10 mb-15">
                        <div class="col-12">
                            <div class="wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Trading flexibility</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                        <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20">
                                            <table class="w-100">
                                                <tr>
                                                    <th class="p1-color">Investment</th>
                                                    <th class="p1-color">Portfolio PnL</th>
                                                    <th class="p1-color">LP Quantity</th>
                                                    <th class="p1-color">Portfolio Value</th>
                                                </tr>
                                                <tr>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
                                                    <td>0.00</td>
        
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 mb-15">
                        <div class="col-12">
                            <div class="overflow-auto wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Enhanced capabilities</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                    <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20 ">
                                        <table class="w-100">
                                            <tr>
                                                <th class="p1-color">TVL</th>
                                                <th class="p1-color">Pool Composition</th>
                                                <th class="p1-color">Network</th>
                                            </tr>
                                            <tr>
                                                <td>$ 106.45 M</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-15 gap-md-20 mb-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stethtwo.png" alt="Icon">
                                                            <span class="roboto">STETH</span>
                                                        </div>
                                                        <span class="roboto">17.92 K</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-15 gap-md-20">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stethone.png" alt="Icon">
                                                            <span class="roboto">STETH</span>
                                                        </div>
                                                        <span class="roboto">33.92 K</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stethtwo.png" alt="Icon">
                                                        <span class="roboto">Ethereum</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="overflow-auto wow fadeInUp">
                                <div
                                    class="staking_details__tableone p-3 p-sm-5 p-md-6 rounded-20 br1 position-relative overflow-hidden">
                                    <h4 class="mb-6 mb-md-8">Automated trading</h4>
                                    <div class="staking_details__tableone-scol overflow-auto">
                                    <div class="staking_details__tableone-part p-3 p-sm-5 p-md-6 rounded-20 ">
                                        <table class="w-100">
                                            <tr>
                                                <th class="p1-color">Pool</th>
                                                <th class="p1-color">Token</th>
                                                <th class="p1-color">Gauge</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="copy-text">
                                                        <input type="text" class="text w-50" value="0xe2...843a">
                                                        <button><i class="ti ti-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="copy-text">
                                                        <input type="text" class="text w-50" value="0xe2...843a">
                                                        <button><i class="ti ti-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="copy-text">
                                                        <input type="text" class="text w-50" value="0xe2...843a">
                                                        <button><i class="ti ti-copy"></i></button>
                                                    </div>
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
                <div class="col-xl-4">
                    <div class="staking_details__aside py-6 py-md-8 px-5 px-md-6 bg7-color br2 rounded-20 wow fadeInUp">
                        <div
                            class="staking_details__aside-title d-flex align-items-center justify-content-between mb-5 mb-md-6">
                            <span class="p1-color fs-four">TradingView</span>
                        </div>
                     
                        <div class="markets_section__rcard-card p-4 p-sm-5 p-md-6 bg1-color rounded-20 mb-4">
                            <p>Browse and discuss ideas and insights as part of an active community. Access powerful charting tools.</p>                     
                        </div>              
                        <button class="cmn-btn py-3 px-6 w-100">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stETH-NG section ends -->

<?php get_footer(); ?>