<!-- <?php 
// ob_start();
// session_start();
?> -->
<?php
    include "dbconn.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Five Hotel</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Noto+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light text-capitalize main-font-family">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#room">rooms</a>
                        </li>                        
                        <li class="nav-item active">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contactuser.php">contact us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="admin_login.php">Admin Login</a>
                        </li> 
                        <li class="nav-item active">
                            <a class="nav-link" href="customer_login.php">Customer Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header id="home">
            <div class="small-container">
                <form class="main-font-family text-center">
                </form>
                <div class="row">
                    <div class="col-lg-4 col-12 lobster-font-family d-flex align-items-center">
                        <h2>Being in a hotel is the best getaway you can ever get</h2>
                        <button><a href="#">About hotel</a></button>
                    </div>
                </div>
                <div class="h-slider roboto-font-family welcome d-flex align-items-center justify-content-center">
                    <h1 class="text-capitalize">Welcome to <br><span>five hotel</span></h1>
                    <div id="headerslider" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item carousel-three active"></div>
                        <div class="carousel-item carousel-two"></div>
                        <div class="carousel-item carousel-one"></div>
                      </div>
                      <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
                        <i class="fas fa-angle-double-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
                        <i class="fas fa-angle-double-right"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="st-rec"></div>
            <div class="rd-rec"></div>
        </header>
        
        <div class="about lobster-font-family">
            <div class="container">
                 <h2 class="text-center text-capitalize">About our hotel</h2>
                <img src="imgs/shape.png">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h4>A best place to enjoy your life</h4>
                        <p>The Five Hotel is a modern, elegant 5-star hotel overlooking the sea, 
                            perfect for a romantic, charming vacation, in the enchanting setting of Taormina and the Ionian Sea.
                            The rooms at the Panoramic Hotel are new, well-lit and inviting. 
                            Our reception staff will be happy to help you during your stay in Taormina, 
                            suggesting itineraries, guided visits and some good restaurants in the historic centre.
                            While you enjoy a cocktail by the swimming pool on the rooftop terrace, 
                            you will be stunned by the breathtaking view of the bay of Isola Bella. 
                            Here, during your summer stays, our bar serves traditional Sicilian dishes, 
                            snacks and salads.
                        </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="img"></div>
                    </div>
                </div> 
                 <h2 class="text-capitalize" align="center" id="room">rooms & suits</h2>
                
                <?php 
                $rooms=showTable("select * from room");
                    while($row=mysqli_fetch_array($rooms))
                    {
                        ?>
                        <h2 class="text-capitalize" id="title"><?php echo $row['title'] ?></h2>
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="img"> 
                                    <img style="height: 400px; width: 659px;
                                    " src="image/<?php echo $row['image'] ?>" height="200px" width="200px"></div>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="block">
                                    <div>
                                        <strong><?php echo "INR ".$row['price'] ?></strong>
                                        <h5><?php echo $row['description'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        
        <div class="gallery lobster-font-family" id="blog">
            <div class="container">
                <h2 class="text-calitalize text-center">Our gallery</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-one"><h4>Relaxed swimming</h4></div>
                        <div class="pic-two"><h4>Spacious Accommodtion</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-three active"><h4>Yoga Wellness</h4></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pic-four"><h4>Romantic dinner</h4></div>
                        <div class="pic-five"><h4>Apa & Wellness</h4></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact main-font-family text-center">
            <div class="container">
                <h2 id="contact">Register Yourself</h2>
                <div class="row">
                    <div class="col-6">
                        <div class="contact-form">
                            <form method="post">
                                <input type="text" placeholder="Name" name="name">
                                <input type="text" placeholder="Email" name="email">
                                <input type="text" placeholder="Phone" name="phone">
                                <input type="text" placeholder="Username" name="username">
                                <input type="text" placeholder="Password" name="password">
                                <input type="submit" value="submit" name="submit">
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                            {
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $phone=$_POST['phone'];
                                $username=$_POST['username'];
                                $password=$_POST['password'];
                                updateTable("insert into registration(name,email,phone,username,password) 
                                values('$name','$email','$phone','$username','$password')");
                                echo "Successfully registered!! You can now login and book the room";
                            }
                            mysqli_close($con);
                            ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right">Book Your Holiday Best for relaxed retreats and cultural encounters</h2>
                        <img src="imgs/shape.png">
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
        
        <footer class="noto-font-family">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <h3>Useful links</h3>
                            <ul class="text-capitalize">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <h3>Find us</h3>
                            <p>Healing Center, 176 W Street name,<br>
                                New York, NY 10014, US<br>
                                (+71) 987 654 3210<br>
                                (+71) 987 654 3210<br>
                                fivehotel@gmail.com
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 form">
                            <h3>News letter</h3>
                            <form>
                                <input type="email" placeholder="Email">
                                <input type="submit">
                            </form>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="copyright noto-font-family">
            <p>© 2023 All Rights Reserved. Design by <a href="https://html.design/">Free Html Templates</a></p>
        </div>
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                   // e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            });
        </script>
    </body>
</html>