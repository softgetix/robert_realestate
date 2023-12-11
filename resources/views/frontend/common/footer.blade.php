  <!-- Footer -->
  <section class="bg-dark footer" id="contact">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-4">
                        <h5 class="text-white footer-title ">About Montia</h5>
                        <div class="mt-4">
                            <p class="footer-desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="mt-4">
                            <ul class="list-unstyled text-white footer-social list-inline">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white footer-title">Support</h5>
                        <div class="mt-4">
                            <ul class="list-unstyled text-white footer-list">
                                <li><a href="#">Help & Support</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-white footer-title">Social links</h5>
                        <div class="mt-4">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Behance</a></li>
                                <li><a href="#">Dribbble</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white footer-title">Get in touch</h5>
                        <div class="mt-4">
                            <p>Europe: +1 00 12 34 5</p>
                            <p>US: +1 67 89 01 23 4</p>
                            <p>Canada: +1 00 12 34 5</p>
                            <p>support@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row pb-4">
                    <div class="col-lg-12">
                        <div class="float-end">
                            <p class="mb-0">© Montia <script>document.write(new Date().getFullYear())</script>.</p>
                        </div>
                        <div class="float-start">
                            <p class="footer-terms"><a href="#">Terms</a> & <a href="#">Privacy Policy </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer end -->

        <!-- js placed at the end of the document so the pages load faster -->
       
        <script type="text/javascript">
            var a = 0;
            $(window).scroll(function() {
                var oTop = $('#counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                                countNum: countTo
                            },

                            {
                                duration: 2000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                }

                            });
                    });
                    a = 1;
                }
            });
        </script>
    </body>
</html>