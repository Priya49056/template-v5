<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package template_v5
 */

get_header();
?>

<section class="not_found bg5-color pt-20 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="not_found__content">
                        <div class="not_found__thumb mb-10 mb-md-15 text-center wow fadeInUp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="Image">
                        </div>
                        <div class="not_found__decs text-center">
                            <h4 class="mb-5 mb-md-6 roboto wow fadeInUp">Oops, You Still Haven’t Found what you looking for</h4>
                            <a href="<?php echo home_url(); ?>" class="cmn-btn px-5 px-md-6 py-3 wow fadeInUp">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
