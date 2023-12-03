<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel = "icon" href = "logo.png" type = "image/png">
    <title>HOME PAGE</title>
</head>
<body>
</html>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "site-name">
                    <h1>HOTEL LUCK</h1>
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>NICE AND COMFORTABLE PLACE TO STAY</h2>
                <p>Excellent service, Clean rooms & Linen, Good food, Friendly staff. Probably one of the best places to stay. Another good thing is that the hotel is little away from the crowded city.The hotel room was clean, nice and spacious. Breakfast offered with a wide variety of food. The staff were friendly and helpful. The location is just perfect for a walk around the city centre.</p>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>
            <ul class = "navbar">
                <img src="logo.png" alt="">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "booked_rooms.php">Booked Rooms</a></li>
                <li><a href = "customer.html">customers</a></li>
                <li><a href = "homedummy.html">LOG OUT</a></li>
            </ul>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h1>services</h1>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Foodservice is all about food and beverages that are consumed out of the home. Consumers visit foodservice outlets for a number of reasons, such as the added convenience, to sample new tastes and flavours, to celebrate and to socialise. Foodservice covers a wide range of eating occasions and outlets: Hotel.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Refreshment</h2>
                        <p>Most hoteliers are aware of this in a general sense, but it is the execution where we often stumble. The expected welcome refreshment is a bottle of wine, a small cheese tray, a fruit place, crackers, cookies or any combination of the five. Nowadays, though, you must look beyond the perfunctory and truly own this aspect of the guest experience if you are to make a lasting impression.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>Housekeeping includes housecleaning, that is, disposing of rubbish, cleaning dirty surfaces, dusting, and vacuuming. It may also involve some outdoor chores, such as removing leaves from rain gutters, washing windows, and sweeping doormats.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Room Security</h2>
                        <p>Hotel security services work to lower incidents of hotel property damage by patrolling the premises and stopping these crimes before they escalate. Professional security officers can also monitor security cameras to help catch perpetrators in the act.</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h1>rooms</h1>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "1.jfif" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h2>Room for Singles🚶🏻‍♂️</h2>
                        <ul>
                            <h3>Facilities</h3>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Mini Fridge
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Air Conditioner
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                High Quality Bar
                            </li>
                            <li>
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                TV-40inches
                            </li>
                        </ul>
                        <p>A Perfect place to stay in without any disturbance.Rooms service available for 24/7 for your need.Unless it's your call we won't disturb your privacy.For Our lovely Singles to spend your time perfectly.We are always there for you whenever you need</p>
                        <p class = "rate">
                            <span>₹1,500-2,000 /</span> Per Night
                        </p>
                        <button onclick="Single()" class = "btn">Rooms</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>For Couples🍑</h3>
                        <ul>
                            <h3>Facilities</h3>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Mini Fridge
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Air Conditioner
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Twin-sized perfect bed for two peoples
                            </li>
                            <li>
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                TV-40inches
                            </li>
                        </ul>
                        <p>Two twin-sized loft bunkbeds overhead, for a total of four beds. Luxurious bedding with triple sheeting and 300 thread count linens. High Speed Wireless Internet. 32” 1080p flat screen televisions.  Microwave + mini fridge.  Gear rack for storing/drying your gear. Walk in shower. Rooms are located on second or third floors with a walk-out balcony.  Pets are not permitted in these rooms. Original art by Wendy MacNaughton.</p>
                        
                        <p class = "rate">
                            <span>₹2,000 /</span> Per Night
                        </p>
                        <button onclick="Couples()" class = "btn">Rooms</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "4.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>For Family</h3>
                        <ul>
                            <h3>Facilities</h3>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Mini Fridge
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Air Conditioner
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Twin-sized perfect bed for two peoples
                            </li>
                            <li>
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                TV-40inches
                            </li>
                        </ul>
                        <p>Two twin-sized loft bunkbeds overhead, for a total of four beds. Luxurious bedding with triple sheeting and 300 thread count linens. High Speed Wireless Internet. 32” 1080p flat screen televisions.  Microwave + mini fridge.  Gear rack for storing/drying your gear. Walk in shower. Rooms are located on second or third floors with a walk-out balcony.  Pets are not permitted in these rooms. Original art by Wendy MacNaughton.</p>
                        <p class = "rate">
                            <span>₹2,900 /</span> Per Night
                        </p>
                        <button onclick="Family()" class = "btn">Rooms</button>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>
        <!-- end of body content -->
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p>Copyright 1999-2022 by Refsnes Data. All Rights Reserved.
                    Our reservation system was tend to provide the full comfort for our customers</p>
                    
                        <a href="about.html">Know More</a>
                </div>
                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            Dubai Kuruku Santhu,India
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +1234567
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            hotelluck123@yahoo.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script src="script.js"></script>
    </body>
</html>