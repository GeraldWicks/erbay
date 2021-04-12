<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Icon from font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!--My css-->
    <link rel="stylesheet" href="./styles/style.css">



</head>
<body>

  <!-- nav-bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <i class="fab fa-connectdevelop"></i>
    Erbay
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Shop By Department
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./computers.php">Computers</a></li>
            <li><a class="dropdown-item" href="./mobiles.php">Mobiles</a></li>
            <li><a class="dropdown-item" href="./cars.php">Cars</a></li>
            <li><a class="dropdown-item" href="./others.php">Others</a></li>
          </ul>
        </li>
        <li class="nav-item sell_now_btn">
          <a class="nav-link active" id="sell_now_anchor" aria-current="page" href="./sell_page.php">Sell Now</a>
        </li>

      </ul>
      <!-- It will be a workful button in the future 
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
      -->
    </div>
  </div>
</nav>


<div class="insert_div">
    <form action="index.php" method="post"  enctype="multipart/form-data">
      <h3 style="margin-bottom: 2rem;">Insert a new Product</h3>

      <i style="margin-right:0.5rem;" class="far fa-image fa-7x"></i>

      <input type="hidden" name="size" value="1000000">

      <div>
        <input name="image" type="file">
      </div>

      <br>
      
      <input name="title" type="text" placeholder="Product Title">
      <br>
      
      <input name="description" type="text" placeholder="Description">
      <br>

      <input name="price" type="text" placeholder="Price">
      <br>

      <input name="contact" type="text" placeholder="Contact">
      <br>

      <h5 class="btn btn-outline-dark h5_department">Department <i class="fas fa-caret-down"></i></h5>
      <br>
      
      <div class="department_inputs">
        <input type="radio" id="computers" name="department" value="computers">
        <label for="computers">Computers</label><br>
        <input type="radio" id="mobiles" name="department" value="mobiles">
        <label for="mobiles">Mobiles</label><br>
        <input type="radio" id="cars" name="department" value="cars">
        <label for="cars">Cars</label><br>
        <input type="radio" id="others" name="department" value="others" checked="true">
        <label for="others">Others</label><br>
      </div>


      <button name="submit" type="submit" class="btn btn-warning btn-lg" style="margin-bottom:1rem; margin-top:1rem;" value="upload">Publish Product</button> 

    </form>
  </div>






  <!-- Vue.js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

  <!--Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!--My JS-->
  <script></script>
    
</body>
</html>