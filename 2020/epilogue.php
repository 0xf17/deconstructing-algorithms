<?php
include '../config.php';
?>

<?php include '../partials/pre-load.php'; ?>
<style>
.video-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    height: 0;
}
.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
<body>
    <div class="container-fluid">

        <!-- HEADER -->
        <div class="row align-items-start">
            <div class="col-lg-12">
                <h1 class="sans"><a href="/">Deconstructing Algorithms</a> / 2020
                    <?php include '../partials/dark-theme-toggle.php'; ?></h1>
            </div>
        </div>

        <!-- CONTENT-TOP -->
        <div class="row align-items start mt-3">

            <div class="col-lg-8">
                <p class="sans big">Epilogue</p>
            </div>

            <div class="col-lg-8">
                <p class="serif">By <a href="#">Vineeta Rath</a></p>
                <p class="serif">To go here</p>
            </div>
        </div>

    </div>
    <?php include '../partials/post-load.php'; ?>
</body>

</html>