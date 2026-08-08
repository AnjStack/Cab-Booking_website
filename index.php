<?php require_once __DIR__ . '/includes/header.php'; ?>

<section class="hero">

    <div class="booking-card">

        <div class="booking-header">
            <div>
                <h2>Where are you going?</h2>
                <p>Enter your route to see fares</p>
            </div>

        
        </div>


        <div class="input-box">
            <span class="green-dot"></span>
            <input placeholder="Pickup location">
        </div>

        <div class="input-box">
            <span class="square"></span>
            <input placeholder="Enter destination">
        </div>

        <div class="input-box">
            ☎
            <input placeholder="Mobile number">
        </div>


        <div class="booking-type">
            <button>Booking Type</button>
            <button class="active">📅 Schedule</button>
        </div>


        <div class="date-time">
            <button>📅 Enter date</button>
            <button>◷ Enter time</button>
        </div>


        <button class="price-btn">
            See Prices
        </button>

    </div>



    <div class="hero-content">

        <h1>
            Ride Smart.<br>
            <span>Pay Less.</span>
        </h1>

        <p>
            Experience the new generation of travel. Safe, reliable, and
            always available.
        </p>
           <img src="assets/images/logo.jpeg" alt="logo" class="logo-img">

       

    </div>
    


   
</section>

<section class="experience-section">
    <div class="experience-container">

        <div class="experience-content">
            <span class="small-title">THE EXPERIENCE</span>

            <h2>See the 6G Difference</h2>

            <p>
                We are more than just a cab service. From our verified drivers
                to our in-cab safety features, we are transforming urban mobility
                across India. Your safety is our obsession.
            </p>

            <a href="#">Learn more about our technology</a>
        </div>


      <div class="travel-image">
    <img src="assets/images/car.png" alt="Travel" class="hero-car">
</div>

    </div>
</section>

<!-- testimonals -->
 <section class="testimonials">
    <div class="section-title">
        <span>TESTIMONIALS</span>
        <h2>What Riders Say</h2>
    </div>

    <div class="testimonial-container">

        <!-- Card 1 -->
        <div class="testimonial-card">
            <div class="stars">★★★★★</div>

            <p class="review">
                "Booked 6 cars for our team offsite in Coorg.
                The entire fleet arrived on time, vehicles were spotless,
                and the GST invoice was ready instantly. Will use 6G for all
                company travel going forward."
            </p>

            <div class="user">
                <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?cs=srgb&dl=pexels-danxavier-1239291.jpg&fm=jpg" alt="">
                <div>
                    <h4>Vikram Malhotra</h4>
                    <span>Senior Software Engineer, Bengaluru</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="testimonial-card">
            <div class="stars">★★★★★</div>

            <p class="review">
                "Been using 6G for my daughter's school pickup for 5 months.
                Not once have they been late. The driver calls exactly 5 minutes
                before arrival without fail. Truly reliable — rare to find."
            </p>

            <div class="user">
                <img src="https://images.pexels.com/photos/712513/pexels-photo-712513.jpeg?cs=srgb&dl=pexels-olly-712513.jpg&fm=jpg" alt="">
                <div>
                    <h4>Sunita Krishnamurthy</h4>
                    <span>School Teacher, Chennai</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="testimonial-card">
            <div class="stars">★★★★★</div>

            <p class="review">
                "I travel to 3 cities every week. 6G's scheduled booking
                is a life saver — I book my early morning airport drop the
                night before and it's always there."
            </p>

            <div class="user">
                <img src="https://tse3.mm.bing.net/th/id/OIP.i4YH9hPP_yM3nXMIQDDkQwHaLL?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="">
                <div>
                    <h4>Arjun Nair</h4>
                    <span>Sales Executive, Kochi</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- cab booking section -->
<section class="cab-section">

    <div class="section-heading">
        <span>OUR CABS</span>
        <h2>Choose Your Perfect Ride</h2>
        <p>Select from our wide range of comfortable and affordable cabs</p>
    </div>


    <div class="cab-container">

        <div class="cab-card">
            <img src="assets/images/sedan.webp" alt="Sedan Cab">

            <h3>Sedan</h3>
            <p>Comfortable ride for 4 passengers</p>

            <div class="cab-info">
                <span>₹12/km</span>
                <span>4 Seats</span>
            </div>

            <a href="#" class="book-cab-btn">Book Now</a>
        </div>



        <div class="cab-card">
            <img src="assets/images/suv.webp" alt="SUV Cab">

            <h3>SUV</h3>
            <p>Spacious ride for family trips</p>

            <div class="cab-info">
                <span>₹16/km</span>
                <span>6 Seats</span>
            </div>

            <a href="#" class="book-cab-btn">Book Now</a>
        </div>



        <div class="cab-card">
            <img src="assets/images/luxury.webp" alt="Luxury Cab">

            <h3>Luxury</h3>
            <p>Premium comfort with stylish cars</p>

            <div class="cab-info">
                <span>₹25/km</span>
                <span>4 Seats</span>
            </div>

            <a href="#" class="book-cab-btn">Book Now</a>
        </div>



        <div class="cab-card">
            <img src="assets/images/minicab.webp" alt="Mini Cab">

            <h3>Mini Cab</h3>
            <p>Affordable ride for daily travel</p>

            <div class="cab-info">
                <span>₹10/km</span>
                <span>4 Seats</span>
            </div>

            <a href="#" class="book-cab-btn">Book Now</a>
        </div>


    </div>

</section>

<!-- book section -->
<section class="fare-section">
    <div class="container">
        <h2 class="section-title">Taxi Fare Sheet</h2>

        <div class="fare-grid">

            <!-- 8Hrs / 80Kms -->
            <div class="fare-card">
                <div class="card-head">8Hrs/80Kms</div>

                <table>
                    <thead>
                        <tr>
                            <th>Car Name</th>
                            <th>Car Fare</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Maruti Swift Dzire</td><td>₹1905</td></tr>
                        <tr><td>Innova</td><td>₹3000</td></tr>
                        <tr><td>Toyota Crysta</td><td>₹3200</td></tr>
                        <tr><td>Scorpio</td><td>₹2900</td></tr>
                        <tr><td>Maruti Ertiga</td><td>₹2700</td></tr>
                    </tbody>
                </table>
            </div>

            

            <!-- Outstation -->
            <div class="fare-card">
                <div class="card-head">Outstation</div>

                <table>
                    <thead>
                        <tr>
                            <th>Car Name</th>
                            <th>Car Fare</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Maruti Swift Dzire</td><td>₹13/Km</td></tr>
                        <tr><td>Toyota Innova</td><td>₹17/Km</td></tr>
                        <tr><td>Toyota Crysta</td><td>₹19/Km</td></tr>
                        <tr><td>Scorpio</td><td>₹16/Km</td></tr>
                        <tr><td>Tempo Traveller (12 Seater)</td><td>₹28/Km</td></tr>
                        <tr><td>Tempo Traveller (16 Seater)</td><td>₹30/Km</td></tr>
                        <tr><td>Maruti Ertiga</td><td>₹16/Km</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Outstation Oneway -->
            <div class="fare-card">
                <div class="card-head">Outstation Oneway</div>

                <table>
                    <thead>
                        <tr>
                            <th>Car Name</th>
                            <th>Car Fare</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Indigo CS</td><td>₹11.5/Km</td></tr>
                        <tr><td>Maruti Swift Dzire</td><td>₹12/Km</td></tr>
                        <tr><td>Innova</td><td>₹17/Km</td></tr>
                        <tr><td>Toyota Crysta</td><td>₹18/Km</td></tr>
                        <tr><td>Scorpio</td><td>₹16/Km</td></tr>
                        <tr><td>Tempo Traveller (12 Seater)</td><td>₹19.5/Km</td></tr>
                        <tr><td>Tempo Traveller (16 Seater)</td><td>₹20/Km</td></tr>
                        <tr><td>Tempo Traveller (20 Seater)</td><td>₹24/Km</td></tr>
                        <tr><td>Tempo Traveller (26 Seater)</td><td>₹30/Km</td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <a href="/Travel/book-cab.php" class="book-now">Book Now</a>
</section>



<?php require_once __DIR__ . '/includes/footer.php'; ?>
