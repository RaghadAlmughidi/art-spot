<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link  rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
    <!-- icon remix link CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- initialize AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Gallery</title>
</head>
<!-- header -->
<header class="primary_header flex">
    <nav class="navbar flex">
        <div class="logo">
            <img src="./artSpot-img/logo.png" alt="art spot">
        </div>
        <div class="title">
            <h1 class="header_heading">Gallery</h1>
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
    <section class="gallery"  style="z-index: 1;">
        <div class=" gallery_content flex">
            <div class="gallery_img">
                <img src="./artSpot-img/gallery-banner.png" alt="">
            </div>
            <div class="gallery_content-text">
                <h1>your master pace is here</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolor, doloremque impedit commodi,
                    saepe tempora labore iure natus rerum facere nam. Enim fugit, assumenda quo odit reiciendis minima
                    quod minus?</p>
            </div>
        </div>

    </section>
    <div class="view flex extra-f2" style="z-index: 2;">
        <p>view</p>
        <button class="view-btn "><i class="ri-layout-grid-fill fill-two"></i></button>
        <button class="view-btn extra-f"><i class="ri-grid-fill full-lay"></i></button>
    </div>

    <section class="container gallery-cards">
        @foreach ($products as $product)
        <div class="card" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="card-img">
                <img src="{{ asset('product_img/')."/".$product->product_image }}" alt="">
            </div>
            <div class="card-content flex">
                <div class="card-text">
                    <p>{{ $product->product_name }}</p>
                    <p>by : {{ $product->artist_name }}</p>
                </div>
                <div class="card-price flex">
                    <a href="#" class="price-text">{{ $product->product_price }}$</a>
                    <i class="ri-shopping-cart-2-fill"></i>
                </div>
            </div>
        </div>
        @endforeach
        

 


   
        
    </section>
    <div class="container circle1">
        <div class="circle2">
            <div class="cart_circle">
            <i class="ri-shopping-basket-2-line cart_size"></i>
            <div class="num">
                <div class="num_circle">
                    <p>2</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <img src="./artSpot-img/eclips1.png" alt="" class="ec-1" style="z-index: -1;">
    <img src="./artSpot-img/eclips2.png" alt="" class="ec-2" style="z-index: -1; top:20rem ;">


    <!-- initialize AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="main.js"></script>
</body>
<footer>
    <div class="logo-list">
    <img src="./artSpot-img/footerLogo.png" alt="">
    <ul class="footerList">
      <li class="item">
            <a class="item-link" href="popular.html">Popular</a>
        </li>
        <li class="item">
            <a class="item-link" href="gallery.html">Gallery</a>
        </li>
        <li class="item">
            <a class="item-link" href="cart.html">cart</a>
        </li>
        <li class="item">
            <a class="item-link" href="user.html">Account</a>
        </li>
    

     

    </ul>
</div>
<div class="mail-copyright  ">
    <form className="contact-form " method="post">
        <label for="user_email">
        <input type="email" id="user_email" name="user_email" placeholder="Enter your Email" class="mail-input"/>
        <input type="submit" value="Send" class="mail-btn"/>
        </label>
      </form>
<p style="color:#fff">©2023.Raghad | Rahaf All right reserved </p>
</div>
</footer>

</html>