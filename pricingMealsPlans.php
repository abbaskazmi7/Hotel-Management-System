<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/gallery.css">
    <title>.:|Meals plans|:.</title>
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
    <div class="container-fluid" style="background:url(assets/images/mealsPlan.jpg);
            background-size:cover;background-repeat:no-repeat;">
        <div class="row align-items-center align-sel-center justify-content-center" style="height: 80vh;
        background: rgba(0, 0, 0, 0.500);">
            <div class="col-md-12">
                <h1 class="text-center text-white">Meal plans</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/basic.png" class="card-img-top" alt="..."
                        style="width:150px;height:150px;margin:0px auto;">
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <h6 class="card-title">Rs. 1500</h6>
                        <p class="card-text">This meal plan is best referred with Basic room plan</p>
                            <ul style="list-style:none;">
                            <li><b class="fa fa-check text-success"></b> 2 chicken Sandwiches</li>
                            <li><b class="fa fa-check text-success"></b> 1 mug tea</li>
                            <li><b class="fa fa-check text-success"></b> 1 fries Medium</li>
                            <li><b class="fa fa-check text-success"></b> 1 chicken plater (small)</li>
                            <li><b class="fa fa-check text-success"></b> 1 pizza (small)</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 12 days ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/standard.png" class="card-img-top" alt="..."
                        style="width:150px;height:150px;margin:0px auto;">

                    <div class="card-body">
                        <h5 class="card-title">Standard</h5>
                        <h6 class="card-title">Rs. 2200</h6>
                        <p class="card-text">This meal plan is best referred with Standard room plan</p>
                            <ul style="list-style:none;">
                            <li><b class="fa fa-check text-success"></b> 5 chicken Sandwiches</li>
                            <li><b class="fa fa-check text-success"></b> 3 mug tea</li>
                            <li><b class="fa fa-check text-success"></b> 1 fries (medium + large)</li>
                            <li><b class="fa fa-check text-success"></b> 1 chicken platter (large)</li>
                            <li><b class="fa fa-check text-success"></b> 1 pizza (large)</li>
                        </ul>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 12 days ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/premium.png" class="card-img-top" alt="..."
                        style="width:150px;height:150px;margin:0px auto;">

                    <div class="card-body">
                        <h5 class="card-title">Premium</h5>
                        <h6 class="card-title">Rs. 4000</h6>
                        <p class="card-text">This meal plan is best referred with Premium room plan</p>
                            <ul style="list-style:none;">
                            <li><b class="fa fa-check text-success"></b> 9 chickens Sandwich</li>
                            <li><b class="fa fa-check text-success"></b> 6 mug tea</li>
                            <li><b class="fa fa-check text-success"></b> 2 fries Medium + large</li>
                            <li><b class="fa fa-check text-success"></b> 2 chicken plater large</li>
                            <li><b class="fa fa-check text-success"></b> 2 pizza large</li>

                        </ul>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 12 days ago</small>
                    </div>
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
</body>

</html>