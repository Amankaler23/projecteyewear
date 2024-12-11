<html>

<head>
  <title> project</title>
  <link href="D1.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-grid.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    $(document).ready(function(){
    AOS.init();
  });
  </script>
</head>

<body>
  <div class="container-fluid">
    <div class="row" id="image">
      <div class="col-lg-12 p-1">
        <nav class="  navbar navbar-expand-lg navbar-dark bg-transparent">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="imagesp/logo-clearview-light.png" alt="" class="d-inline-block align-text-top " data-aos="flip-down">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active ms-3" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link ms-3" href="about.php">About</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link ps-3" href="#" id="navbar" role="button"
                    data-bs-toggle="" aria-expanded="false">
                    shop
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">pages</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link  ps-3" href="blogs.php" tabindex="-1">Blogs</a>

                </li>
                <li class="nav-item">
                  <a class="nav-link  ps-3" href="contact.php" tabindex="-1" >Contact</a>

                </li>
              </ul>
              <form class="d-flex">
        <input class="form-control me-2 mt-4" type="search" placeholder="Search" aria-label="Search">
        
      </form>
              
                
               <a href="adminlogin.php"> <button  class="btn btn-outline-success mt-2" type="submit" >Login</button></a>
              
            </div>
          </div>
        </nav>
      </div>
      <hr class="hr text-white mt-4" />
      <div class="row p-5 text-white" >
        <div class="col-lg-6 p-5" data-aos="fade-up">
          <span class="bg-warning text-dark p-1"> New Arrival</span>
          <h1 class="display-1 fw-bold">ClearView Eyeglasses Frames</h1>
          <p>Clearview glasses frames combine sleek modern design with durable materials, ensuring both style and comfort for everyday wear.



</p>
       <a href="#shopnow"><button class="btn btn-black rounded-0 py-2 px-4 fw-bold" > Shop Now<i class="bi bi-arrow-right mt-2 ms-2"></i>
          </button></a>
          <a href="#an"><button class="btn btn-white rounded-0 py-2 px-5 m-3 fw-bold"> Shop Sunglasses </button></a>

        </div>
      </div>
    </div>

    <div class="row" id="bg">
      <div class="col-lg-3 text-white text-center px-3 p-5" data-aos="fade-up">
        <img src="imagesp/Truck.png">
        <h5>FREE SHIPPING & RETURNS</h5>
        <p>Free shipping and returns for hassle-free shopping</p>
      </div>

      <div class="col-lg-3 text-white text-center px-3 p-5" data-aos="fade-up">
        <img src="imagesp/checklist.png">
        <h5>GUARANTEE ORIGINAL ITEMS</h5>
        <p>Guaranteed original items for your peace of mind</p>
      </div>
      <div class="col-lg-3 text-white text-center px-3 p-5 pb-2"data-aos="fade-up">
        <img src="imagesp/shield.png">
        <h5>100% SECURE CHECKOUT</h5>
        <p>100% secure checkout for your peace of mind</p>
      </div>
      <div class="col-lg-3 text-white text-center px-3 p-5 mb-1" data-aos="fade-up">
        <img src="imagesp/headset.png">
        <h5>24H CUSTOMER SERVICE</h5>
        <p>24/7 customer service for your convenience and supports</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-center text-dark p-5" id="shopnow">
      <div class="col-lg-12" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1500">
      
      <button class=" border bg-warning mb-3 px-4 "> C A T E G O R Y</button>
        <h1 class="text-dark fw-bold">Shop By Categories </h1>
        <p> shop by different categories </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row text-white justify-content-center ">
      <div class="col-lg-3 mx-3" id="bgimg"  data-aos="zoom-in-up">
        <h1> Women's Eyewear</h1>

      </div>
      <div class="col-lg-3 mx-3" id="bgimg1"  data-aos="zoom-in-down">
        <h1> Men's Eyewear</h1>
      </div>
      <div class="col-lg-3 mx-3" id="bgimg2"  data-aos="zoom-in-up">
        <h1> Presecption Glasses</h1>

      </div>
    </div>
    <div class="row text-center text-dark p-5 fw-bold">
      <div class="col-lg-12">
        <h1> Browse By Brands</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <img src="imagesp/logoipsum1.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum2.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum3.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum4.png">
      </div>

    </div>
  </div>
  <div class="container">
    <div class="row p-5">
      <div class="col-lg-3">
        <img src="imagesp/logoipsum5.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum6.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum7.png">
      </div>
      <div class="col-lg-3">
        <img src="imagesp/logoipsum8.png">
      </div>

    </div>
  </div>
  <!-- <div class="container">
      <div class=" row text-center">
        <div class="col-lg-6">
          <img src="imagesp/logoipsum9.png">

        </div>
         <div class="col-lg-6"> 
          <img src="imagesp/logoipsum10.png"> 
      </div>
    </div>
    </div> -->
  <div class="container">
    <div class="row text-center text-dark p-5 " id="an">
      <div class="col-lg-12" data-aos="fade-up"
      data-aos-duration="700">
        <button class=" border bg-warning px-3 mb-2"  data-aos="fade-up-left">B E S T</button>
        <h1 class="fw-bold">Best Seller</h1>
        <p>  best-selling eyeglasses, the popularity often varies based on trends</p>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-5">

      <div class="col-lg-3 " data-aos="fade-up"
      data-aos-duration="1000">
        <div class name="card type">
          <div class="card body type">
            <img src="imagesp/product-clearview11-300x300.jpg" height="300px">
            <h5 class="text-center fw-bold"> crystal Wave</h5>

            <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
            </p>
            <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
            <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

          </div>
        </div>
      </div>


      <div class="col-lg-3 " data-aos="fade-up"
      data-aos-duration="1000">
        <div class name="card type">
          <div class="card body type">
            <img src="imagesp/product-clearview4-300x300.jpg" height="300px">
            <h5 class="text-center fw-bold"> crystal Wave</h5>
            <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
            </p>
            <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
            <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 " data-aos="fade-up"
      data-aos-duration="1000">
        <div class name="card type">
          <div class="card body type">
            <img src="imagesp/product-clearview3-300x300.jpg" height="300px">
            <h5 class="text-center fw-bold"> crystal Wave</h5>
            <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
            </p>
            <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
            <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 " data-aos="fade-up"
      data-aos-duration="1000">
        <div class name="card type">
          <div class="card body type">
            <img src="imagesp/product-clearview2-300x300.jpg" height="300px">
            <h5 class="text-center fw-bold"> crystal Wave</h5>
            <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
              <i class="bi bi-star-fill text-center"></i>
            </p>
            <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
            <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center text-dark p-5">
      <div class="col-lg-12" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="1200">
        <a href="#ak"><button class="btn btn-white rounded-0 py-3 px-5 m-3  border-dark "> View All Products<i
            class="bi bi-arrow-right mt-2 ms-2"></i> </button></a>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid" id="ak">
    <div class="row p-5" id="bgclr" >
      <div class="col-lg-12 text-center"  data-aos="fade-up"
      data-aos-duration="500">
        <button class=" border bg-warning px-3 mb-2 "  data-aos="fade-up"
        data-aos-duration= "data-aos ="fade-up"
        data-aos-duration="100">P O P U L A R </button>
        <h1 class="fw-bold">Popular Product</h1>
        <p> "Iconic Ray-Ban Wayfarers and stylish Warby Parker Percey frames remain perennial favorites among eyeglass wearers worldwide."</p>
      </div>
      <div class="container">
        <div class="row mt-5 ">

          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview11-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>

                <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>



          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview4-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview3-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"> <span class="rate"> $86</span>$49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
          <div class="col-lg-3 ">
            <div class name="card type"  data-aos="fade-up">
              <div class="card body type">
                <img src="imagesp/product-clearview2-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview11-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"><span class="rate"> $86</span> $49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>


          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview4-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"> <span class="rate"> $86</span>$49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview3-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>

                <h5 class="fw-bold text-center text-danger "><span class="rate"> $86</span> $49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
          <div class="col-lg-3 "  data-aos="fade-up">
            <div class name="card type">
              <div class="card body type">
                <img src="imagesp/product-clearview2-300x300.jpg" height="300px">
                <h5 class="text-center fw-bold"> crystal Wave</h5>
                <p class="text-center text-warning"> <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                  <i class="bi bi-star-fill text-center"></i>
                </p>
                <h5 class="fw-bold text-center text-danger"> <span class="rate"> $86</span>$49</h5>
                <button class=" border btn-black fw-bold me-5 ms-5 py-2 px-3 mb-3 mt-3 ">Add To Card</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container"id="aaaa">
    <div class="row p-5 mt-5">
      <div class="col-lg-5">
        <button class="bg-warning px-3 text-dark"  data-aos="fade-up"
     data-aos-anchor-placement="top-center"> S E R V I C E S</button>
        <h1 class="fw-bold " data-aos="zoom-in-left">Our Services</h1>
      </div>
      <div class="col-lg-7 text-center ps-5 ">
        <p> "Our services include hassle-free online shopping with complimentary shipping and easy returns, ensuring a seamless eyewear experience tailored to your satisfaction."
</p>
      </div>
    </div>
    <div class="row p-4 mt-2">
      <div class="col-lg-4 " data-aos="fade-up"
     data-aos-anchor-placement="center-center">
        <div class name="card type">
          <div class="card body bg-dark text-white text-center ">
            <img src="imagesp/service1-pn1bflvn55ozqpjrh1qys50h0yqy76a7vfxyazhgug.jpg ">
            <h3 class="p-3">Contact Lenses</h3>
            <p>Contact lenses provide clear vision without frames, offering comfort and convenience for everyday use</p>
            <h6 class="text-warning fw-bold">View Details<i class="bi bi-arrow-right text-warning ms-2 mt-2"></i></h6>
          </div>
        </div>

      </div>
      <div class="col-lg-4 " data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
        <div class name="card type">
          <div class="card body  bg-dark text-white text-center ">
            <img src="imagesp/service2-pn1bfmthbzqa2biebk5lcmrxmcmbevdy7klfs9g2o8.jpg ">
            <h3 class="p-3">Eyeglasses</h3>
            <p> Eyeglasses offer both vision correction and a fashion statement, tailored to your style and visual needs</p>
            <h6 class="text-warning fw-bold">View Details<i class="bi bi-arrow-right text-warning ms-2 mt-1"></i></h6>
          </div>
        </div>

      </div>
      <div class="col-lg-4 " data-aos="fade-up"
     data-aos-anchor-placement="center-center">
        <div class name="card type">
          <div class="card body  bg-dark text-white text-center ">
            <img src="imagesp/service3-pn1bfop5pnsupjfo0kyuhmaut4d1u9levtweqtdabs.jpg">
            <h3 class="p-3">Eye Exams</h3>
            <p> An eye exam is crucial for assessing vision health and determining the right prescription for optimal clarity and eye care</p>
            <h6 class="text-warning fw-bold">View Details<i class="bi bi-arrow-right text-warning ms-2 mt-1"></i></h6>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row p-5 mt-5" id="Aman">
      <div class="col-lg-4  mt-5  ">
        <button class=" border bg-warning px-3 mb-2 ms-5 mt-5 rounded-0"  data-aos="fade-up"
     data-aos-anchor-placement="bottom-center">S P E C I A L O F F E R S</button>


        <h1 class="fw-bold ms-5 me-2 mt-2 "> Reading Glasses</h1>



        <p class=" pt-3 ms-5"> "Reading glasses provide enhanced clarity for close-up tasks, making reading and other detailed activities more comfortable and clear"</p>
       <a href="#amank"> <button class=" btn btn-white py-3 px-5 m-3 ms-5 fw-bold text-white rounded-0" v data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom"> Learn More <i
            class="bi bi-arrow-right mt-1 ms-2"></i></button></a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row ps-0">
      <div class="col-lg-6 ps-0 " data-aos="fade-up-right">
        <img src="imagesp/testimonial-sect-pn1c5z8n4lk57auok82xa63i6rp4o4q7c4osrwa68s.jpg"width="100%" height="100%">
      </div>
      <div class="col-lg-5" id="kiran">
        <button class="text-dark bg-warning ms-5 mt-5 px-3 " data-aos="fade-up"
     data-aos-anchor-placement="bottom-center">A B O U T </button>
        <H1 class="fw-bold ms-5 me-5 mt-2 py-2 PE-5" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom"> We Make Quality Glasses For Everyone.</H1>
        <P class="ms-5 me-5 mt-2">We specialize in crafting high-quality eyeglasses that cater to everyone's needs. Our designs blend durability with comfort, ensuring long-lasting wearability without compromising style. Each pair is meticulously crafted with precision to deliver optimal vision correction and aesthetic appeal, making us your go-to choice for reliable eyewear that exceeds expectations</P>
        <a href="#amank"><button class="btn btn-white rounded-0  py-3 px-5 m-3 ms-5  border-dark fw-bold"  data-aos="fade-up"
     data-aos-anchor-placement="top-center"> Learn More<i
            class="bi bi-arrow-right mt-1 ms-2 text-dark"></i> </button></a>
      </div>
      <div class="col-lg-1 pt-4 pe-2">
        <img src="imagesp/dot-pattern123.png" width="100%">
      </div>

    </div>
  </div>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-lg-1 ps-4" id="amank">
        <img src="imagesp/dot-pattern123.png">


      </div>
      <div class="col-lg-5" id="harman">
        <button class="text-dark bg-warning ms-5 mt-5 px-3 ">T E S T I M O N I A L S </button>
        <h1 class="fw-bold ms-4 px-4 mt-4"> What Customers <br />Are Saying</h1>
        <p class="ms-5 me-3 mt-4"> Our customers consistently rave about the quality and comfort of our eyeglasses. They appreciate how durable and stylish our frames are, while also noting the precise vision correction they provide. Many have remarked on the excellent value for money and the overall satisfaction they feel with their purchase. Their feedback underscores our commitment to delivering exceptional eyewear that meets and exceeds their expectations</p>
        <a href="#aaaa"><button class="ms-5 px-4 btn btn-white border-dark rounded-0 mt-4 px-5 py-3  "> View All<i
            class="bi bi-arrow-right ms-1"></i></button></a>
      </div>
      <div class="col-lg-5" id="bandana">
        <p class="text-center text-warning fs-3 mt-5"> <i class="bi bi-star-fill text-center"></i>
          <i class="bi bi-star-fill text-center"></i>
          <i class="bi bi-star-fill text-center"></i>
          <i class="bi bi-star-fill text-center"></i>
          <i class="bi bi-star-fill text-center"></i>
        </p>
        <h1 class=" text-white text-center">Great Customer Service!</h1>
        <img src="imagesp/rounded pic.jpg" class="rounded-circle mx-auto d-block " alt="...">
        <h4 class="text-center text-white fw-bold">James Edwards</h4>
        <h6 class="text-center text-warning">BUSINESS OWNER</h6>
        <p class=" text-white ps-5 pe-5 pb-5 fs-5"> Our commitment to great customer service is at the heart of everything we do. We pride ourselves on providing personalized attention, quick responses to inquiries, and hassle-free support. Our goal is to ensure every customer feels valued and satisfied throughout their eyewear journey with us</p>
      </div>
    </div>
  </div>
  <div class="container" >
    <div class="row p-5 text-center">
      <div class="col-lg-12 p-5">
        <button class=" border bg-warning px-3 mb-2">B L O G</button>
        <h1 class="fw-bold">Popular Blog & News</h1>
        <p>A popular blog and news platform covering diverse topics from technology to lifestyle trends.</p>

      </div>
    </div>
    <div class="row ">
      <div class="col-lg-4 ">
        <div class name="card type">
          <div class="card body text-white bg-dark text-center ">
            <img src="imagesp/post-clearview1-768x549.jpg">
            <h4 class="p-2">Tortor Habitant Cursus Vel Pellen Tesque</h4>
            <p class="text-muted">April 9, 2024 No Comments</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class name="card type">
          <div class="card body text-white bg-dark text-center ">
            <img src="imagesp/post-clearview2-768x549.jpg">
            <h4 class="p-2">Tortor Habitant Cursus Vel Pellen Tesque</h4>
            <p class="text-muted">April 9, 2024 No Comments</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 ">
        <div class name="card type">
          <div class="card body text-white bg-dark text-center ">
            <img src="imagesp/post-clearview3-768x549.jpg">
            <h4 class="p-2">Tortor Habitant Cursus Vel Pellen Tesque</h4>
            <p class="text-muted">April 9, 2024 No Comments</p>
          </div>
        </div>
      </div>


    </div>
  </div>
  <?php
  include "footer.php";
  ?>