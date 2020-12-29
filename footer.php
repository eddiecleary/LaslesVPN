<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<footer class="footer pb-5">
    <div class="container">
        <section class="newsletter">
            <div class="container">
                <div class="row justify-content-between align-items-center bg-white rounded p-5">
                    <div class="col-lg-4">
                        <h4>Subscribe Now for <br> Get Special Features!</h4>
                        <p>Let's subscribe with us and find the fun.</p>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="btn btn-primary font-weight-bold">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-menus">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo mb-3"><?php the_custom_logo(); ?></div>
                    <p class="mb-4"><span class="font-weight-bold">LaslesVPN</span> is a private virtual network that has unique features and has high security.</p>
                    <div class="social-holder d-flex mb-3">
                        <i class="fa fa-facebook rounded-circle text-primary bg-white p-2 mr-2 d-flex justify-content-center align-items-center"></i>
                        <i class="fa fa-twitter rounded-circle text-primary bg-white p-2 mr-2 d-flex justify-content-center align-items-center"></i>
                        <i class="fa fa-instagram rounded-circle text-primary bg-white p-2 d-flex justify-content-center align-items-center"></i>
                    </div>
                    <p><span class="copyright-year">2020</span> &copy; LaslesVPN</p>
                </div>
                <div class="col-2 offset-3">
                    <h5 class="mb-3">Product</h5>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'         => 3,
                            'menu_class'   => 'list-unstyled text-dark'
                        )
                    );
                    ?>
                </div>
                <div class="col-2">
                    <h5 class="mb-3">Engage</h5>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'         => 4,
                            'menu_class'   => 'list-unstyled text-dark'
                        )
                    );
                    ?>
                </div>
                <div class="col-2">
                    <h5 class="mb-3">Earn Money</h5>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu'         => 5,
                            'menu_class'   => 'list-unstyled text-dark'
                        )
                    );
                    ?>
                </div>
            </div>
        </section>
    </div>
</footer>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    jQuery(document).ready(function($){
        $('.testimonial-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: `<svg class="slick-next" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="29" transform="rotate(-180 30 30)" fill="#F53838" stroke="#F53838" stroke-width="2"/>
                        <path d="M21.25 31.2501L36.075 31.2501L31.5375 36.7001C31.3253 36.9554 31.2232 37.2845 31.2537 37.615C31.2842 37.9456 31.4447 38.2505 31.7 38.4626C31.9553 38.6748 32.2844 38.7769 32.6149 38.7464C32.9454 38.7159 33.2503 38.5554 33.4625 38.3001L39.7125 30.8001C39.7545 30.7405 39.7922 30.6778 39.825 30.6126C39.825 30.5501 39.825 30.5126 39.9125 30.4501C39.9692 30.3068 39.9988 30.1543 40 30.0001C39.9988 29.846 39.9692 29.6935 39.9125 29.5501C39.9125 29.4876 39.9125 29.4501 39.825 29.3876C39.7922 29.3225 39.7545 29.2598 39.7125 29.2001L33.4625 21.7001C33.345 21.559 33.1978 21.4456 33.0314 21.3678C32.8651 21.29 32.6836 21.2498 32.5 21.2501C32.2079 21.2496 31.9249 21.3513 31.7 21.5376C31.5734 21.6426 31.4688 21.7715 31.3921 21.9169C31.3154 22.0623 31.2682 22.2215 31.2531 22.3852C31.238 22.5489 31.2553 22.714 31.3041 22.871C31.3529 23.028 31.4322 23.1738 31.5375 23.3001L36.075 28.7501L21.25 28.7501C20.9185 28.7501 20.6005 28.8818 20.3661 29.1163C20.1317 29.3507 20 29.6686 20 30.0001C20 30.3317 20.1317 30.6496 20.3661 30.884C20.6005 31.1184 20.9185 31.2501 21.25 31.2501Z" fill="white"/>
                        </svg>
                        ,`,
            prevArrow: `<svg class="slick-prev" width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30.2529" r="29" stroke="#F53838" stroke-width="2"/>
                        <path d="M38.75 29.0029H23.925L28.4625 23.5529C28.6747 23.2976 28.7768 22.9685 28.7463 22.638C28.7158 22.3075 28.5553 22.0026 28.3 21.7904C28.0447 21.5782 27.7156 21.4762 27.3851 21.5066C27.0546 21.5371 26.7497 21.6976 26.5375 21.9529L20.2875 29.4529C20.2455 29.5126 20.2078 29.5752 20.175 29.6404C20.175 29.7029 20.175 29.7404 20.0875 29.8029C20.0308 29.9462 20.0012 30.0988 20 30.2529C20.0012 30.407 20.0308 30.5596 20.0875 30.7029C20.0875 30.7654 20.0875 30.8029 20.175 30.8654C20.2078 30.9306 20.2455 30.9933 20.2875 31.0529L26.5375 38.5529C26.655 38.694 26.8022 38.8075 26.9686 38.8853C27.1349 38.963 27.3164 39.0032 27.5 39.0029C27.7921 39.0035 28.0751 38.9018 28.3 38.7154C28.4266 38.6105 28.5312 38.4816 28.6079 38.3362C28.6846 38.1907 28.7318 38.0316 28.7469 37.8679C28.762 37.7042 28.7447 37.5391 28.6959 37.3821C28.6471 37.2251 28.5678 37.0792 28.4625 36.9529L23.925 31.5029H38.75C39.0815 31.5029 39.3995 31.3712 39.6339 31.1368C39.8683 30.9024 40 30.5844 40 30.2529C40 29.9214 39.8683 29.6034 39.6339 29.369C39.3995 29.1346 39.0815 29.0029 38.75 29.0029Z" fill="#F53838"/>
                        </svg>
                        `
        });
    });
    // On before slide change
    jQuery('.testimonial-slider').on('init', function(event, slick, currentSlide, nextSlide){
        let sliderHeight = jQuery('.slick-track').height();
        jQuery('.slick-slide').css('height', sliderHeight + 'px');
    });
    jQuery('.copyright-year').text((new Date).getFullYear());
</script>
</body>

</html>

