<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VantoGO</title>
    <!------- Link to CSS ------->
    <link rel="stylesheet" href="style.css">
    <!-------- Box Icons-------->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--- Header ---->
    <header>
    <a href="home" class="logo"><img src="img/logo.png" alt=""></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#home">Reservation</a></li>
        <li><a href="#ride">Ride</a></li> 
        <li><a href="#services">Services</a></li>
        <li><a href="fleet">Fleet</a></li>
                <li class="aboutdrop"><a href="#about">About <i class='bx bx-caret-down'></i></a> 
                    <ul class="drop-down"> 
                    <li><a href="location">Locations</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                </li>
                    </ul>
        <li><a href="#reviews">Reviews</a></li>
    </ul>
    <div class="header-btn">
        <a href="signup" class="sign-up">Sign up</a>
        <a href="signin" class="sign-in">Sign In</a>
    </div>
    </header>
    <!----------------------------------- Home ---------------------------------------->
    <section class ="home" id="home">
        <div class="text">
            <h1><span>Choose Dates & Location and</span><br>Book Your Van</h1>
            <p>"Embark on Limitless Adventures with Confidence: Experience Unmatched Freedom and Flexibility with Our Premium Van Rental Services,
                Tailored to Elevate Every Aspect of Your Journey, From Start to Finish!"</p>
                <div class="app-stores">
                    <img src="img/tiktok.png" alt="">
                    <img src="img/fb.png" alt="">
                </div>
        </div>

        <div class="form-container">
            <form action="reservation">
                <div class="input-box">
                    <span>Location</span>
                        <input type ="search" name="" id="" placeholder="Search Place">
                </div>
                    <div class="input-box">
                            <span>Contact</span>
                            <input type="text"name ="" id="" placeholder="Email">
                    </div>
                        <div class="input-box">
                            <span>Pick-Up Date</span>
                            <input type="date"name ="" id="">
                        </div> 
                                <div class="input-box">
                                    <span>Return Date</span>
                                    <input type="date" name="" id="">
                                </div>
                        <a href ="reservation">
                        <input type="submit" name="" id="btn" class="btn">
                        </a>
            </form>
        </div>
    </section> 
    <!------------------------------ Ride -------------------------------->
        <section class="ride" id = "ride">
            <div class="heading">
                <span>How it work</span>
                <h1>Rent with 3 Easy Steps</h1>
            </div>
                <div class="ride-container">
                    <div class="box">
                        <i class='bx bxs-map'></i>
                        <h2>Choose a Location</h2>
                        <p> Once on the locations page, you'll typically be presented with a list of cities or specific rental branches where you can pick up your van. Select the location that is most convenient for you by clicking on it.</p>
                    </div>

                    <div class="box">
                    <i class='bx bxs-calendar-check' ></i>
                        <h2>Pick up Date</h2>
                        <p>After choosing the pickup location, you'll need to specify the date and time you wish to pick up the van. Look for a calendar or date picker tool on the website. Click on the date field to bring up the calendar and select the desired pickup date.</p>
                    </div>

                    <div class="box">
                     <i class='bx bxs-calendar-star' ></i>
                        <h2>Book a Van</h2>
                        <p>Once you're satisfied with the rental details, proceed to the booking or reservation stage. This typically involves entering your personal information, payment details, and any additional requirements specified by the website.</p>
                    </div>

                </div>
        </section>
    <!---------------------------------- Services --------------------------------->
   
        <section class="services" id="services">
            <div class="heading">
                <span>Best Services</span>
                <h1>Explore Out Top Deals<br> From Top Rated Dealers</h1>
            </div>
            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#services" class="btn" id="btn">Rent Now</a>                                                                                                 
                </div>                
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>
                        <a href="#services" class="btn" id="btn1">Rent Now</a>
                </div>  

                <div class="box">
                    <div class="box-img">
                        <img src="img/van2.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>
                        <a href="#services" class="btn" id="btn2">Rent Now</a>
                </div>  

                <div class="box">
                    <div class="box-img">
                        <img src="img/van2.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>
                        <a href="#services" class="btn" id="btn3">Rent Now</a>
                </div>  

                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>
                        <a href="#services" class="btn" id="btn4">Rent Now</a>
                </div>  

                <div class="box">
                    <div class="box-img">
                        <img src="img/van2.png" alt="">
                    </div>
                        <p>2017</p>
                        <h3>2018 Lightning ZEV3</h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>
                        <a href="#services" class="btn" id="btn5">Rent Now</a>
                </div>  
            </div>

            <!------------------------ Pop up window --------------------->
    <form action="" method="POST">
            <section id="reservation">
            <div class="pop-container">
                <div class="popup-content">
                    <div class="txt">Fill up the Form</div>
                    <img src="img/close.png" alt="close" class="close">
                        <div class="data">
                            <label>Pick-up Date/Time</label>       
                            <input type ="date">
                            <input type ="time">
                            <label>Return Date/Time </label><br>
                            <input type ="date">
                            <input type ="time">
                        </div>                  
                            <div class="select">
                            <label>Pick up Location</label>
                            <select name="location" id="location">
                            <option value="Select">Select</option>
                            <option value="Malolos">Malolos</option>
                            <option value="Balagtas">Balagtas</option>
                            <option value="Baliuag">Baliuag</option>
                            <option value="Bocaue">Bocaue</option>
                            <option value="Guiguinto">Guiguinto</option>
                            <option value="Marilao">Marilao</option>
                            <option value="Meycuayan">Meycuayan</option>
                            <option value="Calumpit">Calumpit</option>
                            <option value="Pampanga">Pampanga</option>
                            <option value="San Fernando">San Fernando</option>
                            </select>

                            <label>Return Location</label>
                            <select name="return-location" id="return-location">
                            <option value="Select">Select</option>
                            <option value="Malolos">Malolos</option>
                            <option value="Balagtas">Balagtas</option>
                            <option value="Baliuag">Baliuag</option>
                            <option value="Bocaue">Bocaue</option>
                            <option value="Guiguinto">Guiguinto</option>
                            <option value="Marilao">Marilao</option>
                            <option value="Meycuayan">Meycuayan</option>
                            <option value="Calumpit">Calumpit</option>
                            <option value="Pampanga">Pampanga</option>
                            <option value="San Fernando">San Fernando</option>
                            </select>
                            </div>
                            
                                <div class="text">
                                    <input name="fname" value="<?= get_var('fname') ?>" type ="text" placeholder ="FistName" required>
                                    <input name="lastname" value="<?=get_var('lname') ?>" type ="text" placeholder ="LastName" required>
                                    <input name="email" value="<?= get_var('email') ?>"type ="text" placeholder ="Email" required>
                                    <input name="pnum" value="<?= get_var('pnum') ?>"type ="text" placeholder ="Phone Number" required>
                                    <input name="destination" value="<?= get_var('destination') ?>"type ="text" placeholder ="Destination" required>
                                </div>
                                <div class="btn-popup">
                                    <a href="home"><button type="submit">Submit</button></a>
                                </div>
                                <script>
                                    document.getElementById("btn").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    document.getElementById("btn1").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    document.getElementById("btn2").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    document.getElementById("btn3").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    document.getElementById("btn4").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    document.getElementById("btn5").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="flex";
                                    })
                                    //<-------------------close the form------------>
                                    document.querySelector(".close").addEventListener("click", function(){
                                        document.querySelector(".pop-container").style.display ="none";
                                    })
                                </script>
                </div>
            </div>
             
        </section>
    </form>

    <!-------------------------------About----------------------------------->
        <section class="about" id="about">
            <div class="heading">
                <span>About Us</span>
                <h1>Best Customer Experience</h1>
            </div>
            <div class="about-img">
                <img src="img/van1.png" alt="">
            </div>
                <div class="about-container">
                    <div class="about-text">
                        <span>About Us</span>
                        <p>In vantoGO, we aim to be the leading Van Rental Company offering brand new van for rent in the most affordable prices in the market. 
Enjoy one of a kind car rental service including transfer services, car hire, self-driven, bridal services, long and short term leases and more. 
Each trip you can have the chance to build new and perhaps long lasting relationship. So let vantoGO join you in this journey and provide you with an experience that is in many ways….BEYOND DRIVING.</p>
                        <p>With its sound experience and through understanding of customers’ needs and expectations, vantoGO is committed to offering the best possible one-stop personal service.
We offer the ultimate value-for-money solutions to meet all your motoring needs.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
        </section>
    <!-------------------------------Reviews------------------------>
        <section class="reviews" id="reviews">
            <div class="heading">
                <span>Reviews</span>
                <h1>Whats Our Customer Says</h1>
            </div>
            <div class="reviews-container">
                <div class="box">
                    <div class="rev-img">
                        <img src="img/pic1.jpg" alt="">
                    </div>
                    <h2>Steven Acosta</h2>
                    <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    </div>
                    <p>I recently used vantGO for a weekend trip with friends, and I couldn't be happier with the experience. From start to finish, everything was seamless and convenient. The online booking process was user-friendly, allowing me to choose the perfect van for our needs without any hassle.</p>
                </div>

                <div class="box">
                    <div class="rev-img">
                        <img src="img/van1.png" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    </div>
                    <p>The van itself was in pristine condition, clean, and well-maintained, which was reassuring for our long journey. The pick-up and drop-off process were quick and efficient, saving us valuable time and ensuring we could start our trip without any delays.</p>
                </div>

                <div class="box">
                    <div class="rev-img">
                        <img src="img/van2.png" alt="">
                    </div>
                    <h2>Someone Name</h2>
                    <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    </div>
                    <p>hoosing VantoGO for my van rental was a game-changer! Their seamless booking process, coupled with a friendly and accommodating staff, made my experience truly enjoyable. The van was in excellent condition, and I appreciated the reliability it offered throughout my journey. VantoGO has definitely set the bar high for van rental services, and I'll be recommending them to all my friends and family.</p>
                </div>
            </div>
        </section>
    <!--------------------------------newsletter------------------------------>
        <section class="newsletter">
            <h2>Subscribe To VantoGO</h2>
            <div class="box">
                <input type="text" placeholder="Enter Your Email">
                <a href="#" class="btn">Subscribe</a>
            </div>
        </section>
        <div class="copyright">
            <p>&#169; Vantogo All Right Reserved</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt' ></i></a>

            </div>    
        </div>
    
    
    
        <!--- Link to JS --->
    <script src="main.js"></script>
</body>
</html>