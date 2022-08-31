<?php
$id=$_GET["id"];
include_once "admin/connection.php";
$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $postImage="admin/assets/images/uploads/".$row["postImage"];
  
} else {
  echo "0 results";
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php include_once "assets/common/allMeta.php"; ?>
    <?php include_once "assets/common/allCSS.php"; ?>
    <link rel="stylesheet" href="assets/lib/css/myIndex.css">
    <title>.:|<?php echo $row["postName"];?>|:.</title>
</head>

<body>
    <?php include_once "assets/common/navbar.php" ?>
    <div class="container-fluid">
        <div class="row align-items-center align-self-center justify-content-center" style="height:100vh;
        background: url(<?php echo $postImage; ?>);background-position: center;background-repeat: no-repeat;background-size: cover;
        background-attachment: fixed;">
            <div class="col-md-12 p-5" style="background: rgba(0, 0, 0, 0.802);width:50%;">
                <h1 class="text-center text-white"><?php echo $row["postName"]; ?></h1>
                <h4 class="text-center text-white"><?php echo $row["postCategory"]; ?></h4>
            </div>
        </div>
        <div class="row align-items-center align-self-center justify-content-center">
            <div class="col-md-12 text-white">
                <?php
                echo $row["postText"];
                ?>
            </div>
        </div>
    </div>

    <section id="comment">
        <div class="container">
            <div class="row align-items-center align-self-center justify-content-center">
                <div class="col-md-10">
                    <h3 class="text-primary">Comments:</h3>
                    <form method="POST" id="comment_form">
                        <textarea name="comment_content" id="comment_content" class="form-control" rows="5"
                            placeholder="Type comment"></textarea>
                        <input type="text" name="comment_name" id="comment_name" class="form-control"
                            placeholder="Type name..." />
                        <input type="email" name="comment_mail" id="comment_mail" class="form-control"
                            placeholder="Type mail..." />
                        <div class="d-grid gap-2">
                            <input type="hidden" name="comment_id" id="comment_id" value="0" />
                            <input type="hidden" name="comment_for" id="comment_for" value="<?php echo $row["id"];?>" />
                            <input type="submit" name="submit" id="submit" class="btn btn-primary mt-3 mb-3"
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

















    <!-- Contact us -->
    <?php include_once "assets/common/footer.php"; ?>
    <!-- Contact us -->
    <!-- Js -->
    <?php include_once "assets/common/allJs.php"; ?>
    <!-- Js -->
    <script src="assets/lib/js/commenting.js"></script>
</body>

</html>