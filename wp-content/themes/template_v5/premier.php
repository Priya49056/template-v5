<?php
/*Template Name: Premier
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
                        <p class="roboto wow fadeInUp">Earn passive income easily with just one click!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Buy Crypto Section Starts Starts -->
    <section class="buy_crypto pt-120 pb-120">
        <div class="container pt-17 pt-sm-20 pt-lg-0">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="buy_crypto__effort">
                        <h2 class="mb-10 mb-md-15 wow fadeInUp">Effortlessly Buy Crypto Your Way, Anytime, Anywhere</h2>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/accessible.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Accessible</h4>
                                <p>Easily purchase your favorite cryptocurrencies without any hassle</p>
                            </div>
                        </div>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/convenient.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Convenient</h4>
                                <p>Choose from a wide range of payment options to buy crypto the way you prefer.</p>
                            </div>
                        </div>
                        <div
                            class="buy_crypto__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4 gap-sm-5 gap-md-6 mb-10 mb-md-15 wow fadeInUp">
                            <div class="buy_crypto__item-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/low-cost.png" class="max-un" alt="Icons">
                            </div>
                            <div class="buy_crypto__item-content">
                                <h4 class="mb-5">Low-cost</h4>
                                <p>Delight in advantageous pricing featuring competitive rates, low fees, and steady
                                    conversion rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_crypto__formarea p-6 p-px-8 rounded-20 bg7-color wow fadeInUp">
                        <h2 class="mb-3">Buy Crypto</h2>
                        <span class="mb-8 mb-md-10">Buy In Seconds</span>
                        <form>
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Spend</label>
                                <div class="d-flex align-items-center br2 p-1 rounded-4 bg1-color">
                                    <input type="text" placeholder="2201-650,600">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select3" class="f-control f-dropdown">
                                                    <option value="1" selected
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon11.png">
                                                        BDT</option>
                                                    <option value="2"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory5333a.png">
                                                        ETH</option>
                                                    <option value="3"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory6bd4a.png">
                                                        LFC</option>
                                                    <option value="4"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory71949.png">
                                                        TLP</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Receive</label>
                                <div class="d-flex align-items-center br2 p-1 rounded-4 mb-2 bg1-color">
                                    <input type="text" placeholder="Enter purchase amount">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select4" class="f-control f-dropdown">
                                                    <option value="1"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cryptocurrency56304.png">
                                                        USDT</option>
                                                    <option value="2"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory5333a.png">
                                                        ETH</option>
                                                    <option value="3"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory6bd4a.png">
                                                        LFC</option>
                                                    <option value="4"  selected
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory71949.png">
                                                        USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span>1 USDT = 126 BDT</span>
                            </div>
                            <div class="buy_crypto__formarea-group mb-5 mb-md-6">
                                <label class="mb-2">Network</label>
                                <div class="mb-2 br2 p-1 rounded-4 bg1-color">
                                    <div class="text-end">
                                        <div class="apex_section__slider-selector markets_section__rcard-selector">
                                            <div class="f-group">
                                                <select id="select5" class="f-control f-dropdown">
                                                    <option value="1" selected
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tableicon11.png">
                                                        Ethereum</option>
                                                    <option value="2"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory5333a.png">
                                                        ETH</option>
                                                    <option value="3"
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory6bd4a.png">
                                                        LFC</option>
                                                    <option value="4" 
                                                        data-image="<?php echo get_template_directory_uri(); ?>/assets/images/icon/currencyCategory71949.png">
                                                        USDT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Gass fee</span>
                                    <span class="p1-color">5 USDT</span>
                                </div>
                            </div>
                            <div class="buy_crypto__formarea-group mb-6 mb-md-8">
                                <label class="mb-2">Wallet Address</label>
                                <div class="br2 p-1 rounded-4 bg1-color">
                                    <textarea placeholder="Address" cols="15" rows="3"></textarea>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-md-6 d-block">Next</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Crypto Section Starts Ends -->
    <!-- Pick Your Preferred Section Starts starts -->
    <section class="buy_Preferred pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-10 mb-md-15 gy-5">
                <div class="col-lg-5">
                    <div class="buy_Preferred__title">
                        <h2 class="wow fadeInUp">Pick Your Preferred Top-Up Method</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="buy_Preferred__titledecs text-start text-lg-end">
                        <p class="wow fadeInUp">Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                            safeguards your organization but</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gy-sm-6">
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content  pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Visa & Mastercard</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visa-mastercard1.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Apple Pay & Google Pay</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-pay.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="buy_Preferred__card br2 rounded-20 bg1-color position-relative p-3 p-sm-6 p-lg-10 d-flex align-items-center flex-wrap flex-xl-nowrap gap-5 gap-xl-0 wow fadeInUp">
                        <div class="buy_Preferred__card-content">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Personal EUR Bank Account</h3>
                            </a>
                            <p>Send and receive EUR with SEPA Instant and get immediate access to your funds. Having a
                                personal IBAN on Nexo means you can transfer EUR between your own bank accounts,
                                eliminating any potential for delayed transfers.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sepa.png" class="buy_Preferred__card-bigthumb max-un" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content  pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Instant GBP Transfers</h3>
                            </a>
                            <p>Benefit from Faster Payment Service (FPS) to top up and withdraw GBP instantly.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instant-gbp.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy_Preferred__card br2 rounded-20 bg1-color position-relative wow fadeInUp">
                        <div
                            class="buy_Preferred__card-content pe-3 pe-sm-5 pe-md-15 pe-xl-20 ps-3 ps-sm-5 ps-md-10 pt-3 pt-sm-5 pt-md-10 mb-5 mb-md-6">
                            <span class="fs-five mb-4 p1-color">Instant</span>
                            <a href="javascript:void(0)">
                                <h3 class="mb-5 mb-md-6">Apple Pay & Google Pay</h3>
                            </a>
                            <p>Our comprehensive cybersecurity platform, driven by artificial intelligence, not only
                                safeguards </p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/apple-pay.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div
                        class="buy_Preferred__card br2 rounded-20 bg1-color position-relative p-3 p-sm-6 p-lg-10 d-flex align-items-center flex-wrap flex-xl-nowrap gap-5 gap-xl-0 wow fadeInUp">
                        <div class="buy_Preferred__card-content">
                            <a href="javascript:void(0)">
                                <h4 class="mb-5 mb-md-6">On-Chain Crypto Transfers</h4>
                            </a>
                            <p>Send and receive EUR with SEPA Instant and get immediate access to your funds. Having a
                                personal IBAN on Nexo means you can transfer EUR between your own bank accounts,
                                eliminating any potential for delayed transfers.</p>
                        </div>
                        <div class="buy_Preferred__card-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/on-chain.png" class="buy_Preferred__card-bigthumb max-un"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pick Your Preferred Section Starts ends -->
    <!-- Buy Crypto on CoinX Starts -->
    <section class="buy_crycoinx bg7-color pt-120 pb-120">
        <div class="container">
            <div class="row gy-5 gy-md-6">
                <div class="buy_crycoinx__title mb-10 mb-md-15 text-center">
                    <h2 class="wow fadeInUp">Why Buy Crypto on <span class="text_grdt">CoinX</span></h2>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cashback1.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Up to 16% Interest</h4>
                        <p>Enjoy up to 0.5% cashback rewards on your purchases, adding value to every transaction you
                            make. Whether shopping, dining, or investing, earn cashback effortlessly and maximize your
                            savings with our rewarding program.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cashback2.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Up to 0.5% Cashback</h4>
                        <p>Unlock the potential of your assets with our lucrative interest rates of up to 16%. Maximize
                            your returns effortlessly and securely. Join us to earn passive income on your investments
                            today.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cashback3.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Excellent Market Prices</h4>
                        <p>Benefit from exceptional market prices offering competitive rates and favorable valuations
                            for a diverse range of investment opportunities. Explore our offerings today for the best
                            value in the market.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="buy_crycoinx__card p-3 p-sm-5 p-lg-8 br2 rounded-20 wow fadeInUp">
                        <div class="buy_crycoinx__card-icon mb-6 mb-md-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/cashback4.png" alt="Icons">
                        </div>
                        <h4 class="mb-4">Dollar-Cost Average</h4>
                        <p>Dollar-cost averaging is a strategy where you invest a fixed amount regularly, regardless of
                            market fluctuations, aiming to reduce the impact of volatility and build a diversified
                            investment portfolio over time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Crypto on CoinX Ends -->
    <!-- Ready to Exchange Starts -->
    <section class="ready_exhange pt-120 pb-120 bg5-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-7 col-xxl-6">
                    <div class="ready_exhange__content text-center">
                        <h2 class="mb-5 mb-md-6 wow fadeInUp">Ready to Exchange?</h2>
                        <p class="mb-8 mb-md-10 wow fadeInUp">Unlock your Coinx account now to trade crypto seamlessly, without any
                            fees for buying, selling, or exchanging. Get started today!</p>
                        <div
                            class="ready_exhange__changenow d-flex align-items-center justify-content-center gap-4 gap-sm-8 gap-lg-10 wow fadeInUp">
                            <a href="javascript:void(0)" class="cmn-btn py-3 px-5 px-6">
                                Exchange Now
                            </a>
                            <div class="ready_exhange__changenow-brand">
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-google-play p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-apple p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-pinterest p1-color fs-three"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="ti ti-brand-behance p1-color fs-three"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready to Exchange Ends -->

<?php get_footer(); ?>