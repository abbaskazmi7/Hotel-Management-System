<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php" ?>
    <?php include_once "assets/common/allCss.php" ?>
    <link rel="stylesheet" href="assets/lib/css/blog.css">
    <title>.:|Blog|:.</title>
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

    <div class="container-fluid mb-3" style="margin-top:150px;">
        <div class="row">
            <div class="co-md-12">
                <h1 class="mainHeading text-center">My Blogs</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            include_once "admin/connection.php";
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $file="admin/assets/images/uploads/".$row["postImage"];
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $file; ?>" class="card-img-top" alt="..." style="height:50vh;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["postName"];?></h5>
                    </div>
                    <div class="card-footer">
                        <b>Category:</b><small class="text-muted"><?php echo $row["postCategory"]; ?></small>
                        <small class="text-muted float-end"><?php echo $row["date"]; ?></small>
                        <br>
                        <a href="blogSinglePost.php?id=<?php echo $row["id"];?>" class="btn btn-sm btn-success mt-3 mb-3">Read more</a>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
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