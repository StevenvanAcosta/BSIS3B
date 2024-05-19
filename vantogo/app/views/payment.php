<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!------- Link to CSS ------->
      <link rel="stylesheet" href="payment.css">
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
    
    <!-------Reservation Header--------->
    
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
        <h2>STEP 3: Check Your Reservation Form</h2><br><br>
    </div>
    <section class="cont" id="cont">
    <div class="services-container">
                <div class="box">
                        <p></p>
                        <h3>Booking Details</h3>
                        <div class="change">
                        <a href="home"><i class='bx bxs-edit'>Change</i></a>
                        </div>
                        <p></p>
                        <h3>Time and Place</h3><br>                  
                        <h5>Pick up:</h5>
                        <h6>------</h6>
                        <h5>Return:</h5>
                        <h6>------</h6>
                        <h5>Rental Duration:</h5>
                        <h6>------</h6><br><br>
                    
 <!---Van Container--->   
                <div class="box1">
                <div class="change2">
                        <a href="reservation"><i class='bx bxs-edit'>Change</i></a>
                        </div>
                    <div class="box-img">
                        <img src="img/van1.png" alt="">
                        
                        <h3>Lightning ZEV3</h3>
                        <p></p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        <i class='bx bxs-user'></i><span>14&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-door-open'></i><span>4&nbsp;&nbsp;&nbsp;</span>
                        <i class='bx bxs-cog' ></i><span>A</span> 
                    </div>                                                                                              
                </div>
         </div>
<!----right container-->
                <div class="box1">
                        <br><br>
                        <h3>Payment Summary</h3>
                        <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                        <h5>Rental Duration: </h5>
                        <h6>------------</h6>
                        <p></p>
                        <h5>Price per Day:</h5>
                        <h6>------------</h6>
                        <p></p>
                        <h5>Car Rental Fee:</h5>
                        <h6>------------</h6>
                        <p></p>
                        <h5>Sub Total:</h5>
                        <h6>------------</h6>
                        <p></p>
                        <h5>Total Price:</h5>
                        <h6>------------</h6>
                        <p></p>
                        <h5>Required Deposit</h5>
                        <h6>------------</h6><br><br>
                        <a href="#personal" class="btnc" id="btnc">Continue</a>
                                                                                                                    
                </div>
    </div>
</section>
<!----------Personal Details----------->
<form action="payment" method="post">
<div class="personal-container">
                <div class="box-container">
                    <div class="box-details"><br><br>
                        <h3>Personal Details</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label for="name">Name*</label>
                        <input type ="text" placeholder="Full Name" class="tt">

                        <label for="email">E-mail*</label><br>
                        <input type ="text" placeholder="E-mail" class="tt"><br>

                        <label for="phonenumber">Phone Number*</label>
                        <input type ="text" placeholder="Phone Number" class="tt">
                        <br><br>
                        <label for="notes">Notes*</label>
                        <input type ="text" class="notes">
                        <a href="#cont" class="back" id="back">Back</a>
                    </div>                                                                                              
                </div> 

            <div class="box-container">
                    <div class="box-details">
                    <section class="personal" id="personal">
                            <h3>Address</Address></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            <label for="location">Location*</label>
                            <input type ="text" placeholder="Full Name" class="tt">

                            <label for="city">City*</label><br>
                            <input type ="text" placeholder="E-mail" class="tt"><br><br>

                            <h3>Payment Method</h3>
                            <select class="select-option">
                                <option value="Select">--Select Payment Method--</option>
                                <option value="paypal">Paypal</option>
                                <option value="ebank">Credit Card/Paypal/Gcash/Bank transfer/Banknet</option>
                                <option value="Gcash">Gcash</option>
                            </select>
                            <a href="home" class="btn" id="btn">Confirm Booking</a>
                            
                    </div>
                    <script>
                        document.getElementById("btnc").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="flex";
                        })
                        document.getElementById("back").addEventListener("click", function(){
                        document.querySelector(".btnc").style.display ="flex";
                        })
                        //<-------------------close the form------------>
                        document.querySelector(".btnc").addEventListener("click", function(){
                        document.querySelector(".btnc").style.display ="none";
                        })
                        document.querySelector(".back").addEventListener("click", function(){
                        document.querySelector(".personal-container").style.display ="none";
                        })
                    </script>                                                                                              
                </div>
</div><br>
                    </section>
                    </form>
    <!--- Link to JS --->
    <script src="payment.js"></script>
</body>
</html>