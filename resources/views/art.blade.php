<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css link -->
  <link  rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
  <!-- icon remix link CDN -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- initialize AOS CDN -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Art</title>
</head>
<!-- header -->
<header class="primary_header flex">
  <nav class=" navbar flex">
    <div class="logo">
      <img src="./artSpot-img/logo.png" alt="art spot" />
    </div>
    <div class="title">
      <h1 class="header_heading">Art</h1>
    </div>
    <a href="home.html" class="btn">
      <span class="circle">
        <span class="arrow"></span>
        <span class="text">Back</span>
      </span>
    </a>
  </nav>
</header>

<body>
  <section class="art" style="z-index: 1">
     
    <div class="art_content  flex" >
      <div class="art_img" data-aos="zoom-in-right" data-aos-duration="2000">
        <img src="{{ asset('product_img/')."/".$product->product_image }} " />
      </div>
      <div class="art_content-text"  data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="1500">
      
        <h6></h6>
        <h1></h1>
        <p>
           
        </p>
        <div class="artist_details flex">
          <div class="artist_img flex">
            <img src="./artSpot-img/Ellipse 18.png" alt="" /> 
             <h3></h3>
          </div>
          
          <div class="card-price card-price2 price_art">
            <a href="#" class="price-text price-text2"></a>
            <i class="ri-shopping-cart-2-fill"></i>
          </div>
        </div>
        <img src="./artSpot-img/eclips2.png" alt="" class="ec-2" style="z-index: -1; top:5rem ;">
      </div>
    </div>
  
  </section>

  <!-- initialize AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="main.js"></script>
</body>

</html>