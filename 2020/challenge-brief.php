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
                <p class="sans big">Challenge Brief</p>
            </div>

            <!-- <div class="col-lg-12">
                <p class="serif big">Deconstructing Algorithms 2020 is an invitation for aspiring practitioners to design experiments for sense-making and revealing algorithms by combining the contrasting viewpoints of understanding of the structured process of designing and programming algorithms, and the philosophical notion of deconstruction.</p>
            </div> -->
        </div>


        <!-- CONTENT-MAIN -->
        <div class="row align-items start mt-3">
            <div class="col-xl-12">
                <div class="gallery-item mb-3">
                    <img src="challenge-brief.jpg">
                </div>
                <p class="sans mt-2">Invitation</p>
            </div>
        </div>
    </div>
    <?php include '../partials/post-load.php'; ?>
</body>

</html>