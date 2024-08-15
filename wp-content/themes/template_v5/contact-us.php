<?php
/*Template Name: Contact Us
*/
?>
<?php get_header(); ?>

    <!--Common hero Section Starts -->
    <section class="cmn_heros pb-120 pt-120">
        <div class="container">
            <div class="row justify-content-center mt-5 mt-md-8 mt-lg-0">
                <div class="col-xxl-6">
                    <div class="cmn_heros__title text-center pt-15 pt-lg-6">
                        <h1 class="display-three mb-5 mb-md-7 wow fadeInUp">CONTACT US</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Common hero Section Ends -->
    <!-- Contact INFO Starts -->
    <section class="contact_info pt-120 pb-10 pb-md-18 bg5-color">
        <div class="container">
            <div class="row gy-5 gy-sm-6">
                <div class="col-xl-9">
                    <div class="contact_info__form br2 p-4 p-sm-6 p-md-8 rounded-20 mb-5 mb-md-6 wow fadeInUp">
                        <span class="fs-ten p1-color mb-4">CONTACT INFO</span>
                        <h2 class="p6-color mb-6 mb-md-8">Get Meeting With us.</h2>
                        <form>
                            <div class="contact_info__inpuarea mb-6 mb-md-8 bg1-color br2 rounded-20 p-3 p-md-5">
                                <div
                                    class="contact_info__inpuarea-group d-flex align-items-center flex-wrap flex-sm-nowrap gap-5 gap-md-6 mb-5 mb-md-6">
                                    <input class="bg4-color" type="text" placeholder="First Name" required>
                                    <input class="bg4-color" type="text" placeholder="Last Name" required>
                                </div>
                                <div
                                    class="contact_info__inpuarea-group d-flex align-items-center flex-wrap flex-sm-nowrap gap-5 gap-md-6 mb-5 mb-md-6">
                                    <input class="bg4-color" type="email" placeholder="Your Email" required>
                                    <input class="bg4-color" type="number" placeholder="Your phone" required>
                                </div>
                                <textarea rows="5" placeholder="Write something..."></textarea>
                            </div>
                            <button type="submit" class="roboto fw-bold cmn-btn px-5 px-md-6 py-3">Submit Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="contact_info__partcard">
                        <div class="row gy-5 gy-md-6">
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center mb-5 mb-md-6 wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-address-book fs-two fw-normal"></i>
                                    </div>
                                    <a href="javascript:void(0)">
                                        <h4 class="mb-3 mb-md-4">ADDRESS</h4>
                                    </a>
                                    <p class="roboto">Address 1, Address 2</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-mail-filled p4-color fs-two fw-normal"></i>
                                    </div>
                                    <h4 class="mb-3 mb-md-4">Email</h4>
                                    <a href="mailto:info@finxcart.com">info@finxcart.com</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-12">
                                <div
                                    class="contact_info__card br2 px-4 px-sm-6 px-md-8 py-4 py-sm-6 py-md-10 rounded-20 text-center wow fadeInUp">
                                    <div
                                        class="contact_info__card-icon d-center bg2-color py-3 py-md-4 px-4 px-md-5 d-inline-block rounded-item mb-5 mb-md-6">
                                        <i class="ti ti-phone p4-color fs-two fw-normal"></i>
                                    </div>
                                    <h4 class="mb-3 mb-md-4">Phone</h4>
                                    <a href="tel:XXXXXXXXX">XXXXXXXXX</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact INFO Starts -->
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