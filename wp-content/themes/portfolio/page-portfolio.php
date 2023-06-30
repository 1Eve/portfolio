<?php

/**
 * Template Name: portfolio
 */
?>
<?php get_header(); ?>

<?php $profile = get_template_directory_uri() . '/assets/memoji-modified.png'; ?>

<?php
if (isset($_POST["Submit-btn"])) {
    $name = $_POST['clientname'];
    $price = $_POST['price'];
    $message = $_POST['project-description'];

    $to = "orderntools@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nPrice: $price\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending email.";
    }
}
?>


<section class="section">
    <div id="home" class="Portfolio-container">
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
                    <button class="contact-me-btn">Build my website</button>
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
    <div class=" container" id="reviews">
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
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                    <div class="skill-div">
                        <div>
                            <p class="skills">Wordpress</p>
                        </div>
                        <div>
                            <p class="skills">PHP</p>
                        </div>
                        <div>
                            <p class="skills">Bootsrap</p>
                        </div>
                    </div>
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
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                    <div class="skill-div">
                        <div>
                            <p class="skills">Wordpress</p>
                        </div>
                        <div>
                            <p class="skills">PHP</p>
                        </div>
                        <div>
                            <p class="skills">Bootsrap</p>
                        </div>
                    </div>
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
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                    <div class="skill-div">
                        <div>
                            <p class="skills">Wordpress</p>
                        </div>
                        <div>
                            <p class="skills">PHP</p>
                        </div>
                        <div>
                            <p class="skills">Bootsrap</p>
                        </div>
                    </div>
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
                        <p><span>5.0 </span><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                    <div class="skill-div">
                        <div>
                            <p class="skills">Wordpress</p>
                        </div>
                        <div>
                            <p class="skills">PHP</p>
                        </div>
                        <div>
                            <p class="skills">Bootsrap</p>
                        </div>
                    </div>
                </div>
                <div class="card-on-top">
                    <p class="call-to-action-text">Get your new website today</p>
                    <p>contact me</p>
                    <a href=""><button>start building<i class="hover bi bi-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="my-skills-container container" id="skills">
        <div>
            <p class="heading">My Skills</p>
        </div>
        <div class="container-skills">
            <div class="front-talent-list">
                <div>
                    <h3>Front-end:</h3>
                    <div class="front-page-skills">
                        <div>
                            <p class="talents">CSS</p>
                        </div>
                        <div>
                            <p class="talents">BOOTSTRAP</p>
                        </div>
                        <div>
                            <p class="talents">TAILWIND</p>
                        </div>
                        <div>
                            <p class="talents">VUEJS</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Back-end:</h3>
                    <div class="front-page-skills">
                        <div>
                            <p class="talents">MONGOOSE</p>
                        </div>
                        <div>
                            <p class="talents">EXPRESS JS</p>
                        </div>
                        <div>
                            <p class="talents">NODEJS</p>
                        </div>
                        <div>
                            <p class="talents">PHP</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Special Business Skills:</h3>
                    <div>
                        <p class="talents">SEARCH ENGINE OPTIMIZATION</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-journey-container container">
        <div>
            <p class="heading">My Journey in tech</p>
        </div>
        <div class="journey">
            <h3>2019 JAN</h3>
            <p>Embarked on an exhilarating tech journey, which started as a mere hobby and swiftly transformed into an unwavering passion that fuels my professional pursuits.</p>
            <h3>2019 AUG - 2022 APRIL</h3>
            <p>Immersed myself in the realm of knowledge at Zetech University, pursuing a Bachelor's degree in Information Technology. Throughout my academic journey, I consistently demonstrated a deep commitment to learning and growth, culminating in the remarkable achievement of graduating with a Second Class Upper Division.</p>
            <h3>2022 APRIL - 2022 AUG</h3>
            <p>Embarked on an exciting tech internship at the Ministry of Agriculture, where I had the privilege to contribute my skills and expand my practical experience in a professional environment. This opportunity allowed me to gain invaluable insights into real-world applications of technology.</p>
            <h3>2022 AUG</h3>
            <p>Embraced the freedom and flexibility of working as a tech freelancer, where I had the chance to explore my creativity, take on diverse projects, and further refine my skills. This experience nurtured my independence and taught me the importance of delivering high-quality work while maintaining a strong commitment to client satisfaction.</p>
            <h3>2023 APRIL - 2023 JUNE</h3>
            <p>Joined TheJitu, a remarkable and dynamic family of professionals, as a WordPress developer. Being part of this extraordinary team has not only allowed me to enhance my existing skills but has also provided an avenue for personal and professional growth. TheJitu's unwavering dedication to excellence and innovation has further fueled my enthusiasm and passion for my craft.</p>
        </div>
    </div>
    <div id="overlay">
        <div id="popup">
            <div class="request-quote-container">
                <div class="form-container">
                    <div class="form-header">
                        <div>
                            <p>Request a quote</p>
                        </div>
                        <div id="closeButton">
                            <div><i class="bi bi-x"></i></div>
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
                            <input class="input-description" type="text" placeholder="I’m looking for..." name="project-description">
                            <p>
                                <?php echo ''; ?>
                            </p>
                            <label for="">Once you place an order, when would you like your service to be
                                delivered?</label>
                            <div class="time">
                                <input type="button" value="24 hours">
                                <input type="button" value="3 days">
                                <input type="button" value="7 hours">
                                <input type="button" value="Other">
                            </div>
                            <label for="">What’s your budget for this service?</label>
                            <input class="price" type="text" placeholder="Kshs" name="price">
                            <div class="submit">
                                <input type="submit" value="Submit request" name="Submit-btn">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="disclaimer">
                    <div>
                        <div class="arrow">
                            <i class="bi bi-caret-left-fill"></i>
                        </div>
                        <i class="bi bi-lightbulb"></i>
                        <p class="color">Define in Detail</p>
                    </div>
                    <div>
                        <p>include all the necessesary details needed to cmplete your resquest.</p>
                    </div>
                    <div>
                        <p class="color">For example:</p>
                        <p>If you are looking for a revamp, you can specifyyour company name, business tyoe, preferred
                            color , etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const requestbtn = document.querySelector(".contact-me-btn")
    const modal = document.querySelector("#overlay")
    const closemodal = document.querySelector("#closeButton")

    window.addEventListener('load', () => {
        requestbtn.addEventListener('click', () => {
            if (modal.style.display == "none") {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }
        })

        closemodal.addEventListener("click", () => {
            modal.style.display = "none";
        })
    })
</script>
<?php get_footer(); ?>