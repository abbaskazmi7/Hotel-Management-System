<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/index.css">
    <title>.:|Home|:.</title>
</head>

<body>
    <!-- Loading Effect -->
    <div id="mmm">
        <span class="l"><span class="l-i"></span></span>
        <h1 class="text-white">Please wait</h1>
        <h6 class="text-white">You browser is setting up to start.</h6>
    </div>
    <!-- Loading Effect -->

    <!-- NavBar -->
    <?php include_once "assets/common/navBar.php"; ?>
    <?php include_once "assets/common/booking.php"; ?>
    <!-- NavBar -->

    <!-- Image slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/img3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block animate__animated animate__backInUp">
                    <h1>Premium Room</h1>
                    <p>Offers King sized bedding and a peaceful outdoor area for guests.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/img1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block animate__animated animate__backInUp">
                    <h1>Business Room</h1>
                    <p>Offers Queen sized bedding with a peaceful outdoor area for guests.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/img2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block animate__animated animate__backInUp">
                    <h1>Standard Room</h1>
                    <p>Offers Double sized bedding with a peaceful outdoor area for guests.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Image slider -->

    <div class="container-fluid mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="assets/images/img4.jpg" alt="" style="height: 60vh;width:95%;">
            </div>
            <div class="col-md-6">
                <h5 class="primaryHeading">A few words about us</h5>
                <h1 class="mainHeading">Experience luxury <br>
                    accommodation at its finest</h1>
                <p class="theParagraph">
                    Our Royal Sheikhupura Hotel is one of the best luxury hotels in our state. We offer high-quality accommodation with a
                    wide variety of rooms, additional services, and amenities available to all our guests.

                </p>
                <a href="blog.php" class="btn btn-xl btn-color">Read more</a>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row align-items-center" style="height: 50vh;">
            <div class="col-md-12">
                <h4 class="primaryHeading">Quality Amenities</h4>
                <h1 class="mainHeading">At our Royal Sheikhupura Hotel, we provide our guests with access to
                    the best amenities possible..</h1>
                <p class="theParagraph">
                    You can always feel comfortable in your room, having the right surroundings to relax and reload as
                    it is very important while staying at Hotel. We offer a wide variety of hotel facilities
                    including what you require.

                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services & Amenities include:</h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Best hospitality.svg" alt="">
                <h3 class="hotelFeatureTitle">Best hospitality</h3>
                <p class="hotelFeatureAbout">Top-notch level of hospitality for every guest of our hotel.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Quality food.svg" alt="">
                <h3 class="hotelFeatureTitle">Quality food</h3>
                <p class="hotelFeatureAbout">The best dishes and appetizers from our chef.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Fitness zone.svg" alt="">
                <h3 class="hotelFeatureTitle">Fitness zone</h3>
                <p class="hotelFeatureAbout">A modern gym facility is available to all our valuable guests.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Swimming pool.svg" alt="">
                <h3 class="hotelFeatureTitle">Swimming pool</h3>
                <p class="hotelFeatureAbout">Enjoy your swim in our indoor swimming pool at any time.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Room service.svg" alt="">
                <h3 class="hotelFeatureTitle">Room service</h3>
                <p class="hotelFeatureAbout">Convenient dining option for serving breakfasts.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Free Wi-Fi.svg" alt="">
                <h3 class="hotelFeatureTitle">Free Wi-Fi</h3>
                <p class="hotelFeatureAbout">Our free Wi-Fi is available 24/7 throughout the hotel.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Early check-in.svg" alt="">
                <h3 class="hotelFeatureTitle">Early check-in</h3>
                <p class="hotelFeatureAbout">Get your room earlier than the standard check in time.</p>
            </div>
            <div class="col-md-3 text-center">
                <img class="hotelFeatureImage" src="assets/images/Free parking lots.svg" alt="">
                <h3 class="hotelFeatureTitle">Free parking lots</h3>
                <p class="hotelFeatureAbout">We provide spacious parking lot with a valet service.</p>
            </div>
        </div>
        
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mainHeading">
                    Take a look at our rooms <br> and facilities
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/room1.jpg" alt="" class="ourRooms">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/room2.jpg" alt="" class="ourRooms">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <img src="assets/images/room3.jpg" alt="" class="ourRooms">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/room4.jpg" alt="" class="ourRooms">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 " id="room">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="mainHeading">Get a comfortable room & feel the comfort</h2>
                <p class="theParagraph">
                    At our Royal Sheikhupura Hotel, there is a variety of rooms to choose from. Whether you are a casual traveler or a
                    person demanding luxury or a standard room, you won’t be disappointed after trying our services.
                </p>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <!-- Swiper -->
            <div class="swiper mySwiper mt-3">
                <div class="swiper-wrapper">

                    <?php
                $getRoomSql = "SELECT * FROM room";
                $getRoomResult = mysqli_query($conn, $getRoomSql);
                if (mysqli_num_rows($getRoomResult) > 0) {
                    // output data of each row
                    while($getRoomRow = mysqli_fetch_assoc($getRoomResult))
                    {
                    $file="admin/assets/images/uploads/".$getRoomRow["roomImage"];
                    ?>
                    <div class="swiper-slide shadow rounded bg-light">
                        <img src="<?php echo $file;?>" alt="">
                        <h3 class="text-center"><?php echo $getRoomRow["roomType"]; ?></h3>
                        <h6 class="text-center"><span
                                class="badge bg-primary"><?php echo $getRoomRow["roomSubType"]; ?></span></h6>
                        <p><?php echo $getRoomRow["roomAbout"]; ?></p>
                    </div>
                    <?php
                    }
                } else
                {
                echo "No rooms added";
                }
                ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="booking.php" class="btn btn-xl btn-color mt-2 mb-2" href="">Book Now</a>
            </div>
        </div>
    </div>

    <style>
    .testimonialImage {
      width: 95%;
      height: 50vh;
      border-radius: 30px;
      box-shadow: 5px 5px 10px 1px gray;
    }
  </style>
    <section id="testimonial">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row align-items-center align-self-center justify-content-center" style="height:100vh;">
          <div class="col-md-6 text-center animate__animated animate__fadeInLeftBig">
            <p><b class="fa fa-quote-left"></b>
             I loved how friendly the staff is, that was very nice. Clean is an understatement. I just loved all the services. Thanks!
              <b class="fa fa-quote-right"></b></p>
            <div class="row">
              <div class="col-md-2 text-end">
                <img src="assets/images/Brandon Russell.jpg" alt="" style="width: 80px;height: 80px;border-radius:50%">
              </div>
              <div class="col-md-10 text-start">
                <b>Mohammad Wasim</b><br>
                <b>7-10-2021</b>
              </div>
            </div>
          </div>
          <div class="col-md-6 animate__animated animate__fadeInRightBig">
            <img class="testimonialImage" src="assets/images/gallery2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row align-items-center align-self-center justify-content-center" style="height:100vh">
          <div class="col-md-6 text-center animate__animated animate__fadeInLeftBig">
            
            <p><b class="fa fa-quote-left"></b>
               Great Location. Amazing room services and a lovely food taste with a very friendly staff. Would love to check in soon again
              <b class="fa fa-quote-right"></b></p>
            <div class="row">
              <div class="col-md-2">
                <img src="assets/images/Julie Jones.jpg" alt="" style="width: 80px;height: 80px;border-radius:50%">
              </div>
              <div class="col-md-10 text-start">
                <b>Mrs Ali</b><br>
                <b>18-10-2021</b>
              </div>
            </div>
          </div>
          <div class="col-md-6 animate__animated animate__fadeInRightBig">
            <img src="assets/images/gallery3.jpg" alt="" class="testimonialImage">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row align-items-center align-self-center justify-content-center" style="height:100vh">
          <div class="col-md-6 text-center animate__animated animate__fadeInLeftBig">
            
            <p><b class="fa fa-quote-left"></b>
              Very comfortable and easy access to the hotel as it locates in center of city. Perfectly awesome weather when we arrive. Thank you Royal Skp!!
              <b class="fa fa-quote-right"></b></p>
            <div class="row">
              <div class="col-md-2">
                <img src="assets/images/Savannah Black.jpg" alt="" style="width: 80px;height: 80px;border-radius:50%">
              </div>
              <div class="col-md-10 text-start">
                <b>Kainat</b><br>
                <b>28-10-2021</b>
              </div>
            </div>
          </div>
          <div class="col-md-6 animate__animated animate__fadeInRightBig">
            <img src="assets/images/food1.jpg" alt="" class="testimonialImage"> 
          </div>
  </section>

  <section id="comment">
      <style>
          .my {
              color: #0B6354 !important;
          }
          .my::placeholder {
              color: #0B6354 !important;
          }
          .myb {
              background: #0B6354 !important;
              color: white !important;
          }
      </style>
        <div class="container">
            <div class="row align-items-center align-self-center justify-content-center">
                <div class="col-md-10">
                    <h3 class="text-primary">Comments:</h3>
                    <form method="POST" id="comment_form">
                        <textarea name="comment_content" id="comment_content" class="form-control" rows="5"
                            placeholder="Type comment"></textarea>
                        <input type="text" name="comment_name" id="comment_name" class="form-control my"
                            placeholder="Type name..." />
                        <input type="email" name="comment_mail" id="comment_mail" class="form-control my"
                            placeholder="Type mail..." />
                        <div class="d-grid gap-2">
                            <input type="hidden" name="comment_id" id="comment_id" value="0" />
                            <input type="submit" name="submit" id="submit" class="btn btn-success mt-3 mb-3 myb"
                                value="Comment" />
                        </div>
                    </form>
                    <span id="comment_message"></span>
                </div>
            </div>
            <div class="row align-items-center align-self-center justify-content-center">
                <div class="col-md-6">
                    <div id="display_comment"></div>
                </div>
            </div>
        </div>
    </section>


    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/617bcd00f7c0440a59208fef/1fj5phlbv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    
    <?php include_once "assets/common/footer.php" ?>
    <?php include_once "assets/common/allJs.php" ?>
    <script src="assets/lib/js/commenting.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },

        });
        $(window).load(function () {

            $("#mmm").fadeOut("slow");;
        });
    </script>


</body>

</html>