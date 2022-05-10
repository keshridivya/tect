<link rel="stylesheet" href="assets/css/stylesheet.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <p><img src="assets/img/logo1.png"></p>
       
    </div>
</div>
<!-- Start Header Area -->
<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-3 align-self-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo2.png" alt="img">
                    </a>
                </div>
                <div class="canvas_open">
                    <a href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <!-- Right -->
            <div class="col-lg-9">
                <!-- Header Right Button -->
                <div class="hr_btn">
                    <a class="button-2" id="popup" onclick="div_show()" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Get Quote</a>
                    
                    <div id="abc">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<button id="close"  onclick ="div_hide()"><i class="bi bi-x"></i></button>
<div class="width:50%"></div>
<form action="include/api.php" id="form" method="post" name="form" class="w3-center w3-animate-zoom" >
<h2 class="h2" >Get quote</h2>
<input id="name" name="name" placeholder="Your name" class="text" type="text" required>
<input id="email" name="email" placeholder="Your email" class="text" type="text" required>
<input type="tel"  name="phone" class="text" placeholder="Your phone" required>
<select class="form-select" id="sel" name="service" aria-label="Default select example">
  <option selected>Services</option>
  <option value="1">Website Designing</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<textarea id="msg" class="textarea" name="message" placeholder="Message" required></textarea>
<button class="butn" type="submit" onclick="fun()" name="sub" href="javascript:%20check_empty()" id="submit">Send</a>

</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<!-- Display Popup Button -->
     </div>

                <!-- Menu -->
                <div class="menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.php">About Us</a>
                            <ul>
                                <li><a href="ceo-govind-bavkar.html">CEO</a></li>
                                <li><a href="team.php">Teams</a></li>
                            </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="services.php">Services</a>
                                <ul>
                                    <?php $sql=mysqli_query($conn,"select * from servicelist");
                                    while($arr=mysqli_fetch_array($sql)){ ?>
                                    <li><a href="website-designing.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['service_list'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li>
                                <a href="portfolio.php">Portfolio</a>
                            </li>								
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>								
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<!-- Start Mobile Menu Area -->
<div class="mobile-menu-area">
        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay"></div>
        <div class="offcanvas_menu">
            <div class="offcanvas_menu_wrapper">
                <div class="canvas_close">
                    <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                </div>
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="assets/img/logo2.png" alt="logo" />
                    </a>
                </div>
                <div id="menu" class="text-left">
                    <ul class="offcanvas_main_menu">
								<li>
									<a href="index.php">Home</a>
								</li>
                        <li class="menu-item-has-children">
                            <a href="about.php">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="ceo-govind-bavkar.html">CEO</a></li>
								<li><a href="team.php">Teams</a></li>
                            </ul>
                        </li>
								<li class="menu-item-has-children">
									<a href="services.php">Services</a>
									<ul class="sub-menu">
                                    <?php $sql=mysqli_query($conn,"select * from servicelist");
                                    while($arr=mysqli_fetch_array($sql)){ ?>
                                    <li><a href="website-designing.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['service_list'] ?></a></li>
                                    <?php } ?>
									</ul>
								</li>
								<li>
									<a href="portfolio.php">Portfolio</a>
								</li>								
								<li>	
									<a href="blog.php">Blog</a>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->