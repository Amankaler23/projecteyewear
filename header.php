<?php
include "connection.php";
?>

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
    <div class="row " id="headerimg" >
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
                  <a class="nav-link  ps-3" href="shop.php" id="navbar" role="button"
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
    