<!-- <?php

/**
 * Template Name: portfolio
 */
?>
<?php get_header(); ?>

<?php $profile = get_template_directory_uri() . '/assets/memoji-modified.png'; ?>

<?php
// if ( isset($_POST["Submit-btn"])) {
//   $name = $_POST['clientname'];
//   $email = $_POST['email'];
//   $message = $_POST['project-description'];

//   $to = "orderntools@gmail.com"; 
//   $subject = "New Form Submission";
//   $body = "Name: $name\nEmail: $email\nMessage: $message";

//   // Send email
//   if (mail($to, $subject, $body)) {
//     echo "Thank you for your submission!";
//   } else {
//     echo "Error sending email.";
//   }
// }
?>


<section style="position: relative;">
    <div class="Portfolio-container">
        <div class="container-landing">
            <div class="landing-text">
                <div>
                    <p class="catchy-header">From zero to more online clients</p>
                    <p class="catchy-header">hire Patrick Mwaniki!</p>
                </div>
                <div>
                    <p class="catchy-desc">I’ll help you curate, design and develop your own custom website
                    </p>
                    <p class="catchy-desc"> that meets your current needs with the <span>fastest deliverly time.</span>
                    </p>
                </div>
                <div>
                    <button id="showButton" class="contact-me-btn">Build my website</button>
                </div>
            </div>
            <div class="profile-pic">
                <img src="<?php echo $profile; ?>" alt="">
                <div class="stats">
                    <div>
                        <p class="color stats-achievements">26+</p>
                        <p class="stats-desc">Cutomers</p>
                    </div>
                    <div>
                        <p class="color stats-achievements">4.4+</p>
                        <p class="stats-desc">Years</p>
                    </div>
                    <div>
                        <p class="color stats-achievements">5</p>
                        <p class="stats-desc">Languages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="back-ground overlay" style="display:none; position: absolute; top: 20px; width:100vw;">
        <div class="request-quote-container" id="popup">
            <div>
                <div class="form-header">
                    <div>
                        <p>Request a quote</p>
                    </div>
                    <div>
                        <span id="closeButton">&times;</span>
                    </div>
                </div>
                <form action="" method="post">
                    <div>
                        <label for="">Describe the service you are looking to purchase - please be as detailed as
                            possible</label>
                        <hr>
                        <input class="username" type="text" name="clientname" placeholder="Enter your name">
                        <p>
                            <?php echo ''; ?>
                        </p>
                        <input class="input-description" type="text" placeholder="I’m looking for..."
                            name="project-description">
                        <p>
                            <?php echo ''; ?>
                        </p>
                        <label for="">Once you place an order, when would you like your service to be delivered?</label>
                        <div class="time">
                            <input type="button" value="24 hours">
                            <input type="button" value="3 days">
                            <input type="button" value="7 hours">
                            <input type="button" value="Other">
                        </div>
                        <label for="">What’s your budget for this service?</label>
                        <input class="price" type="text" placeholder="Kshs">
                        <div class="submit">
                            <input type="submit" value="Submit request" name="Submit-btn">
                        </div>
                    </div>
                </form>
            </div>
            <div class="disclaimer">
                <div class="arrow">
                    <i class="bi bi-caret-left-fill"></i>
                </div>
                <div>
                    <i class="bi bi-lightbulb"></i>
                    <p class="color">Define in Detail</p>
                </div>
                <div>
                    <p>include all the necessesary details needed to cmplete your resquest.</p>
                </div>
                <div>
                    <p class="color">For example:</p>
                    <p>If you are looking for a revamp, you can specifyyour company name, business tyoe, preferred color
                        ,
                        etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class=" container">
        <div class="quick-skills-container">
            <div>
                <div>
                    <i class="bi bi-rocket-takeoff-fill"></i>
                </div>
                <p class="color"> Lighting-fast turn around</p>
            </div>
            <div>
                <div><i class="bi bi-tools"></i></div>
                <p class="color"> Help revamp any site</p>
            </div>
            <div>
                <div><i class="bi bi-shield-fill-check"></i></div>
                <p class="color">Security is priority</p>
            </div>
            <div>
                <div><i class="bi bi-globe-americas"></i></div>
                <p class="color">Available to clients globally</p>
            </div>
        </div>
    </div>
    <div class=" container">
        <div>
            <p class="heading">Reviews </p>
        </div>
        <div class="reviews-container" <div>
            <div class="card-1">
                <div class="card-grid">
                    <div class="outer-ring">
                        <div>
                            <img src="<?php echo $profile; ?>" alt="">
                        </div>
                    </div>
                    <div>
                        <p>J.Gichuki</p>
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </p>
                    </div>
                </div>
                <hr class="grey-hr">
                <div class="card-grid">
                    <p class="project">project:</p>
                    <p class="project-desc">Create an e-commerce site using Wordpress</p>
                </div>
                <hr class="blue-hr">
                <div class="card-skill-title">
                    <p class="color skills-title">skills used:</p>
                    <p class="skills">Wordpress</p>
                    <p class="skills">PHP</p>
                    <p class="skills">Bootsrap</p>
                </div>
            </div>
            <div class="card-1">
                <div class="card-grid">
                    <div class="outer-ring">
                        <div>
                            <img src="<?php echo $profile; ?>" alt="">
                        </div>
                    </div>
                    <div>
                        <p>J.Gichuki</p>
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </p>
                    </div>
                </div>
                <hr class="grey-hr">
                <div class="card-grid">
                    <p class="project">project:</p>
                    <p class="project-desc">Create an e-commerce site using Wordpress</p>
                </div>
                <hr class="blue-hr">
                <div class="card-skill-title">
                    <p class="color skills-title">skills used:</p>
                    <p class="skills">Wordpress</p>
                    <p class="skills">PHP</p>
                    <p class="skills">Bootsrap</p>
                </div>
            </div>
            <div class="card-1">
                <div class="card-grid">
                    <div class="outer-ring">
                        <div>
                            <img src="<?php echo $profile; ?>" alt="">
                        </div>
                    </div>
                    <div>
                        <p>J.Gichuki</p>
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </p>
                    </div>
                </div>
                <hr class="grey-hr">
                <div class="card-grid">
                    <p class="project">project:</p>
                    <p class="project-desc">Create an e-commerce site using Wordpress</p>
                </div>
                <hr class="blue-hr">
                <div class="card-skill-title">
                    <p class="color skills-title">skills used:</p>
                    <p class="skills">Wordpress</p>
                    <p class="skills">PHP</p>
                    <p class="skills">Bootsrap</p>
                </div>
            </div>
            <div class="card-call-to-action">
                <div class="card-grid">
                    <div class="outer-ring">
                        <div>
                            <img src="<?php echo $profile; ?>" alt="">
                        </div>
                    </div>
                    <div>
                        <p>J.Gichuki</p>
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </p>
                    </div>
                </div>
                <hr class="grey-hr">
                <div class="card-grid">
                    <p class="project">project:</p>
                    <p class="project-desc">Create an e-commerce site using Wordpress</p>
                </div>
                <hr class="blue-hr">
                <div class="card-skill-title">
                    <p class="color skills-title">skills used:</p>
                    <p class="skills">Wordpress</p>
                    <p class="skills">PHP</p>
                    <p class="skills">Bootsrap</p>
                </div>
                <div class="card-on-top">
                    <p class="call-to-action-text">Get your new website today</p>
                    <p>contact me</p>
                    <a href=""><button>start building<i class="bi bi-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="my-skills-container container">
        <div>
            <p class="heading">My Skills</p>
        </div>
        <div class="talent-list">
            <p class="talents">JAVASCRIPT</p>
            <p class="talents">WORDPRESS PLUGIN</p>
            <p class="talents">MYSQL</p>
            <p class="talents">TAILWIND</p>
            <p class="talents">VUEJS</p>
            <p class="talents">HTML</p>
            <p class="talents">ELEMENTOR EXPERT</p>
            <p class="talents">BOOTSTRAP</p>
            <p class="talents">PHP</p>
            <p class="talents">NODE JS</p>
            <p class="talents">WORDPRESS OPTIMIZATION</p>
            <p class="talents">WORDPRESS THEME</p>
            <p class="talents">WOOCOMMERCE</p>
        </div>
    </div>
    <div class="my-journey-container container">
        <div>
            <p class="heading">My Journey in tech</p>
        </div>
        <div class="journey">
            <p>Embark on my tech journey started as a hobby and transformed into a passion-driven profession. I studied
                at
                Zetech University pursuing a Bachelors degree in Information Technology and managed to graduate with a
                Second Class Upper Division. I have gained valuable experience as a freelancer, also as a tech intern at
                the
                Ministry of Agriculture and honed my skills further at TheJitu as a WordPress developer.</p>
        </div>
    </div>

    <div class="ask-question-container">
        <div class="form-header">
            <div>
                <p>Ask a question</p>
            </div>
            <div>
                <div><i class="bi bi-x"></i></div>
            </div>
        </div>
        <form action="" method="post">
            <input type="text" placeholder="I'm looking for...">
            <div class="submit">
                <input type="submit" value="Submit request" name="Submit-btn">
            </div>
        </form>
    </div>
</section>
<script>
    const requestbtn = document.querySelector(".contact-me-btn")
    const modal = document.querySelector(".overlay")
    const closemodal = document.querySelector("#closeButton")

    window.addEventListener('load', ()=>{
        requestbtn.addEventListener('click',()=>{
            if(modal.style.display=="none"){
                modal.style.display="block";
            }else{
                modal.style.display="none";
            }
        })

        closemodal.addEventListener("click", ()=>{
            modal.style.display="none";
        })
    })

</script>
<?php get_footer(); ?> -->