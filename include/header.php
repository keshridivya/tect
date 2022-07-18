<link rel="stylesheet" href="assets/css/stylesheet.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body>

<!-- Start Header Area -->
<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="col-lg-3 align-self-center">
                <div class="logo">
                    <a href="index">
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
<form action="../include/api.php" id="form" method="post" name="form" class="w3-center w3-animate-zoom" >
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
                <div class="menu cont">
                    <nav>
                        <ul>
                            <li class="menu1  menu-item">
                                <a href="index">Home</a>
                            </li>
                            <li class="menu1  menu-item">
                                <a href="about">About Us</a>
                            <ul>
                                <li><a href="ceo-govind-bavkar">CEO</a></li>
                                <li><a href="team">Teams</a></li>
                            </ul>
                            </li>
                            <li class="menu1 menu-item">
                                <a href="services">Services</a>
                                <ul>
                                    <li><a href="services/Website-Designing" id="1">Website Designing</a></li>
                                    <li><a href="services/Ecommerce-Website" id="2">Ecommerce Website</a></li>
                                    <li><a href="services/Software-Development" id="3">Software Development</a></li>
                                    <li><a href="services/Mobile-App-Development" id="4">Mobile App Development</a></li>
                                    <li><a href="services/Digital-Marketing" id="5">Digital Marketing</a></li>
                                    <li><a href="services/Graphic-Designing" id="6">Graphic Designing</a></li>
                                    <li><a href="services/Hardware-Networking" id="7">Hardware Networking</a></li>
                                    <li><a href="services/CCTV-Camera" id="8">CCTV camera</a></li>
                                    <li><a href="services/IT-Consulting" id="9">IT Consulting</a></li>
                                </ul>
                            </li>
                            <li class="menu1 menu-item">
                                <a href="portfolio">Portfolio</a>
                            </li>								
                            <li class="menu1 menu-item">
                                <a href="blog">Blog</a>
                            </li>								
                            <li class="menu1 menu-item">
                                <a href="contact">Contact Us</a>
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
                    <a href="index">
                        <img src="assets/img/logo2.png" alt="logo" />
                    </a>
                </div>
                <div id="menu" class="text-left">
                    <ul class="offcanvas_main_menu">
								<li>
									<a href="index">Home</a>
								</li>
                        <li class="menu-item-has-children">
                            <a href="about">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="ceo-govind-bavkar">CEO</a></li>
								<li><a href="team">Teams</a></li>
                            </ul>
                        </li>
								<li class="menu-item-has-children">
									<a href="AllServices">Services</a>
									<ul class="sub-menu">
                                    <li><a href="services/Website-Designing" id="1">Website Designing</a></li>
                                    <li><a href="services/Ecommerce-Website" id="2">Ecommerce Website</a></li>
                                    <li><a href="services/Software-Development" id="3">Software Development</a></li>
                                    <li><a href="services/Mobile-App-Development" id="4">Mobile App Development</a></li>
                                    <li><a href="services/Digital-Marketing" id="5">Digital Marketing</a></li>
                                    <li><a href="services/Graphic-Designing" id="6">Graphic Designing</a></li>
                                    <li><a href="services/Hardware-Networking" id="7">Hardware Networking</a></li>
                                    <li><a href="services/CCTV-Camera" id="8">CCTV camera</a></li>
                                    <li><a href="services/IT-Consulting" id="9">IT Consulting</a></li>
                                </ul>
								</li>
								<li>
									<a href="portfolio">Portfolio</a>
								</li>								
								<li>	
									<a href="blog">Blog</a>
								</li>
								<li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->