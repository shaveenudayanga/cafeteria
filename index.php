<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="Frontend/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="Frontend/style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    </style>

    <title>Coffee Shop Website</title>

    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
</head>
<body id="body" class="vh-100 overflow">

    <?php
    include '/home/shaveen/cafeteria/Frontend/Header.php'; 
    ?>
    
    <!--Hero section-->
    <div class="intro">
        <div class="bg" id="hero">
            <div class="container">
                <div class="text-light d-flex flex-column h-100 justify-content-center">
                    <h4 style="text-align: center; padding:30px; font-size:55px;font-family:'Outfit';weight: 900px;">Your Daily Cup of Comfort Awaits</h4>
                    <p style="text-align: center; font-size:20px; color:azure;">ᴄᴏꜰꜰᴇᴇ ꜰɪʀꜱᴛ. ᴇᴠᴇʀʏᴛʜɪɴɢ ᴇʟꜱᴇ ʟᴀᴛᴇʀ.</p>
                </div>
            </div>
        </div>
    </div>



    <!--About section-->
    <div class="container">
        <!-- <div class="about">
            <h3 style="color: rgb(233, 148, 20);">| ABOUT US |</h3>
        </div> -->
    </div>
    <br />
    <br />
    <div class="container">
        <div class="aboutus">
            <aside class="feature-item">
                

                <h4 style="color: rgb(104, 77, 42);">OUR STORY</h4>
                <p style="color:  lightgray;">Born from a passion for rich flavors and genuine moments, our coffee shop started as a small dream between friends. With every brew, we aim to share the simple joy of great coffee, cozy conversations, and a community that feels like home.

                </p>
            </aside>


            <section class="feature-item">
               

                <h4 style="color:  rgb(104, 77, 42);">OUR VISION</h4>
                <p style="color: lightgrey;">To create a warm, welcoming space where every cup of coffee inspires connection, comfort, and creativity.</p>

            </section>

           
        </div>
    </div>
    <br />
    <br />

    <!--Services Section-->
    <div class="container">
        <div class="services">
            <h3 style=" color: rgb(233, 148, 20);"> OUR SERVICES </h3>
        </div>


    </div>

    <br />
    <br />
    <div class="container">
        <div class="row gy-3">
            <div class="col-4">
                <div class="card">
                    <img class="brewedcoffee" src="../Frontend/images/backgroundcoffee.jpg" alt="brewed coffee" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">✨ Freshly Brewed Coffee</h5>
                        <p class="card-text">We take pride in serving only the finest, ethically sourced coffee beans, brewed to perfection for that rich, satisfying cup — every single time.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="signaturecreations" src="../Frontend/images/signature creations.jpg" alt="signaturecreations" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">☕ Signature Coffee Creations</h5>
                        <p class="card-text">Our baristas craft unique coffee blends and specialty drinks that you won’t find anywhere else — from velvety mochas to bold cold brews, each cup is a homemade masterpiece designed to comfort and energize.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="atmosphere" src="../Frontend/images/atmosphere.jpg" alt="atmosphere" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">🛋️ Cozy & Inviting Atmosphere</h5>
                        <p class="card-text">Our warm interiors and friendly staff create the perfect place to unwind, work, or catch up with friends over your favorite treats.</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!--Offer section-->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-button">
        <div class="offer">
            <h1 class="display-3 text-primary mt-3" style="color: #f7ad47;">50% OFF</h1>
            <h1 class="text-white mb-3">Sunday Special Offer</h1>
            <h4>Only For Sunday From 1st June To 31st June 2025</h4>
            <form action="" class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your Email" style="height: 60px;" name="" id="">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" style="height: 60px; color: #f7ad47;" >Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--Menu Section-->
    <div class="container">
        <div class="menu">
            <h3 style=" color: rgb(233, 148, 20);"> MENU </h3>
           
        </div>


    </div>

    <br />
    <br />
    <div class="menuu">
    <div class="menu-section">
        <h2>Hot Coffee</h2>
        <div class="coffee-item">
            <img src="../Frontend/images/hotblackcoffee.jpeg" alt="Black Coffee">
            <div class="coffee-info">
                <h3>Black Coffee</h3>
                <p>Freshly brewed coffee with no milk or sugar.</p>
            </div>
            <span class="price">$4</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/hotchococofee.jpg" alt="Choco Coffee">
            <div class="coffee-info">
                <h3>Chocolate Coffee</h3>
                <p>Coffee mixed with rich chocolate syrup.</p>
            </div>
            <span class="price">$6</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/hotcoffeewithmilk.jpg" alt="Milk Coffee">
            <div class="coffee-info">
                <h3>Coffee With Milk</h3>
                <p>Hot coffee blended with fresh milk.</p>
            </div>
            <span class="price">$5</span>
        </div>
    </div>

    <div class="menu-section">
        <h2>Cold Coffee</h2>
        <div class="coffee-item">
            <img src="../Frontend/images/coldblackcoffee.jpg" alt="Black Coffee">
            <div class="coffee-info">
                <h3>Black Coffee</h3>
                <p>Chilled brewed coffee without milk or sugar.</p>
            </div>
            <span class="price">$5</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/coldchococoffee.jpg" alt="Choco Coffee">
            <div class="coffee-info">
                <h3>Chocolate Coffee</h3>
                <p>Cold coffee mixed with chocolate syrup and ice.</p>
            </div>
            <span class="price">$7</span>
        </div>

        <div class="coffee-item">
            <img src="../Frontend/images/coldcoffeewithmilk.jpg" alt="Milk Coffee">
            <div class="coffee-info">
                <h3>Coffee With Milk</h3>
                <p>Iced coffee blended with cold milk.</p>
            </div>
            <span class="price">$6</span>
        </div>
    </div>
</div>

        <!--testimonial Section-->


    <section class="testimonial-section">
        
        <h2>Our Clients Say</h2>

        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="images/client1.jpg" alt="Client 1">
                <h3>Olivia Smith</h3>
                <p class="profession">Marketing Specialist</p>
                <p class="testimonial-text">
                    The coffee here is simply amazing! It’s rich, bold, and gives me the perfect start to my busy mornings.
                </p>
            </div>

            <div class="testimonial-card">
                <img src="images/client2.jpg" alt="Client 2">
                <h3>Liam Brown</h3>
                <p class="profession">Graphic Designer</p>
                <p class="testimonial-text">
                    I love the cozy vibe of this café! Their coffee is smooth and the atmosphere makes it a great place to relax and work.
                </p>
            </div>

            <div class="testimonial-card">
                <img src="images/client3.jpg" alt="Client 3">
                <h3>Emma Johnson</h3>
                <p class="profession">Software Engineer</p>
                <p class="testimonial-text">
                    This café has the best coffee in town! Great flavors, friendly staff, and the perfect spot for a quick break or long coding sessions.
                </p>
            </div>
        </div>

        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <?php include '/home/shaveen/cafeteria/Frontend/footer.php'; ?>

</body>
</html>
