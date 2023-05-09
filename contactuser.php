<?php include "userheader.php"; ?>
<div class="contact main-font-family text-center">
    <div class="container">
        <h2 id="contact">Get in touch</h2>
        <div class="row">
            <div class="col-6">
                <div class="contact-form">
                    <form method="post">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Phone" name="phone">
                        <textarea placeholder="Message" name="message"></textarea>
                        <input type="submit" value="submit" name="contactus">
                            </form>
                            <?php
                            // $id=$row['customer_id'];
                            if(isset($_POST['contactus']))
                            {
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $phone=$_POST['phone'];
                                $message=$_POST['message'];
                                updateTable("insert into contact(name,email,phone,message) 
                                values('$name','$email','$phone','$message')");
                                echo "Thankyou for contacting us!!
                                We will contact you soon!!";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <h2 class="text-right">Book Your Holiday Best for relaxed retreats and cultural encounters</h2>
                        <img src="imgs/shape.png">
                    </div>
                </div>
            </div>
            <div></div>
        </div>
        <?php include "userfooter.php"; ?>
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