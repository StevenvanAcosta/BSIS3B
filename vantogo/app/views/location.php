<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="loc.css">
    <!-------- Box Icons-------->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<section class="sec-info" id="sec-info">
    <div class="bg-loc">
        <div class ="transparent">
            <a href="home"><img src="img/back.png"></a>
            <h1>Check your Location</h1>
        </div>
    </div>
    <!-------------------------------left div------------------->
    <div class="container">        
        <div class="left-location">
            <div class="box">

                        <div class="box-img" id="box-img">
                            <img src="img/office.jpg" alt="">
                        </div><br>
                            <h4>VantoGO Office</h4>
                            <h4>Phone</h4>
                                <p>09304413206</p>
                            <h4>Email</h4>
                            <p>vantoGOblcn@gmail.com<span></span></p>
                            <h4>Address</h4>
                            <p>7 J. Rizal corner Villarica street,
                                 MANDALUYONG, Metro Manila, 1550, Philippines</p>                                 
                                 <a href="#sec-info"><i class='bx bx-plus-circle' id="worktime1">Working Time</i></a>
                                 
                                 <div class="additional-info" id="additional-info">
                                 <p><br>Monday: <br>
                                    00:00 - 23:59<br>
                                    Tuesday: <br>
                                    00:00 - 23:59<br>
                                    Wednesday: <br>
                                    00:00 - 23:59<br>
                                    Thursday: <br>
                                    00:00 - 23:59<br>
                                    Friday: <br>
                                    00:00 - 23:59<br>
                                    Saturday: <br>
                                    00:00 - 23:59<br>
                                    Sunday: <br>
                                    00:00 - 23:59</p>
                                    <script>
                                    document.getElementById("worktime1").addEventListener("click", function(){
                                    document.querySelector(".additional-info").style.display ="flex";
                                    })
                                    //<-------------------close the Working Time------------>
                                    document.querySelector(".additional-info").addEventListener("click", function(){
                                        document.querySelector(".additional-info").style.display ="none";
                                    })
                                    </script>
                                </div>
                                
                            <a href="#" class="btn1" id="btn1">Show Information</a>                                                                                                 
            </div>
            
            <div class="box">
                        <div class="box-img">
                            <img src="img/clark.jpg" alt="">
                        </div><br>
                            <h4>Home Delivery Clark Pampanga(Php2500)</h4>
                            <h4>Phone</h4>
                                <p>09304413206</p>
                            <h4>Email</h4>
                            <p>vantoGOblcn@gmail.com<span></span></p>
                            <h4>Address</h4>
                            <p>Clark pampanga Terminal ONLY, Philippines</p> 
                            <a href="#sec-info"><i class='bx bx-plus-circle' id="worktime2">Working Time</i></a>
                                 
                                 <div class="additional-info2" id="additional-info2">
                                 <p><br>Monday: <br>
                                    00:00 - 23:59<br>
                                    Tuesday: <br>
                                    00:00 - 23:59<br>
                                    Wednesday: <br>
                                    00:00 - 23:59<br>
                                    Thursday: <br>
                                    00:00 - 23:59<br>
                                    Friday: <br>
                                    00:00 - 23:59<br>
                                    Saturday: <br>
                                    00:00 - 23:59<br>
                                    Sunday: <br>
                                    00:00 - 23:59</p>
                                    <script>
                                    document.getElementById("worktime2").addEventListener("click", function(){
                                    document.querySelector(".additional-info2").style.display ="flex";
                                    })
                                    //<-------------------close the Working Time------------>
                                    document.querySelector(".additional-info2").addEventListener("click", function(){
                                        document.querySelector(".additional-info2").style.display ="none";
                                    })
                                    </script>
                                </div>
                            <a href="#" class="btn2" id="btn2">Show Information</a>                                                                                                 
            </div>  
            <div class="box">
                        <div class="box-img">
                            <img src="img/meycauayan.jpg" alt="">
                        </div><br>
                            <h4>Home Delivery Meycauayan Area(Php1000)</h4>
                            <h4>Phone</h4>
                                <p>09304413206</p>
                            <h4>Email</h4>
                            <p>vantoGOblcn@gmail.com<span></span></p>
                            <h4>Address</h4>
                            <p>All Meycuayan AREA, Philippines</p> 
                            <a href="#sec-info"><i class='bx bx-plus-circle' id="worktime3">Working Time</i></a>
                                 
                                 <div class="additional-info3" id="additional-info3">
                                 <p><br>Monday: <br>
                                    00:00 - 23:59<br>
                                    Tuesday: <br>
                                    00:00 - 23:59<br>
                                    Wednesday: <br>
                                    00:00 - 23:59<br>
                                    Thursday: <br>
                                    00:00 - 23:59<br>
                                    Friday: <br>
                                    00:00 - 23:59<br>
                                    Saturday: <br>
                                    00:00 - 23:59<br>
                                    Sunday: <br>
                                    00:00 - 23:59</p>
                                    <script>
                                    document.getElementById("worktime3").addEventListener("click", function(){
                                    document.querySelector(".additional-info3").style.display ="flex";
                                    })
                                    //<-------------------close the Working Time------------>
                                    document.querySelector(".additional-info3").addEventListener("click", function(){
                                        document.querySelector(".additional-info3").style.display ="none";
                                    })
                                    </script>
                                </div>
                            <a href="#" class="btn3" id="btn3">Show Information</a>                                                                                                 
            </div>
  
            
        </div>
        </section>
            <div id="map"></div>
            <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6mhVQNTzu6B-a-6cUlFJpfMjZumyDzOk&loading=async&callback=initMap">
            </script>
            <!-------------------------------------------pop up form------------------------------------------------------->
                <div class="pop-container1">
                    <div class="pop-content">
                    <img src="img/close.png" alt="close" class="close1">
                        <h1>VantoGO Office Bulacan</h1><br>
                        <h2>Phone</h2>
                        <p>09304413206</p>
                        <h2>Email</h2>
                        <a href=""><p>vantoGOblcn@gmail.com</p></a>
                        <h2>Address</h2>
                        <p>7 J. Rizal corner Villarica street,
                                 MANDALUYONG, Metro Manila, 1550, Philippines<p>
                                 <div class="btn-popup">
                                    <a href="reservation" class="btn1" id="btn1">Book Now</a>
                                </div>
                    </div>
                    <script>
                            document.getElementById("btn1").addEventListener("click", function(){
                                    document.querySelector(".pop-container1").style.display ="flex";
                                    })       
                              //<-------------------close the form------------>
                              document.querySelector(".close1").addEventListener("click", function(){
                                        document.querySelector(".pop-container1").style.display ="none";
                                    })
                    </script>
                </div>
                <!---------------------------------------2----------------------------------------->
                    <div class="pop-container2">
                        <div class="pop-content2">
                        <img src="img/close.png" alt="close" class="close2">
                                    <h1>Home Delivery Clark Pampanga(Php2500)</h1><br>
                                    <h2>Phone</h2>
                                    <p>09304413206</p>
                                    <h2>Email</h2>
                                    <a href=""><p>vantoGOblcn@gmail.com</p></a>
                                    <h2>Address</h2>
                                    <p>Clark pampanga Terminal ONLY, Philippines<p>
                                            <div class="btn-popup">
                                                <a href="reservation" class="btn2" id="btn2">Book Now</a>
                                            </div>
                        </div>
                        <script>
                            document.getElementById("btn2").addEventListener("click", function(){
                                    document.querySelector(".pop-container2").style.display ="flex";
                                    })       
                              //<-------------------close the form------------>
                              document.querySelector(".close2").addEventListener("click", function(){
                                        document.querySelector(".pop-container2").style.display ="none";
                                    })
                        </script>
                    </div>

                    <!----------------------------------3------------------------------------------->
                        <div class="pop-container3" id="pop-container3">
                            <div class="pop-content3">
                            <img src="img/close.png" alt="close" class="close3">
                                        <h1>Home Delivery Meycuayan Area(Php1000)</h1><br>
                                        <h2>Phone</h2>
                                        <p>09304413206</p>
                                        <h2>Email</h2>
                                        <a href=""><p>vantoGOblcn@gmail.com</p></a>
                                        <h2>Address</h2>
                                        <p>All Meycuayan Area Only, Philippines<p>
                                                <div class="btn-popup">
                                                    <a href="reservation" class="btn3" id="btn3">Book Now</a>
                                                </div>
                            </div>
                            <script>
                            document.getElementById("btn3").addEventListener("click", function(){
                                    document.querySelector(".pop-container3").style.display ="flex";
                                    })       
                              //<-------------------close the form------------>
                              document.querySelector(".close3").addEventListener("click", function(){
                                        document.querySelector(".pop-container3").style.display ="none";
                                    })
                        </script>
                        </div>
                      
            </div>
        
    <!--------------------js location------------------->
    <script src="app.js"></script>

</body>
</html>