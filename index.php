<?php
  $msg = "";

  //connect to the databse
  //$db = mysqli_connect('localhost', 'root', '', 'fake_olx');
  $db = mysqli_connect('remotemysql.com', 'LuHzVLNHtn', 'vSBdEvMc5C', 'LuHzVLNHtn');    

  if (isset($_POST['submit']) )
  {
    $target = "images/".basename($_FILES['image']['name']);//the path to store the uploaded image

    $image       = $_FILES['image']['name'];
    $title       = $_POST["title"];    
    $description = $_POST["description"]; 
    $price       = $_POST["price"];
    $contact     = $_POST["contact"];
    $department  = $_POST['department'];

    $target = "images/".basename($image); //image file directory

    
    $sql = "INSERT INTO products (image, title, description, price, contact, department) VALUES ('$image', '$title', '$description', '$price', '$contact', '$department')";

    mysqli_query ($db, $sql); //insert the user's input to the database

    header('location: index.php');

    //Moving the uploaded image into the folder images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
      $msg = "Image uploaded successfully";      
    }
    else
    {
      $msg = "There was a problem uploading image";
    }


  }

  $products = mysqli_query ($db, "SELECT * FROM products");

?>


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
    <a class="navbar-brand" style="cursor:auto;">
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
        <li class="nav-item sell_now_btn" style="margin-bottom:0.1rem;">
          <a class="nav-link active" id="sell_now_anchor" style="text-align:center;" aria-current="page" href="./sell_page.php">Sell Now</a>
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

<div class="about_div">
  <i class="fab fa-connectdevelop fa-9x"></i>
  <h1>Erbay</h1>
  <h5>At this website you can sell old stuffs and make some money.</h5>
  <h5>If you prefer, it is also possible to buy products here !</h5>
  <h5>It is free, there is no fee at this website.</h5>
  
  <center>
  <a class="nav-link active about_anchor" style="width:12rem;" aria-current="page" href="./sell_page.php">Sell Now</a>
  <a class="nav-link active about_anchor" style="width:12rem;" aria-current="page" href="#products_div_id">See products</a>
 </center>

</div>




<!--Printing the elements from the database-->
<div class="product_div" id="products_div_id" style="margin-top: 3rem;">
  <?php
 

  while ($row = mysqli_fetch_array($products) )
  { ?>
  
  <img style="width: 15rem;height: 15rem;" class="product_image" src="images/<?php echo $row['image'] ?>" alt="">  
 
  <h1> 
  <?php echo $row['title']; ?>
  </h1>

  <p>
  <?php echo $row['description']; ?>
  </p>

  <p> U$ 
  <?php echo $row['price']; ?>
  </p>

  <p>Contact : 
  <?php echo $row['contact']; ?>
  </p>

<?php
}?>

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