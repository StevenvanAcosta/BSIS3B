<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!------- Link to CSS ------->
        <link rel="stylesheet" href="fleet.css">
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
        <li><a href="home">Home</a></li>
        <li><a href="home">Reservation</a></li>
        <li><a href="home#ride">Ride</a></li> 
        <li><a href="home#services">Services</a></li>
        <li><a href="fleet">Fleet</a></li>
                <li class="aboutdrop"><a href="home#about">About <i class='bx bx-caret-down'></i></a> 
                    <ul class="drop-down"> 
                    <li><a href="location">Locations</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                </li>
                    </ul>
        <li><a href="home#reviews">Reviews</a></li>
    </ul>
    <div class="header-btn">
        <a href="#" class="sign-up">Sign up</a>
        <a href="#" class="sign-in">Sign In</a>
    </div>
    </header>

    <!--------Fleet--------->
    <section class="cont">
    <div class="container">
        <div class="form-container">
            <div class="content">
                <br><br>
            <h1>OUR FLEET</h1>
                <p>Browse our collection of well-maintained and clean vehicles.</p>
            </div>
        </div>
    </div>

    </section>

<!----Pop up------>
<section class="pop-up" id="pop-up">
<div class="personal-container">
    <div class="box-container">
        
                    <div class="box-details"><br><br>
                        <h3>Personal Details</h3>
                        <label for="name">Name*</label>
                        <input type ="text" placeholder="Full Name" class="tt">

                        <label for="email">E-mail*</label><br>
                        <input type ="text" placeholder="E-mail" class="tt"><br>

                        <label for="phonenumber">Phone Number*</label>
                        <input type ="text" placeholder="Phone Number" class="tt">
                        <br><br>
                        <label for="notes">Notes*</label>
                        <input type ="text" class="notes">
                        <a href="#serve" class="back" id="back">Back</a>
                    </div>                                                                                              
    </div> 
    <div class="box-container">
                    <div class="box-details">
                            <h3>Address</h3>
                            
                            <label for="location">Location*</label>
                            <input type ="text" placeholder="Location" class="tt">

                            <label for="city">City*</label><br>
                            <input type ="text" placeholder="E-mail" class="tt"><br><br>

                            <h3>Date/Time</h3>
                            <label for="city">Pick up Date</label><br>
                            <input type ="date" placeholder="date" class="tt"><br>
                            <label for="city">Pick up Time</label><br>
                            <input type ="Time" placeholder="Time" class="tt"><br><br>

                            <label for="city">Return Date</label><br>
                            <input type ="date" placeholder="date" class="tt"><br>
                            <label for="city">Return Time</label><br>
                            <input type ="Time" placeholder="Time" class="tt">

                            <a href="home" class="btn" id="btn">Confirm Booking</a>
                            
                    </div>
    </div>
        
</div>
</section>















<section class="serve" id="serve">
    <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div> 
                <div class="box">
                    <br><br>
                        <h3>Group A - Lightning ZEV3</h3>
                        <p></p>
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span>                      
                            <ul class="bullet">
                                <li>- Electric Windows&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Audio System</li>
                                <li>- USB port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Drivers Airbag</li>
                                <li>- Electric Door Lock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fuel Type - Gasoline</li>
                            </ul><br>
                        <h3>Group A cars are small economy car with extremely low fuel consumption. If you want to save fuel and convinient parking, choose this group car rental.
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio/h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#pop-up" class="btn1" id="btn1">Book Now</a>                                                                                                 
                </div>
        </div><br>
        <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div> 
                <div class="box">
                    <br><br>
                        <h3>Group A - Lightning ZEV3</h3>
                        <p></p>
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span>                      
                            <ul class="bullet">
                                <li>- Electric Windows&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Audio System</li>
                                <li>- USB port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Drivers Airbag</li>
                                <li>- Electric Door Lock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fuel Type - Gasoline</li>
                            </ul><br>
                        <h3>Group A cars are small economy car with extremely low fuel consumption. If you want to save fuel and convinient parking, choose this group car rental.
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio/h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#pop-up" class="btn2" id="btn2">Book Now</a>                                                                                                 
                </div>
        </div><br>
        <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div> 
                <div class="box">
                    <br><br>
                        <h3>Group A - Lightning ZEV3</h3>
                        <p></p>
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span>                      
                            <ul class="bullet">
                                <li>- Electric Windows&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Audio System</li>
                                <li>- USB port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Drivers Airbag</li>
                                <li>- Electric Door Lock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fuel Type - Gasoline</li>
                            </ul><br>
                        <h3>Group A cars are small economy car with extremely low fuel consumption. If you want to save fuel and convinient parking, choose this group car rental.
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio/h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#pop-up" class="btn3" id="btn3">Book Now</a>                                                                                                 
                </div>
        </div><br>
        <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div> 
                <div class="box">
                    <br><br>
                        <h3>Group A - Lightning ZEV3</h3>
                        <p></p>
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span>                      
                            <ul class="bullet">
                                <li>- Electric Windows&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Audio System</li>
                                <li>- USB port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Drivers Airbag</li>
                                <li>- Electric Door Lock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fuel Type - Gasoline</li>
                            </ul><br>
                        <h3>Group A cars are small economy car with extremely low fuel consumption. If you want to save fuel and convinient parking, choose this group car rental.
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio/h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#pop-up" class="btn4" id="btn4">Book Now</a>                                                                                                 
                </div>
        </div><br>
        <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div> 
                <div class="box">
                    <br><br>
                        <h3>Group A - Lightning ZEV3</h3>
                        <p></p>
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span>                      
                            <ul class="bullet">
                                <li>- Electric Windows&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Audio System</li>
                                <li>- USB port&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Drivers Airbag</li>
                                <li>- Electric Door Lock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fuel Type - Gasoline</li>
                            </ul><br>
                        <h3>Group A cars are small economy car with extremely low fuel consumption. If you want to save fuel and convinient parking, choose this group car rental.
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio/h3>
                        <h2>₱10,000 | ₱5,000 <span>/month</span></h2>  
                        <a href="#pop-up" class="btn5" id="btn5">Book Now</a>                                                                                                 
                </div>
                
        </div><br>
        <script>
                        document.getElementById("btn1").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                        document.getElementById("btn2").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                        document.getElementById("btn3").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                        document.getElementById("btn4").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                        document.getElementById("btn5").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                         //<-------------------close the form------------>
                        document.querySelector(".back").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="none";
                        })
                        document.querySelector(".btn1").addEventListener("click", function(){
                        document.querySelector(".btn1").style.display ="none";
                        })
                        document.querySelector(".back").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="none";
                        })

                    </script> 
        </section>
          <!--- Link to JS --->
          <script src="fleet.js"></script>
</body>
</html>