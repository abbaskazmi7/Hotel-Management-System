<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/index.css">
    <title>.:|Contact us|:.</title>
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
    <div class="container-fluid" style="margin-top:150px;">
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <h6 class="primaryHeading">Contact information</h6>
                <h1 class="mainHeading">Feel free to get in touch with us <br>
                    at any time to ask a question</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><b class="fa fa-user"></b></span>
                        <input type="text" class="form-control" id="fullName" placeholder="Type your name..."
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><b class="fa fa-phone"></b></span>
                        <input type="text" class="form-control" id="contactNo" placeholder="Type your contact no..."
                            aria-label="contactNo" aria-describedby="contactNo">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><b class="fa fa-envelope"></b></span>
                        <input type="text" class="form-control" id="mail" placeholder="Type your email..."
                            aria-label="mail" aria-describedby="mail">
                    </div>
                    <textarea class="form-control" name="" id="message" cols="30" rows="10"
                        placeholder="Message..."></textarea>
                    <button class="btn btn-xl btn-color" id="submitContact"><i class="fa fa-paper-plane"
                            aria-hidden="true"></i>
                        Send</button>
                </form>
            </div>
            <div class="col-md-2">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1><b class="fa fa-envelope"></b></h1>
                        <h5>Mail us</h5>
                        <h6><?php echo $getWebInfoRow["companyEmail"]; ?></h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1><b class="fa fa-phone"></b></h1>
                        <h5>Call us</h5>
                        <h6><?php echo $getWebInfoRow["companyContactNo"]; ?></h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1><b class="fa fa-map-marker"></b></h1>
                        <h5>Visit us</h5>
                        <p><?php echo $getWebInfoRow["companyAddress"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-12 text-center">



               

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4317.713889452814!2d73.99415188794154!3d31.71211131486279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918c291c5f808af%3A0x628d55304f6a2cea!2sBatti%20Chowk%2C%20Mohalla%20Hanjran%20Wala%2C%20Shekhupura%2C%20Sheikhupura%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1635955830254!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script src="assets/lib/js/contact.js"></script>
    <script>
        $(window).load(function () {

            $("#mmm").fadeOut("slow");;
        });
    </script>
</body>

</html>