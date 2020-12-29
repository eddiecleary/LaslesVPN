<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying site home page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<main id="home">
    <section class="hero">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h1>Want anything to be easy with LaslesVPN.</h1>
                    <p class="my-4">Provide a network for all your needs with ease and fun using LaslesVPN discover interesting features from us.</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hero.svg" alt="Illustration of person sitting at laptop with headphones on.">
                </div>
            </div>
            <div class="row stat-boxes rounded p-4">
                <div class="col-lg-4 d-flex align-items-center justify-content-center feature-box">
                    <i class="fa fa-user text-primary p-3 rounded-circle mr-3 d-flex align-items-center justify-content-center"></i>
                    <div>
                        <span class="font-weight-bold">90+</span>
                        <span>Users</span>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center feature-box border-grey-900 border-right border-left">
                    <i class="fa fa-map-marker text-primary p-3 rounded-circle mr-3 d-flex align-items-center justify-content-center"></i>
                    <div>
                        <span class="font-weight-bold">30+</span>
                        <span>Locations</span>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center feature-box">
                    <i class="fa fa-server text-primary p-3 rounded-circle mr-3 d-flex align-items-center justify-content-center"></i>
                    <div>
                        <span class="font-weight-bold">50+</span>
                        <span>Servers</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">.
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features.svg" alt="Illustration of person sitting at laptop with celebration fireworks in the background.">
                </div>
                <div class="col-lg-4 offset-1 mt-5">
                    <h3 class="text-capitalize">We provide Many Features You Can Use</h3>
                    <p class="my-4">You can explore the features that we provide with fun and have their own functions each feature.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-white bg-success rounded-circle p-1 mr-2"></i>Powerful online protection</li>
                        <li class="mt-3"><i class="fa fa-check text-white bg-success rounded-circle p-1 mr-2"></i>Internet without borders</li>
                        <li class="mt-3"><i class="fa fa-check text-white bg-success rounded-circle p-1 mr-2"></i>Supercharged VPN</li>
                        <li class="mt-3"><i class="fa fa-check text-white bg-success rounded-circle p-1 mr-2"></i>No specific time limits</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing bg-grey py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Choose Your Plan</h3>
                    <p>Let's choose the package that is best for you and explore it happily and cheerfully.</p>
                </div>
                <div class="row col-12 mt-5 justify-content-between">
                    <div class="border border-grey rounded bg-white p-4 text-center price-card">
                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/pricing.svg" alt="Illustration of a box opening with fireworks blasting out of it.">
                        <h4 class="my-4">Free Plan</h4>
                        <ul class="list-unstyled text-left d-inline-block">
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Unlimited bandwidth</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Encrypted Connection</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>No traffic logs</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Works on all devices</li>
                        </ul>
                        <p class="price"><span class="font-weight-bold">Free</span></p>
                        <a href="#" class="btn btn-outline-primary rounded-pill">Select</a>
                    </div>
                    <div class="border border-grey rounded bg-white p-4 text-center price-card">
                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/pricing.svg" alt="Illustration of a box opening with fireworks blasting out of it.">
                        <h4 class="my-4">Standard Plan</h4>
                        <ul class="list-unstyled text-left d-inline-block">
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Unlimited bandwidth</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Encrypted Connection</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>No traffic logs</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Works on all devices</li>
                        </ul>
                        <p class="price"><span class="font-weight-bold">$9</span> / mo</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill">Select</a>
                    </div>
                    <div class="border border-primary rounded bg-white p-4 text-center price-card">
                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/img/pricing.svg" alt="Illustration of a box opening with fireworks blasting out of it.">
                        <h4 class="my-4">Premium Plan</h4>
                        <ul class="list-unstyled text-left d-inline-block">
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Unlimited bandwidth</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Encrypted Connection</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>No traffic logs</li>
                            <li class="text-capitalize mt-3"><i class="fa fa-check text-success mr-4"></i>Works on all devices</li>
                        </ul>
                        <p class="price"><span class="font-weight-bold">$12</span> / mo</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill">Select</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Huge Global Network <br> of Fast VPN</h3>
                    <p class="w-50 mx-auto mt-4">See <span class="font-weight-bold">LaslesVPN</span> everywhere to make it easier for you when you move locations.</p>
                    <img class="mt-5 pt-5 w-75" src="<?php echo get_template_directory_uri(); ?>/img/map.svg" alt="Illustration of a world map showing the location of Lasles VPN servers all over the world.">
                    <div class="row logos align-items-center justify-content-around w-100 my-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/netflix.png" alt="netflix logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/reddit.png" alt="reddit logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/amazon.png" alt="amazon logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/discord.png" alt="discord logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/spotify.png" alt="spotify logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Trusted by Thousands of Happy Customers</h3>
                    <p class="w-50 mx-auto mt-4">These are the stories of our customers who have joined us with great pleasure when using this crazy feature.</p>
                </div>
                <div class="col row testimonial-slider mt-4 justify-content-between">
                    <div class="border border-grey rounded testimonial-slide mx-2">
                        <div class="inner-slide p-3">
                            <div class="d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-1.jpg" alt="Profile photo">
                                <div class="profile-text d-flex flex-column">
                                    <span class="d-block font-weight-bold">Viezh Robert</span>
                                    <span class="d-block small">Warsaw, Poland</span>
                                </div>
                                <p class="ml-1 rating">4.5<i class="fa fa-star text-warning ml-2"></i></p>
                            </div>
                            <p class="d-flex mt-3 testimonial-text">
                                “Wow... I am very happy to use this VPN, it turned out to be more than my expectations and so far there have been no problems. LaslesVPN always the best."
                            </p>
                        </div>
                    </div>
                    <div class="border border-grey rounded testimonial-slide mx-2">
                        <div class="inner-slide p-3">
                            <div class="d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-2.jpg" alt="Profile photo">
                                <div class="profile-text d-flex flex-column">
                                    <span class="d-block font-weight-bold">Yessica Christy</span>
                                    <span class="d-block small">Shanxi, China</span>
                                </div>
                                <p class="ml-1 rating">4.5<i class="fa fa-star text-warning ml-2"></i></p>
                            </div>
                            <p class="d-flex mt-3 testimonial-text">
                                “I like it because I like to travel far and still can connect with high speed.”
                            </p>
                        </div>
                    </div>
                    <div class="border border-grey rounded testimonial-slide mx-2">
                        <div class="inner-slide p-3">
                            <div class="d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-3.jpg" alt="Profile photo">
                                <div class="profile-text d-flex flex-column">
                                    <span class="d-block font-weight-bold">Kim Young Jou</span>
                                    <span class="d-block small">Seoul, South Korea</span>
                                </div>
                                <p class="ml-1 rating">4.5<i class="fa fa-star text-warning ml-2"></i></p>
                            </div>
                            <p class="d-flex mt-3 testimonial-text">
                                “This is very unusual for my business that currently requires a virtual private network that has high security."
                            </p>
                        </div>
                    </div>
                    <div class="border border-grey rounded testimonial-slide mx-2">
                        <div class="inner-slide p-3">
                            <div class="d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo get_template_directory_uri(); ?>/img/profile-3.jpg" alt="Profile photo">
                                <div class="profile-text d-flex flex-column">
                                    <span class="d-block font-weight-bold">Kim Young Jou</span>
                                    <span class="d-block small">Seoul, South Korea</span>
                                </div>
                                <p class="ml-1 rating">4.5<i class="fa fa-star text-warning ml-2"></i></p>
                            </div>
                            <p class="d-flex mt-3 testimonial-text">
                                “This is very unusual for my business that currently requires a virtual private network that has high security."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
