<footer>
            <div class="grid-row">
                <div class="grid-col-row clear-fix">
                    <section class="grid-col grid-col-4 footer-about">
                        <h1 class="corner-radius">About Us</h1>
                        <div>
                            <h3>We provide unique content with cent percent accuracy.</h3>
                            <p>Assignmentrelief.com has implemented high-quality time monitoring software to ensure the solutions are delivered on time.</p>
                        </div>
                        <address>
                            <p></p>
                            <a href="tel:123-123456789" class="phone-number">(+44) 7448025626</a>
                            <br />
                            <a href="mailto:uni@domain.com" class="email">info@assignmentrelief.com</a>
                            <br />

                            <a href="mailto:support@assignmentrelief.com" class="site">support@assignmentrelief.com</a>
                            <br />
                            <a href="" class="address">We are open:<br/>Monday – Sunday (24X7)</a>
                        </address>
                        <div class="footer-social">
                            <a href="" class="fa fa-twitter"></a>
                            <a href="" class="fa fa-skype"></a>
                            <a href="" class="fa fa-google-plus"></a>
                           
                            <a href="" class="fa fa-youtube"></a>
                        </div>
                    </section>
                    <section class="grid-col grid-col-4 footer-latest">
                        <h2 class="corner-radius"><a href="<?= URL::to('/place-order') ?>">Place New Order</a></h2>
                        <!-- <article>
                            <img src="http://placehold.it/83x83" data-at2x="http://placehold.it/83x83" alt>
                            <h3>Sed aliquet dui at auctor blandit</h3>
                            <div class="course-date">
                                <div>10<sup>00</sup></div>
                                <div>23.02.15</div>
                            </div>
                            <p>Sed pharetra lorem ut dolor dignissim,
                                sit amet pretium tortor mattis.</p>
                        </article>
                        <article>
                            <img src="http://placehold.it/83x83" data-at2x="http://placehold.it/83x83" alt>
                            <h3>Sed aliquet dui at auctor blandit</h3>
                            <div class="course-date">
                                <div>10<sup>00</sup></div>
                                <div>23.02.15</div>
                            </div>
                            <p>Sed pharetra lorem ut dolor dignissim,
                                sit amet pretium tortor mattis.</p>
                        </article> -->
                    </section>
                    <section class="grid-col grid-col-4 footer-contact-form">
                        <h2 class="corner-radius">Always ready to Help you</h2>
                        <div class="email_server_responce"></div>
                        <form action="php/contacts-process.php" class="contact-form" method="post" novalidate="novalidate">
                            <p><span class="your-name"><input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" required></span>
                            </p>
                            <p><span class="your-email"><input type="text" name="phone" value="" size="40" placeholder="Phone" aria-invalid="false" required></span> </p>
                            <p><span class="your-message"><textarea name="message" placeholder="Comments" cols="40" rows="5" aria-invalid="false" required></textarea></span> </p>
                            <button type="submit" class="cws-button bt-color-3 border-radius alt icon-right">Submit <i class="fa fa-angle-right"></i></button>
                        </form>
                    </section>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="grid-row clear-fix">
                    <div class="copyright">Best Assignment Relief <span></span> 2017 . All Rights Reserved</div>
                    <nav class="footer-nav">
                        <ul class="clear-fix">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="<?= URL::to('/subjects') ?>">Subjects</a>
                            </li>
                            <li>
                                <a href="<?= URL::to('/faq') ?>">Faq</a>
                            </li>
                            <li>
                                <a href="<?= URL::to('/offers') ?>">Offers</a>
                            </li>
                            <li>
                                <a href="page-about-us.html">Pages</a>
                            </li>
                            <li>
                                <a href="<?= URL::to('/contact-us')?>">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
        <!-- / footer -->
<!--	<script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js"></script>
        <script type='text/javascript' src='js/jquery.validate.min.js'></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/main.js"></script>
         jQuery REVOLUTION Slider  
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>		
        <script src="js/jquery.isotope.min.js"></script>
        
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jflickrfeed.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/jquery.tweet.js"></script>-->
        {!! Html::script('theme/js/jquery.min.js') !!}
        {!! Html::script('https://maps.google.com/maps/api/js?sensor=false') !!}
        {!! Html::script('https://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox_packed.js') !!}
        {!! Html::script('theme/js/jquery.validate.min.js') !!}
        {!! Html::script('theme/js/jquery.form.min.js') !!}
        {!! Html::script('theme/js/TweenMax.min.js') !!}
        {!! Html::script('theme/js/main.js') !!}
        {!! Html::script('theme/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.video.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.actions.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') !!} 
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.navigation.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.migration.min.js') !!}
        {!! Html::script('theme/rs-plugin/js/extensions/revolution.extension.parallax.min.js') !!}
        {!! Html::script('theme/js/jquery.isotope.min.js') !!}
        {!! Html::script('theme/js/owl.carousel.min.js') !!}
        {!! Html::script('theme/js/jquery-ui.min.js') !!}
        {!! Html::script('theme/js/jflickrfeed.min.js') !!}
        {!! Html::script('theme/js/jquery.fancybox.pack.js') !!}
        {!! Html::script('theme/js/retina.min.js') !!}
        {!! Html::script('theme/js/jquery.tweet.js') !!}
        {!! Html::script('theme/js/jquery.fancybox-media.js') !!}
