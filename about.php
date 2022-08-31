<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/index.css">
    <title>.:|About us|:.</title>
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
    <!-- NavBar -->
    <div class="container-fluid">
        <div class="row align-items-center" style="height: 100vh;">
            <div class="col-md-6 text-center">
                <img src="assets/images/img4.jpg" alt="" style="height: 60vh;width:95%;">
            </div>
            <div class="col-md-6">
                <h5 style="color: gray;">A few words about our Royal Sheikhupura Hotel</h5>
                <h1 class="mainHeading">Experience luxury <br>
                    accommodation at its finest</h1>
                <p>
                    Our Royal Sheikhupura Hotel is one of the best luxury hotels in our state. We offer high-quality accommodation with a
                    wide variety of rooms, additional services, and amenities available to all our guests.

                </p>

                <!-- Model -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-xl btn-color" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Read more
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" style="color:rgb(11,99,84);">Experience luxury <br>
                                    accommodation at its finest</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Our Royal Sheikhupura Hotel is one of the best luxury hotels in our state. We offer high-quality
                                accommodation with a
                                wide variety of rooms, additional services, and amenities available to all our guests.
                                We have a wide range of rooms along with very nice meal plans. This is a type of hotel
                                want to visit just after visiting it once. The main page has the booking page and you must
                                check in once to try the services and get all the benefits for sure.
                                <br>
                                Our Royal Sheikhupura Hotel has a complete and very good professional staff and cooks along with proper
                                house keeping services so you get what you want. We do try to fulfill all the requirements 
                                and one huge benefit is that our hotel resides right in center of city.
                                <br><br>
                                <b>Our services include:</b>
                                <br>
                                <ul>
                                    <li>Luxury Hotel</li>
                                    <li>Clean Environment</li>
                                    <li>Luxurious Rooms</li>
                                    <li>Delicious Meals</li>
                                    <li>Outstanding Room Service</li>
                                    <li>Comfortable Amenities</li>
                                    <li>Professional Team</li>
                                    <li>Indoor Swimming Pool</li>
                                    <li>5-star Services</li>
                                    <li>Quality Food</li>
                                    <li>Fitness Zone</li>
                                    <li>Free Wi-Fi</li>
                                    <li>Free Parking lots</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Got it</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Model -->
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-image: url(assets/images/img3.jpg);
    background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
        <div class="row align-items-center" style="height: 100vh;background: rgba(0, 0, 0, 0.500);">
            <div class="col-md-12">
                <h2 class="primaryHeading">Looking for accommodation?</h2>
                <h1 class="mainHeading text-center">Royal Sheikhupura Hotel is here to provide you</h1>
                <h1 class=" mainHeading text-center">with the best possible services <br>
                    <a href="services.php" class="btn btn-xl btn-color">VIEW OUR SERVICES</a>
                </h1>
            </div>
        </div>
    </div>

    <div class="container"  id="vision">
    <div class="row align-items-center" style="height:50vh;">
            <div class="col-md-6">
                <h1 class="mainHeading">Vision</h1>
                <p class="">
                    <?php
                include_once "admin/connection.php";
                $sql = "SELECT vision FROM profiles";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {$row = mysqli_fetch_assoc($result);echo $row["vision"];}
                else{echo "No Vision found";}
                ?>
                </p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <div class="container" id="mission">
    <div class="row align-items-center" style="height:50vh;">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <h1 class="mainHeading">Mission</h1>
                <p class="">
                    <?php
                include_once "admin/connection.php";
                $sql = "SELECT mission FROM profiles";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {$row = mysqli_fetch_assoc($result);echo $row["mission"];}
                else{echo "No Mission found";}
                ?>
                </p>
            </div>
        </div>
    </div>


    <div class="container" id="objective">
    <div class="row align-items-center" style="height:50vh;">
            <div class="col-md-6">
                <h1 class="mainHeading">Objective</h1>
                <p class="">
                    <?php
                include_once "admin/connection.php";
                $sql = "SELECT objective FROM profiles";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {$row = mysqli_fetch_assoc($result);echo $row["objective"];}
                else{echo "No Objective found";}
                ?>
                </p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>



    <div class="container" id="overview">
    <div class="row align-items-center" style="height:50vh;">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <h1 class="mainHeading">Overview</h1>
                <p class="">
                    <?php
                include_once "admin/connection.php";
                $sql = "SELECT overview FROM profiles";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {$row = mysqli_fetch_assoc($result);echo $row["overview"];}
                else{echo "No overview found";}
                ?>
                </p>
            </div>
        </div>
    </div>



    <div class="container" id="corevalues">
        <div class="row align-items-center" style="height:50vh;" >
            <div class="col-md-6">
                <h1 class="mainHeading">Core values</h1>
                <p class="">
                    <?php
                include_once "admin/connection.php";
                $sql = "SELECT coreValue FROM profiles";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {$row = mysqli_fetch_assoc($result);echo $row["coreValue"];}
                else{echo "No core value found";}
                ?>
                </p>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>



    <div class="container-fluid mt-3 mb-3" id="meetOurTeam">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mainHeading">Meet our team</h1>
                <p class="theParagraph"> Our all important team consists of:
                  </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include_once "admin/connection.php";
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0)
            {
                // output data of each row
                while($row = mysqli_fetch_assoc($result))
                {
                    $file="admin\assets\images\uploads/".$row["profileImage"];
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $file; ?>" class="card-img-top" alt="..."
                        style="position:relative;width:100%;height:60vh;">
                    <div class="card-body">
                        <h2><?php echo $row["fullName"]; ?></h2>
                        <h5 class="card-title"><?php echo $row["userRole"]; ?></h5>
                        <p class="card-text"><?php echo $row["aboutUser"] ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-lg"><b class="fa fa-facebook-square"></b></a>
                        <a href="#" class="btn btn-lg"><b class="fa fa-instagram"></b></a>
                        <a href="#" class="btn btn-lg"><b class="fa fa-twitter-square"></b></a>
                        <a href="tel:<?php echo $row["contactNo"] ?>" class="btn btn-lg"><b
                                class="fa fa-phone-square"></b></a>
                        <a href="mailTo:<?php echo $row["mail"]; ?>" class="btn btn-lg"><b
                                class="fa fa-envelope"></b></a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {echo "0 results";}
?>
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


    <div class="container-fluid">
        <div class="row align-items-center" style="height: 100vh;background:rgb(11,99,84);">
            <div class="col-md-12 text-center">
                <h1 class="text-white">150+ rooms to choose from</h1>
                <h3 class="text-white">We are your #1 choice if you are looking for a comfortable place to stay.</h3>
                <a href="booking.php" class="btn btn-xl btn-light mt-3">Book now</a>

            </div>
        </div>
    </div>

    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6166b0ec72ad790a523001ce/1fhsi683i';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <?php include_once "assets/common/footer.php" ?>
    <?php include_once "assets/common/allJs.php" ?>
    <script>
        //paste this code under the head tag or in a separate js file.
        // Wait for window load
        $(window).load(function () {

            $("#mmm").fadeOut("slow");;
        });
    </script>
</body>

</html>