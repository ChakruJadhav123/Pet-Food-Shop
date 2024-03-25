<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ps";
     $con = mysqli_connect($server, $username, $password, $db);
     if(!$con){
        die("Connection Failed");
    } 
    $sql = "INSERT INTO `plan` (`no`, `pid`) VALUES (NULL, 'p1');";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Services</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"></i> Pet Services </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#shop">shop</a>
            <a href="#plan">plan</a>
            <a href="#services">services</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <!--<a href="#" class="fas fa-shopping-cart"></a>-->
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="login.php" class="login-form" method="post">
            <h3>sign in</h3>
            <input type="email" name="uname" placeholder="enter your email" class="box">
            <input type="password" name="pword" placeholder="enter your password" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
            </div>
            <input type="submit" value="sign in" class="btn">
            <div class="links">
                <!--<a href="#">forget password</a>-->
                <a href="signup.html">Sign Up</a>

            </div>
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3> <span class="s1">Hi,</span> Welcome to our Pet Services </h3>
            <a href="#about" class="btn">Browse Services Now</a>
        </div>

        <img src="image/bottom_wave.png" class="wave" alt="">

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="image">
            <img src="abt.jpg" class="pf" alt="">
        </div>

        <div class="content">
            <h3>Your Pet, <span>Our Responsibility</span> </h3>
            <p>We love pets, and we believe loving pets makes us better people. That’s one of the many reasons we do
                Anything for Pets
                - because they will do anything for us. Anything for Pets is our commitment to pet parents, it’s how we
                do business and
                who we are as pet lovers. As the leader in pet care, we make our decisions based on how we can bring pet
                parents closer
                to their pets.</p>
            <a href="https://www.helpguide.org/articles/mental-health/mood-boosting-power-of-dogs.htm" class="btn">read more</a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- shop section starts  -->

    <section class="shop" id="shop">

        <h1 class="heading"> our <span> products </span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_01.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Chicken Supliments</h3>
                    <div class="amount">Rs.299 - Rs.1299</div>
                    <button type="submit" class="button-5" onclick="openPopup()">Buy Now</button>
                </div>
                <div class="pup" id="p-up">
                    <h2 style="color: green;">Your Order is placed Successfully.</h2>
                    <h4>Our verder will contact you soon.</h4>
                    <button type="submit" class="button-5" onclick="closePopup()">OK</button>
                </div>
                <script>
                    let popup = document.getElementById("p-up");
                    function openPopup(params) {
                        popup.classList.add("open-popup");
                    }
                    function closePopup(params) {
                        popup.classList.remove("open-popup");
                    }</script>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_02.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Beef Supliments</h3>
                    <div class="amount"> Rs.399 - Rs.1799 </div>
                    <form action="p2.php" method="post">
                        <button class="button-5" role="button" onclick="openPopup()">Buy Now</button>
                    </form>
                </div>

            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_03.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Lamb Supliments</h3>
                    <div class="amount"> Rs.499 - Rs.1999 </div>
                    <form action="p.php" method="post">
                        <button type="submit" class="button-5" role="button">Buy Now</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_04.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Biscuits</h3>
                    <div class="amount"> Rs.499 - Rs.1499 </div>
                    <form action="p4.php" method="post">
                        <button class="button-5" role="button">Buy Now</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_05.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Salmon</h3>
                    <div class="amount"> Rs.249 - Rs.1349 </div>
                    <form action="p5.php" method="post">
                        <button class="button-5" role="button">Buy Now</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/product_06.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Air Dried Dog-Chew Bones Training Treats </h3>
                    <div class="amount"> Rs.449 - Rs.1849 </div>
                    <form action="p6.php" method="post">
                        <button class="button-5" role="button">Buy Now</button>
                    </form>
                </div>
            </div>

        </div>

    </section>

    <!-- shop section ends -->

    <!-- plan section starts  -->

    <section class="plan" id="plan">

        <h1 class="heading"> choose a <span>plan</span> </h1>

        <div class="box-container">

            <div class="box">
                <?php
                    if($con->query($sql) == true){
                        echo "<center><h2 color:green;>Plan Selected Successfully...</h2></center>";
                    }
                ?>
                <h3 class="title">pet care</h3>
                <h3 class="day"> 1 day </h3>
                <i class="fas fa-bicycle icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"><span>Rs.289/-</span></div>
                <a href="plan1.php" class="btn"> Choose Plan </a>
            </div>

            <div class="box">
                <h3 class="title">pet care</h3>
                <h3 class="day"> 10 days </h3>
                <i class="fas fa-motorcycle icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"><span>Rs.1999/-</span></div>
                <a href="plan2.php" class="btn"> Choose Plan </a>
            </div>

            <div class="box">
                

                <h3 class="title">pet care</h3>
                <h3 class="day"> 30 days </h3>
                <i class="fas fa-car-side icon"></i>
                <div class="list">
                    <p> pet room <span class="fas fa-check"></span> </p>
                    <p> pet grooming <span class="fas fa-check"></span> </p>
                    <p> pet exercise <span class="fas fa-check"></span> </p>
                    <p> pet meals <span class="fas fa-check"></span> </p>
                </div>
                <div class="amount"><span>Rs.3499/-</span></div>
                <a href="plan3.php" class="btn"> Choose Plan </a>
            </div>

        </div>

    </section>

    <!-- plan section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-dog"></i>
                <h3>Dog Boarding</h3>
                <a href="https://youtu.be/cJFgs3HaEIQ" class="btn">Know More</a>
            </div>

            <div class="box">
                <i class="fas fa-cat"></i>
                <h3>Cat Boarding</h3>
                <a href="https://youtu.be/AaoX4yokQ8w" class="btn">Know More</a>
            </div>

            <div class="box">
                <i class="fas fa-bath"></i>
                <h3>Spa & Grooming</h3>
                <a href="https://youtu.be/ZeqMLzzfo-A" class="btn">Know More</a>
            </div>

            <div class="box">
                <i class="fas fa-drumstick-bite"></i>
                <h3>Healthy Meal</h3>
                <a href="https://sherwoodvet.com.au/pet-library/the-importance-of-good-nutrition-for-your-pet"
                    class="btn">Know More</a>
            </div>

            <div class="box">
                <i class="fas fa-baseball-ball"></i>
                <h3>Activity Exercise</h3>
                <a href="https://fitzroyvet.com.au/pet-library/the-benefits-of-exercise-for-your-pet#:~:text=Exercise%20helps%20to%20lower%20blood,or%20a%20urinary%20tract%20infection."
                    class="btn">Know More</a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>Health Care</h3>
                <a href="https://www.azpetvet.com/why-preventive-health-care-for-pets-is-important/#:~:text=Regular%20pet%20preventive%20care%20helps,of%20care%20for%20your%20pet."
                    class="btn">Know More</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- contact sections starts -->

    <section class="contact" id="contact">

        <div class="image ctct">
            <img src="new-images/contact.jpg" alt="" style="border-radius: 10%;">
        </div>

        <form action="ctct.php" method="post">
            <h3>contact us</h3>
            <input type="text" name="name" placeholder="Your name" class="box">
            <input type="email" name="email" placeholder="Your email" class="box">
            <input type="tumber" name="mno" placeholder="Your number" class="box">
            <textarea name="m" placeholder="Your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Send message" class="btn">
        </form>

    </section>

    <!-- contact sections starts -->




    <section class="footer">

        <img src="image/top_wave.png" alt="">

        <div class="share">
            <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

        <div class="credit"><span>Pet Services Pvt. Ltd.</span> | All Rights Reserved! </div>

    </section>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>