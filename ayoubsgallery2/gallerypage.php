<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ayoubsgallery / Gallery</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="ayoubsgallery2.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">
    </head>
    <body>
        
        <!-- header -->
    <div class="gallerynavbg">
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
                    <li><a href = "homepage.php" >Home</a></li>
                    <li><a href = "gallerypage.php" class = "active">Gallery</a></li>
                    <li><a href = "blogpage.php">Blog</a></li>
                    <li><a href = "contactpage.php">Contact</a></li>
                </ul>
            </nav>
            
        </div>
    </div>

        <!-- main -->
        <section class = "section-three">
            <div class = "container">
                <div class = "gallery">
                    <a href = "img2/cat.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/cat.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Arab League Park</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/walker.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/walker.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/oldmedina.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/oldmedina.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/building1.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/building1.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/building2.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/building2.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/building3.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/building3.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/alc.jpg" data-lightbox="gridimage">
                        <div class = "single-img" >
                            <img src = "img2/alc.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>American Art Center</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/biker.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/biker.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Old Medina</h3>
                            </div>
                        </div>
                    </a>

                    <a href = "img2/runners.jpg" data-lightbox="gridimage">
                        <div class = "single-img">
                            <img src = "img2/runners.jpg" alt = "gallery image">
                            <div class = "single-img-content">
                                <h3>Arab Ligue Parc</h3>
                            </div>
                        </div>
                    </a>
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
                
                <div class = "subs">
                    <i class = "fas fa-envelope"></i>
                    <input type = "email" id = "email" placeholder="Email Address">
                    <button type = "submit">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        
        
    </footer>
    <!-- end of footer -->

    <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>

    <script src="ayoubsgallery2.js"></script>
        
</body>
</html>