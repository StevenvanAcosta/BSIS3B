<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------- Link to CSS ------->
    <link rel="stylesheet" href="reservation.css">
    <!-------- Box Icons-------->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
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

    <!-------Reservation Header--------->
    <section class="cont">
    <div class="container">
        <div class="form-container">
            <div class="content">
                <br><br>
            <h1>Rent A Van</h1>
                <p>Choose Your Van</p>
            </div>
        </div>
    </div>
    <div class="text1">
        <h2>Step 2: Browse available vehicles and choose the one that meets your needs. </h2><br><br>
    </div>

    <div class="services-container">
                <div class="filter">
                    <h3>Filter By:</h3>
                        <select name="filter-van" id="van-car">
                            <option value="Select">Select</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Mitsubishi">Mitsubishi</option>
                            <option value="Honda">Honda</option>
                            <option value="Bmw">Bmw</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Kia">Kia</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Voldo">Volvo</option>
                            <option value="Foton">Foton</option>
                        </select>                                                                                           
                </div> 
                <div class="sort">
                        <h3>Sort By:</h3>
                        <select name="sort-price" id="sort-price">
                            <option value="Default">Default</option>
                            <option value="lowtohigh">Price (Low to High)</option>
                            <option value="hightolow">Price (High to Low)</option>
                            <option value="High">Price (High)</option>
                            <option value="Low">Price (Low)</option>
                        </select>                                                                                                   
                </div>
        </div><br>

    
    <!-----left Container------->

    <div class="services-container">
                <div class="box">
                    <br><br>
                        <p></p>
                        <h3>Booking Details</h3>
                        <div class="change">
                        <a href="home"><i class='bx bxs-edit'>Change</i></a>
                        </div>
                        <p></p>
                        <h3>Time and Place</h3><br>                  
                        <h5>Pick up:</h5>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>---------------</label>
                        <h5>Return:</h5>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>---------------</label>
                        <h5>Rental Duration:</h5>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>---------------</label>                                                                                               
                </div>

<!---Middle Container--->   
                <div class="box1">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div>
                
    <!----right container-->
                <div class="box1">
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
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio</h3>
                        <a href="payment" class="btn" id="btn">Book Now</a>                                                                                                 
                </div>
                
      
    </div>
<!-----------------------------------------GroupB-------------------------------------------------------->
    <div class="services-container">
                <div class="box">
                </div>

<!---Middle Container--->   
                <div class="box1">
                    <div class="box-img">
                        <img src="img/van2.png" alt="">
                    </div>                                                                                              
                </div>
                
    <!----right container-->
                <div class="box1">
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
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio</h3>
                        <a href="payment" class="btn" id="btn">Book Now</a>                                                                                                 
                </div>
                
      
    </div>
    <!-----------------------------------------GroupB-------------------------------------------------------->
    <div class="services-container">
                <div class="box">
                </div>

<!---Middle Container--->   
                <div class="box1">
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                    </div>                                                                                              
                </div>
                
    <!----right container-->
                <div class="box1">
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
                        Our cars on this category are Mitsubishi Mirage, Toyota Wigo and Honda Brio</h3>
                        <a href="payment" class="btn" id="btn">Book Now</a>                                                                                                 
                </div>
                
      
    </div>
    <!--- Link to JS --->
    <script src="reservation.js"></script>
</body>
</html>