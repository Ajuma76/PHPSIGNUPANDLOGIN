<?php
include_once 'header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h1 class="text-center text-primary mb-3">Sign Up</h1>
                <form action="includes/signup.inc.php" method="post">
                    <input required name="name" class="form-control" type="text" placeholder="Full Name"><br>
                    <input required name="email" class="form-control" type="email" placeholder="Email"><br>
                    <input required name="uid" class="form-control" type="text" placeholder="Username"><br>
                    <input required name="pwd" class="form-control" type="password" placeholder="Password"><br>
                    <input required name="repeatpwd" class="form-control" type="password" placeholder="Confirm Password"><br>
                    <button name="submit" class="btn btn-outline-primary btn-block" type="Submit">Sign up</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
<?php
if (isset($_GET["error"])){
    if ($_GET["error"] == "fieldscannotbeblank"){
        echo "<p>Fill in all fields!</p>";
    }
    if ($_GET["error"] == "invalidusername"){
        echo "<p>Choose a proper username!</p>";
    }
    if ($_GET["error"] == "invalidemail"){
        echo "<p>Choose a proper email!</p>";
    }
    if ($_GET["error"] == "passwordtooshort"){
        echo "<p>Password must be more than 8 characters!</p>";
    }
    if ($_GET["error"] == "passworddontmatch"){
        echo "<p>Password don't match!</p>";
    }
    if ($_GET["error"] == "usernameexists"){
        echo "<p>Username already exist!</p>";
    }
}

?>

<?php
include_once 'footer.php';
?>