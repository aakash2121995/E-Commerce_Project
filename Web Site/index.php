        <script src="Scripts/jquery-1.9.1.min.js"></script>
        <?php

        require_once "header.php";
        require_once "functions.php"; ?>
        <!-- Navigation Bar Ender -->
        <div class="row">
            <div class="col-sm-3">
                <!-- <div class="container-fluid"> -->
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Shop By Category
                        </a>
                    </li>
                    <li>
                        <a href="#">CATEGORIES</a>
                        <ul id="cats">
                            <!--  -->
                            <?php getCats();?>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">

                            <img alt="First slide" src="Img/main-slider1.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="First slide" src="Img/main-slider2.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 2</h3>
                                <p>Morbi eget libero quis metus consectetur semper.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="First slide" src="Img/main-slider3.jpg" />
                            <div class="carousel-caption">
                                <h3>Caption heading 3</h3>
                                <p>Suspendisse ullamcorper massa eget eleifend iaculis.</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#my-carousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#my-carousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="col-xs-12">
                <h1>Trending Now</h1>

                <div class="well">
                    <div id="myCarousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x">
                                            <img src="Img/product1.jpg" alt="Image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product3_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product1_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>

        <div>
            <div class="col-xs-12">
                <h1>Men Apparels</h1>

                <div class="well">
                    <div id="myCarousel2" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x">
                                            <img src="Img/product1.jpg" alt="Image" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product3_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x"><img src="Img/product1_2.jpg" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner--> <a class="left carousel-control" href="#myCarousel2" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel2" data-slide="next">›</a>
                    </div>
                    <!--/myCarousel-->
                </div>
                <!--/well-->
            </div>
        </div>
    </div>

</body>
</html>
