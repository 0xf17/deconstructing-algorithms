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
                <h1 class="sans"><a href="/deconstructing-algorithms">Deconstructing Algorithms</a> / 2020
                    <?php include '../partials/dark-theme-toggle.php'; ?></h1>
            </div>
        </div>

        <!-- CONTENT-TOP -->
        <div class="row align-items start mt-3">

            <div class="col-lg-8">
                <p class="sans big">Foreword</p>
            </div>

            <div class="col-lg-8">
                <p class="serif">By <a href="#">Gaurav Singh</a></p>
                <p class="serif">I am fortunate to be writing the foreword for Deconstructing Algorithms 2020.</p>

                <p class="serif">The first project, "Deciphering Algorithms" is an original work by Daksha Dixit and Simran Singh. They started off to simplify algorithms for the common, to make it so digestible that it enables everyone to understand the implications. Among many many things, in their final output, they take the inspiration from the code inspector in web browsers. Their final output imagines a similar inspection tool but for revealing all the mechanical clockwork of the underlying algorithmic system. Imagine knowing the decisions YouTube made before recommending you the dog video in your feed. Their concept explores possible ways of engaging with the information, in a manner that it does not overwhelm but scaffold them step by step to eventually help build self-efficacy. This report also documents the ups and downs in their journey to build their proposition into prototypes of their imagination.</p>

                <p class="serif">The second project, "Greenbox Algorithms" is an original work by Apoorva Avadhana, Nupur Patny, and Shreya Mishra. It was nothing less than amazing to see the three coming together to push each other and the extent of what can be made possible through collaboration. What began on a piece of paper a few months ago is striving to come out in the real world. This is the first of the evidence of their hard work during this project and their concept details. Their project has imagined an alternate reality that amplifies rather more essential factors that should motivate people to invest in the financial market. The very premise of their research to imagine investing in financial instruments based on sustainability indices along their earning potential is radical and new. It is both complex and challenging to imagine new structures that are generally forbidden from non-experts from the domain of finance. I hope this report will highlight the relevance of considering environmental and sustainability identifiers during investing and possibly encourage young designers and practitioners to push the domain's status quo.</p>

                <p class="serif">It is perhaps the most ambivalent I have felt in a while. It has undoubtedly been uneasy for me to pressurize students to submit this report during a pandemic, arguably one of the most challenging situations we have all seen in our lifetime. I am not happy doing so but limited by how each of our actions and responses is delegated through multiple levels and how it affects the students. However, it will be naive to acknowledge only in support of either facilitators, institutions, or students. My stance has been to only balance as much as I can and which affects students in least possibly manner.</p>

                <p class="serif">It would also be unfair to authors and their efforts to call me as their project mentor for the work that is primarily initiated and managed by themselves. Maybe an occasional project mentor would be just. Finally, I congratulate them on all the hard work, all the nights, all the challenges they have gone through, as they could finally finish their thesis. But more importantly, I believe this will help them in becoming designers who will advocate for ethics and moral responsibilities over anything else.</p>
            </div>
        </div>

    </div>
    <?php include '../partials/post-load.php'; ?>
</body>

</html>
