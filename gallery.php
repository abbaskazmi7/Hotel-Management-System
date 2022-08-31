<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/gallery.css">
    <title>.:|Gallery|:.</title>
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mainHeading">
                    Take a look at our rooms <br> and facilities
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/gallery1.jpg" alt="" class="ourRooms">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/gallery2.jpg" alt="" class="ourRooms">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <img src="assets/images/gallery3.jpg" alt="" class="ourRooms">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/gallery4.jpg" alt="" class="ourRooms">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <img src="assets/images/gallery5.jpg" alt="" class="ourRooms">
                </div>
                <div class="col-md-6">
                    <img src="assets/images/gallery6.jpg" alt="" class="ourRooms">
                </div>
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
        $(window).load(function () {

            $("#mmm").fadeOut("slow");;
        });
    </script>
    <script>
    </script>
</body>

</html>