<?php
include_once 'header.php';
?>

    <div class="container">


        <?php
        if (isset($_SESSION["userid"])){
            echo "<p>Hello There, ". $_SESSION["userid"]."<p/>";
        }
        ?>

        <h1>This is an introduction</h1>
        <p>Here's an important paragraph that contains the website</p>
    </div>
    </section>
    <section class="text-center text-dark">
        <div class="container">
            <h1 class="mb-3">Some Basic Categories</h1>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-secondary">
                            <h4 class="card-title">Fun Stuff</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-secondary">
                            <h4 class="card-title">Exciting Stuff</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-secondary">
                            <h4 class="card-title">Basic Stuff</h4>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body bg-secondary">
                            <h4 class="card-title">Serious Stuff</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once 'footer.php';
?>