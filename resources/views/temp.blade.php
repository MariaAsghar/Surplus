@extends('layouts.app')
@section('content')
<div class="text-3">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-md-10 text-center" style="margin-top:150px; font-size: 30px; linear-gradient(rgba(68, 117, 117, 0.473), rgb(255, 255, 255));">
                <hr>
                <hr>
                <h1>ABOUT SURPLUS</h1>
                <p>Surplus is your very personal non technical freelancing space. Now you can earn extra pennies by offering non-technical services as well.We provide you a platform where you can register, set up your little service provider business duch
                    as delivery, gardening, plumbing, cooking etc. </p>
                <br>

                <p>Your privacy is important for us, Any data you enter will be in secure hands. You can Place orders, sell you handmade things and do much more while sitting at home!</p>
                <br>
                <p>HAPPY EARNING!</p>
                <hr>
                <hr>
            </div>
            <div class="col-sm-1"></div>

        </div>
    </div>





    <!-- ----------------------our services grid ------------------------------ -->

    <div class="text-2">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 text-center" style="margin-top:150px; font-size: 30px;">
                <!-- <h4>Our Services</h4> -->
                <p>OUR SERVICES</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container first" style="margin-top:50px">
        <div class="row">
            <div class="col-sm-4 first-left">

                <h2>PAINTING</h2>
                <!-- <a href="#portfolio.html">Joe</a> -->
                <a href="{{asset('app-assets/portfolio.html')}}" class="portfolio ">O</a>

                <hr class="d-sm-none">
            </div>
            <div class="col-sm-4 first-center">
                <h2>TAILORING</h2>
                <a href="portfolio.html " class="portfolio ">O</a>

                <hr class="d-sm-none">
            </div>
            <div class="col-sm-4 first-right">
                <h2>ELECTRICIAN</h2>
                <a href="portfolio.html " class="portfolio ">O</a>

                <br>
            </div>
        </div>
    </div>
    <div class="container second" style="margin-top:10px; margin-bottom:50px;">
        <div class="row">
            <div class="col-sm-4 second-left">

                <h2>CLEANING</h2>
                <a href="portfolio.html " class="portfolio ">O</a>

                <hr class="d-sm-none">
            </div>
            <div class="col-sm-4 second-center">
                <h2>DELIVERY</h2>
                <a href="portfolio.html " class="portfolio ">O</a>

                <hr class="d-sm-none">
            </div>
            <div class="col-sm-4 second-right">
                <h2>COOKING</h2>
                <a href="portfolio.html " class="portfolio ">O</a>

                <br>
            </div>
        </div>
    </div>



    <hr>

    <!-- ----------------------------------SLIDER-------------------------------------------- -->
    <div class="text-2" style="margin-top:100px">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 text-center" style="margin-top:150px; font-size: 30px;">
                <!-- <h4>Our Services</h4> -->
                <hr>
                <p>TRENDING</p>
            </div>
        </div>
    </div>
    <div class="container slider-container" id="trending">
        <div class="row">
            <div class="col-sm-1 slider-left"></div>
            <!-- slider -->

            <div class="col-sm-10 slider-left">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <hr>
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/cook2.jpeg')}}" width="800px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src= "{{asset('app-assets/assets/images/transport2.jpeg')}}"  width="800" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/cleaning4.jpg')}}" width="700" height="250px">
                        </div>
                        <div class="carousel-item  active">
                            <img src="{{asset('app-assets/assets/images/wood.jpg')}}" width="700px" height="250px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/woodwork.jpg')}}" width="700" height="250px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/plumbing2.jpg')}}" width="700" height="250px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/tailor.jpg')}}" width="700" height="250px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('app-assets/assets/images/cleaning1.jpg')}}" width="700" height="250px">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="col-sm-1 slider-right"></div>
        </div>
    </div>
    <!-- ---------------------------------------------SUCCESS STORY----------------------------------------------- -->
    <div class="text-3" style="margin-top: 200px;">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 text-center" style="margin-top:10px; font-size: 30px;">
                <!-- <h4>Our Services</h4> -->
                <p>SUCCESS STORIES</p>
                <h5>See how your friends boosted their local businesses using our services!</h5>
                <hr>
            </div>
        </div>
    </div>
    <container class="success-story">
        <div class="container">
            <div class="row" style="background-image: linear-gradient(rgba(68, 117, 117, 0.473), rgb(255, 255, 255));">
                <div class=" col-sm-3 ">
                    <div id="news-slider " class="owl-carousel ">
                        <div class="post-slide ">
                            <div class="post-img ">
                                <img src="{{asset('app-assets/assets/images/embroidery1.jpg')}}">
                                <div class="post-info ">
                                    <ul class="category ">
                                        <li>in <a href="# ">Embroidery</a></li>
                                        <li>by <a href="# ">Joe</a></li>
                                    </ul>
                                    <span class="post-date ">May 05, 2016</span>
                                </div>
                            </div>
                            <div class="post-review ">
                                <span class="icons ">
                                <img src="{{asset('app-assets/assets/images/man1.jpg')}}" >
                            </span>
                                <h3 class="post-title "><a href="# ">Breaking Sterotypes</a></h3>
                                <p class="post-description ">Joe thinks that breaking Sterotypes is the new way to the top.He shares his love of embroidery in this..!</p>
                                <a href="{{asset('app-assets/articles.html')}}"  class="read ">read more</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-3 ">
                    <div id="news-slider " class="owl-carousel ">
                        <div class="post-slide ">
                            <div class="post-img ">
                                <img src="{{asset('app-assets/assets/images/cook1.jpg')}}" >
                                <div class="post-info ">
                                    <ul class="category ">
                                        <li>in <a href="# ">Cook</a></li>
                                        <li>by <a href="# ">David</a></li>
                                    </ul>
                                    <span class="post-date ">May 05, 2016</span>
                                </div>
                            </div>
                            <div class="post-review ">
                                <span class="icons ">
                                <img src="{{asset('app-assets/assets/images/man2.jpg')}}">
                            </span>
                                <h3 class="post-title "><a href="# ">Cooking my heart out</a></h3>
                                <p class="post-description ">David has always been passionate about cooking.Check out his blog to get inspired from his journey as a cook that ..</p>
                                <a href="{{asset('app-assets/articles.html')}}" class="read ">read more</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-3 ">
                    <div id="news-slider " class="owl-carousel ">
                        <div class="post-slide ">
                            <div class="post-img ">
                                <img src="{{asset('app-assets/assets/images/transport.jpg')}}" >
                                <div class="post-info ">
                                    <ul class="category ">
                                        <li>in <a href="# ">Delivery</a></li>
                                        <li>by <a href="# ">Islamil</a></li>
                                    </ul>
                                    <span class="post-date ">May 05, 2020</span>
                                </div>
                            </div>
                            <div class="post-review ">
                                <span class="icons ">
                                <img src="{{asset('app-assets/assets/images/man3.jpg')}}">
                            </span>
                                <h3 class="post-title "><a href="# ">Always available </a></h3>
                                <p class="post-description ">Ismail shares how he turned his life into a success-story. He provides reasonable delivery services and ..</p>
                                <a href="{{asset('app-assets/articles.html')}}"  class="read ">read more</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-sm-3 ">
                    <div id="news-slider " class="owl-carousel ">
                        <div class="post-slide ">
                            <div class="post-img ">
                                <img src="{{asset('app-assets/assets/images/Painting1.jpg')}}">
                                <div class="post-info ">
                                    <ul class="category ">
                                        <li>in <a href="# ">Painting</a></li>
                                        <li>by <a href="# ">Nadia</a></li>
                                    </ul>
                                    <span class="post-date ">May 05, 2016</span>
                                </div>
                            </div>
                            <div class="post-review ">
                                <span class="icons ">
                                <img src="{{asset('app-assets/assets/images/woman1.jpg ')}}">
                            </span>
                                <h3 class="post-title "><a href="# ">Painter?</a></h3>
                                <p class="post-description ">Nadia shares how she started selling her art and earned extra pennies to support her child as a single mother. Her story is a reflection of strength ...</p>
                                <a href="{{asset('app-assets/articles.html')}}"  class="read ">read more</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </container>
    <!-- ---------------------------------------CONTACT US------------------------------------- -->
    <div class="container-message " id="contact" style="margin-top: 200px; ">
        <div class="row ">
            <div class="col-md-2 "></div>
            <div class="col-sm-4 ">
                <div class="contact-left ">
                    <h1> We'd love to hear from you.</h1>
                    <p> Have a question about us? Need to talk to customer service? Have a great idea? Drop us a line and we'll get back to you as soon as we can.
                    </p>
                    <h6> Have an urgent problem about an order? Call our warehouse at 090078601.</h6>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="contact-right ">
                    <form action="action_page.php ">

                        <label for="fname ">First Name</label>
                        <input type="text " id="fname " name="firstname " placeholder="Your name.. ">

                        <label for="lname ">Last Name</label>
                        <input type="text " id="lname " name="lastname " placeholder="Your last name.. ">

                        <label for="country ">Country</label>
                        <select id="country " name="country ">
                          <option value="Pakistan ">Pakistan</option>
                          <option value="Italy ">Italy</option>
                          <option value="usa ">USA</option>
                        </select>

                        <label for="subject ">  Your Message</label>
                        <textarea id="subject " name="subject " placeholder="Write something.. " style="height:200px "></textarea>

                        <input type="submit " value="Submit ">

                    </form>
                </div>
            </div>
            <div class="col-md-2 "></div>

        </div>
    </div>
    <!-- -----------------------------------------------text about team----------------------- -->
    <!-- <div class="text-1 ">
        <div class="row ">
            <div class="col-md-12 col-md-offset-2 text-center ">
                <h2>Our Team</h2>
                <p>Our moto is to create a happy life for you</p>
            </div>
        </div>
    </div> -->
    <div class="text-1 " style="margin-top: 200px; ">
        <div class="row ">
            <div class="col-md-12 col-md-offset-2 text-center " style="margin-top:10px; font-size: 30px; ">
                <!-- <h4>Our Services</h4> -->
                <p>OUR TEAM</p>
            </div>
        </div>
    </div>
    <!-- ------------------------------------meet our team ---------------------------------------------- -->
    <div class="container " id="team">

        <div class="row ">
            <div class="col-md-4 col-sm-6 ">
                <div class="our-team ">
                    <div class="pic ">
                        <img src="assets/images/man2.jpg ">
                        <ul class="social ">
                            <li>
                                <a href="# " class="fa fa-facebook "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-google-plus "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-instagram "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-linkedin "></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content ">
                        <h3 class="title ">Maria Asghar</h3>
                        <span class="post ">CO Founder and CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="our-team ">
                    <div class="pic ">
                        <img src="assets/images/man1.jpg ">
                        <ul class="social ">
                            <li>
                                <a href="# " class="fa fa-facebook "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-google-plus "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-instagram "></a>
                            </li>
                            <li>
                                <a href="# " class="fab fa-linkedin "></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content ">
                        <h3 class="title ">Nimra shahzad</h3>
                        <span class="post ">Co Founder and CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="our-team ">
                    <div class="pic ">
                        <img src="assets/images/man4.jpg ">
                        <ul class="social ">
                            <li>
                                <a href="# " class="fa fa-facebook "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-google-plus "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-instagram "></a>
                            </li>
                            <li>
                                <a href="# " class="fa fa-linkedin "></a>
                            </li>
                        </ul>
                    </div>
                    <div class="team-content ">
                        <h3 class="title ">someone</h3>
                        <span class="post ">Director maybe </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection