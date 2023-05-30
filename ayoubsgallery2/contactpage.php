<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ayoubsgallery / Contact</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="ayoubsgallery2.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">
    </head>
    <body>
        
        <!-- header -->
        <div class="contactnavbg">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name" onclick="logorefresh()"><b>
                    AM
                    </b></span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href="homepage.php" >Home</a></li>
                        <li><a href="gallerypage.php" >Gallery</a></li>
                        <li><a href="blogpage.php">Blog</a></li>
                        <li><a href="contactpage.php"class = "active">Contact</a></li>
                    </ul>
                </nav>
                
            </div>
      </div>

      <!-- main -->
      <section class = "section-five">
        <div class = "container">
            <div class = "contact-top">
                <h3>CONTACT ME</h3>
                
            </div>

            <div class = "contact-middle">
                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-map-signs"></i>
                    </span>
                    <span>Address</span>
                    <p>2mars-Casablanca,Morocco 20490</p>
                </div>

                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-phone"></i>
                    </span>
                    <span>Contact Number</span>
                    <p>+212-645-3532-57</p>
                </div>

                <div>
                    <span class = "contact-icon">
                        <i class = "fas fa-paper-plane"></i>
                    </span>
                    <span>Email Address</span>
                    <p>ayoub.markhouss@gmail.com</p>
                </div>

                
            </div>

            <div class = "contact-bottom" >
                <form class = "form" action="" method="post">
                    <input type = "text" placeholder="Your Name" name="name">
                    <input type = "email" placeholder="Your Email" name="email">
                    <input type = "text" placeholder="Subject" name="subject">
                    <textarea rows = "9" placeholder="Message" name="msg"></textarea>
                    <input type = "submit" class = "btn" value = "Send Message" name="submition">
                </form>

                
            </div>
        </div>
    </section>
    
   
    <!-- end of main -->
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
   
        
    </footer>
    <!-- end of footer -->
    
    <!-- PHP CONTACT CODE  -->
    <?php
    $user="root";
    $psw="root";
    $cnx="mysql:host=localhost;dbname=ayoubsgallery;";
    $db=new pdo($cnx,$user,$psw);
        
        if(isset($_POST['submition'])){
            $m1=$_POST['name'];
            $m2=$_POST['email'];
            $m3=$_POST['subject'];
            $m4=$_POST['msg'];
            $ajout=$db -> prepare("INSERT INTO contacts VALUES('$m1','$m2','$m3','$m4')");
            $ajout -> execute();
            
        }
    
    ?>     <?php
        $user="root";
        $psw="root";
        $cnx="mysql:host=localhost;dbname=ayoubsgallery;";
        $db=new pdo($cnx,$user,$psw);
        if(isset($_POST['subscribe']))
        $email=$_POST['emails'];
        $news = $db -> prepare("INSERT INTO newsletter VALUES('$email')");
        $news -> execute();
        ?>
    <script src="ayoubsgallery2.js"></script>
    <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>
    </body>
</html>