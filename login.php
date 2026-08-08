<?php require_once __DIR__ . '/includes/header.php'; ?>


<section class="login-page">


    <div class="login-container">


        <div class="login-image">

            <div class="login-overlay"></div>

            <div class="login-image-content">

                <h1>
                    Welcome Back To
                    <span>6G Travel</span>
                </h1>

                <p>
                    Login to manage your bookings and enjoy
                    a smooth travel experience.
                </p>

            </div>

        </div>




        <div class="login-form-box">


            <div class="login-title">

                <h2>
                    Login Account
                </h2>

                <p>
                    Enter your details to continue
                </p>

            </div>




            <form action="#" method="post">


                <div class="login-input">

                    <label>
                        Email Address
                    </label>

                    <input 
                    type="email" 
                    placeholder="Enter your email"
                    required>

                </div>




                <div class="login-input">

                    <label>
                        Password
                    </label>

                    <input 
                    type="password" 
                    placeholder="Enter your password"
                    required>

                </div>




                <div class="login-options">

                    <label>

                        <input type="checkbox">

                        Remember Me

                    </label>


                    <a href="#">
                        Forgot Password?
                    </a>


                </div>




                <button type="submit" class="login-btn">

                    Login

                </button>



                <p class="register-text">

                    Don't have an account?

                    <a href="register.php">
                        Register Now
                    </a>

                </p>


            </form>


        </div>


    </div>


</section>



<?php 