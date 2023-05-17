<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ayoubsgallery2.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header class = "header">
        <div class = "nav-section2">
            <div class = "brand-and-navBtn">
                <span class = "brand-name" onclick="logorefresh()"><b>
                   AM
                </b></span>
                <span class = "navBtn flex">
                    <i class = "fas fa-bars"></i>
                </span>
            </div>

            <!-- navigation menu -->
            <nav class = "top-nav2">
                <ul>
                    <li><a href = "homepage.php" class = "active">Home</a></li>
                    <li><a href = "gallerypage.php">Gallery</a></li>
                    <li><a href = "blogpage.php">Blog</a></li>
                    <li><a href = "contactpage.php">Contact</a></li>
                </ul>
            </nav>
            
        </div>

        <div class = "container about">
            <div class = "about-content">
                <div class = "about-img flex">
                    <img src = "img2/ayoubpro.jpg" alt = "photographer img">
                </div>
                <h2>I'm Ayoub Markhouss</h2>
                <h3>Photographer</h3>
                <blockquote>
                    “Photography for me is not looking, it’s feeling. If you can’t feel what you’re looking at, then you’re never going to get others to feel anything when they look at your pictures.”
                    <span>-Don McCullin</span>
                </blockquote>
            </div>

            <div class = "social-icons">
                <ul>
                    <li>
                        <a href = "https://www.facebook.com/MarkScorpius/"><i class = "fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href = "https://twitter.com/markos______"><i class = "fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href = "https://www.instagram.com/ayoubsgallery/"><i class = "fab fa-instagram"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </header>

    <!--ABOUT-ME-->
    <div class="containeraboutme">
        <div class="aboutme">
            <div class="aboutmepic">
                <img src="./img2/ayoub.jpg" alt="ayoub image">
            </div>
            <div class="aboutmecard">
                <h1 class="aboutmetitle">About Me</h1>
                <p>As a photographer and programmer, I see the world through both a creative and analytical lens. Photography is my passion, and I am constantly seeking out new ways to capture the beauty around me. I love experimenting with different techniques and styles, always pushing myself to learn and grow as a photographer</p>
                <p>At the same time, my programming skills give me a unique perspective on the technical aspects of photography, such as post-processing and image optimization. I enjoy using my knowledge of programming to enhance my photos and to create unique visual experiences for my audience </p>
                <p>Ultimately, I see photography and programming as two sides of the same coin - both require creativity, technical skill, and a willingness to constantly learn and evolve.</p>
            </div>
        </div>

    </div>
        <!--SERVICES SECTION-->
        <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h1>My services</h1>
                    </div>
                </div>
                <div class="row">
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/wedding.jpg" alt="">
                            <div class="overlay1">
                                <h4>wedding</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/portrait.jpg" alt="">
                            <div class="overlay1">
                                <h4>portraits</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/fashion.jpeg" alt="">
                            <div class="overlay1">
                                <h4>fashion</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/travel.jpg" alt="">
                            <div class="overlay1">
                                <h4>travel</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/anniversary.jpg" alt="">
                            <div class="overlay1">
                                <h4>anniversary</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                    <!--SERVICE-->
                    <div class="service-item">
                        <div class="service-item-inner">
                            <img src="./img2/event.jpg" alt="">
                            <div class="overlay1">
                                <h4>event</h4>
                            </div>
                        </div>
                    </div>
                    <!--END--SERVICE-->
                </div>
            </div>
        </section>
        <!--END-SERVICE-SECTION-->
        
        <!--PRICING-->
        <center>
         <div class="row">
            <div class="section-title">
                <h1>Tariffs</h1>
            </div>
        </div>
        </center>


        <div class="pricing-plan-container">
        <section class="pricing-plan ">
        
        <div class="pricing-plan__header">
            <h1 class="pricing-plan__title">Minimum</h1>
            <!--<h2 class="pricing-plan__summary">for thos who getting started</h2>-->
        </div>
        <div class="pricing-plan__description">
            <ul class="pricing-plan__list">
                <li class="pricing-plan__feature">Duration : 1 hour</li>
                <li class="pricing-plan__feature">Number of photos :  25-30</li>
                <li class="pricing-plan__feature">Processing time :  10 days</li>
                <li class="pricing-plan__feature">Short video for IG :  No</li>
            </ul>
        </div>
        <div class="pricing-plan__actions">
            <p class="pricing-plan__cost">$25</p>
            <!--<p class="pricing-plan__text">per month</p>-->
            <!-- <a href="#" class="pricing-plan__button">purchase</a> -->
            <!--<p class="pricing-plan__text">minimum spend $45 over 12 months</p>-->
        </div>
    </section>

    <section class="pricing-plan pricing-plan__highlighted">
        <div class="pricing-plan__special-text">Recommended</div>
        <div class="pricing-plan__header">
            <h1 class="pricing-plan__title">Standart</h1>
            <!--<h2 class="pricing-plan__summary">for thos who getting started</h2>-->
        </div>
        <div class="pricing-plan__description">
            <ul class="pricing-plan__list">
                <li class="pricing-plan__feature">Duration :  3 hours</li>
                <li class="pricing-plan__feature">Number of photos :  40-50</li>
                <li class="pricing-plan__feature">Processing time :  7 days</li>
                <li class="pricing-plan__feature">Short video for IG :  Yes</li>
            </ul>
        </div>
        <div class="pricing-plan__actions">
            <p class="pricing-plan__cost">$45</p>
            <!--<p class="pricing-plan__text">per month</p>-->
            <!--<a href="#" class="pricing-plan__button">purchase</a>-->
            <!--<p class="pricing-plan__text">minimum spend $45 over 12 months</p>-->
        </div>
    </section> 

    <section class="pricing-plan">
        
        <div class="pricing-plan__header">
            <h1 class="pricing-plan__title">Premium</h1>
            <!--<h2 class="pricing-plan__summary">for thos who getting started</h2>-->
        </div>
        <div class="pricing-plan__description">
            <ul class="pricing-plan__list">
            <li class="pricing-plan__feature">Duration :  5 hours</li>
                <li class="pricing-plan__feature">Number of photos :  70-100</li>
                <li class="pricing-plan__feature">Processing time :  4 days</li>
                <li class="pricing-plan__feature">Short video for IG :  Yes</li>
            </ul>
        </div>
        <div class="pricing-plan__actions">
            <p class="pricing-plan__cost">$60</p>
            <!--<p class="pricing-plan__text">per month</p>-->
           <!-- <a href="#" class="pricing-plan__button">purchase</a>-->
            <!--<p class="pricing-plan__text">minimum spend $45 over 12 months</p>-->
        </div>
    </section>
    </div>
    <!--END PRICICNG-->
        <!-- footer -->
        <footer class = "footer">
        <div class = "footer-container container">
            <div>   
                <h2><b>Hey! before you go..</b></h2>
                <p>Are you passionate about capturing moments that tell a story? Do you find joy in exploring the world through your lens? If so, we invite you to join our vibrant photography community and embark on an exciting journey of creativity and inspiration.</p>
            </div>
            <div class="subscribe">
                <h3>Free Subscription!</h3>
                <form action="gallerypage.php" method="post">
                    <div class = "subs" >
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" name="emails" placeholder="Email Address">
                        <button type = "submit" name="subscribe">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        $user="root";
        $psw="root";
        $cnx="mysql:host=localhost;dbname=ayoubsgallery;";
        $db=new pdo($cnx,$user,$psw);
        if(isset($_POST['subscribe']))
        $email=$_POST['emails'];
        $news = $db -> prepare("INSERT INTO newsletter VALUES('$email')");
        $news -> execute();
        ?>
        
    </footer>
    <!-- end of footer -->

    <script src="ayoubsgallery2.js"></script>
</body>
</html>