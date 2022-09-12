<?php
$db = mysqli_connect('localhost', 'root', '', 'brokerage');
?>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brokerage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..\css\homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="close.png">
    <link rel="stylesheet" href="next.png">
    <link rel="stylesheet" href="prev.png">
    <link rel="stylesheet" href="loading.gif">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js">
      <link rel="stylesheet" href="..\css\car.css">
    </script>
</head>
<body>
    <div class="page-wrapper">
      <div class="post-slider">
         <h1 class="slide-title">
          Recently Posted
        </h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="post-wrapper">
        <?php
          $result=mysqli_query($db,"select image,price,location from home");
          $i =0;
          while($row=mysqli_fetch_array($result)){
          ?>
          <div class="post">
            <img src="..\Assets\<?php echo $row['image'] ?>" alt="home" class="slider-image">
            <div class="post-info">
              <span>Location : <?php echo $row['location'] ?></span>
              <p>Price :<?php echo $row['price'] ?></p>
            </div>
          </div>
          <?php
          }
          ?>
        </div>

      </div>
    </div>
<!--slider-->
    <!--header section-->
<nav>
    <!--Logo-->
  <a href="profile.html" class="logo" >
      <img src="..\images\eden.jpg" alt="eden"></a>
      <!--Menu-->
      <ul class="menu">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="#">Chat</a></li>
          <li><a href="#">Catagories</a>
          <ul>
            <li> <a href="..\html\car.php" active>Cars</a></li>
            <li> <a href="#">Motorcycle</a></li>
          </ul>
          
          </li>
          <li><a href="#">Setting</a></li>
          <li><a href="#">Partnership request</a></li>
      </ul>
      <!--button to post-->
      <label class="btn btn-success" style="margin-right:-30px;"><a href="mypage.php" style="text-decoration:none;color:white;">Post</a></label>
      <!--Search-->
      <div class="search">
          <input type="text" placeholder="Find your best Brokerage">
          <!--Search icon-->
          <i class="fas fa-search"></i>
      </div>
  </a>
</nav>


        <!-- About Start -->
        <div class="container-xxl py-5">
          <div class="container">
              <div class="row g-5 align-items-center">
                  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                      <div class="about-img position-relative overflow-hidden p-5 pe-0">
                          <img class="img-fluid w-100" src="..\images\property-3.jpg">
                      </div>
                  </div>
                  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                      <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                      <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                      <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                      <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                      <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                      <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                  </div>
              </div>
              ?>
          </div>
      </div>
      <!-- About End -->
      <style>
        .car {
     background: #fff;
     margin-top: 90px;
}

.car .titlepage h2 {
     color: #030100;
     margin-bottom: 20px;
}

.car .titlepage span {
     color: #23262d;
     font-size: 17px;
     line-height: 28px;
}

.padding_leri {
     padding-right: 0;
     padding-left: 0;
}

.car_box {
     text-align: center;
}

.car_box figure {
     margin: 0;
}

.car_box figure img {
     width: 100%;
}
        .car_box h3 {
     color: #0c0c0e;
     background-color: #f6d601;
     font-size: 30px;
     line-height: 28px;
     height: 84px;
     align-items: center;
     display: flex;
     justify-content: center;
     flex-wrap: wrap;
     margin-top: 30px;
     padding: 0;
}
      </style>
  <!-- car -->
  <div  class="car">
    <div class="container" >
    
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>VARIETY OF Homes </h2>
                <span>we can broker any home you want</span>
             </div>
          </div>
       </div>
       <div class="row">
       <?php
          $result=mysqli_query($db,"select image from home");
          $i =0;
          while($row=mysqli_fetch_array($result)){
            $images[$i] = $row['image'];
            $i++;
          }
          ?>
          <div class="col-md-4 padding_leri">
             <div class="car_box">
                <figure>  <img src="..\Assets\<?php echo $images[0] ?>">;</figure>
                <h3>new</h3>
             </div>
             
          </div>
          <div class="col-md-4 padding_leri">
             <div class="car_box">
                <figure> <img src="..\Assets\<?php echo $images[1] ?>">;</figure>
                <h3>underratted</h3>
             </div>
          </div>
          <div class="col-md-4 padding_leri">
             <div class="car_box">
                <figure> <img src="..\Assets\<?php echo $images[2] ?>">;</figure>
                <h3>Best</h3>
             </div>
          </div>
         
       </div>
       
    </div>
    
 </div>
 <!-- end car -->

   <div class="container">
      <h1 class="heading" style="margin-top: 20px;">
          Our  Daily Home Post
      </h1>
      <div class="box-container">
      <?php
          $result=mysqli_query($db,"select image,date,adminid from home");
          while($row=mysqli_fetch_array($result)){
          ?>
          <div class="box">
              <div class="image">
              <img src="..\Assets\<?php echo $row['image']?>">;
              </div>
              <div class="content">
              <h3>Brokerage Service</h3>
            
              <a href="..\Assets\<?php echo $row['image'] ?>" class="btn" data-lightbox="mygallary">Read More</a>
              <div class="icon">
               <span>   <i class="fas fa-calander"></i><?php echo $row['date']?></span>
               <span>   <i class="fas fa-calander"></i><a href=""><?php echo $row['adminid']  ?></a></span>
              </div>
            </div>
          </div>
         
        <?php
          }
          ?> 
   </div>
  
   <div id="load-more" onclick="">
    Load More
</div>
<script>
    let loadMorebtn=document.querySelector('#load-more');
let currentItem=3;
loadMorebtn.onclick=()=>
{
let boxes=[...document.querySelectorAll('.container .box-container .box')];
for(var i=currentItem;i<currentItem+3;i++)
{
    boxes[i].style.display='inline-block';
}
 currentItem+=3;
if(currentItem>=box.length)
{
    loadMorebtn.style.display='none';
}
}

</script>

<script>
  $('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow:$('next'),
  prevArrow:$('prev'),
});
</script>

<section class="product1">
<h2>Featured Car Brokerage</h2>
<div class="pro-container">
<?php
          $result=mysqli_query($db,"select image,price,location from home");
          while($row=mysqli_fetch_array($result)){
          ?>
  <div class="pro">
  <img src="..\Assets\<?php echo  $row['image'] ?>">;
    <div class="des">
      <span>Location : <?php echo $row['location'] ?></span>
     <div class="star">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
     </div>
     <h4><?php echo $row['price'] ?> birr</h4>
    </div>
  </div>
  <?php
          }
          ?>
</div>
</section>

<footer class="footer"> 
  <div class="container">
    <div class="row">
      <div class="footer-col">
        <h4>Online Brokerage</h4>
          <ul>
            <li> <a href="#">About Us</a></li>
            <li> <a href="#">Service</a></li>
            <li> <a href="#">Privacy policy</a></li>
            </ul>
        </div>
       
      </div>
      <div class="footer-col">
          <h4>Get help </h4>
          <ul>
            <li> <a href="#">FAQ</a></li>
            <li> <a href="#">Payment Option</a></li>
            <li> <a href="#">Contact Developer</a></li>
            </ul>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-telegram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
      </div>
      </div>
  </footer>
  <style>
  
.featured .featured-slider{
    padding:1rem;
    padding-bottom: 4rem;
}

.featured .featured-slider .box{
    padding:2rem;
    text-align: center;
    box-shadow: var(--box-shadow);
    border:var(--border);
    border-radius: .5rem;
}

.featured .featured-slider .box img{
    height: 15rem;
}

.featured .featured-slider .box:hover img{
    transform: scale(.9);
}

.featured .featured-slider .box .content h3{
    font-size: 2.2rem;
    color:var(--black);
}

.featured .featured-slider .box .content .stars{
    padding:1rem 0;
}

.featured .featured-slider .box .content .stars i{
    font-size: 1.7rem;
    color:var(--yellow);
}

.featured .featured-slider .box .content .price{
    font-size: 2.5rem;
    color:var(--black);
}

</style>
</section>
</body>
</html>