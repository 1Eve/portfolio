<?php

/**
 * Template Name: About Page
 */
?>
<?php get_header(); ?>
<?php $coding = get_template_directory_uri() . '/assets/coding.png'; ?>
<?php $project1 = get_template_directory_uri() . '/assets/dashboard.png'; ?>
<?php $php_logo = get_template_directory_uri() . '/assets/php.png'; ?>
<?php $js_logo = get_template_directory_uri() . '/assets/js.png'; ?>
<?php $wordpress_logo = get_template_directory_uri() . '/assets/wordpress-logo.png'; ?>
<?php $shopit = get_template_directory_uri() . '/assets/shopit.png'; ?>
<?php $contact_management = get_template_directory_uri() . '/assets/contact-management-system.png'; ?>
<?php $easy_manage = get_template_directory_uri() . '/assets/easy-manage.png'; ?>


<section class="section">
    <div class="Portfolio-container">
        <div class="container-landing">
            <div class="landing-text">
                <div>
                    <p class="catchy-header">Have your presence felt online </p>
                    <p class="catchy-header">with your own website</p>
                </div>
                <div>
                    <p class="catchy-desc">My mission is to empower your business by maximizing its online reach
                    </p>
                    <p class="catchy-desc"> and connecting with a wide pool of potential customers.</span>
                    </p>
                </div>
                <div>
                    <a href=""><button class="contact-me-btn">Build my website</button></a>
                </div>
            </div>
            <div class="profile-pic">
                <img src="<?php echo $coding; ?>" alt="">
            </div>
        </div>
    </div>
    <div class=" container">
        <div class="core-languages-cards">
            <p class="heading">My core languages</p>
        </div>
        <div class=" container-languages">
            <div>
                <div class="card-title">

                    <div><img src="<?php echo $wordpress_logo; ?>" alt=""></div>
                    <div>
                        <h4>Wordpress</h4>
                    </div>
                </div>
                <div>
                    <p class="">Enhance the functionality of your WordPress site with tailor-made plugins. From advanced features to
                        seamless integrations, I develop custom plugins that empower your website with unmatched
                        versatility.</p>
                </div>
            </div>
            <div>
                <div class="card-title">
                    <div><img src="<?php echo $js_logo; ?>" alt=""></div>
                    <div>
                        <h4>JavaScript</h4>
                    </div>
                </div>
                <div>
                    <p class="">Master the art of interactivity and enhance user experiences with my JavaScript expertise. From
                        dynamic web elements to seamless functionality, I create immersive digital experiences that leave a
                        lasting impression.</p>
                </div>
            </div>
            <div>
                <div class="card-title">
                    <div><img src=" <?php echo $php_logo; ?>" alt=""></div>
                    <div>
                        <h4>PHP</h4>
                    </div>
                </div>
                <div>
                    <p class="">Unlock the power of server-side scripting with my PHP skills. From database management to dynamic
                        content creation,
                        I leverage PHP's versatility to build robust and scalable web applications that deliver exceptional
                        performance.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div>
            <p class="heading"> Some of my projects</p>
        </div>
        <div class=" projects-container-container">

            <div>
                <div>
                    <img src="<?php echo $easy_manage; ?>" alt="">
                </div>
                <div>
                    <h3>Easy Manage</h3>
                </div>
                <div>
                    <p class="project-info">An efficient project management system that streamlines collaboration and tasks. With distinct roles for admin, project manager, trainer, and trainee, it simplifies communication and resource allocation.</p>

                </div>
                <div>
                    <h4>Stacks used</h4>
                </div>
                <div class="front-page-skills">
                    <div>
                        <p class="talents">WORDPRESS</p>
                    </div>
                    <div>
                        <p class="talents">JAVASCRIPT</p>
                    </div>
                    <div>
                        <p class="talents">PHP</p>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="<?php echo $shopit; ?>" alt="">
                </div>
                <div>
                    <h3>JPJ SYSTEM</h3>
                </div>
                <div>
                    <p class="project-info">Your ultimate destination for fashion, tech, and food. Simplified shopping experience. Trendy fashion, cutting-edge gadgets, and delightful culinary offerings. Quality and convenience at your fingertips.</p>
                </div>
                <div>
                    <h4>Stacks used</h4>
                </div>
                <div class="front-page-skills">
                    <div>
                        <p class="talents">WORDPRESS</p>
                    </div>
                    <div>
                        <p class="talents">JAVASCRIPT</p>
                    </div>
                    <div>
                        <p class="talents">PHP</p>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <img src="<?php echo $contact_management; ?>" alt="">
                </div>
                <div>
                    <h3>Contact Management System</h3>
                </div>
                <div>
                    <p class="project-info">Effortlessly manage and organize your contacts. Streamline communication with this user-friendly solution. Stay connected and organized with ease.</p>
                </div>
                <div>
                    <h4>Stacks used</h4>
                </div>
                <div class="front-page-skills">
                    <div>
                        <p class="talents">HTML</p>
                    </div>
                    <div>
                        <p class="talents">CSS</p>
                    </div>
                    <div>
                        <p class="talents">PHP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>