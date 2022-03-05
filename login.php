<?php
include_once 'header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-center text-primary">Log In</h1>
                <form action="includes/login.inc.php" method="post">
                    <input required name="uid" class="form-control" type="text" placeholder="Username/Email..."><br>
                    <input required name="pwd" class="form-control" type="password" placeholder="Password..."><br>
                    <button name="submit" class="btn btn-outline-primary btn-block" type="Submit">Log In</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>


<?php
if (isset($_GET["error"])){

     if ($_GET["error"] == "emptyinput"){
         echo "<p>Fill in all fields<p/>";
     }
    elseif ($_GET["error"] == "wronglogin"){
         echo "<p>Incorrect Login Information!<p/>";
    }
}
?>

<?php
include_once 'footer.php';
?>