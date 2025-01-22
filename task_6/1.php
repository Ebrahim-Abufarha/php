<?php 
$phones = [
    [ 
     'name' => 'Samsung Galaxy Note 20 Ultra',
     'img_url' =>'https://images.samsung.com/is/image/samsung/assets/levant/smartphones/buy/shop/002-note20ultra-kv-mo-720.jpg?imbypass=true',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'INFINIX Zero 8',
     'img_url' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSeD8kwgYqBkB8eG_rHNbrdwfSrCfCgNfSgw&s',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
    ],
    [ 
     'name' => 'Apple iPhone 12 Pro',
     'img_url' =>'https://www.apple.com/newsroom/images/product/iphone/standard/Apple_announce-iphone12pro_10132020.jpg.landing-big_2x.jpg',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

    ],
    [ 
     'name' => 'ITEL A48',
     'img_url' =>'https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/New%20Project%20-%202022-09-28T101615.498--1664340612.jpg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
    ],
    [ 
     'name' => 'Samsung Galaxy S21 Ultra',
     'img_url' =>'https://static1.pocketlintimages.com/wordpress/wp-content/uploads/wm/155378-phones-review-hands-on-samsung-galaxy-s21-ultra-image1-luae09ici4.JPG',

    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
    ],
    
    [ 
     'name' => 'Galaxy A52',
     'img_url' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC_MMIhm2jFQn6PuXKl5W0gGQMWZBVVFth7Q&s',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container mt-5 p-5">
    <div class="row g-4">
        <?php
        for ($i = 0; $i < count($phones); $i++) {
            $brand = $phones[$i]['brand'];
            $name = $phones[$i]['name'];
            $img = $phones[$i]['img_url'];
            $price = $phones[$i]['price'];
            echo "
            <div class='col-md-4 col-sm-6'>
                <div class='card h-100 shadow d-flex flex-column'>
                    <img src='$img' class='card-img-top' style='object-fit: contain; height: 200px; background-color: #f8f9fa;' alt='$brand $name'>
                    <div class='card-body text-center flex-grow-1'>
                        <h5 class='card-title'>$brand $name</h5>
                        <p class='card-text text-primary fw-bold'>$price <span class='text-secondary' style='font-size: 12px;'>with tax</span></p>
                    </div>
                    <div class='card-footer bg-white border-0'>
                        <a href='#' class='btn btn-primary w-100'>View Details</a>
                    </div>
                </div>
            </div>
            ";
         }
         ?>
     </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>
</body>
</html>


