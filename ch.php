<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >


    <style>
.slick-prev, .slick-next {
  position: absolute;
  top: 135%;
  font-size: 1.8rem;
}

.slick-prev {
  left: 0;
}

.slick-next {
  right: 0;
}

.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
      user-select: none;
  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
      touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  display: block;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

.slick-list:focus {
  outline: none;
}

.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
}

.slick-track:before,
.slick-track:after {
    display: table;
    content: '';
}

.slick-track:after {
    clear: both;
}

.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}

[dir='rtl'] .slick-slide {
    float: right;
}

.slick-slide img {
    display: block;
}

.slick-slide.slick-loading img {
    display: none;
}

.slick-slide.dragging img {
    pointer-events: none;
}
.slick-initialized .slick-slide {
    display: block;
}
.slick-loading .slick-slide {
    visibility: hidden;
}
.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
    display: none;
}

.slide {
    transition: filter .4s;
    margin: 0px 40px;
}

.fas {
    color: #96bd0b;
}
.slick-prev {
    left: 0;
}
.slick-prev, .slick-next {
    position: absolute;
    top: 35%;
    font-size: 1.8rem;
}

.section {
  max-width: 1200px;
  margin: 0 auto;
}



      h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Our  Partners</h2>
         <div class="customer-logos slider">
            <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
</div>
      </div>


      <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal">
  <div class="customer-logos slider">
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e4923bf90c04345e43aada42486ebc4f9a3e56eb/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f677265656e732d666f6f642d737570706c696572732e737667" alt="Kinderhotel Aschauerhof" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/1c89cd43ff20ebfdae6d7dfc615bed22897d4f2c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6175746f2d73706565642e737667" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e7141f1aa02b6721a702b44a3b14b7383e4539ed/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63726f6674732d6163636f756e74616e74732e737667" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/339edd4ba206d97f2bc7c03f7b7fd5a1b5c97111/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f63686573686972652d636f756e74792d68796769656e652d73657276696365732e737667" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/b9d65aaf5e5d1769f8bb0e04247ff6cfa0efa2ab/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f666173742d62616e616e612e737667" height="150" width="150" alt="Tannenmuehle"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/8d4fa451b4f47d2d10ff585a78f7fbd88f8f5530/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f73706163652d637562652e737667" height="150" width="150" alt="Loeffele"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/1e0d6f19906c869766d638227e7e3936aa9295c7/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6265617574792d626f782e737667" alt="Krone" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/0072b8f37157c7e0238342d8105dcc2c9b1e2217/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f626162792d7377696d2e737667" alt="Obereggen" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/6b4aa115c3423ecbad9da2dba885d2d43084acfa/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d64616e63652d73747564696f2e737667" alt="Ortnerhof" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/b0e5c1e174dcb2911bc712f240f7163fe597628c/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f6a616d65732d616e642d736f6e732e737667" alt="Ottonenhof" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/370291c50b74eeab6fe66ccc9e6ca410fc117ed9/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f7468652d7765622d776f726b732e737667" alt="Leiners" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/0112d20015b4dad56fbb07088e76552042539151/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f70657465732d626c696e64732e737667" alt="Seitenalm" height="150" width="150"></a></div>
    <div class="slide-in-right slide"><img src="https://camo.githubusercontent.com/e4eb289d352d7c4cbb8493d6a212448036e3e2d2/687474703a2f2f7069676d656e742e6769746875622e696f2f66616b652d6c6f676f732f6c6f676f732f766563746f722f636f6c6f722f796f67612d626162792e737667" alt="Testerhof" height="150" width="150"></a></div>
</section>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <script>
          $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
      </script>

      <script>
          
          $(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
    nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
    });
  });
      </script>
</body>
</html>

