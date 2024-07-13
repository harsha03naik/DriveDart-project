
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<!--HEADER SECTIO STARTS-->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#"class="logo"><span>Drive</span>Dart</a>

        <nav class="navbar">
            <a href="#home"class="active">Home</a>
            <a href="#ride">Ride</a>
            <a href="#services">Services</a>
            <a href="#review">Reviews</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            </nav>
        <div id="login-btn">
            <a href="login.php" class="btn">Login</a>
            
        </div>        
    </header>
<!--HEADER SECTION ENDS-->
<!--LOGIN SECTION-->
<div class="login-form-container">
    <span class="fas fa-times" id="close-login-form"></span>
    <form action="">
        <h3>User login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p>Forget your password ?<a href="#">click here</a></p>
        <input type="submit" value="login now" class="btn">
        <p> or login with</p>
        <div class="buttons">
            <a href="#" id="google-login-btn"    class="btn">google</a>
            <a href="#" class="btn">facebook</a>
        </div>
        <p>dont have an Account ?<a href="#">create one</a></p>
     </form>
</div>



<!--header section ends-->
<!--home section starts-->
<section class="home" id="home">
    <h1 class="home-parallax" data-speed="-2">find your auto</h1>
    <img class="home-parallax" data-speed="5" src="autooriginal2.png" alt="">
    <a href="login.php" class="btn home-parallax" data-speed="7">Book Now</a>
    
</section>
<!--icon section-->
<section class="icons-container">
    <div class="icons">
        <i class="fa-solid fa-id-card"></i>
        <div class="content">
            <h3>150+</h3>
            <p>Drivers</p>
        </div>
    </div> 
    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>2000+</h3>
            <p>Users</p>
        </div>
    </div>  
    <div class="icons">
        <i class="fas fa-comments"></i>
        <div class="content">
            <h3>150+</h3>
            <p>Reviews</p>
        </div>
    </div>       
    <div class="icons">
        <i class="fa-solid fa-gas-pump"></i>
        <div class="content">
            <h3>20+</h3>
            <p>Auto-stands</p>
        </div>
    </div>
</section>
<!--icon section ends-->
<!--Ride section-->
<section class="ride" id="ride">
    <div class="heading">
        <span>How to book</span>
        <h1>book with 3 easy steps</h1>
    </div>
    <div class="ride-container">
        <div class="box">
            <i class='fas fa-location'></i>
            <h2>Enter Location</h2>
            <p>enter your current location, so we can choose nearest rickshaw-stand to you.</p>
        </div>

        <div class="box">
            <i class='fas fa-flag'></i>
            <h2>Enter Destination</h2>
            <p>enter your Drop location so we can pick and drop you to your destination.</p>
        </div>

        <div class="box">
            <i class='fas fa-car'></i>
            <h2>Book Auto</h2>
            <p>Pick a driver and book your Ride,have a safe journey!.</p>
        </div>
    </div>
</section>






<!--ride section ends-->
<!--service section strart-->
<section class="services" id="services">
    <h1 class="heading">Our  <span>Services</span></h1>
    <div class="box-container">
        <div class="box">
            <i class="fa-solid fa-taxi"></i>
            <h3>Ride booking</h3>
            <p>Allow passenger to book rides by entering their current location.</p>
            
        </div>

        <div class="box">
            <i class="fa-solid fa-handshake"></i>
            <h3>Driver matching</h3>
            <p>Match passengers with nearby drivers based on location and avilability.</p>
            
        </div>

        <div class="box">
            <i class="fa-solid fa-user-shield"></i>
            <h3>Safety</h3>
            <p>we safely drop customers on their location.without any harm.</p>
            
        </div>
    </div>
</section>
<!--service section ends-->

<!--review section starts-->
<div class="container" id="review">
    <div class="board">
        <h2 class="text-light">Word from our customers</h2>
        <p>Some of the fulfilled costomer reviews :- </p>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            Impressed with DriveDart's service. The website is well-organized, allowing me to quickly find autos near me and book them with ease. Having driver details upfront is a big plus. Definitely recommend!
                        </div>
                        <div class="profile">
                            <img src=images.jpg>
                            <a href="#">Ramlal deshpande</a>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            DriveDart is my preferred choice for booking autos. The website is comprehensive, providing all necessary details about the drivers and their stands. It's a hassle-free experience every time!
                        </div>
                        <div class="profile">
                            <img src=download.jpg>
                            <a href="#">chetan bhagath</a>
                            <span>co-Founder</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        Looking ahead, I hope DriveDart continues to prioritize user experience. It would be fantastic to have more flexible booking options, such as scheduling rides days in advance or setting recurring trips. Their current service is excellent; I'm excited to see what's next!
                        </div>
                        <div class="profile">
                            <img src=b3.jpg>
                            <a href="#">Naveen</a>
                            <span>entrepreneur</span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        DriveDart is my go-to for reliable auto bookings. The website is straightforward, with clear details about each driver's stand location and contact number. Whether for short trips or longer rides, it's always been a dependable choice.
                        </div>
                        <div class="profile">
                            <img src=g2.png>
                            <a href="#">Renuka</a>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            DriveDart's service is a time-saver, especially during peak hours. I no longer have to worry about finding transportation; their website lets me book autos easily, ensuring I reach my destinations on time.
                        </div>
                        <div class="profile">
                            <img src=b2.jpg>
                            <a href="#">Sumanth</a>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            I've been using DriveDart for my daily commute, and it's been fantastic. The website is user-friendly, and I always find autos available nearby. Knowing the stand locations and having the drivers' contact numbers handy is really convenient.
                        </div>
                        <div class="profile">
                            <img src=download.jpg>
                            <a href="#">ananthkumar</a>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            DriveDart came through for me during a family emergency. Their website made it easy to find an auto immediately, and the driver was compassionate and understanding. It's more than just a transportation service—it's a lifeline during challenging times.
                        </div>
                        <div class="profile">
                            <img src=g1.jpg>
                            <a href="#">Deepa</a>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                        Excited to see DriveDart evolve! The website already provides comprehensive information, but I'm hoping for more integration with mobile apps and maybe even loyalty rewards for frequent users. Can't wait to see what improvements they bring!
                        </div>
                        <div class="profile">
                            <img src=b1.jpg>
                            <a href="#">Stany Pinto</a>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="flex">
                        <div class="comments">
                            I've been using DriveDart for a few months now, and I'm impressed by the level of professionalism. The website is very informative, making it easy to locate autos and contact drivers directly. It's become an essential tool for my daily commute.
                        </div>
                        <div class="profile">
                            <img src=download.png>
                            <a href="#">Prajwal V.N</a>
                            <span></span>
                        </div>
                    </div>
                </div>
                

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            
        </div>
    
    </div>
</div>


<!--end-->


<!--about section starts-->
<section class="about" id="about">
    <div class="heading">
        <span>About us</span>
        <h1>Best customer Experience</h1>
    </div>
    <div class="about-container">
        <div class="about-image">
            <img src="at.png" alt="">
        </div>
        <div class="about-text">
            <a href="#"class="logo"><span>Drive</span>Dart</a>
            <p>At DriveDart, we pride ourselves on delivering the best customer experience in urban transportation. Our mission is to connect you with reliable auto drivers who prioritize your comfort, safety, and satisfaction.
            <h1>What Sets Us Apart?</h1>
            <ol>
                <ul>
                    <li><h2>Quality Assurance:<h2>
                        <p>Every driver on DriveDart is meticulously screened and selected for their professionalism and commitment to service excellence.
                    </p>
                        
                    </li>
                    <li>
                        <h2>Personalized Service:
                            <p>We understand that each journey is unique. Our drivers are dedicated to providing personalized service tailored to your specific needs.
                            </p>
                        </h2>
                    </li>
                    <li><h2>Efficiency and Reliability:<p>Whether you're commuting to work or exploring the city, DriveDart ensures prompt and reliable transportation, so you can reach your destination on time, every time.</h2>
                    </p>
                    </li>
                </ul>
            </ol>
            
            <p>DriveDart - Where your journey begins with exceptional service and peace of mind.</p>
            <!--<a href="" class="btn">Read more</a> -->
        </div>
    </div>
</section>
<!--about section ends-->

<!--footer section starts-->
<section class="footer" id="contact">
    <div class="box-container">
        <div class="box">
            <h3>Drive Dart</h3>
            <p>Your ride, your way. Instantly connect with auto drivers—get their contact, name, and stand location for a smooth, effortless journey.</p>
            <div class="share">
                <a href="#" class="fa-brands fa-facebook-f"></a>
                <a href="#" class="fa-brands fa-twitter"></a>
                <a href="#" class="fa-brands fa-instagram"></a>
                <a href="#" class="fa-brands fa-youtube"></a>
            </div>

        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"><i class="fa fa-phone"></i>+91 2136547896</a>
            <a href="#" class="links"><i class="fa fa-phone"></i>+91 1234568786</a>
            <a href="#" class="links"><i class="fa fa-envelope"></i> info@drivedart.com</a>
            <a href="#" class="links"><i class="fa fa-map-marker-alt"></i>Honnavar, India</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"><i class="fa fa-arrow-right"></i>Home</a>
            <a href="#ride" class="links"><i class="fa fa-arrow-right"></i>Ride</a>
            <a href="#services" class="links"><i class="fa fa-arrow-right"></i>services</a>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i>Feautures</a>
            <a href="#review" class="links" id="review"><i class="fa fa-arrow-right"></i>Reviews</a>
            <a href="#contact" class="links"><i class="fa fa-arrow-right"></i>Contact</a>
            
        </div>
        <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe For Latest Updates</p>
            <input type="email" placeholder="your emial" class="email">
            <input type="submit" value="Subscribe" class="btn">


            
        </div>
    </div>
    <div class="credit">Developed by  Dheeraj Salaskar | all rights reserved!</div>
</section>


<!--footer section ends-->



 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>