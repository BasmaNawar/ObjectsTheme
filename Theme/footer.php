<footer class="py-3">

    <div class="container">
        <div class="row my-5">
            <div class="col-sm-3">

                <div class="f-data mt-4">Logo</div>

            </div>

            <div class="col-sm-3">
                <div class="f-title mb-3">Visit</div>
                <div class="f-data">Alexandria 59-61<br />321 Roushdy</div>

            </div>

            <div class="col-sm-2">
                <div class="f-title mb-3">Send Mail</div>
                <div class="f-data">Post Office 33<br />8844 Roushdy</div>
            </div>

            <div class="col-sm-2">
                <div class="f-title mb-3">Phone</div>
                <div class="f-data">+ 00 55 66 77</div>
            </div>

            <div class="col-sm-2">
                <div class="f-title mb-3">Email</div>
                <div class="f-data"><a href="mailto:email@host.com" class="text-danger">email@host.com</a></div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-12">
                <a href="https://web.facebook.com/" class="mr-1"><i class='fab fa-facebook-square fa-media'></i></a>
                <a href="https://twitter.com/"><i class='fab fa-twitter-square fa-media'></i></a>
            </div>

        </div>

        <div class="row mt-4 mb-2">

            <div class="col-sm-7">
                <p class="pt-2"><?php bloginfo('name') ?> © <?php echo date('Y') ?>. All rights reserved.</p>
            </div>
            <div class="col-sm-5">
                <div class="text-right">
                    <?php footer_menu(); ?>
                </div>
            </div>

        </div>

    </div>

</footer>


<?php wp_footer(); ?>


</body>

</html>